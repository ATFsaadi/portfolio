<?php
$pageTitle = "ButterFly PHP - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>ButterFly</h1>

    <!-- sommaire -->
    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/butterfly-php.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/butterfly-php.php#contexte">2. Contexte</a></li>
      <li><a href="vue/butterfly-php.php#bdd">3. Base de données</a></li>
      <li><a href="vue/butterfly-php.php#architecture">4. Architecture et méthodes</a></li>
      <li><a href="vue/butterfly-php.php#fonctionnalites">5. Fonctionnalités</a></li>
      <li><a href="vue/butterfly-php.php#frontend">6. Front-end</a></li>
      <li><a href="vue/butterfly-php.php#backend">7. Back-end</a></li>
      <li><a href="vue/butterfly-php.php#difficultes">8. Difficultés rencontrées</a></li>
      <li><a href="vue/butterfly-php.php#ameliorations">9. Améliorations possibles</a></li>
      <li><a href="vue/butterfly-php.php#captures">10. Captures d’écran</a></li>
    </ul>

    <!-- 1. objectif -->
    <h2 id="objectif">1. Objectif du projet</h2>
    <p>
      ButterFly est une application web inspirée du fonctionnement d’une agence de voyage.
      Son objectif est de permettre à un utilisateur de consulter des destinations et des offres
      de séjour, puis d’effectuer une réservation à travers une interface claire et structurée.
    </p>
    <p>
      Le projet comporte également un espace d’administration permettant de gérer le contenu
      du site, notamment les destinations, les voyages et les réservations.
    </p>

    <!-- 2. contexte -->
    <h2 id="contexte">2. Contexte</h2>
    <p>
      Ce projet a été réalisé dans le cadre de ma formation en <strong>BTS SIO option SLAM</strong>.
      Il m’a permis de mettre en pratique plusieurs compétences vues en cours, notamment la conception
      de bases de données, l’architecture MVC, le développement en PHP/MySQL, ainsi que l’organisation
      d’un projet web complet.
    </p>
    <p>
      ButterFly s’inscrit dans une logique de développement d’application métier, avec une séparation
      entre les fonctionnalités utilisateur et les fonctionnalités administrateur.
    </p>

    <!-- 3. base de données -->
    <h2 id="bdd">3. Base de données</h2>
    <p>
      La base de données a été conçue pour stocker les informations nécessaires au fonctionnement
      de l’application : utilisateurs, destinations, voyages, offres et réservations.
    </p>
    <ul>
      <li>Gestion des utilisateurs et de leurs rôles</li>
      <li>Stockage des destinations et des voyages disponibles</li>
      <li>Enregistrement des réservations</li>
      <li>Utilisation des clés primaires et étrangères pour assurer la cohérence des données</li>
    </ul>
    <p>
      La modélisation s’appuie sur les notions étudiées en BTS, notamment l’approche MERISE :
      identification des entités, associations, cardinalités, puis transformation en modèle relationnel.
    </p>

    <!-- 4. architecture -->
    <h2 id="architecture">4. Architecture et méthodes utilisées</h2>

    <h3>Architecture MVC</h3>
    <p>
      Le projet suit une organisation de type <strong>MVC</strong> (Modèle, Vue, Contrôleur),
      ce qui permet de structurer le code de manière claire et maintenable.
    </p>
    <ul>
      <li><strong>Modèle :</strong> gestion des données et des requêtes SQL</li>
      <li><strong>Vue :</strong> affichage des pages et composants d’interface</li>
      <li><strong>Contrôleur :</strong> traitement de la logique métier, des actions utilisateur et de la navigation</li>
    </ul>

    <h3>Programmation orientée objet</h3>
    <p>
      Le projet utilise la programmation orientée objet afin de mieux organiser le code,
      de faciliter la réutilisation et d’améliorer la maintenance.
    </p>

    <h3>Sécurité</h3>
    <ul>
      <li>Validation des données côté serveur</li>
      <li>Utilisation de requêtes préparées pour limiter les risques d’injection SQL</li>
      <li>Gestion des sessions pour l’authentification et les droits d’accès</li>
    </ul>

    <!-- 5. fonctionnalités -->
    <h2 id="fonctionnalites">5. Fonctionnalités disponibles</h2>

    <h3>Côté utilisateur</h3>
    <ul>
      <li>Consultation des destinations disponibles</li>
      <li>Affichage des détails d’un voyage ou d’une offre</li>
      <li>Réservation d’un séjour</li>
      <li>Accès à un espace utilisateur selon les fonctionnalités implémentées</li>
    </ul>

    <h3>Côté administrateur</h3>
    <ul>
      <li>Gestion des destinations</li>
      <li>Gestion des voyages et des offres</li>
      <li>Suivi des réservations</li>
      <li>Organisation du contenu du site</li>
    </ul>

    <!-- 6. front-end -->
    <h2 id="frontend">6. Explications côté client (Front-end)</h2>
    <p>
      L’interface utilisateur a été développée en <strong>HTML, CSS et JavaScript</strong>,
      avec l’appui de <strong>Bootstrap</strong> pour faciliter la mise en page responsive.
      Le front-end a pour objectif de proposer une navigation simple, lisible et agréable.
    </p>
    <p>
      Les pages permettent d’afficher dynamiquement les informations provenant de la base de données,
      comme les destinations, les offres ou les réservations.
    </p>

    <!-- 7. back-end -->
    <h2 id="backend">7. Explications côté serveur (Back-end)</h2>
    <p>
      Le back-end a été développé en <strong>PHP</strong> avec une base de données <strong>MySQL</strong>.
      Il gère les traitements liés à l’authentification, à la réservation, à l’administration du contenu
      et à l’accès sécurisé aux données.
    </p>
    <p>
      L’ensemble des traitements serveur permet de relier l’interface utilisateur aux données stockées,
      tout en assurant la cohérence des informations et un minimum de sécurité.
    </p>

    <!-- 8. difficultés -->
    <h2 id="difficultes">8. Difficultés rencontrées</h2>
    <ul>
      <li>Mise en place d’une architecture MVC cohérente</li>
      <li>Gestion des rôles utilisateur / administrateur</li>
      <li>Conception de la base de données et des relations entre tables</li>
      <li>Traitement des formulaires et affichage dynamique des données</li>
    </ul>

    <!-- 9. améliorations -->
    <h2 id="ameliorations">9. Améliorations possibles</h2>
    <ul>
      <li>Ajout d’un système de paiement en ligne</li>
      <li>Historique complet des réservations côté utilisateur</li>
      <li>Mise en place d’une sécurité plus avancée (token CSRF, contrôle d’accès plus fin)</li>
      <li>Amélioration de l’interface utilisateur et de l’accessibilité</li>
      <li>Ajout de filtres de recherche pour les destinations et les offres</li>
    </ul>

    <!-- 10. captures -->
