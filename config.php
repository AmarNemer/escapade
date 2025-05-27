<?php
$host = 'localhost';
$dbname = 'escapade';
$username = 'root';
$password = 'root';

try {
    $mysqlClient = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    // En PROD, cacher l'info précise :
    // die('Erreur de connexion à la base de données.');
    die('Erreur : ' . $e->getMessage()); // pour le DEV seulement !
}

include 'functions.php';
