<article class="activity-card" data-category="enfants">
    <img src="images/couture.jpg" alt="Activités enfants">
    <div class="activity-content">
        <h2 class="activity-title">Ateliers Créatifs Enfants</h2>
        <div class="activity-details">
            <div class="detail-item"><span class="detail-icon">🎨</span> Pour les 6-12 ans</div>
            <div class="detail-item"><span class="detail-icon">📅</span> Mercredi 14h-16h</div>
            <div class="detail-item"><span class="detail-icon">💰</span> À partir de 5€/séance</div>
        </div>
        <a href="#" class="activity-btn" onclick="openModal('ateliers-creatifs')">En savoir plus</a>
    </div>
</article>

<!-- Modal (Pop-up) -->
<div id="activityModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div id="modalDetails"></div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('activityModal');
    const modalDetails = document.getElementById('modalDetails');
    const closeModal = document.querySelector('.close-modal');

    const activityDetails = {
        'ateliers-creatifs': {
            title: 'Ateliers Créatifs Enfants',
            description: 'Des ateliers ludiques et créatifs pour développer l\'imagination des enfants...',
            equipment: 'Matériel fourni',
            teacher: 'Marie Durant - Animatrice diplômée',
            places: '12 places disponibles'
        }
    };

    window.openModal = function (activity) {
        const details = activityDetails[activity];
        if (details) {
            modalDetails.innerHTML = `
                <h2>${details.title}</h2>
                <p>${details.description}</p>
                <p><strong>Matériel :</strong> ${details.equipment}</p>
                <p><strong>Animateur :</strong> ${details.teacher}</p>
                <p><strong>Places :</strong> ${details.places}</p>
            `;
            modal.style.display = 'block';
        }
    };

    closeModal.onclick = function () {
        modal.style.display = 'none';
    };

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
});

</script>

<style>
  /* Style pour le modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 50%;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.close-modal {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 24px;
    cursor: pointer;
}

</style>