<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: espaceconnexion.php");
    exit();
}

include("config.php"); // Connexion à la base de données

// Activer le rapport d'erreurs pour débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['id_membre'])) {
    header("Location: admin_membres.php");
    exit();
}

$id_membre = intval($_GET['id_membre']);
$requete = "SELECT * FROM membres WHERE id_membre = :id_membre";
$reqsql = $mysqlClient->prepare($requete);
$reqsql->bindParam(':id_membre', $id_membre, PDO::PARAM_INT);
$reqsql->execute();
$membre = $reqsql->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $date_naissance = trim($_POST['date_naissance']);
    $date_adhesion = trim($_POST['date_adhesion']);
    $genre = trim($_POST['genre']);
    $role = trim($_POST['role']);

    $requete = "UPDATE membres SET nom = :nom, prenom = :prenom, pseudo = :pseudo, email = :email, telephone = :telephone, date_naissance = :date_naissance, date_adhesion = :date_adhesion, genre = :genre, role = :role WHERE id_membre = :id_membre";
    $reqsql = $mysqlClient->prepare($requete);
    $reqsql->bindParam(':id_membre', $id_membre, PDO::PARAM_INT);
    $reqsql->bindParam(':nom', $nom, PDO::PARAM_STR);
    $reqsql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $reqsql->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $reqsql->bindParam(':email', $email, PDO::PARAM_STR);
    $reqsql->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $reqsql->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $reqsql->bindParam(':date_adhesion', $date_adhesion, PDO::PARAM_STR);
    $reqsql->bindParam(':genre', $genre, PDO::PARAM_STR);
    $reqsql->bindParam(':role', $role, PDO::PARAM_STR);
    $reqsql->execute();

    header("Location: admin_dashboard.php");
    exit();
}
?>
<?php
include 'header.php';
?>

    <title>Modifier un membre</title>

    <?php if ($membre): ?>
        <h1>Modifier le membre : <?= htmlspecialchars($membre['nom'] ?? '') ?> <?= htmlspecialchars($membre['prenom'] ?? '') ?></h1>
        <form class="formu" action="modifier_membre.php?id_membre=<?= $membre['id_membre'] ?>" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($membre['nom'] ?? '') ?>" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($membre['prenom'] ?? '') ?>" required><br>

            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" value="<?= htmlspecialchars($membre['pseudo'] ?? '') ?>"><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($membre['email'] ?? '') ?>" required><br>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" value="<?= htmlspecialchars($membre['telephone'] ?? '') ?>"><br>

            <label for="date_naissance">Date de Naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance" value="<?= htmlspecialchars($membre['date_naissance'] ?? '') ?>"><br>

            <label for="date_adhesion">Date d'Adhésion :</label>
            <input type="datetime-local" id="date_adhesion" name="date_adhesion" value="<?= htmlspecialchars($membre['date_adhesion'] ?? '') ?>" required><br>

            <label for="genre">Genre :</label>
            <input type="text" id="genre" name="genre" value="<?= htmlspecialchars($membre['genre'] ?? '') ?>"><br>

            <label for="role">Rôle :</label>
            <input type="text" id="role" name="role" value="<?= htmlspecialchars($membre['role'] ?? '') ?>" required><br>

            

            <button type="submit">Enregistrer les modifications</button>
        </form>
        <a href="admin_dashboard.php">Retour à la gestion des membres</a>
    <?php else: ?>
        <p>Membre non trouvé.</p>
        <a href="admin_membres.php">Retour à la gestion des membres</a>
    <?php endif; ?>
</body>
</html>
