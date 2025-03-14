<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: espaceconnexion.php");
    exit();
}

include("config.php"); // Connexion à la base de données
include 'header.php';

// Récupérer les catégories depuis la base de données
try {
    $stmt = $mysqlClient->query("SELECT id_categorie, name FROM categories ORDER BY name ASC");
    $categories = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
 // Retourne un tableau associatif [id => nom]
} catch (PDOException $e) {
    die("Erreur lors de la récupération des catégories : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $titre = trim($_POST['titre']);
    $categorie = trim($_POST['categorie']);
    $description = trim($_POST['description']);
    $jour = trim($_POST['jour']);
    $heure = trim($_POST['heure']);
    $prix = trim($_POST['prix']);

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_dir = "images/imgActivite/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $requete = "INSERT INTO activites (titre, id_categorie, description, image, jour, heure, prix) 
                        VALUES (:titre, :categorie, :description, :image, :jour, :heure, :prix)";
            $stmt = $mysqlClient->prepare($requete);
            $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
            $stmt->bindParam(':categorie', $categorie, PDO::PARAM_INT);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':image', $_FILES["image"]["name"], PDO::PARAM_STR);
            $stmt->bindParam(':jour', $jour, PDO::PARAM_STR);
            $stmt->bindParam(':heure', $heure, PDO::PARAM_STR);
            $stmt->bindParam(':prix', $prix, PDO::PARAM_STR);

            try {
                $stmt->execute();
                $reussi = "Événement ajouté avec succès!";
            } catch (PDOException $e) {
                $reussi = "Erreur : " . $e->getMessage();
            }
        } else {
            $reussi = "Erreur lors du téléchargement de l'image.";
        }
    } else {
        $reussi = "Veuillez sélectionner une image valide.";
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $titre = trim($_POST['titre']);
//     $categorie = trim($_POST['categorie']);
//     $description = trim($_POST['description']);
//     $jour = trim($_POST['jour']);
//     $heure = trim($_POST['heure']);
//     $prix = trim($_POST['prix']);

//     // Handle file upload
//     if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
//         $image = $dbname($_FILES['image']['name']);
//         $target_dir = "images/imgActivite/";
//         $target_file = $target_dir . $image;

//         // Move the uploaded file to the target directory
//         if (move_uploaded_file($_FILES['image']['name'], $target_file)) {
//             $requete = "INSERT INTO activites (titre, id_categorie, description, image, jour, heure, prix) 
//                         VALUES (:titre, :categorie, :description, :image, :jour, :heure, :prix)";

//             $reqsql = $mysqlClient->prepare($requete);
//             $reqsql->bindParam(':titre', $titre, PDO::PARAM_STR);
//             $reqsql->bindParam(':categorie', $categorie, PDO::PARAM_INT);
//             $reqsql->bindParam(':description', $description, PDO::PARAM_STR);
//             $reqsql->bindParam(':jour', $jour, PDO::PARAM_STR);
//             $reqsql->bindParam(':heure', $heure, PDO::PARAM_STR);
//             $reqsql->bindParam(':prix', $prix, PDO::PARAM_STR);
//             $reqsql->bindParam(':image', $image, PDO::PARAM_STR);

//             try {
//                 $reqsql->execute();
//                 header("Location: admin_dashboard.php");
//                 exit();
//             } catch (PDOException $e) {
//                 echo "Erreur : " . $e->getMessage();
//             }
//         } else {
//             echo "Erreur lors du téléchargement de l'image.";
//         }
//     } else {
//         echo "Veuillez sélectionner une image valide.";
//     }
// }
// ?>

<h1>Ajouter une nouvelle activité</h1>
<form class="formu" method="post" enctype="multipart/form-data">
    <label for="titre">Titre <span style="color: red;">*</span> :</label>
    <input type="text" id="titre" name="titre" required><br>

    <label for="categorie">Catégorie <span style="color: red;">*</span> :</label>
    <select name="categorie" id="categorie" required>
    <option value="" disabled selected>-- Sélectionnez une catégorie --</option>
    <?php foreach ($categories as $id => $name): ?>
        <option value="<?= htmlspecialchars($id) ?>"><?= htmlspecialchars(ucfirst($name)) ?></option>
    <?php endforeach; ?>
</select>
<br>
<?php if (isset($reussi)) : ?>
    <p style="color: green;"><?= $reussi ?></p>
<?php endif; ?>
    <label for="description">Description :</label>
    <textarea id="description" name="description"></textarea><br>

    <label for="image">Image <span style="color: red;">*</span> :</label>
    <input type="file" name="image" required><br>

    <label for="jour">Jour <span style="color: red;">*</span> :</label>
    <input type="text" id="jour" name="jour"><br>

    <label for="heure">Horaires <span style="color: red;">*</span> :</label>
    <input type="text" id="heure" name="heure"><br>

    <label for="prix">Prix <span style="color: red;">*</span> :</label>
    <input type="text" id="prix" name="prix"><br>

    <button type="submit" name="ajouter">Ajouter</button>
</form>
<a href="admin_dashboard.php">Retour au tableau de bord</a>
</body>
</html>
