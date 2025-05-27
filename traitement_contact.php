<?php
session_start();
include("config.php"); // Connexion à la base de données

// Autoload PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($nom) || empty($email) || empty($message)) {
        $_SESSION['error'] = "Tous les champs sont requis.";
        header("Location: infospratiques.php");
        exit();
    }

    // Insertion en base de données
    $sql = "INSERT INTO messages (nom, email, message) VALUES (:nom, :email, :message)";
    $stmt = $mysqlClient->prepare($sql);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Envoi du mail avec PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'centresocialescapade@gmail.com';          // Adresse Gmail officielle
            $mail->Password   = 'zaoigfkievresmbx';                        // Mot de passe d'application
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('centresocialescapade@gmail.com', 'Centre Social Escapade');
            $mail->addAddress('centresocialescapade@gmail.com'); // Tu peux aussi ajouter une autre adresse en copie

            $mail->isHTML(true);
            $mail->Subject = '📨 Nouveau message depuis le site Escapade';
            $mail->Body    = "
                <h2>Nouveau message reçu depuis le formulaire de contact</h2>
                <p><strong>Nom :</strong> {$nom}</p>
                <p><strong>Email :</strong> {$email}</p>
                <p><strong>Message :</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
            ";

            $mail->send();
            $_SESSION['success'] = "Votre message a été envoyé avec succès et enregistré.";
        } catch (Exception $e) {
            $_SESSION['success'] = "Message enregistré mais une erreur est survenue lors de l'envoi de l'email : " . $mail->ErrorInfo;
        }

    } else {
        $_SESSION['error'] = "Erreur lors de l'envoi de votre message.";
    }

    header("Location: infospratiques.php");
    exit();
}
?>
