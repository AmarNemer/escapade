<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: espaceconnexion.php");
    exit();
}

include("config.php"); // Connexion à la base de données
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $date_naissance = trim($_POST['date_naissance']);
    $date_adhesion = trim($_POST['date_adhesion']);
    $mdp = password_hash(trim($_POST['mdp']), PASSWORD_DEFAULT);
    $genre = trim($_POST['genre']);
    $role = trim($_POST['role']);

    $requete = "INSERT INTO membres (nom, prenom, pseudo, email, telephone, date_naissance, date_adhesion, mdp, genre, role) VALUES (:nom, :prenom, :pseudo, :email, :telephone, :date_naissance, :date_adhesion, :mdp, :genre, :role)";
    $reqsql = $mysqlClient->prepare($requete);
    $reqsql->bindParam(':nom', $nom, PDO::PARAM_STR);
    $reqsql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $reqsql->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $reqsql->bindParam(':email', $email, PDO::PARAM_STR);
    $reqsql->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $reqsql->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $reqsql->bindParam(':date_adhesion', $date_adhesion, PDO::PARAM_STR);
    $reqsql->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $reqsql->bindParam(':genre', $genre, PDO::PARAM_STR);
    $reqsql->bindParam(':role', $role, PDO::PARAM_STR);
    $reqsql->execute();

    header("Location: admin_dashboard.php");
    exit();
}
?>


    <h1>Ajouter un nouveau membre</h1>
    <form class="formu" action="ajouter_membre.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo"><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone"><br>

        <label for="date_naissance">Date de Naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance"><br>

        <label for="date_adhesion">Date d'Adhésion :</label>
        <input type="datetime-local" id="date_adhesion" name="date_adhesion" required><br>

        <label for="mdp">Mot de Passe :</label>
        <input type="password" id="mdp" name="mdp" required><br>

        <label for="genre">Genre :</label>
        <select id="genre" name="genre" required>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select><br><br>

        <label for="role">Role :</label>
        <select id="role" name="role" required>
            <option value="admin">Administrateur</option>
            <option value="user">Membre</option>
             <option value="user">Bénévole</option>
            
        </select><br><br>

        <button type="submit">Ajouter</button>
    </form>
    <a href="admin_dashboard.php">Retour à la gestion des membres</a>
    <?php include 'footer.php'; ?>
</body>
</html>
