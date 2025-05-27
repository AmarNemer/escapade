<?php include 'header.php'; ?>
<main>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>
<div class="activities-container">
    <section class="hero-section">
        <h1>Nos Actions</h1>
        <p>Découvrez toutes les actions proposées par le Centre Social Escapade</p>
    </section>
</div>



<!-- carrousel 2 -->
 <section class="game-section">
  
  <div class="custom-carousel">
    <div class="item active" style="background-image: url(./images/carnaval1.jpg);">
      <div class="item-desc">
        <h3>Carnaval Audincourt</h3>
        <p>Dota 2 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
      </div>
    </div>
    <div class="item" style="background-image: url(./images/noel.png);">
      <div class="item-desc">
        <h3>Noel</h3>
        <p>The Witcher 3 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
      </div>
    </div>
    <div class="item" style="background-image: url(./images/rencontreRacine.png);">
      <div class="item-desc">
        <h3>R&R</h3>
        <p>Rencontres & Racines  is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
      </div>
    </div>
    <div class="item" style="background-image: url(./images/carnaval.png);">
      <div class="item-desc">
        <h3>PUBG Mobile</h3>
        <p>PUBG 2 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
      </div>
    </div>
    <div class="item" style="background-image: url(./images/galetteRoi.png);">
      <div class="item-desc">
        <h3>Galette des Rois</h3>
        <p>Battle royale where 100 players fight to be the last person standing. which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
      </div>
    </div>
    <div class="item" style="background-image: url(images/imgActivite/respect.jpg);">
      <div class="item-desc">
        <h3>Kermesse</h3>
        <p>Far Cry 5 is a 2018 first-person shooter game developed by Ubisoft. which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
      </div>
    </div>
  </div>
</section>
<style>
@charset "utf-8";

/******* Fonts Import Start **********/
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
/********* Fonts Face CSS End **********/

/******* Common Element CSS Start ******/
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-family: "Roboto", sans-serif;
  font-size: 16px;
}
.clear {
  clear: both;
}
img {
  max-width: 100%;
  border: 0px;
}
ul,
ol {
  list-style: none;
}
a {
  text-decoration: none;
  color: inherit;
  outline: none;
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
a:focus,
a:active,
a:visited,
a:hover {
  text-decoration: none;
  outline: none;
}
a:hover {
  color: #e73700;
}
h2 {
  margin-bottom: 48px;
  padding-bottom: 16px;
  font-size: 40px;
  line-height: 28px;
  font-weight: 700;
  position: relative;
  text-transform: capitalize;
}
h3 {
  margin: 0 0 10px;
  font-size: 28px;
  line-height: 36px;
}
button {
  outline: none !important;
}
/******* Common Element CSS End *********/

/* -------- title style ------- */



/******* Middle section CSS Start ******/
/* -------- Landing page ------- */
.game-section {
  padding: 60px 50px;
}
.custom-carousel {
  display: flex;
  overflow: hidden;
}
.custom-carousel .item {
  margin: 0 15px;
  width: 320px;
  height: 400px;
  display: flex;
  align-items: flex-end;
  background: #343434 no-repeat center center / cover;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  transition: all 0.4s ease-in-out;
  cursor: pointer;
  flex-shrink: 0;
}
.custom-carousel .item.active {
  width: 500px;
  box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
}
.custom-carousel .item:after {
  content: "";
  display: block;
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
}
.custom-carousel .item-desc {
  padding: 0 24px 12px;
  color: #fff;
  position: relative;
  z-index: 1;
  overflow: hidden;
  transform: translateY(calc(100% - 54px));
  transition: all 0.4s ease-in-out;
}
.custom-carousel .item.active .item-desc {
  transform: none;
}
.custom-carousel .item-desc p {
  opacity: 0;
  transform: translateY(32px);
  transition: all 0.4s ease-in-out 0.2s;
}
.custom-carousel .item.active .item-desc p {
  opacity: 1;
  transform: translateY(0);
}
/******** Middle section CSS End *******/

/***** responsive css Start ******/
@media (max-width: 767px) {
  .custom-carousel .item {
    width: 200px;
    height: 280px;
  }
  .custom-carousel .item.active {
    width: 270px;
  }
}
.custom-carousel {
    display: flex;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
}

.custom-carousel .item {
    flex-shrink: 0;
    width: 320px; /* Vous pouvez ajuster la largeur selon vos besoins */
    height: 400px;
    scroll-snap-align: start;
}

@media (max-width: 767px) {
    .custom-carousel .item {
        width: 200px;
        height: 280px;
    }
    .custom-carousel {
        scroll-snap-type: none; /* Désactiver l'effet de snap sur les petits écrans */
    }
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".custom-carousel");
  const items = carousel.querySelectorAll(".item");

  // Fonction pour gérer le clic sur une carte
  function handleItemClick(event) {
    const clickedItem = event.currentTarget;

    // Retirer la classe "active" de toutes les cartes
    items.forEach((item) => item.classList.remove("active"));

    // Ajouter la classe "active" à la carte cliquée
    clickedItem.classList.add("active");

    // Faire défiler la carte active au centre
    const carouselRect = carousel.getBoundingClientRect();
    const itemRect = clickedItem.getBoundingClientRect();
    const scrollOffset = itemRect.left - carouselRect.left - (carouselRect.width / 2 - itemRect.width / 2);
    carousel.scrollTo({
      left: carousel.scrollLeft + scrollOffset,
      behavior: "smooth",
    });
  }

  // Ajouter un écouteur d'événement à chaque carte
  items.forEach((item) => item.addEventListener("click", handleItemClick));
});
</script>
</body>
</html>
<?php include 'footer.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonne Fête !</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f8f0e3;
        }
        .container {
            margin-top: 50px;
        }
        .door {
            width: 200px;
            height: 300px;
            background: url('door.jpg') no-repeat center center;
            background-size: cover;
            margin: 0 auto;
            cursor: pointer;
            transition: transform 1s;
        }
        .door.open {
            transform: rotateY(120deg);
        }
        #message {
            display: none;
            margin-top: 20px;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cliquez sur la porte pour découvrir votre message</h1>
        <div class="door" onclick="openDoor()"></div>
        <p id="message"></p>
    </div>
    <script>
        function openDoor() {
            document.querySelector('.door').classList.add('open');
            setTimeout(() => {
                document.getElementById('message').style.display = 'block';
                document.getElementById('message').innerText = "Bonne fête ! " + (new URLSearchParams(window.location.search)).get("msg");
            }, 1000);
        }
    </script>
</body>
</html>
