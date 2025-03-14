<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("config.php"); // Connexion à la base de données

// Activer le rapport d'erreurs pour débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = trim($_POST['email']);
    $mot_de_passe = trim($_POST['mdp']);

    // Vérifier si les champs ne sont pas vides
    if (empty($email) || empty($mot_de_passe)) {
        $_SESSION['error'] = "Tous les champs sont requis.";
        header("Location: espaceconnexion.php");
        exit();
    }

    // Vérifier si l'utilisateur existe
    $requete = "SELECT * FROM membres WHERE email = :email";
    $reqsql = $mysqlClient->prepare($requete);
    $reqsql->bindParam(':email', $email, PDO::PARAM_STR);
    $reqsql->execute();
    $utilisateur = $reqsql->fetch(PDO::FETCH_ASSOC);

    // Vérifier si les données sont retournées correctement
    if ($utilisateur) {
        error_log("Utilisateur trouvé : " . print_r($utilisateur, true));
    } else {
        error_log("Utilisateur non trouvé pour l'email : " . $email);
    }

    // Vérifier si l'utilisateur est trouvé et si le mot de passe est correct
    if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mdp'])) {
        // Stocker les informations de l'utilisateur en session
        $_SESSION['id'] = $utilisateur['id_membre'];
        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['prenom'] = $utilisateur['prenom'];
        $_SESSION['email'] = $utilisateur['email'];
        $_SESSION['role'] = $utilisateur['role']; // Rôle (user/admin)
        
        // Débogage des variables de session
        error_log("Utilisateur connecté : " . print_r($_SESSION, true));
        
        // Rediriger en fonction du rôle de l'utilisateur
        if ($_SESSION['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: espace_membres.php");
        }
        exit();
    } else {
        $_SESSION['error'] = "Email ou mot de passe incorrect.";
        header("Location: espaceconnexion.php");
        exit();
    }
}
?>
