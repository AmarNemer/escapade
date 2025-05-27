<?php
include("config.php");

// Affichage des erreurs pour le debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérification des paramètres attendus
    $required = ['nom','prenom','email','telephone','date_naissance','mdp','genre'];
    foreach ($required as $key) {
        if (empty($_POST[$key])) {
            die("Erreur : champ $key manquant !");
        }
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'] ?? null; // Optionnel !
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $date_naissance = $_POST['date_naissance'];
    $genre = $_POST['genre'];
    $mot_de_passe = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $role = 'user';

    // Vérifier l'unicité de l'email
    $check = $mysqlClient->prepare("SELECT COUNT(*) FROM membres WHERE email=?");
    $check->execute([$email]);
    if ($check->fetchColumn() > 0) {
        die("Erreur : cet email est déjà utilisé.");
    }

    $sql = "INSERT INTO membres (nom, prenom, pseudo, email, telephone, date_naissance, mdp, genre, role)
            VALUES (:nom, :prenom, :pseudo, :email, :telephone, :date_naissance, :mdp, :genre, :role)";
    $stmt = $mysqlClient->prepare($sql);

    // Bind (null pour pseudo si non fourni !)
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':pseudo', $pseudo); // peut être null!
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':telephone', $telephone);
    $stmt->bindValue(':date_naissance', $date_naissance);
    $stmt->bindValue(':mdp', $mot_de_passe);
    $stmt->bindValue(':genre', $genre);
    $stmt->bindValue(':role', $role);

    if ($stmt->execute()) {
        // Redirige seulement, ne fais pas de echo avant
        header("Location: index.php?inscription=ok");
        exit();
    } else {
        // Affichage des erreurs de PDO si insert rate
        $err = $stmt->errorInfo();
        die("Erreur lors de l'inscription : ".$err[2]);
    }
} else {
    // accès direct interdit
    header("Location: inscription.php");
    exit();
}
