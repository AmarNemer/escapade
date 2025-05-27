<?php
session_start();
include 'config.php'; // Assurez-vous que le chemin est correct
require 'vendor/autoload.php'; // Charger PHPMailer au début

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Requête pour récupérer les événements depuis la base de données
$sql = "SELECT * FROM activites a JOIN categories c ON a.id_categorie = c.id_categorie";
$stmt = $mysqlClient->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Inscription à une activité
if (isset($_POST['id_activite']) && $_POST['inscrire'] == 'true') {
    $id_activite = intval($_POST['id_activite']);

    $stmt = $mysqlClient->prepare("SELECT * FROM activites WHERE id = ?");
    $stmt->execute([$id_activite]);
    $activity = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($activity) {
        // Insertion de l'inscription en base
        $sql = "INSERT INTO inscriptions (id_membre, id_activite, date_inscription, statut_paiement) VALUES (?, ?, ?, 'en attente')";
        $stmt = $mysqlClient->prepare($sql);
        $result = $stmt->execute([$_SESSION['id'], $id_activite, date('Y-m-d')]);

        if ($result) {
            // Envoi de l'e-mail
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'centresocialescapade@gmail.com';
                $mail->Password = 'iubl cxrr xkfq gnwj';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('centresocialescapade@gmail.com', 'Centre Social Escapade');
                $mail->addAddress($_SESSION['email'], $_SESSION['nom']);

                $mail->isHTML(true);
                $mail->Subject = 'Réservation d\'activité - Escapade';
                $mail->Body = '
                    <p>Bonjour ' . htmlspecialchars($_SESSION['nom']) . ',</p>

                    <p>Vous venez de réserver une place pour l\'activité suivante :</p>
                    <ul>
                        <li><strong>Activité :</strong> ' . htmlspecialchars($activity['titre']) . '</li>
                    </ul>

                    <p><strong>⚠️ Important :</strong> votre inscription est <strong>réservée pendant 48h</strong>. Merci de vous rendre au centre pour régler le montant de l\'activité. Sans paiement dans ce délai, votre réservation sera annulée.</p>

                    <p>À très bientôt,<br>
                    L\'équipe du Centre Social Escapade</p>
                ';
                file_put_contents('debug_mailer.txt', "Tentative mail à: ".$_SESSION['email']."\n", FILE_APPEND);

                $mail->send();
                echo json_encode(['success' => true, 'message' => 'Inscription réussie et e-mail envoyé.']);
            } catch (Exception $e) {
                file_put_contents('debug_mailer.txt', $mail->ErrorInfo . "\n", FILE_APPEND);
                echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo]);
            }
            
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'inscription.']);
        }
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'Activité introuvable.']);
        exit;
    }
}

include 'header.php';
?>

<div class="activities-container">
    <section class="hero-section">
        <h1>Nos Activités</h1>
        <p>Découvrez toutes les activités proposées par le Centre Social Escapade</p>
    </section>

    <?php
    // Tableau des catégories
    $categories = ["all" => "Toutes les activités", "enfants", "ados", "adultes", "seniors", "femmes"];
    ?>

    <section class="filter-section">
        <?php foreach ($categories as $key => $category): ?>
            <button class="filter-btn <?= ($key === "all") ? 'active' : '' ?>" data-filter="<?= is_numeric($key) ? $category : $key ?>">
                <?= ucfirst($category) ?>
            </button>
        <?php endforeach; ?>
    </section>

    <div class="activities-grid">
        <?php if (empty($events)): ?>
            <p>Aucune activité disponible pour le moment.</p>
        <?php else: ?>
            <?php foreach ($events as $event): 
                include 'activity-card.php'; 
            endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<!-- Modal (Pop-up) -->
<div id="activityModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div id="modalDetails"></div>
    </div>
</div>

<?php include 'footer.php'; ?>
