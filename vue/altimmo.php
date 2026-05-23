<?php
$pageTitle = "AltImmo - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>AltImmo</h1>

    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/altimmo.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/altimmo.php#contexte">2. Contexte</a></li>
      <li><a href="vue/altimmo.php#fonctionnalites">3. Fonctionnalités prévues</a></li>
      <li><a href="vue/altimmo.php#technologies">4. Technologies utilisées</a></li>
      <li><a href="vue/altimmo.php#competences">5. Compétences développées</a></li>
      <li><a href="vue/altimmo.php#captures">6. Captures d’écran</a></li>
    </ul>

    <section id="objectif">
      <h2>1. Objectif du projet</h2>
      <p>
        AltImmo est un projet de site web pour une agence immobilière. L’objectif était
        de concevoir une interface claire permettant de présenter des biens, de faciliter
        la consultation des annonces et de mettre en valeur les informations importantes
        pour les visiteurs.
      </p>
      <figure class="text-center">
        <img
          src="assets/images/Altimmo/logoAltImmo.png"
          alt="Logo du projet AltImmo"
          class="img-fluid rounded"
          loading="lazy"
        >
      </figure>
    </section>

    <section id="contexte">
      <h2>2. Contexte</h2>
      <p>
        Ce projet a été réalisé dans le cadre de ma formation en BTS SIO option SLAM.
        Il m’a permis de travailler la structuration d’un site vitrine, la présentation
        d’un contenu métier et l’organisation d’une interface adaptée à un besoin professionnel.
      </p>
    </section>

    <section id="fonctionnalites">
      <h2>3. Fonctionnalités prévues</h2>
      <ul>
        <li>Présentation de l’agence et de ses services</li>
        <li>Affichage de biens immobiliers sous forme de cartes</li>
        <li>Organisation des informations essentielles : prix, localisation et description</li>
        <li>Navigation simple entre les différentes pages du site</li>
        <li>Page de contact pour faciliter la prise de renseignements</li>
      </ul>
    </section>

    <section id="technologies">
      <h2>4. Technologies utilisées</h2>
      <ul>
        <li><strong>HTML5</strong> : structure des pages et contenu</li>
        <li><strong>CSS3</strong> : mise en forme et responsive design</li>
        <li><strong>PHP</strong> : organisation des pages et réutilisation des composants</li>
        <li><strong>Bootstrap</strong> : grille responsive et composants d’interface</li>
      </ul>
    </section>

    <section id="competences">
      <h2>5. Compétences développées</h2>
      <ul>
        <li>Analyser un besoin métier simple</li>
        <li>Créer une interface lisible et cohérente</li>
        <li>Structurer un projet web en plusieurs pages</li>
        <li>Adapter l’affichage aux écrans mobiles, tablettes et ordinateurs</li>
        <li>Présenter un projet de manière professionnelle dans un portfolio</li>
      </ul>
    </section>

    <!-- 6. captures -->
    <section id="captures">
      <h2>6. Captures d’écran</h2>
      <p>
        Voici quelques captures d’écran du projet AltImmo afin d’illustrer les principales pages et fonctionnalités.
      </p>

      <div class="row">

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/accueil.png" alt="Accueil AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal1"
                 class="img-fluid rounded capture-img">
            <figcaption>Accueil</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/biens.png" alt="Liste des biens AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal2"
                 class="img-fluid rounded capture-img">
            <figcaption>Liste des biens</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/detailBien.png" alt="Détail d’un bien AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal3"
                 class="img-fluid rounded capture-img">
            <figcaption>Détail d’un bien</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/contact.png" alt="Contact AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal4"
                 class="img-fluid rounded capture-img">
            <figcaption>Contact</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/connexion.png" alt="Connexion AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal5"
                 class="img-fluid rounded capture-img">
            <figcaption>Connexion</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/admin.png" alt="Administration AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal6"
                 class="img-fluid rounded capture-img">
            <figcaption>Administration</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/gestionBiens.png" alt="Gestion des biens AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal7"
                 class="img-fluid rounded capture-img">
            <figcaption>Gestion des biens</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/Altimmo/categories.png" alt="Catégories AltImmo"
                 data-bs-toggle="modal" data-bs-target="#modal8"
                 class="img-fluid rounded capture-img">
            <figcaption>Catégories</figcaption>
          </figure>
        </div>

      </div>
    </section>

    <!-- Modales captures AltImmo -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Accueil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/accueil.png" class="img-fluid rounded" alt="Accueil AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Liste des biens</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/biens.png" class="img-fluid rounded" alt="Liste des biens AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Détail d’un bien</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/detailBien.png" class="img-fluid rounded" alt="Détail d’un bien AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Contact</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/contact.png" class="img-fluid rounded" alt="Contact AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Connexion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/connexion.png" class="img-fluid rounded" alt="Connexion AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Administration</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/admin.png" class="img-fluid rounded" alt="Administration AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal7" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Gestion des biens</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/gestionBiens.png" class="img-fluid rounded" alt="Gestion des biens AltImmo">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal8" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Catégories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/Altimmo/categories.png" class="img-fluid rounded" alt="Catégories AltImmo">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>