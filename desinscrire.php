<?php
session_start();
include 'config.php'; // Assurez-vous que le chemin est correct

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id_membre = $_SESSION['id'];
$id_activite = $_POST['id_activite'];

// Supprime l'inscription pour l'activité spécifique
$sql = "DELETE FROM inscriptions WHERE id_membre = ? AND id_activite = ?";
$stmt = $mysqlClient->prepare($sql);
$stmt->execute([$id_membre, $id_activite]);

// Redirigez vers la page de l'espace membre après la désinscription
header("Location: espace_membres.php");
exit();
?>
