<?php include 'header.php'; ?>
<section class="inscri">
<form class="formu" action="traitement_inscription.php" method="post">
        <h1>Formulaire d'inscription</h1>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo"><br><br>


        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required><br><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>
        
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br><br>

        <label for="genre">Genre :</label>
        <select id="genre" name="genre" required>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select><br><br>


        <button class="btn">S'inscrire</button>
        
    </form>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
