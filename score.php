<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$url = 'https://doubs-territoire-de-belfort.fff.fr/competitions?tab=resultat&id=433092&phase=1&poule=3&type=ch&beginWeek=10%2F03%2F2025&endweek=16%2F03%2F2025';
$html = file_get_contents($url);

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);
$results = $xpath->query("//div[@class='resultats']//tr");

$data = [];
foreach ($results as $result) {
    $match = [];
    $match['team1'] = trim($xpath->query(".//td[1]", $result)->item(0)->nodeValue);
    $match['team2'] = trim($xpath->query(".//td[2]", $result)->item(0)->nodeValue);
    $match['score'] = trim($xpath->query(".//td[3]", $result)->item(0)->nodeValue);
    $data[] = $match;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats des matchs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Résultats des matchs</h1>
    <table id="resultsTable">
        <thead>
            <tr>
                <th>Équipe 1</th>
                <th>Équipe 2</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les résultats seront ajoutés ici -->
        </tbody>
    </table>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('path/to/your/script.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('resultsTable').querySelector('tbody');
                    data.forEach(match => {
                        const row = document.createElement('tr');
                        row.innerHTML = `<td>${match.team1}</td><td>${match.team2}</td><td>${match.score}</td>`;
                        tableBody.appendChild(row);
                    });
                });
        });
    </script>
</body>
</html>
