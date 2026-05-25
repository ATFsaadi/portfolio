<?php
$pageTitle = "Dev Learn - Projet WordPress";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>Dev Learn</h1>

    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/devlearn.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/devlearn.php#contexte">2. Contexte</a></li>
      <li><a href="vue/devlearn.php#fonctionnalites">3. Fonctionnalités</a></li>
      <li><a href="vue/devlearn.php#technologies">4. Technologies utilisées</a></li>
      <li><a href="vue/devlearn.php#competences">5. Compétences développées</a></li>
      <li><a href="vue/devlearn.php#lien">6. Lien du site</a></li>
      <li><a href="vue/devlearn.php#captures">7. Captures d’écran</a></li>
    </ul>

    <section id="objectif">
      <h2>1. Objectif du projet</h2>
      <p>
        Dev Learn est un site réalisé avec WordPress. L’objectif du projet était de créer
        un site de type scolarité permettant de présenter des cours, des informations sur
        l’école et des contenus liés à la formation.
      </p>
      <p>
        Ce projet m’a permis de découvrir l’utilisation d’un CMS, la personnalisation d’un
        thème, l’organisation des pages et la mise en ligne d’un site web accessible aux utilisateurs.
      </p>
    </section>

    <section id="contexte">
      <h2>2. Contexte</h2>
      <p>
        Ce projet a été réalisé dans le cadre de ma formation en BTS SIO option SLAM.
        Il m’a permis de travailler sur la création d’un site web sans développer entièrement
        le code à la main, en utilisant WordPress comme outil de gestion de contenu.
      </p>
      <p>
        Le site présente des informations sur la formation, des contenus de cours et des liens
        vers différents réseaux ou ressources utiles.
      </p>
    </section>

    <section id="fonctionnalites">
      <h2>3. Fonctionnalités</h2>
      <ul>
        <li>Création d’un site avec WordPress</li>
        <li>Personnalisation d’un thème graphique</li>
        <li>Création et organisation des pages</li>
        <li>Ajout de contenus liés aux cours et à la formation</li>
        <li>Création d’un menu de navigation</li>
        <li>Ajout de médias : images, liens et boutons</li>
        <li>Mise en ligne du site avec un nom de domaine</li>
      </ul>
    </section>

    <section id="technologies">
      <h2>4. Technologies utilisées</h2>
      <ul>
        <li><strong>WordPress</strong> : création et gestion du site web</li>
        <li><strong>CMS</strong> : gestion des pages, articles et contenus</li>
        <li><strong>Thème WordPress</strong> : personnalisation de l’apparence du site</li>
        <li><strong>HTML / CSS</strong> : compréhension et adaptation de certains éléments visuels</li>
        <li><strong>Hébergement web</strong> : mise en ligne du site</li>
        <li><strong>Nom de domaine</strong> : utilisation de l’adresse dev-learn.com</li>
      </ul>
    </section>

    <section id="competences">
      <h2>5. Compétences développées</h2>
      <ul>
        <li>Créer un site web avec un CMS</li>
        <li>Organiser le contenu d’un site de manière claire</li>
        <li>Personnaliser l’apparence d’un site WordPress</li>
        <li>Mettre à disposition un service web aux utilisateurs</li>
        <li>Participer à la valorisation de l’image d’une organisation en ligne</li>
        <li>Déployer un site web accessible depuis un nom de domaine</li>
      </ul>
    </section>

    <section id="lien">
      <h2>6. Lien du site</h2>
      <p>
        Le site est accessible à l’adresse suivante :
      </p>

      <p>
        <a href="https://dev-learn.com/" target="_blank" rel="noopener noreferrer" class="btn btn-projects">
          Voir le site Dev Learn
        </a>
      </p>
    </section>

    <section id="captures">
      <h2>7. Aperçu visuel</h2>
      <p>
        Cette section présente l’identité visuelle du projet Dev Learn.
      </p>

      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/DevLearn/DevLearn.png" alt="Logo Dev Learn"
                 data-bs-toggle="modal" data-bs-target="#modalDevLearn1"
                 class="img-fluid rounded capture-img">
            <figcaption>Identité visuelle</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- Modales captures Dev Learn -->
    <div class="modal fade" id="modalDevLearn1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Dev Learn</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/DevLearn/DevLearn.png" class="img-fluid rounded" alt="Logo Dev Learn">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>
