<?php
include('config.php');

// URL de la page à scrapper
$url = 'https://lbfc.fff.fr/competitions?id=422776&poule=2&phase=1&type=ch&tab=resultat';

// Initialiser cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Exécuter cURL et obtenir le contenu de la page
$html = curl_exec($ch);
curl_close($ch);

// Vérifier si le contenu a été récupéré correctement
if ($html === false) {
    die('Erreur lors de la récupération du contenu de la page.');
}

// Charger le contenu HTML avec DOMDocument
$dom = new DOMDocument();
libxml_use_internal_errors(true); // Ignorer les erreurs liées au HTML mal formé
$dom->loadHTML($html);
libxml_clear_errors();

// Créer une nouvelle instance de DOMXPath pour effectuer des requêtes XPath
$xpath = new DOMXPath($dom);

// Rechercher les résultats des matchs
$results = [];
$rows = $xpath->query('//table[@class="table-class"]//tr'); // Adaptez la requête XPath en fonction de la structure HTML

foreach ($rows as $row) {
    $cells = $xpath->query('.//td', $row);
    if ($cells->length > 0) {
        $match = [
            'date' => trim($cells->item(0)->textContent),
            'home_team' => trim($cells->item(1)->textContent),
            'score' => trim($cells->item(2)->textContent),
            'away_team' => trim($cells->item(3)->textContent)
        ];
        $results[] = $match;
    }
}

// Insérer les résultats dans la base de données
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    foreach ($results as $result) {
        $sql = "INSERT INTO results (date, home_team, score, away_team) VALUES (:date, :home_team, :score, :away_team)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':date', $result['date']);
        $stmt->bindParam(':home_team', $result['home_team']);
        $stmt->bindParam(':score', $result['score']);
        $stmt->bindParam(':away_team', $result['away_team']);
        $stmt->execute();
    }
    echo "Résultats ajoutés avec succès !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
