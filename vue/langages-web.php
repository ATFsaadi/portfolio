<?php
$pageTitle = "Langages du Web - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>Langages du Web</h1>

    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/langages-web.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/langages-web.php#contraintes">2. Contraintes</a></li>
      <li><a href="vue/langages-web.php#structure">3. Structure du site</a></li>
      <li><a href="vue/langages-web.php#technologies">4. Technologies utilisées</a></li>
      <li><a href="vue/langages-web.php#competences">5. Compétences développées</a></li>
      <li><a href="vue/langages-web.php#captures">6. Captures d’écran</a></li>
    </ul>

    <section id="objectif">
      <h2>1. Objectif du projet</h2>
      <p>
        L’objectif de ce projet était de concevoir un site web pédagogique présentant
        les principaux langages utilisés dans le développement web : HTML, CSS, PHP
        et JavaScript. Chaque langage disposait d’une page dédiée afin d’expliquer
        son rôle, son utilité et sa place dans la création d’un site.
      </p>
      <figure class="text-center">
        <img
          src="assets/images/langages-web.png"
          alt="Illustration du projet Langages du Web"
          class="img-fluid rounded"
          loading="lazy"
        >
      </figure>
    </section>

    <section id="contraintes">
      <h2>2. Contraintes du projet</h2>
      <ul>
        <li>Créer une page dédiée pour chaque langage présenté</li>
        <li>Rédiger un paragraphe clair de définition pour chaque technologie</li>
        <li>Intégrer des médias pertinents pour enrichir la présentation</li>
        <li>Ajouter des liens utiles vers des ressources d’apprentissage</li>
        <li>Respecter une réalisation en HTML et CSS uniquement</li>
      </ul>
    </section>

    <section id="structure">
      <h2>3. Structure du site</h2>
      <p>
        Le site a été organisé de manière simple et homogène, avec une page d’accueil
        puis une page par langage. Cette structure permet une navigation claire et une
        lecture progressive du contenu.
      </p>
      <ul>
        <li>Page d’accueil de présentation</li>
        <li>Page HTML</li>
        <li>Page CSS</li>
        <li>Page PHP</li>
        <li>Page JavaScript</li>
      </ul>
    </section>

    <section id="technologies">
      <h2>4. Technologies utilisées</h2>
      <p>Le projet a été réalisé avec les technologies suivantes :</p>
      <ul>
        <li><strong>HTML5</strong> : structure sémantique des pages et organisation du contenu</li>
        <li><strong>CSS3</strong> : mise en forme, responsive design et cohérence visuelle</li>
      </ul>
    </section>

    <section id="competences">
      <h2>5. Compétences développées</h2>
      <ul>
        <li>Structurer un site web multi-pages</li>
        <li>Organiser le contenu de manière claire et pédagogique</li>
        <li>Créer une mise en page responsive en CSS</li>
        <li>Respecter un cahier des charges précis</li>
        <li>Améliorer la lisibilité et l’accessibilité d’un contenu web</li>
      </ul>
    </section>

    <!-- 6. captures -->
    <section id="captures">
      <h2>6. Captures d’écran</h2>
      <p>
        Voici quelques captures d’écran du projet Langages du Web afin d’illustrer les différentes pages réalisées.
      </p>

      <div class="row">

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/LangagesWeb/accueil.png" alt="Accueil Langages du Web"
                 data-bs-toggle="modal" data-bs-target="#modal1"
                 class="img-fluid rounded capture-img">
            <figcaption>Accueil</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/LangagesWeb/html.png" alt="Page HTML"
                 data-bs-toggle="modal" data-bs-target="#modal2"
                 class="img-fluid rounded capture-img">
            <figcaption>HTML</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/LangagesWeb/css.png" alt="Page CSS"
                 data-bs-toggle="modal" data-bs-target="#modal3"
                 class="img-fluid rounded capture-img">
            <figcaption>CSS</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/LangagesWeb/php.png" alt="Page PHP"
                 data-bs-toggle="modal" data-bs-target="#modal4"
                 class="img-fluid rounded capture-img">
            <figcaption>PHP</figcaption>
          </figure>
        </div>

        <div class="col-md-3 mb-4">
          <figure class="capture-figure">
            <img src="assets/images/LangagesWeb/javascript.png" alt="Page JavaScript"
                 data-bs-toggle="modal" data-bs-target="#modal5"
                 class="img-fluid rounded capture-img">
            <figcaption>JavaScript</figcaption>
          </figure>
        </div>

      </div>
    </section>

    <!-- Modales captures Langages du Web -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Accueil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/LangagesWeb/accueil.png" class="img-fluid rounded" alt="Accueil Langages du Web">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">HTML</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/LangagesWeb/html.png" class="img-fluid rounded" alt="Page HTML">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">CSS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/LangagesWeb/css.png" class="img-fluid rounded" alt="Page CSS">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">PHP</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/LangagesWeb/php.png" class="img-fluid rounded" alt="Page PHP">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">JavaScript</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/LangagesWeb/javascript.png" class="img-fluid rounded" alt="Page JavaScript">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>