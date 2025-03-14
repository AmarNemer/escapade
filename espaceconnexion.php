<?php
session_start();

?>



<?php include 'header.php'; ?>
    <div class="inscri">
        <div class="">
            <h1>Escapade</h1>
            <form class="formu" action="traitement_connexion.php" method="post">
                <!-- <div class="textbox"> -->
                    <input type="email" placeholder="Adresse e-mail" name="email" required><br>
                <!-- </div> -->
                <!-- <div class="textbox"> -->
                    <input type="password" placeholder="Mot de passe" name="mdp" required><br>
                <!-- </div> -->
                    <input type="submit" class="btn" value="Se connecter"><br>

                <a href="inscription.php">Pas encore inscrit ?</a>
                <a href="mdpoublier.php">Mot de passe oublié ?</a>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>

</body>
</html>