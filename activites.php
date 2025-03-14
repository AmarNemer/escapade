<?php
session_start();
include 'config.php'; // Assurez-vous que le chemin est correct

// Requête pour récupérer les événements depuis la base de données
$sql = "SELECT * FROM activites a JOIN categories c ON a.id_categorie = c.id_categorie";
$stmt = $mysqlClient->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC); // Utilisation de FETCH_ASSOC pour un tableau associatif

// Inscription à une activité
if (isset($_POST['id_activite']) && $_POST['inscrire'] == 'true') {
    $id_activite = intval($_POST['id_activite']); // Assurez-vous que l'ID est un entier

    $stmt = $mysqlClient->prepare("SELECT * FROM activites WHERE id = ?");
    $stmt->execute([$id_activite]);
    $activity = $stmt->fetch(PDO::FETCH_ASSOC); // Utilisation de FETCH_ASSOC

    if ($activity) {
        // Inscription de l'utilisateur
        $sql = "INSERT INTO inscriptions (id_membre, id_activite, date_inscription, statut_paiement) VALUES (?, ?, ?, 'en attente')";
        $stmt = $mysqlClient->prepare($sql);
        $result = $stmt->execute([$_SESSION['id'], $id_activite, date('Y-m-d')]);

        // Envoi de l'e-mail de confirmation
        if ($result) {
            // Envoi de l'e-mail avec PHPMailer
            require 'vendor/autoload.php'; // Charge automatiquement PHPMailer

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'centresocialescapade@gmail.com'; // Ton email
                $mail->Password = 'iubl cxrr xkfq gnwj'; // Mot de passe de l'application
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('centresocialescapade@gmail.com', 'Centresocial Escapade');
                $mail->addAddress($_SESSION['email'], $_SESSION['nom']); // L'email de l'utilisateur

                $mail->isHTML(true);
                $mail->Subject = 'Confirmation d\'inscription à l\'activité';
                $mail->Body = 'Bonjour ' . $_SESSION['nom'] . ',<br><br>Vous êtes bien inscrit à l\'activité : ' . $activity['titre'] . '.';

                $mail->send();

                // Réponse en JSON
                echo json_encode(['success' => true, 'message' => 'Inscription réussie et e-mail envoyé.']);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'envoi de l\'e-mail: ' . $mail->ErrorInfo]);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'inscription.']);
        }
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'Activité introuvable.']);
    }
}

include 'header.php';
?>

<main class="activities-container">
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
