<?php
$pageTitle = "SnakeGame - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>SnakeGame</h1>

    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/snakGame.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/snakGame.php#contexte">2. Contexte</a></li>
      <li><a href="vue/snakGame.php#fonctionnement">3. Fonctionnement</a></li>
      <li><a href="vue/snakGame.php#technologies">4. Technologies utilisées</a></li>
      <li><a href="vue/snakGame.php#competences">5. Compétences développées</a></li>
    </ul>

    <section id="objectif">
      <h2>1. Objectif du projet</h2>
      <p>
        SnakeGame est un projet de programmation en langage C basé sur le jeu classique
        du serpent. L’objectif était de comprendre le fonctionnement d’un programme en
        console, de modifier un code existant et d’adapter certaines parties pour améliorer
        le comportement du jeu.
      </p>
      <figure class="text-center">
        <img
          src="assets/images/SnakGame/snake-game.webp"
          alt="Illustration du projet SnakeGame"
          class="img-fluid rounded"
          loading="lazy"
        >
      </figure>
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
  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>
