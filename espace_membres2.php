<?php
session_start();
include 'config.php'; // Assurez-vous que le chemin est correct

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Rediriger vers la page de connexion
    exit();
}

$id_membre = $_SESSION['id'];

// Récupérer les activités inscrites par l'utilisateur
$sql = "SELECT a.*, i.statut_paiement FROM activites a JOIN inscriptions i ON a.id = i.id_activite WHERE i.id_membre = ?";
$stmt = $mysqlClient->prepare($sql);
$stmt->execute([$id_membre]);
$inscriptions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Compter les activités
$totalActivites = count($inscriptions);
$activitesPayees = count(array_filter($inscriptions, function($event) {
    return isset($event['statut_paiement']) && $event['statut_paiement'] === 'payé';
}));
$activitesAVenir = count(array_filter($inscriptions, function($event) {
    return isset($event['jour']) && !empty($event['jour']) && isset($event['heure']) && !empty($event['heure']);
}));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .activity-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
        }
        .activity-card:hover {
            transform: translateY(-5px);
        }
        .activity-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
        .activity-card h3 {
            margin: 10px 0;
            font-size: 20px;
        }
        .activity-card p {
            margin: 5px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['prenom']); ?> !</h1>
        <div class="activities-grid">
            <?php foreach ($inscriptions as $event): ?>
                <div class="activity-card">
                    <img src="<?php echo !empty($event['image']) ? htmlspecialchars($event['image']) : 'default.jpg'; ?>" alt="Image de l'activité">
                    <h3><?php echo htmlspecialchars($event['titre'] ?? 'Activité sans titre'); ?></h3>
                    <p><strong>Date :</strong> <?php echo isset($event['jour']) ? htmlspecialchars($event['jour'] . ' à ' . $event['heure']) : 'Non définie'; ?></p>
                    <p><strong>Prix :</strong> <?php echo htmlspecialchars($event['prix'] ?? 'Gratuit'); ?></p>
                    <p><strong>Statut :</strong> <span class="statut" style="color: <?php echo ($event['statut_paiement'] === 'payé') ? 'green' : 'red'; ?>;"><?php echo htmlspecialchars($event['statut_paiement'] ?? 'Statut inconnu'); ?></span></p>
                    <button class="btn" onclick="afficherDetails(<?php echo $event['id']; ?>)">Voir les détails</button>
                    <button class="btn btn-danger" onclick="desinscrire(<?php echo $event['id']; ?>)">Se désinscrire</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <script>
        function afficherDetails(id) {
            alert('Détails de l\'activité ' + id);
        }
        function desinscrire(id) {
            if (confirm('Êtes-vous sûr de vouloir vous désinscrire de cette activité ?')) {
                fetch('desinscrire.php?id=' + id, { method: 'POST' })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Vous êtes désinscrit de l\'activité.');
                        location.reload();
                    } else {
                        alert('Erreur lors de la désinscription.');
                    }
                });
            }
        }
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>
