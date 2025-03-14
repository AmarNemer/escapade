<article class="activity-card" data-category="<?= htmlspecialchars($event['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <img src="images/imgActivite/<?= htmlspecialchars($event['image'] ?? 'default.jpg', ENT_QUOTES, 'UTF-8'); ?>" 
         alt="<?= htmlspecialchars($event['titre'] ?? 'Activité', ENT_QUOTES, 'UTF-8'); ?>">
    <div class="activity-content">
        <h2 class="activity-title"><?= htmlspecialchars($event['titre'] ?? 'Titre non spécifié', ENT_QUOTES, 'UTF-8'); ?></h2>
        <div class="activity-details">
            <div class="detail-item"><span class="detail-icon">📅</span> <?= htmlspecialchars($event['jour'] ?? 'Jour non spécifié', ENT_QUOTES, 'UTF-8'); ?> <?= htmlspecialchars($event['heure'] ?? 'Heure non spécifiée', ENT_QUOTES, 'UTF-8'); ?></div>
            <div class="detail-item"><span class="detail-icon">💰</span> <?= htmlspecialchars($event['prix'] ?? 'Gratuit', ENT_QUOTES, 'UTF-8'); ?></div>
        </div>
        <?php if (!isset($event['statut_paiement'])): ?>
            <a href="#" class="activity-btn" data-id="<?= htmlspecialchars($event['id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">En savoir plus</a>
        <?php endif; ?>
    </div>
    <?php if (isset($showUnsubscribeButton) && $showUnsubscribeButton): ?>
        <form method="post" action="desinscrire.php" class="unsubscribe-form">
            <input type="hidden" name="id_activite" value="<?= htmlspecialchars($event['id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            <button type="submit" class="unsubscribe-button">Se désinscrire</button>
        </form>
    <?php endif; ?>
</article>