<h2 id="captures">10. Captures d’écran</h2>
<p>
  Voici quelques captures d’écran du projet ButterFly afin d’illustrer les principales fonctionnalités.
</p>

<div class="row">

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/accueil.png" alt="Accueil ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal1"
           class="img-fluid rounded capture-img">
      <figcaption>Accueil</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/accueil-coup.png" alt="Coups de cœur ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal2"
           class="img-fluid rounded capture-img">
      <figcaption>Coups de cœur</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/accueil-offre.png" alt="Offres accueil ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal3"
           class="img-fluid rounded capture-img">
      <figcaption>Offres accueil</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/destination.png" alt="Destinations ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal4"
           class="img-fluid rounded capture-img">
      <figcaption>Destinations</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/voyage.png" alt="Voyages ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal5"
           class="img-fluid rounded capture-img">
      <figcaption>Voyages</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/detail.png" alt="Détail d’un voyage ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal6"
           class="img-fluid rounded capture-img">
      <figcaption>Détail voyage</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/offre.png" alt="Offres ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal7"
           class="img-fluid rounded capture-img">
      <figcaption>Offres</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/reservation.png" alt="Réservation ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal8"
           class="img-fluid rounded capture-img">
      <figcaption>Réservation</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/connexion.png" alt="Connexion ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal9"
           class="img-fluid rounded capture-img">
      <figcaption>Connexion</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/inscription.png" alt="Inscription ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal10"
           class="img-fluid rounded capture-img">
      <figcaption>Inscription</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/gestion.png" alt="Gestion administrateur ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal11"
           class="img-fluid rounded capture-img">
      <figcaption>Gestion admin</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/gestion-reservation.png" alt="Gestion des réservations ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal12"
           class="img-fluid rounded capture-img">
      <figcaption>Gestion réservations</figcaption>
    </figure>
  </div>

  <div class="col-md-3 mb-4">
    <figure class="capture-figure">
      <img src="assets/images/ButterFly/navbare-admin.png" alt="Navbar administrateur ButterFly"
           data-bs-toggle="modal" data-bs-target="#modal13"
           class="img-fluid rounded capture-img">
      <figcaption>Navbar admin</figcaption>
    </figure>
  </div>

</div>

<!-- Modales captures ButterFly -->
<div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Accueil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/accueil.png" class="img-fluid rounded" alt="Accueil ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Coups de cœur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/accueil-coup.png" class="img-fluid rounded" alt="Coups de cœur ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Offres accueil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/accueil-offre.png" class="img-fluid rounded" alt="Offres accueil ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Destinations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/destination.png" class="img-fluid rounded" alt="Destinations ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Voyages</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/voyage.png" class="img-fluid rounded" alt="Voyages ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Détail voyage</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/detail.png" class="img-fluid rounded" alt="Détail voyage ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal7" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Offres</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/offre.png" class="img-fluid rounded" alt="Offres ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal8" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Réservation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/reservation.png" class="img-fluid rounded" alt="Réservation ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal9" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/connexion.png" class="img-fluid rounded" alt="Connexion ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal10" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/inscription.png" class="img-fluid rounded" alt="Inscription ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal11" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gestion admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/gestion.png" class="img-fluid rounded" alt="Gestion administrateur ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal12" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gestion réservations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/gestion-reservation.png" class="img-fluid rounded" alt="Gestion des réservations ButterFly">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal13" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Navbar admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-center">
        <img src="assets/images/ButterFly/navbare-admin.png" class="img-fluid rounded" alt="Navbar administrateur ButterFly">
      </div>
    </div>
  </div>
</div>
  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>
