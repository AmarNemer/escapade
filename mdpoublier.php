<?php include 'header.php'; ?>
<?php

include("config.php"); // Connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide.";
    } else {
        // Vérifier si l'email existe dans la base
        $stmt = $mysqlClient->prepare("SELECT id_membre FROM membres WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            // Générer un token unique
            $token = bin2hex(random_bytes(32));
            $expire_time = date("Y-m-d H:i:s", strtotime("+1 hour")); // Expire en 1h

            // Enregistrer le token en base
            $stmt = $mysqlClient->prepare("UPDATE membres SET reset_token = :token, reset_expires = :expires WHERE email = :email");
            $stmt->bindParam(':token', $token, PDO::PARAM_STR);
            $stmt->bindParam(':expires', $expire_time, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            // Envoyer l'email
            $reset_link = "http://tonsite.com/reinitialiser.php?token=" . $token;
            $message = "Cliquez sur ce lien pour réinitialiser votre mot de passe : " . $reset_link;

            mail($email, "Réinitialisation de mot de passe", $message, "From: no-reply@tonsite.com");

            $success = "Un email de réinitialisation a été envoyé.";
        } else {
            $error = "Aucun compte trouvé avec cet email.";
        }
    }
}
?>

<h1>Réinitialisation du mot de passe</h1>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= $error ?></p>
<?php endif; ?>

<?php if (isset($success)): ?>
    <p style="color: green;"><?= $success ?></p>
<?php else: ?>
    <form class="formu" action="mdpoublier.php" method="post">
        <label for="email">Entrez votre email :</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Envoyer</button>
    </form>
    <a href="index.php">Retour à l'accueil</a>
<?php endif; ?>

<?php include 'footer.php'; ?>
