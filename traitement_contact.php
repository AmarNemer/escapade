<?php
session_start();
include("config.php"); // Connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Vérifier si les champs ne sont pas vides
    if (empty($nom) || empty($email) || empty($message)) {
        $_SESSION['error'] = "Tous les champs sont requis.";
        header("Location: infospratiques.php");
        exit();
    }

    // Préparer la requête SQL pour insérer les données
    $sql = "INSERT INTO messages (nom, email, message) VALUES (:nom, :email, :message)";
    $stmt = $mysqlClient->prepare($sql);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    // Exécuter la requête et vérifier si l'insertion a réussi
    if ($stmt->execute()) {
        $_SESSION['success'] = "Votre message a été envoyé avec succès.";
    } else {
        $_SESSION['error'] = "Erreur lors de l'envoi de votre message.";
    }

    header("Location: infospratiques.php");
    exit();
}
?>
