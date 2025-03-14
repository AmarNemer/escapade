<?php 
include 'header.php';
include("config.php");

if (isset($_SESSION['id']) || $_SESSION['role'] == 'admin') {
   echo "Admin_dashboard";
}else{
    header('location: index.php');
    exit();
}

// Récupérer tous les membres
$requete = "SELECT * FROM membres";
$reqsql = $mysqlClient->prepare($requete);
$reqsql->execute();
$membres = $reqsql->fetchAll(PDO::FETCH_ASSOC);

// Gestion de la suppression des membres
if (isset($_GET['delete_membre'])) {
    $id_membre = intval($_GET['delete_membre']);
    $requete = "DELETE FROM membres WHERE id_membre = :id_membre";
    $reqsql = $mysqlClient->prepare($requete);
    $reqsql->bindParam(':id_membre', $id_membre, PDO::PARAM_INT);
    $reqsql->execute();
    header("Location: admin_dashboard.php");
    exit();
}
?>
<h1>Gestion des Membres</h1>
<a id="ajMb" class="btnAdmin" href="ajouter_membre.php">Ajouter un nouveau membre</a>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date de Naissance</th>
                <th>Date d'Adhésion</th>
                <th>Genre</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($membres as $membre): ?>
                <tr>
                    <td><?= htmlspecialchars($membre['id_membre'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['nom'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['prenom'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['pseudo'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['email'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['telephone'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['date_naissance'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['date_adhesion'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['genre'] ?? '') ?></td>
                    <td><?= htmlspecialchars($membre['role'] ?? '') ?></td>
                    <td>
                        <a href="modifier_membre.php?id_membre=<?= $membre['id_membre'] ?>">Éditer</a>
                        <a href="admin_dashboard.php?delete_membre=<?= $membre['id_membre'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce membre ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

