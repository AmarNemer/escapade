<?php
include('config.php');

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Récupérer les résultats des matchs
$sql = "SELECT * FROM results ORDER BY date DESC";
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats des Matchs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Résultats des Matchs</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Équipe à domicile</th>
                <th>Score</th>
                <th>Équipe à l'extérieur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
                <tr>
                    <td><?= htmlspecialchars($result['date']) ?></td>
                    <td><?= htmlspecialchars($result['home_team']) ?></td>
                    <td><?= htmlspecialchars($result['score']) ?></td>
                    <td><?= htmlspecialchars($result['away_team']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
