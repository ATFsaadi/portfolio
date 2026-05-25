<?php
$pageTitle = "SnakeGame - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>SnakeGame</h1>

    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/snakeGame.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/snakeGame.php#contexte">2. Contexte</a></li>
      <li><a href="vue/snakeGame.php#fonctionnement">3. Fonctionnement</a></li>
      <li><a href="vue/snakeGame.php#technologies">4. Technologies utilisées</a></li>
      <li><a href="vue/snakeGame.php#competences">5. Compétences développées</a></li>
      <li><a href="vue/snakeGame.php#captures">6. Captures d’écran</a></li>
    </ul>

    <section id="objectif">
      <h2>1. Objectif du projet</h2>
      <p>
        SnakeGame est un projet de programmation en langage C basé sur le jeu classique
        du serpent. L’objectif était de comprendre le fonctionnement d’un programme en
        console, de modifier un code existant et d’adapter certaines parties pour améliorer
        le comportement du jeu.
      </p>
    </section>

    <section id="contexte">
      <h2>2. Contexte</h2>
      <p>
        Ce projet a été réalisé dans le cadre de ma formation en BTS SIO option SLAM.
        Il m’a permis de travailler la logique algorithmique, la lecture d’un code source
        et l’adaptation d’un programme existant.
      </p>
    </section>

    <section id="fonctionnement">
      <h2>3. Fonctionnement</h2>
      <ul>
        <li>Déplacement du serpent dans une zone de jeu</li>
        <li>Gestion des collisions avec les murs et le corps du serpent</li>
        <li>Augmentation du score lorsque le serpent récupère un élément</li>
        <li>Fin de partie lorsque les conditions de collision sont remplies</li>
      </ul>
    </section>

    <section id="technologies">
      <h2>4. Technologies utilisées</h2>
      <ul>
        <li><strong>C</strong> : langage principal du projet</li>
        <li><strong>conio.h</strong> : gestion de certaines interactions clavier en console</li>
        <li><strong>Logique algorithmique</strong> : conditions, boucles, coordonnées et score</li>
      </ul>
    </section>

    <section id="competences">
      <h2>5. Compétences développées</h2>
      <ul>
        <li>Lire et comprendre un programme existant</li>
        <li>Identifier les variables et les fonctions principales</li>
        <li>Modifier un comportement sans casser la logique globale</li>
        <li>Tester un programme en console et corriger les erreurs</li>
        <li>Renforcer les bases en algorithmique et en programmation structurée</li>
      </ul>
    </section>

    <!-- 6. captures -->
    <section id="captures">
      <h2>6. Captures d’écran</h2>
      <p>
        Voici quelques captures d’écran du projet SnakeGame afin d’illustrer le menu,
        le choix de la vitesse et l’affichage du jeu en console.
      </p>

      <div class="row">

        <div class="col-md-4 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/SnakeGame/menu.png" alt="Menu principal SnakeGame"
                 data-bs-toggle="modal" data-bs-target="#modalSnake1"
                 class="img-fluid rounded capture-img">
            <figcaption>Menu principal</figcaption>
          </figure>
        </div>

        <div class="col-md-4 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/SnakeGame/vitesse.png" alt="Choix de la vitesse SnakeGame"
                 data-bs-toggle="modal" data-bs-target="#modalSnake2"
                 class="img-fluid rounded capture-img">
            <figcaption>Choix de la vitesse</figcaption>
          </figure>
        </div>

        <div class="col-md-4 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/SnakeGame/jeu.png" alt="Partie en cours SnakeGame"
                 data-bs-toggle="modal" data-bs-target="#modalSnake3"
                 class="img-fluid rounded capture-img">
            <figcaption>Partie en cours</figcaption>
          </figure>
        </div>

      </div>
    </section>

    <!-- Modales captures SnakeGame -->
    <div class="modal fade" id="modalSnake1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Menu principal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/SnakeGame/menu.png" class="img-fluid rounded" alt="Menu principal SnakeGame">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalSnake2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Choix de la vitesse</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/SnakeGame/vitesse.png" class="img-fluid rounded" alt="Choix de la vitesse SnakeGame">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalSnake3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Partie en cours</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/SnakeGame/jeu.png" class="img-fluid rounded" alt="Partie en cours SnakeGame">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>