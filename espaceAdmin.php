<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Admin</title>
</head>
<body>
    <h1>Bienvenue sur le tableau de bord admin, <?php echo htmlspecialchars($_SESSION['prenom']); ?> !</h1>
    <p>Rôle : <?php echo htmlspecialchars($_SESSION['role']); ?></p>
    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>
