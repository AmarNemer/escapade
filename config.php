<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'escapade';
$username = 'root';
$password = 'root';

try {
    // Connexion à la base de données avec PDO
    $mysqlClient = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Définir le mode d'erreur de PDO sur Exception
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Afficher un message d'erreur en cas de problème de connexion
    die('Erreur : ' . $e->getMessage());
}

include 'functions.php';
