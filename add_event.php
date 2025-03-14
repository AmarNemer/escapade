<?php
include("config.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    // Préparer la requête SQL pour insérer les données dans la table events
    $query = "INSERT INTO events (title, date, time, location, description) VALUES (:title, :date, :time, :location, :description)";
    $stmt = $mysqlClient->prepare($query);

    // Lier les paramètres aux valeurs récupérées du formulaire
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':date', $date, PDO::PARAM_STR);
    $stmt->bindParam(':time', $time, PDO::PARAM_STR);
    $stmt->bindParam(':location', $location, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);

    // Exécuter la requête SQL
    if ($stmt->execute()) {
        echo "Événement ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout de l'événement.";
    }
}
?>
