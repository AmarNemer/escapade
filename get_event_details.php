<?php
include 'config.php'; // Assurez-vous que le chemin vers le fichier de configuration est correct

if (isset($_GET['id'])) {
    // Valider et sécuriser l'ID de l'événement
    $eventId = intval($_GET['id']);
    
    // Préparer la requête pour éviter les injections SQL
    $stmt = $mysqlClient->prepare("SELECT * FROM activites WHERE id = ?");
    $stmt->execute([$eventId]);
    $event = $stmt->fetch(PDO::FETCH_ASSOC); // Récupération en tant que tableau associatif

    if ($event) {
        // Affichage des détails de l'événement en échappant les données pour la sécurité
        echo "<h2>" . htmlspecialchars($event['titre'] ?? 'Titre non spécifié') . "</h2>";
        echo "<p>" . htmlspecialchars($event['description'] ?? 'Aucune description disponible.') . "</p>";
        echo "<p><strong>Jour :</strong> " . htmlspecialchars($event['jour'] ?? 'Non spécifié') . "</p>";
        echo "<p><strong>Heure :</strong> " . htmlspecialchars($event['heure'] ?? 'Non spécifié') . "</p>";
        echo "<p><strong>Prix :</strong> " . htmlspecialchars($event['prix'] ?? 'Gratuit') . "</p>";
        echo '<a href="#" class="inscription-btn" data-id="' . htmlspecialchars($event['id'] ?? '', ENT_QUOTES, 'UTF-8') . '" onclick="updateBtnInscription(event, this);">S\'inscrire</a>';
        
    } else {
        echo "<p>Aucune information trouvée.</p>"; // Message si l'événement n'existe pas
    }
} else {
    echo "<p>ID manquant.</p>"; // Message si l'ID n'est pas fourni
}
?>
