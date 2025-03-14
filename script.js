document.addEventListener("DOMContentLoaded", function () {
  // Gestion des filtres des activités
  const filterButtons = document.querySelectorAll(".filter-btn");
  const activityCards = document.querySelectorAll(".activity-card");

  if (filterButtons.length && activityCards.length) {
    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        // Retire la classe 'active' de tous les boutons
        filterButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");

        // Récupère le filtre sélectionné
        const filter = button.dataset.filter;

        // Affiche ou masque les cartes en fonction du filtre
        activityCards.forEach((card) => {
          card.style.display =
            filter === "all" || card.dataset.category === filter
              ? "block"
              : "none";
        });
      });
    });
  }

  // Gestion de la modale d'activité
  const modal = document.getElementById("activityModal");
  const modalDetails = document.getElementById("modalDetails");
  const closeModal = document.querySelector(".close-modal");

  // Vérification de l'existence des éléments de la modale
  if (modal && modalDetails && closeModal) {
    const activityDetails = {
      "ateliers-creatifs": {
        title: "Ateliers Créatifs Enfants",
        description: "Des ateliers ludiques et créatifs pour les enfants...",
        equipment: "Matériel fourni",
        teacher: "Marie Durant - Animatrice diplômée",
        places: "12 places disponibles",
      },
    };

    // Fonction pour ouvrir la modale avec des données statiques
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
        modal.style.display = "block";
      }
    };

    // Gestion des boutons d'activités avec AJAX
    const buttons = document.querySelectorAll(".activity-btn");
    if (buttons.length) {
      buttons.forEach((button) => {
        button.addEventListener("click", function (event) {
          event.preventDefault();
          const eventId = button.getAttribute("data-id");
          openModalWithAjax(eventId);
        });
      });
    }

    function openModalWithAjax(eventId) {
      fetch(`get_event_details.php?id=${eventId}`)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Erreur serveur.");
          }
          return response.text();
        })
        .then((data) => {
          modalDetails.innerHTML = data;
          modal.style.display = "block";
        })
        .catch((error) => {
          console.error("Erreur AJAX:", error);
          modalDetails.innerHTML = "<p>Une erreur s'est produite.</p>";
          modal.style.display = "block"; // Affiche même en cas d'erreur
        });
    }

    // Fermeture de la modale
    closeModal.addEventListener("click", function () {
      modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  } else {
    console.error("Un ou plusieurs éléments de la modale sont manquants.");
  }

  // Gestion du formulaire de connexion
  const form = document.querySelector(".formu");
  if (form) {
    const emailInput = form.querySelector("input[name='email']");
    const passwordInput = form.querySelector("input[name='mdp']");
    const submitButton = form.querySelector("input[type='submit']");

    form.addEventListener("submit", function (event) {
      event.preventDefault();
      const email = emailInput.value.trim();
      const password = passwordInput.value.trim();

      if (email === "" || password === "") {
        alert("Veuillez remplir tous les champs.");
        return;
      }
      form.submit();
    });
  }

  // Gestion de l'affichage du modal de connexion
  const loginModal = document.getElementById("loginModal");
  const loginBtn = document.getElementById("loginBtn");
  const closeLoginModal = document.querySelector(".close");

  if (loginModal && loginBtn && closeLoginModal) {
    loginBtn.addEventListener("click", function () {
      loginModal.style.display = "block";
    });

    closeLoginModal.addEventListener("click", function () {
      loginModal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
      if (event.target === loginModal) {
        loginModal.style.display = "none";
      }
    });
  } else {
    console.error(
      "Un ou plusieurs éléments du modal de connexion sont manquants."
    );
  }

  // Gestion du menu responsive
  const menuToggle = document.getElementById("menuToggle");
  const nav = document.querySelector(".nav");

  if (menuToggle && nav) {
    menuToggle.addEventListener("click", function () {
      nav.classList.toggle("active");
    });
  }
});
document.addEventListener("DOMContentLoaded", () => {
  const inscriptionButtons = document.querySelectorAll(".inscription-btn");

  inscriptionButtons.forEach((button) => {
    button
  });
});


function updateBtnInscription(event, button) {
  event.preventDefault(); // Empêche le rechargement de la page
  const idActivite = button.dataset.id;
  fetch("activites.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `inscrire=true&id_activite=${idActivite}`,
  })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        // J'imagine que tu renverras { success: true } en réponse
        document.getElementById("modalDetails").innerHTML =
          "Vous êtes inscrit à l'activité. Un email de confirmation a été envoyé.";
      } else {
        document.getElementById("modalDetails").innerHTML =
          "Erreur lors de l'inscription.";
      }
    })
    .catch((error) => console.error("Error:", error));
}
