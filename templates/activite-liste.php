<?php
// Nombre d'activités par page
$limitActivites = 10;

// Récupérer le numéro de la page actuelle pour les activités, par défaut à 1
$pageActivites = isset($_GET['page_activites']) ? intval($_GET['page_activites']) : 1;
$offsetActivites = ($pageActivites - 1) * $limitActivites;

// Récupérer toutes les activités avec le nom de la catégorie pour pagination
$requeteActivites = "SELECT activites.id, activites.titre, activites.description, activites.image, activites.details, activites.jour, activites.heure, activites.prix, categories.name AS categorie 
                     FROM activites 
                     INNER JOIN categories ON activites.id_categorie = categories.id_categorie 
                     ORDER BY activites.id DESC LIMIT :limit OFFSET :offset";
$reqsqlActivites = $mysqlClient->prepare($requeteActivites);
$reqsqlActivites->bindParam(':limit', $limitActivites, PDO::PARAM_INT);
$reqsqlActivites->bindParam(':offset', $offsetActivites, PDO::PARAM_INT);
$reqsqlActivites->execute();
$activites = $reqsqlActivites->fetchAll(PDO::FETCH_ASSOC);

// Récupérer le nombre total d'activités pour calculer le nombre de pages
$totalReqActivites = "SELECT COUNT(*) FROM activites";
$totalSqlActivites = $mysqlClient->prepare($totalReqActivites);
$totalSqlActivites->execute();
$totalActivites = $totalSqlActivites->fetchColumn();
$totalPagesActivites = ceil($totalActivites / $limitActivites);
?>

<table>
    <thead>
        <tr>
            <?php if (isset($activites[0]['id'])) {?><th>ID</th><?php }?>
            <th>Catégorie</th> <!-- Affichage de la colonne Catégorie -->
            <?php if (isset($activites[0]['titre'])) {?><th>Titre</th><?php }?>
            <?php if (isset($activites[0]['description'])) {?><th>Description</th><?php }?>
            <?php if (isset($activites[0]['image'])) {?><th>Image</th><?php }?>
            <?php if (isset($activites[0]['jour'])) {?><th>Jour</th><?php }?>
            <?php if (isset($activites[0]['heure'])) {?><th>Heure</th><?php }?>
            <?php if (isset($activites[0]['prix'])) {?><th>Prix</th><?php }?>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($activites as $activite): ?>
            <tr>
                <?php if (isset($activite['id'])) {?><td><?= htmlspecialchars($activite['id'] ?? '') ?></td><?php }?>
                <td><?= htmlspecialchars($activite['categorie'] ?? '') ?></td> <!-- Nom de la catégorie -->
                <?php if (isset($activite['titre'])) {?><td><?= htmlspecialchars($activite['titre'] ?? '') ?></td><?php }?>
                <?php if (array_key_exists('description', $activite)) {?><td><?= htmlspecialchars($activite['description'] ?? '') ?></td><?php }?>
                <?php if (isset($activite['image'])) {?><td><img src="images/imgActivite/<?= htmlspecialchars($activite['image'] ?? '') ?>" width="100"></td><?php }?>
                <?php if (isset($activite['jour'])) {?><td><?= htmlspecialchars($activite['jour'] ?? '') ?></td><?php }?>
                <?php if (isset($activite['heure'])) {?><td><?= htmlspecialchars($activite['heure'] ?? '') ?></td><?php }?>
                <?php if (isset($activite['prix'])) {?><td><?= htmlspecialchars($activite['prix'] ?? '') ?></td><?php }?>
                <td>
                    <a href="modifier_activite.php?id=<?= $activite['id'] ?>">Éditer</a>
                    <a href="admin_dashboard.php?delete_activite=<?= $activite['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette activité ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="pagination">
    <a href="?page_activites=1" class="<?= ($pageActivites == 1) ? 'disabled' : '' ?>">Première</a>
    
    <?php if ($pageActivites > 1): ?>
        <a href="?page_activites=<?= $pageActivites - 1 ?>">Précédente</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPagesActivites; $i++): ?>
        <a href="?page_activites=<?= $i ?>" class="<?= ($i == $pageActivites) ? 'active' : '' ?>"><?= $i ?></a>
    <?php endfor; ?>

    <?php if ($pageActivites < $totalPagesActivites): ?>
        <a href="?page_activites=<?= $pageActivites + 1 ?>">Suivante</a>
    <?php endif; ?>
    
    <a href="?page_activites=<?= $totalPagesActivites ?>" class="<?= ($pageActivites == $totalPagesActivites) ? 'disabled' : '' ?>">Dernière</a>
</div>

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
