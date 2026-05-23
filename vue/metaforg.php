<?php
$pageTitle = "MetaForg - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>MetaForg</h1>

    <!-- sommaire -->
    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/metaforg.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/metaforg.php#contexte">2. Contexte</a></li>
      <li><a href="vue/metaforg.php#bdd">3. Base de données</a></li>
      <li><a href="vue/metaforg.php#fonctionnalites">4. Fonctionnalités disponibles</a></li>
      <li><a href="vue/metaforg.php#frontend">5. Explications côté client</a></li>
      <li><a href="vue/metaforg.php#backend">6. Explications côté serveur</a></li>
      <li><a href="vue/metaforg.php#securite">7. Sécurité et organisation</a></li>
      <li><a href="vue/metaforg.php#ameliorations">8. Améliorations possibles</a></li>
      <li><a href="vue/metaforg.php#code">9. Code source</a></li>
      <li><a href="vue/metaforg.php#captures">10. Captures d’écran</a></li>
    </ul>

    <!-- 1. objectif -->
    <h2 id="objectif">1. Objectif du projet</h2>
    <p>
      MetaForg est un projet de réseau social orienté vers l’univers du gaming.
      Son objectif est de permettre aux utilisateurs de créer un profil, interagir
      avec d’autres joueurs, publier du contenu, gérer des relations d’amitié
      et communiquer via une messagerie intégrée.
    </p>
    <p>
      L’idée du projet est de proposer une plateforme inspirée des réseaux sociaux classiques,
      tout en y ajoutant des éléments liés au jeu vidéo, comme les actualités gaming,
      les stories, les suggestions d’amis et de futures fonctionnalités communautaires.
    </p>

    <!-- 2. contexte -->
    <h2 id="contexte">2. Contexte</h2>
    <p>
      Ce projet a été réalisé dans le cadre de ma formation en <strong>BTS SIO option SLAM</strong>.
      Il m’a permis de mettre en pratique plusieurs notions abordées en cours, notamment
      le développement web dynamique, la gestion des bases de données, la programmation PHP,
      la structuration d’une application et la gestion des interactions entre utilisateurs.
    </p>
    <p>
      MetaForg constitue un projet plus riche fonctionnellement qu’un simple site vitrine,
      car il intègre des échanges entre membres, une logique de réseau social et une gestion
      de données plus avancée.
    </p>

    <!-- 3. base de données -->
    <h2 id="bdd">3. Base de données</h2>
    <p>
      La base de données regroupe l’ensemble des informations nécessaires au fonctionnement
      de la plateforme : utilisateurs, profils, publications, messages, notifications,
      invitations d’amis et autres contenus liés aux interactions sociales.
    </p>
    <p>
      Pour faciliter les phases de test et de démonstration, la base contient plusieurs comptes utilisateurs
      ainsi que des données préremplies permettant de visualiser le comportement de l’application.
    </p>
    <ul>
      <li>Utilisateurs de test créés pour simuler une plateforme active</li>
      <li>Messages privés échangés entre différents comptes</li>
      <li>Demandes d’amis envoyées et reçues</li>
      <li>Notifications liées aux messages et aux invitations</li>
      <li>Publications et stories affichées sur la page d’accueil</li>
    </ul>
    <p>
      Le projet étant encore en évolution, l’objectif a été de construire en priorité
      une base fonctionnelle solide avant d’ajouter des fonctionnalités plus avancées.
    </p>

    <!-- 4. fonctionnalités -->
    <h2 id="fonctionnalites">4. Fonctionnalités disponibles</h2>

    <h3>Gestion des utilisateurs</h3>
    <ul>
      <li>Inscription et connexion des utilisateurs</li>
      <li>Gestion de l’authentification</li>
      <li>Réinitialisation du mot de passe</li>
      <li>Photo de profil attribuée automatiquement si aucune image n’est définie</li>
    </ul>

    <h3>Navigation</h3>
    <ul>
      <li>Barre de navigation accessible sur les différentes pages</li>
      <li>Accès rapide à la page d’accueil</li>
      <li>Recherche d’utilisateurs</li>
    </ul>

    <h3>Fonctionnalités sociales</h3>
    <ul>
      <li>Consultation de son profil et de celui d’autres utilisateurs</li>
      <li>Ajout et gestion des amis</li>
      <li>Liste d’amis, invitations envoyées et reçues</li>
      <li>Messagerie privée intégrée</li>
      <li>Notifications pour les messages et les demandes d’amis</li>
      <li>Publications et stories visibles sur la page d’accueil</li>
      <li>Suggestions d’amis basées sur les interactions</li>
    </ul>

    <h3>Fonctionnalités complémentaires</h3>
    <ul>
      <li>Flux d’actualités gaming</li>
      <li>Bulle de messagerie flottante pour accéder rapidement au chat</li>
      <li>Présence de zones prévues pour les groupes, événements et jeux en ligne</li>
    </ul>

    <h3>Interface administrateur</h3>
    <ul>
      <li>Accès réservé aux administrateurs</li>
      <li>Consultation des utilisateurs enregistrés</li>
      <li>Visualisation de certaines données liées aux comptes</li>
    </ul>

    <!-- 5. front-end -->
    <h2 id="frontend">5. Explications côté client (Front-end)</h2>
    <p>
      Le front-end de MetaForg a été développé en <strong>HTML5, CSS3 et JavaScript</strong>,
      avec l’utilisation de <strong>Bootstrap</strong> pour faciliter la mise en page responsive.
      Il gère l’affichage des pages, les formulaires, les composants visuels et les interactions utilisateur.
    </p>
    <p>
      Certaines fonctionnalités dynamiques, comme l’actualisation des notifications ou des messages,
      peuvent être traitées sans rechargement complet de la page afin d’améliorer l’expérience utilisateur.
    </p>

    <!-- 6. back-end -->
    <h2 id="backend">6. Explications côté serveur (Back-end)</h2>
    <p>
      Le back-end a été développé en <strong>PHP</strong> avec une base de données <strong>MySQL</strong>.
      Il assure la gestion des comptes utilisateurs, de l’authentification, des sessions,
      des publications, des relations d’amitié, des messages et des notifications.
    </p>
    <p>
      Le serveur gère également les validations, les traitements de formulaires et les accès aux données
      via des requêtes SQL, tout en veillant à maintenir la cohérence des informations stockées.
    </p>

    <!-- 7. sécurité -->
    <h2 id="securite">7. Sécurité et organisation</h2>
    <p>
      Ce projet m’a également permis de travailler plusieurs points importants du BTS SIO SLAM :
    </p>
    <ul>
      <li>Gestion des sessions utilisateurs</li>
      <li>Organisation des données dans une base relationnelle</li>
      <li>Traitement des formulaires côté serveur</li>
      <li>Contrôle des accès selon les profils</li>
      <li>Structuration d’un projet web multi-pages</li>
    </ul>
    <p>
      Une attention particulière a été portée à la logique de navigation et à la séparation
      entre les fonctionnalités accessibles aux utilisateurs standards et celles accessibles
      aux administrateurs.
    </p>

    <!-- 8. améliorations -->
    <h2 id="ameliorations">8. Améliorations possibles</h2>
    <ul>
      <li>Ajout d’un système de groupes entièrement fonctionnel</li>
      <li>Mise en place d’événements communautaires</li>
      <li>Développement d’une fonctionnalité multijoueur ou de salon de jeu</li>
      <li>Renforcement de la sécurité côté serveur</li>
      <li>Amélioration de l’interface utilisateur et de l’ergonomie globale</li>
      <li>Ajout de paramètres de personnalisation avancés pour les profils</li>
    </ul>

    <!-- 9. code source -->
    <h2 id="code">9. Code source</h2>
    <p>
      Le code source complet du projet est disponible sur GitHub :
      <a href="https://github.com/ATFsaadi/metaforg" target="_blank" rel="noopener noreferrer">Voir le code source</a>.
    </p>

    <h2 id="captures">10. Captures d’écran</h2>
    <p>
      Voici quelques captures d’écran du projet afin d’illustrer les principales fonctionnalités.
    </p>

    <div class="row">

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/singIn.png" alt="Connexion à MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal1"
               class="img-fluid rounded capture-img">
          <figcaption>Connexion</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/singUp.png" alt="Inscription utilisateur MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal2"
               class="img-fluid rounded capture-img">
          <figcaption>Inscription</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/mdpOblier.png" alt="Mot de passe oublié MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal3"
               class="img-fluid rounded capture-img">
          <figcaption>Mot de passe oublié</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/accueil.png" alt="Page d’accueil MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal4"
               class="img-fluid rounded capture-img">
          <figcaption>Accueil</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/profileConnecté.png" alt="Profil connecté MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal5"
               class="img-fluid rounded capture-img">
          <figcaption>Profil connecté</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/prifileAmis.png" alt="Profil d’un ami MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal6"
               class="img-fluid rounded capture-img">
          <figcaption>Profil d’un ami</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/rechercheAmis.png" alt="Recherche d’amis MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal7"
               class="img-fluid rounded capture-img">
          <figcaption>Recherche d’amis</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/amis.png" alt="Liste d’amis MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal8"
               class="img-fluid rounded capture-img">
          <figcaption>Liste d’amis</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/notifications.png" alt="Notifications MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal9"
               class="img-fluid rounded capture-img">
          <figcaption>Notifications</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/demandesReçues.png" alt="Demandes reçues MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal10"
               class="img-fluid rounded capture-img">
          <figcaption>Demandes reçues</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/suggestionsAmis.png" alt="Suggestions d’amis MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal11"
               class="img-fluid rounded capture-img">
          <figcaption>Suggestions d’amis</figcaption>
        </figure>
      </div>

      <div class="col-md-3 mb-4">
        <figure class="capture-figure">
          <img src="assets/images/MetaForg/jeuxEnligne.png" alt="Jeux en ligne MetaForg"
               data-bs-toggle="modal" data-bs-target="#modal12"
               class="img-fluid rounded capture-img">
          <figcaption>Jeux en ligne</figcaption>
        </figure>
      </div>

    </div>

    <!-- Modales -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Connexion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/singIn.png" class="img-fluid rounded" alt="Connexion MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Inscription</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/singUp.png" class="img-fluid rounded" alt="Inscription MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Mot de passe oublié</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/mdpOblier.png" class="img-fluid rounded" alt="Mot de passe oublié MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Accueil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/accueil.png" class="img-fluid rounded" alt="Accueil MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Profil connecté</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/profileConnecté.png" class="img-fluid rounded" alt="Profil connecté MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Profil d’un ami</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/prifileAmis.png" class="img-fluid rounded" alt="Profil d’un ami MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal7" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Recherche d’amis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/rechercheAmis.png" class="img-fluid rounded" alt="Recherche d’amis MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal8" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Liste d’amis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/amis.png" class="img-fluid rounded" alt="Liste d’amis MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal9" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Notifications</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/notifications.png" class="img-fluid rounded" alt="Notifications MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal10" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Demandes reçues</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/demandesReçues.png" class="img-fluid rounded" alt="Demandes reçues MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal11" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Suggestions d’amis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/suggestionsAmis.png" class="img-fluid rounded" alt="Suggestions d’amis MetaForg">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal12" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Jeux en ligne</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/images/MetaForg/jeuxEnligne.png" class="img-fluid rounded" alt="Jeux en ligne MetaForg">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>