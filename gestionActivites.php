<?php
    include("config.php"); // Connexion à la base de données
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: espaceconnexion.php");
    exit();
}


// Nombre d'activités par page
$limit = 10;

// Récupérer le numéro de la page actuel, par défaut à 1
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Récupérer toutes les activités avec la catégorie associée
$requete = "SELECT activites.id, activites.titre, activites.image, activites.jour, activites.heure, categories.name AS categorie 
            FROM activites 
            INNER JOIN categories ON activites.id_categorie = categories.id_categorie 
            ORDER BY activites.id DESC 
            LIMIT :limit OFFSET :offset";

$reqsql = $mysqlClient->prepare($requete);
$reqsql->bindParam(':limit', $limit, PDO::PARAM_INT);
$reqsql->bindParam(':offset', $offset, PDO::PARAM_INT);
$reqsql->execute();
$activites = $reqsql->fetchAll(PDO::FETCH_ASSOC);

// Récupérer le nombre total d'activités pour calculer le nombre de pages
$totalReq = "SELECT COUNT(*) FROM activites";
$totalSql = $mysqlClient->prepare($totalReq);
$totalSql->execute();
$totalActivites = $totalSql->fetchColumn();
$totalPages = ceil($totalActivites / $limit);

// Gestion de la suppression des activités
if (isset($_GET['delete_activite'])) {
    $id = intval($_GET['delete_activite']);
    $requete = "DELETE FROM activites WHERE id = :id";
    $reqsql = $mysqlClient->prepare($requete);
    $reqsql->bindParam(':id', $id, PDO::PARAM_INT);
    $reqsql->execute();
    header("Location: admin_dashboard.php");
    exit();
}
?>

<h1>Gestion des activités</h1>
<a id="ajMb" class="btnAdmin" href="ajouter_activite.php">Ajouter une nouvelle activité</a>
<div class="table-container">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Jour</th>
            <th>Heure</th>
            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($activites as $activite): ?>
            <tr>
                <td><?= htmlspecialchars($activite['id']) ?></td>
                <td><?= htmlspecialchars($activite['titre']) ?></td>
                <td><img src="images/imgActivite/<?= htmlspecialchars($activite['image']) ?>" alt="<?= htmlspecialchars($activite['titre']) ?>" width="100"></td>
                <td><?= htmlspecialchars($activite['jour']) ?></td>
                <td><?= htmlspecialchars($activite['heure']) ?></td>
                <td><?= htmlspecialchars($activite['categorie']) ?></td>
                <td>
                    <a href="modifier_activite.php?id=<?= $activite['id'] ?>">Modifier</a>
                    <a href="admin_dashboard.php?delete_activite=<?= $activite['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette activité ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<div class="pagination">
    <a href="?page=1" class="<?= ($page == 1) ? 'disabled' : '' ?>">Première</a>
    
    <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1 ?>">Précédente</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?= $i ?>" class="<?= ($i == $page) ? 'active' : '' ?>"><?= $i ?></a>
    <?php endfor; ?>

    <?php if ($page < $totalPages): ?>
        <a href="?page=<?= $page + 1 ?>">Suivante</a>
    <?php endif; ?>
    
    <a href="?page=<?= $totalPages ?>" class="<?= ($page == $totalPages) ? 'disabled' : '' ?>">Dernière</a>
</div>

<a href="deconnexion.php">Déconnexion</a>

<style>
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.pagination a {
    margin: 0 5px;
    padding: 8px 12px;
    text-decoration: none;
    border: 1px solid #007bff;
    color: #007bff;
}
.pagination a.active {
    background-color: #007bff;
    color: white;
}
.pagination a.disabled {
    color: gray;
    pointer-events: none;
    border: 1px solid gray;
}
</style>

