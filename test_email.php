<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charge automatiquement PHPMailer

$mail = new PHPMailer(true); // Active les exceptions pour voir les erreurs

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Serveur SMTP (ex: Gmail)
    $mail->SMTPAuth   = true;
    $mail->Username   = 'centresocialescapade@gmail.com'; // Remplace par ton email
    $mail->Password   = 'iubl cxrr xkfq gnwj'; // ⚠️ Utilise un mot de passe d'application !
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Expéditeur et destinataire
    $mail->setFrom('ton_email@gmail.com', 'Ton Nom');
    $mail->addAddress('centresocialescapade@gmail.com', 'Destinataire');

    // Contenu du mail
    $mail->isHTML(true);
    $mail->Subject = 'Test PHPMailer';
    $mail->Body    = 'Ceci est un <b>test</b> d\'envoi avec PHPMailer.';
    $mail->AltBody = 'Ceci est un test d\'envoi avec PHPMailer.';

    $mail->send();
    echo '✅ Email envoyé avec succès !';
} catch (Exception $e) {
    echo "❌ Erreur : {$mail->ErrorInfo}";
}
