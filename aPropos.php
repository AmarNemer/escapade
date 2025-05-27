<?php 
include 'header.php';

// 1. Paramètres de l'API FFF (à adapter selon votre club)
$competitionId = '253577';  // Exemple pour une compétition régionale
$phaseId = '774298';        // ID de phase
$pouleId = '1188319';       // ID de poule

// 2. Configuration de la requête API
$apiUrl = "https://api-dofa.fff.fr/api/compets/$competitionId/phases/$phaseId/poules/$pouleId/matchs";

// 3. Création du contexte avec header User-Agent
$options = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0\r\n"
    ]
];
$context = stream_context_create($options);

// 4. Récupération des données avec gestion des erreurs
try {
    $jsonData = file_get_contents($apiUrl, false, $context);
    
    if ($jsonData === false) {
        throw new Exception("Impossible de contacter l'API FFF");
    }

    $data = json_decode($jsonData, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Erreur de format des données");
    }
} catch (Exception $e) {
    $error = $e->getMessage();
    $data = [];
}
?>

<main>
    <h1>A PROPOS</h1>
    <h2>Résultats récents d'AUDINCOURT AS</h2>
    
    <?php if (isset($error)): ?>
        <div class="alert error"><?= $error ?></div>
    <?php endif; ?>

    <?php if (!empty($data['hydra:member'])): ?>
        <table class="match-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Compétition</th>
                    <th>Équipe domicile</th>
                    <th>Score</th>
                    <th>Équipe extérieure</th>
                    <th>Résultat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['hydra:member'] as $match): ?>
                <?php 
                    $resultClass = '';
                    $resultText = 'Non joué';
                    
                    if (isset($match['home_resu'])) {
                        switch ($match['home_resu']) {
                            case 'GA': 
                                $resultClass = 'victory';
                                $resultText = 'Victoire';
                                break;
                            case 'PE': 
                                $resultClass = 'defeat';
                                $resultText = 'Défaite';
                                break;
                            case 'NU': 
                                $resultClass = 'draw';
                                $resultText = 'Nul';
                                break;
                        }
                    }
                ?>
                <tr class="<?= $resultClass ?>">
                    <td><?= date('d/m/Y', strtotime($match['date'])) ?> à <?= $match['time'] ?></td>
                    <td><?= htmlspecialchars($match['competition']['name'] ?? '') ?></td>
                    <td><?= htmlspecialchars($match['home']['short_name'] ?? '') ?></td>
                    <td><?= $match['home_score'] ?? '?' ?> - <?= $match['away_score'] ?? '?' ?></td>
                    <td><?= htmlspecialchars($match['away']['short_name'] ?? '') ?></td>
                    <td><?= $resultText ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="no-matches">
            <p>Aucun match trouvé pour cette période.</p>
            <p>Vérifiez les paramètres de l'API ou contactez l'administrateur.</p>
        </div>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>
<style>

.error {
    color: red;
    padding: 10px;
    border: 1px solid red;
    margin: 10px 0;
}

.match-results {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.match-results th, 
.match-results td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.match-results th {
    background-color: #f2f2f2;
}

.victoire { background-color: #d4edda; }
.defaite { background-color: #f8d7da; }
.nul { background-color: #fff3cd; }

.no-results {
    font-style: italic;
    color: #666;
}
</style>
