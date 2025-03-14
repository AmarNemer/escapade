<?php
    include("config.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b0e6a19b40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/locales/fr.min.js'></script>
</head>
<body>

<header>
    <a href="index.php">
        <img class="logo" src="images/logo_escapade.png" alt="Logo Escapade Centre Social">
    </a>
    <nav>
        <div class="menu-toggle" id="menuToggle">
            <i class="fa fa-bars"></i>
            <i class="fa fa-times" style="display: none;"></i>
        </div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="actions.php">Actions</a></li>
            <li><a href="activites.php">Activités</a></li>
            <li><a href="aPropos.php">À Propos</a></li>
            <li><a href="infosPratiques.php">Infos Pratiques</a></li>            

            <?php if (isset($_SESSION['prenom'])): ?>
            <li>
                <div class="menu-deroulant compte">
                    <span><i class="fa-solid fa-user"></i> <?= htmlspecialchars($_SESSION['prenom']) ?></span>
                    <div class="sous-menu">
                        <?php if ($_SESSION['role'] == 'admin'): ?>
                            <a href="admin_dashboard.php">Tableau de Bord</a>
                            <!-- <a href="gestionMembres.php">Gestion Membres</a>
                            <a href="gestionActivites.php">Gestion Activités</a> -->
                        <?php else: ?>
                            <a href="espace_membres.php">Profil</a>
                        <?php endif; ?>
                        <a href="deconnexion.php">Déconnexion</a>
                    </div>
                </div>
            </li>
            <?php else: ?>
                <li><a class="menu-deroulant compte" href="#" id="loginBtn"><i class="fa-solid fa-user"></i> Connexion </a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<!-- Modal de connexion -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form class="formu" action="traitement_connexion.php" method="post">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br>
        <input type="submit" class="btn" value="Se connecter">
        <a href="mdpoublier.php" id="mdpo">Mot de passe oublié ?</a>
        <a href="inscription.php" id="inscrire">Pas encore inscrit ?</a>
    </form>
  </div>
</div>

<script>
document.getElementById('menuToggle').addEventListener('click', function() {
    const menu = document.querySelector('.menu');
    const barsIcon = this.querySelector('.fa-bars');
    const timesIcon = this.querySelector('.fa-times');

    menu.classList.toggle('active');
    barsIcon.style.display = menu.classList.contains('active') ? 'none' : 'block';
    timesIcon.style.display = menu.classList.contains('active') ? 'block' : 'none';
});
</script>


