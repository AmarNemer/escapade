<html>
    <head>
    <base href="https://www.centresocialescapade.fr/activites">
    <title>Activités - Centre Social Escapade</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    :root {
      --primary-color: #FF5722;
      --secondary-color: #FFC107;
      --accent-color: #9C27B0;
      --background-color: #f5f5f5;
      --text-color: #333;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Roboto', sans-serif;
      line-height: 1.6;
      background: var(--background-color);
    }
    
    header {
      background: white;
      padding: 1rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    nav {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      width: 200px;
      height: auto;
    }
    
    .main-menu {
      display: flex;
      gap: 2rem;
      align-items: center;
    }
    
    .main-menu a {
      color: var(--text-color);
      text-decoration: none;
      font-weight: 500;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    
    .main-menu a:hover, .main-menu a.active {
      background: var(--primary-color);
      color: white;
    }
    
    .activities-container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    .contact-form {
  background: white;
  padding: 2rem;
  border-radius: 15px;
  margin-top: 3rem;
}
    
    .hero-section {
      background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
      color: white;
      padding: 4rem 2rem;
      border-radius: 15px;
      text-align: center;
      margin-bottom: 3rem;
      position: relative;
      overflow: hidden;
    }
    
    .hero-section::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><circle cx="100" cy="100" r="80" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="20"/></svg>') center/cover;
      opacity: 0.1;
    }
    
    .filter-section {
      margin-bottom: 2rem;
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }
    
    .filter-btn {
      padding: 0.5rem 1.5rem;
      border: none;
      border-radius: 25px;
      background: white;
      color: var(--text-color);
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .filter-btn.active {
      background: var(--primary-color);
      color: white;
    }
    
    .activities-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      animation: fadeIn 0.5s ease;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .activity-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    
    .activity-card:hover {
      transform: translateY(-10px);
    }
    
    .activity-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    
    .activity-content {
      padding: 1.5rem;
    }
    
    .activity-title {
      color: var(--primary-color);
      margin-bottom: 1rem;
      font-size: 1.5rem;
    }
    
    .activity-details {
      display: grid;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }
    
    .detail-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    
    .detail-icon {
      color: var(--accent-color);
    }
    
    .activity-btn {
      display: inline-block;
      padding: 0.8rem 1.5rem;
      background: var(--primary-color);
      color: white;
      text-decoration: none;
      border-radius: 25px;
      transition: all 0.3s ease;
    }
    
    .activity-btn:hover {
      background: var(--accent-color);
      transform: scale(1.05);
    }
    
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.8);
      z-index: 1000;
    }
    
    .modal-content {
      position: relative;
      background: white;
      width: 90%;
      max-width: 600px;
      margin: 2rem auto;
      padding: 2rem;
      border-radius: 15px;
    }
    
    .close-modal {
      position: absolute;
      top: 1rem;
      right: 1rem;
      font-size: 1.5rem;
      cursor: pointer;
    }
    
    @media (max-width: 768px) {
      .main-menu {
        display: none;
      }
      
      .hero-section {
        padding: 2rem 1rem;
      }
      
      .activities-grid {
        grid-template-columns: 1fr;
      }
    }
    </style>
    </head>
    <body>
      <header>
        <nav>
          <img src="images/Logo Escapade.png" alt="Logo Centre Social Escapade" class="logo">
          <div class="main-menu">
            <a href="https://www.centresocialescapade.fr/activites" class="active">Activités</a>
            <a href="https://www.centresocialescapade.fr/association">L'Association</a>
            <a href="https://www.centresocialescapade.fr/infos-pratiques">Infos Pratiques</a>
          </div>
        </nav>
      </header>
    
      <main class="activities-container">
        <section class="hero-section">
          <h1>Nos Activités</h1>
          <p>Découvrez toutes les activités proposées par le Centre Social Escapade</p>
        </section>
    
        <section class="filter-section">
          <button class="filter-btn active" data-filter="all">Toutes les activités</button>
          <button class="filter-btn" data-filter="enfants">Enfants</button>
          <button class="filter-btn" data-filter="ados">Ados</button>
          <button class="filter-btn" data-filter="adultes">Adultes</button>
          <button class="filter-btn" data-filter="seniors">Seniors</button>
        </section>
    
        <div class="activities-grid">
          <!-- Activité 1 -->
          <article class="activity-card" data-category="enfants">
            <img src="images/jeux.jpg" alt="Activités enfants - jeux créatifs et éducatifs" class="activity-image">
            <div class="activity-content">
              <h2 class="activity-title">Ateliers Créatifs Enfants</h2>
              <div class="activity-details">
                <div class="detail-item">
                  <span class="detail-icon">🎨</span>
                  <span>Pour les 6-12 ans</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">📅</span>
                  <span>Mercredi 14h-16h</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">💰</span>
                  <span>À partir de 5€/séance</span>
                </div>
              </div>
              <a href="#" class="activity-btn" onclick="showDetails('ateliers-creatifs')">En savoir plus</a>
            </div>
          </article>
    
          <!-- Activité 2 -->
          <article class="activity-card" data-category="adultes">
            <img src="images/yoga.jpg" alt="Cours de yoga pour adultes - ambiance zen" class="activity-image">
            <div class="activity-content">
              <h2 class="activity-title">Yoga</h2>
              <div class="activity-details">
                <div class="detail-item">
                  <span class="detail-icon">🧘‍♀️</span>
                  <span>Tous niveaux</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">📅</span>
                  <span>Lundi et Jeudi 18h-19h30</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">💰</span>
                  <span>180€/an</span>
                </div>
              </div>
              <a href="#" class="activity-btn" onclick="showDetails('yoga')">En savoir plus</a>
            </div>
          </article>
    
          <!-- Activité 3 -->
          <article class="activity-card" data-category="seniors">
            <img src="images/soutien scolaire collège.jpg" alt="Atelier informatique seniors - apprentissage numérique" class="activity-image">
            <div class="activity-content">
              <h2 class="activity-title">Initiation Informatique</h2>
              <div class="activity-details">
                <div class="detail-item">
                  <span class="detail-icon">💻</span>
                  <span>Débutants bienvenus</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">📅</span>
                  <span>Mardi 10h-12h</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">💰</span>
                  <span>Gratuit pour les adhérents</span>
                </div>
              </div>
              <a href="#" class="activity-btn" onclick="showDetails('informatique')">En savoir plus</a>
            </div>
          </article>
    
          <!-- Activité 4 -->
          <article class="activity-card" data-category="ados">
            <img src="musique.jpg" alt="Atelier musique ados - instruments et création musicale" class="activity-image">
            <div class="activity-content">
              <h2 class="activity-title">Atelier Musique</h2>
              <div class="activity-details">
                <div class="detail-item">
                  <span class="detail-icon">🎸</span>
                  <span>12-17 ans</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">📅</span>
                  <span>Samedi 14h-16h</span>
                </div>
                <div class="detail-item">
                  <span class="detail-icon">💰</span>
                  <span>150€/trimestre</span>
                </div>
              </div>
              <a href="#" class="activity-btn" onclick="showDetails('musique')">En savoir plus</a>
            </div>
          </article>
        </div>
      </main>
    
      <!-- Modal -->
      <div class="modal" id="activityModal">
        <div class="modal-content">
          <span class="close-modal">&times;</span>
          <div id="modalContent"></div>
        </div>
      </div>
    
      <script>
        // Filtrage des activités
        const filterButtons = document.querySelectorAll('.filter-btn');
        const activityCards = document.querySelectorAll('.activity-card');
    
        filterButtons.forEach(button => {
          button.addEventListener('click', () => {
            // Reset active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
    
            const filter = button.dataset.filter;
    
            activityCards.forEach(card => {
              if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = 'block';
              } else {
                card.style.display = 'none';
              }
            });
          });
        });
    
        // Gestion du modal
        const modal = document.getElementById('activityModal');
        const closeModal = document.querySelector('.close-modal');
        const modalContent = document.getElementById('modalContent');
    
        function showDetails(activity) {
          const activityDetails = {
            'ateliers-creatifs': {
              title: 'Ateliers Créatifs Enfants',
              description: 'Des ateliers ludiques et créatifs pour développer l\'imagination des enfants...',
              equipment: 'Matériel fourni',
              teacher: 'Marie Durant - Animatrice diplômée',
              places: '12 places disponibles'
            },
            'yoga': {
              title: 'Yoga',
              description: 'Cours de yoga adaptés à tous les niveaux...',
              equipment: 'Apporter son tapis',
              teacher: 'Sarah Martin - Professeure certifiée',
              places: '15 places disponibles'
            },
            // Ajoutez d'autres activités ici
          };
    
          const details = activityDetails[activity];
          modalContent.innerHTML = `
            <h2>${details.title}</h2>
            <p>${details.description}</p>
            <p><strong>Matériel :</strong> ${details.equipment}</p>
            <p><strong>Animateur :</strong> ${details.teacher}</p>
            <p><strong>Places :</strong> ${details.places}</p>
            <button class="activity-btn">S'inscrire</button>
          `;
    
          modal.style.display = 'block';
        }
    
        closeModal.onclick = function() {
          modal.style.display = 'none';
        }
    
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = 'none';
          }
        }
    
        // Animation au scroll
        const observerOptions = {
          threshold: 0.1
        };
    
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.style.opacity = '1';
              entry.target.style.transform = 'translateY(0)';
            }
          });
        }, observerOptions);
    
        activityCards.forEach(card => {
          observer.observe(card);
        });
      </script>
      <section class="contact-form">
        <h2>Nous contacter</h2>
        <form id="contactForm">
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="submit-btn">Envoyer</button>
        </form>
      </section>
  
      <!-- Google Maps -->
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.0876712220655!2d4.885296415591671!3d45.76827897910576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea0b4d0c1089%3A0x9b1f1f0f9f0f9f0f!2sCentre%20Social%20Escapade!5e0!3m2!1sfr!2sfr!4v1625147200000!5m2!1sfr!2sfr"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy">
        </iframe>
      </div>
    </main>
  
    <script>
      // Gestion du formulaire de contact
      document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Récupération des données du formulaire
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Animation de confirmation
        const submitBtn = this.querySelector('.submit-btn');
        submitBtn.textContent = 'Envoi en cours...';
        submitBtn.disabled = true;
        
        // Simulation d'envoi (à remplacer par votre logique d'envoi réelle)
        setTimeout(() => {
          submitBtn.textContent = 'Message envoyé !';
          submitBtn.style.background = '#4CAF50';
          
          // Reset du formulaire
          setTimeout(() => {
            this.reset();
            submitBtn.textContent = 'Envoyer';
            submitBtn.style.background = '';
            submitBtn.disabled = false;
          }, 2000);
        }, 1500);
      });
  
      // Animation des cartes au scroll
      const observerOptions = {
        threshold: 0.1
      };
  
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);
  
      document.querySelectorAll('.info-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        observer.observe(card);
      });
    </script>
  </body>
  </html>
    </body>
    </html>