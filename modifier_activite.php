<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: espaceconnexion.php");
    exit();
}

include("config.php"); // Connexion à la base de données

// Activer le rapport d'erreurs pour débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['id'])) {
    header("Location: admin_dashboard.php");
    exit();
}

$id = intval($_GET['id']);
$requete = "SELECT * FROM activites WHERE id = :id";
$reqsql = $mysqlClient->prepare($requete);
$reqsql->bindParam(':id', $id, PDO::PARAM_INT);
$reqsql->execute();
$activite = $reqsql->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = trim($_POST['titre']);
    $categorie = trim($_POST['categorie']);
    $description = trim($_POST['description']);    
    $jour = trim($_POST['jour']);
    $heure = trim($_POST['heure']);
    $prix = trim($_POST['prix']);
    
    // Vérifier si un fichier a été uploadé
    if (!empty($_FILES['image']['name'])) {
        $image = $id . '-' . basename($_FILES['image']['name']);
        $target = "images/imgActivite/" . $image;

        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check !== false) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                // Nouvelle image téléchargée avec succès
                // Tu pourrais éventuellement supprimer l'ancienne image ici
            } else {
                echo "Erreur lors du téléchargement de l'image.";
            }
        }
    }
    
    // Mise à jour avec ou sans nouvelle image
    if (!empty($_FILES['image']['name'])) {
        $requete = "UPDATE activites SET titre = :titre, id_categorie = :id_categorie, description = :description, image = :image, jour = :jour, heure = :heure, prix = :prix WHERE id = :id";
    } else {
        $requete = "UPDATE activites SET titre = :titre, id_categorie = :id_categorie, description = :description, jour = :jour, heure = :heure, prix = :prix WHERE id = :id";
    }
    
    $reqsql = $mysqlClient->prepare($requete);
    $reqsql->bindParam(':id', $id, PDO::PARAM_INT);
    $reqsql->bindParam(':titre', $titre, PDO::PARAM_STR);
    $reqsql->bindParam(':id_categorie', $categorie, PDO::PARAM_STR);
    $reqsql->bindParam(':description', $description, PDO::PARAM_STR);    
    $reqsql->bindParam(':jour', $jour, PDO::PARAM_STR);
    $reqsql->bindParam(':heure', $heure, PDO::PARAM_STR);
    $reqsql->bindParam(':prix', $prix, PDO::PARAM_STR);
    
    if (!empty($_FILES['image']['name'])) {
        $reqsql->bindParam(':image', $image, PDO::PARAM_STR);
    }
    
    $reqsql->execute();
    
    header("Location: admin_dashboard.php?success=1");
    exit();
}

include("header.php");
?>


    <?php if ($activite): ?>
        <h1>Modifier l'activité : <?= htmlspecialchars($activite['titre'] ?? '') ?></h1>
        <form class="formu" action="modifier_activite.php?id=<?= $activite['id'] ?>" method="post" enctype="multipart/form-data"> 
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" value="<?= htmlspecialchars($activite['titre'] ?? '') ?>" required><br>

            <label for="categorie">Catégorie :</label>
            <select name="categorie" id="categorie">
                <option value="1" <?= ($activite['id_categorie'] == 1) ? 'selected' : '' ?>>Adultes</option>
                <option value="2" <?= ($activite['id_categorie'] == 2) ? 'selected' : '' ?>>Enfants</option>
                <option value="3" <?= ($activite['id_categorie'] == 3) ? 'selected' : '' ?>>Séniors</option>
                <option value="4" <?= ($activite['id_categorie'] == 4) ? 'selected' : '' ?>>Ados</option>
            </select>

            <label for="description">Description :</label>
            <textarea id="description" name="description"><?= htmlspecialchars($activite['description'] ?? '') ?></textarea><br>

            <label for="image">Image :</label>
            <input type="file" name="image"><br>

            

            <label for="jour">Jour :</label>
            <input type="text" id="jour" name="jour" value="<?= htmlspecialchars($activite['jour'] ?? '') ?>"><br>

            <label for="heure">Heure :</label>
            <input type="text" id="heure" name="heure" value="<?= htmlspecialchars($activite['heure'] ?? '') ?>"><br>

            <label for="prix">Prix :</label>
            <input type="text" id="prix" name="prix" value="<?= htmlspecialchars($activite['prix'] ?? '') ?>"><br>

            <button type="submit">Enregistrer les modifications</button>
        </form>
        <a href="admin_dashboard.php">Retour au tableau de bord</a>
    <?php else: ?>
        <p>Activité non trouvée.</p>
        <a href="admin_dashboard.php">Retour au tableau de bord</a>
    <?php endif; ?>
    <?php include 'footer.php'; ?>
