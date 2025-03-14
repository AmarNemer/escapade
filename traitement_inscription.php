<?php
// Inclure le fichier de configuration pour la connexion à la base de données
include("config.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'] ?? ''; // Ajoutez une vérification pour éviter l'erreur "Undefined array key"
    $date_naissance = $_POST['date_naissance'];
    $genre = $_POST['genre'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mot_de_passe = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hacher le mot de passe

    // Définir le rôle par défaut comme 'user'
    $role = 'user'; 

    // Préparer la requête SQL pour insérer les données dans la table membres
    $requete = "INSERT INTO membres (nom, prenom, pseudo, email, telephone, date_naissance, mdp, genre, role) VALUES (:nom, :prenom, :pseudo, :email, :telephone, :date_naissance, :mdp, :genre, :role)";
    $reqsql = $mysqlClient->prepare($requete);

    // Lier les paramètres aux valeurs récupérées du formulaire
    $reqsql->bindParam(':nom', $nom, PDO::PARAM_STR);
    $reqsql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $reqsql->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $reqsql->bindParam(':email', $email, PDO::PARAM_STR);
    $reqsql->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $reqsql->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $reqsql->bindParam(':mdp', $mot_de_passe, PDO::PARAM_STR);
    $reqsql->bindParam(':genre', $genre, PDO::PARAM_STR);
    $reqsql->bindParam(':role', $role, PDO::PARAM_STR); // Lier la valeur du rôle

    // Exécuter la requête SQL
    if ($reqsql->execute()) {
        echo "Inscription réussie !";
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <form method="post" action="index.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" required><br>

        <label for="date_naissance">Date de Naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br>

        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" required><br>

        <label for="mdp">Mot de Passe :</label>
        <input type="password" id="mdp" name="mdp" required><br>

        <button type="submit" name="submit">Inscription</button>
    </form>
</body>
</html>
