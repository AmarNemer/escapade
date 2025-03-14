<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Membre</title>
    <style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .container {
        display: flex;
        flex-direction: row;
        flex-grow: 1;
        width: 100%;
    }

    /* Styles pour la colonne de menu */
    .menu-colonne {
        width: 20%;
        padding: 20px;
        background-color: #f0f0f0;
        border-right: 1px solid #ddd;
        box-sizing: border-box;
    }

    .menu-colonne h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .menu-colonne ul {
        list-style: none;
        padding: 0;
    }

    .menu-colonne ul li {
        margin-bottom: 10px;
    }

    .menu-colonne ul li a {
        text-decoration: none;
        color: #333;
        padding: 10px;
        border-radius: 5px;
        display: block;
        background-color: #e0e0e0;
    }

    .menu-colonne ul li a:hover {
        background-color: #c0c0c0;
    }

    /* Styles pour la section des activités */
    .activites-section {
        width: 80%;
        padding: 20px;
        box-sizing: border-box;
    }

    .activites-membre {
        width: 100%;
        padding: 20px;
        background-color: #f8f9fa; /* Couleur de fond de la section */
        border-radius: 10px; /* Coins arrondis */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
    }

    .activities-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    /* Styles pour les petites cartes à l'intérieur de la section */
    .activity-card {
        background-color: #ffffff; /* Couleur de fond des cartes */
        border: 1px solid #ddd; /* Bordure des cartes */
        border-radius: 5px; /* Coins arrondis des cartes */
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Ombre des cartes */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .activity-content {
        flex-grow: 1;
    }

    .unsubscribe-button {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        align-self: flex-end;
    }

    .unsubscribe-button:hover {
        background-color:rgb(57, 52, 51);
    }

 

    /* Ajustements pour l'affichage sur tablettes et mobiles */
    @media (max-width: 1024px) {
        .activities-grid {
            grid-template-columns: repeat(2, 1fr); /* 2 cartes par ligne */
        }
    }

    @media (max-width: 767px) {
        .container {
            flex-direction: column;
        }

        .menu-colonne {
            width: 100%;
            border-right: none;
            border-bottom: 1px solid #ddd;
            height: auto;
        }

        .activites-section {
            width: 100%;
        }

        .activities-grid {
            grid-template-columns: 1fr; /* 1 carte par ligne */
        }
    }
    </style>
</head>
<body>
<?php
session_start();
include 'config.php'; // Assurez-vous que le chemin est correct

include 'header.php'; 
// profil.php

$id_membre = $_SESSION['id'];

$sql = "SELECT a.*, i.statut_paiement FROM activites a JOIN inscriptions i ON a.id = i.id_activite WHERE i.id_membre = ?";
$stmt = $mysqlClient->prepare($sql);
$stmt->execute([$id_membre]);
$inscriptions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$showUnsubscribeButton = true; // Indique que le bouton de désinscription doit être affiché
?>

<div class="container">
    <div class="menu-colonne">
        <h2>Menu</h2>
        <ul>
            <li><a href="modifier-infos.php">Modifier les informations personnelles</a></li>
            <li><a href="historique-activites.php">Historique des activités</a></li>
            <li><a href="preferences.php">Préférences</a></li>
            <li><a href="deconnexion.php">Se déconnecter</a></li>
        </ul>
    </div>

    <div class="activites-section">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['prenom']); ?> !</h1>
        <div class="activites-membre">
            <div class="activities-grid">
                <?php foreach ($inscriptions as $event): ?>
                    <div class="activity-card">
                        <?php 
                        $showUnsubscribeButton = true; // Indique que le bouton de désinscription doit être affiché
                        include 'activity-card.php'; 
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; // Assurez-vous que le chemin est correct ?>

</body>
</html>
