<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: espaceconnexion.php");
    exit();
}

include("config.php"); // Connexion à la base de données

if (isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $description = $_POST['description'];
    $details = $_POST['details'];
    $jour = $_POST['jour'];
    $heure = $_POST['heure'];
    $prix = $_POST['prix'];

    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    // Vérifiez si le fichier est une image réelle
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check !== false) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $requete = "INSERT INTO activites (titre, categorie, description, image, details, jour, heure, prix) VALUES (:titre, :categorie, :description, :image, :details, :jour, :heure, :prix)";
            $reqsql = $mysqlClient->prepare($requete);
            $reqsql->bindParam(':titre', $titre);
            $reqsql->bindParam(':categorie', $categorie);
            $reqsql->bindParam(':description', $description);
            $reqsql->bindParam(':image', $image);
            $reqsql->bindParam(':details', $details);
            $reqsql->bindParam(':jour', $jour);
            $reqsql->bindParam(':heure', $heure);
            $reqsql->bindParam(':prix', $prix);
            $reqsql->execute();
            echo "L'activité a été ajoutée avec succès.";
        } else {
            echo "Échec du téléchargement de l'image.";
        }
    } else {
        echo "Le fichier n'est pas une image.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Activité</title>
</head>
<body>
    <h1>Ajouter une nouvelle activité</h1>
    <form method="post" action="traitement_image.php" enctype="multipart/form-data">
        <input type="text" name="titre" placeholder="Titre" required><br>
        <input type="text" name="categorie" placeholder="Catégorie" required><br>
        <textarea name="description" placeholder="Description" required></textarea><br>
        <input type="file" name="image" required><br>
        <textarea name="details" placeholder="Détails" required></textarea><br>
        <input type="text" name="jour" placeholder="Jour" required><br>
        <input type="text" name="heure" placeholder="Heure" required><br>
        <input type="text" name="prix" placeholder="Prix" required><br>
        <input type="submit" name="submit" value="Ajouter">
    </form>
</body>
</html>
