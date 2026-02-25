<title data-i18n="BTS SIO - Détails">MetaForg</title>
<?php require_once(__DIR__ . "/components/header.php");?>
<div class="container">
    <h1>MetaForge</h1>

    <section>
        <h2>Objectif du projet</h2>
        <p>L’objectif de ce projet est de créer un réseau social dédié aux gamers, nommé
            MetaForge. La plateforme propose des fonctionnalités classiques (profils, amis,
            publications, messagerie) ainsi que des éléments propres à l’univers du jeu
            vidéo : actualités, stories, etc. MetaForge vise à forger des connexions meta
            entre les joueurs, en facilitant les interactions et le partage d'expériences
            gaming.</p>
    </section>

    <section>
        <h2>Base de données</h2>
        <p>La base de données contient actuellement 37 utilisateurs créés pour faciliter
            les tests de la plateforme.</p>
        <p>Les sept premiers utilisateurs ont tous le mot de passe "azerty" afin de
            permettre une connexion rapide lors des démonstrations et des phases de test.</p>
        <p>Des données de test ont également été ajoutées, comme :</p>
        <ul>
            <li>Des messages privés échangés entre différents utilisateurs.</li>
            <li>Des demandes d’amis (envoyées et reçues).</li>
            <li>Des notifications actives (messages et invitations).</li>
            <li>Quelques publications et stories visibles sur la page d’accueil.</li>
        </ul>
        <p>Le développement est encore en cours. Nous avons choisi de nous concentrer
            d’abord sur les fonctionnalités de base pour construire une base solide.</p>
    </section>

    <section>
        <h2>Fonctionnalités actuellement disponibles</h2>

        <h3>Gestion des utilisateurs</h3>
        <p>Inscription et connexion sécurisées (avec test de réinitialisation du mot de
            passe).</p>
        <p>Attribution automatique d’une photo de profil selon l’ID utilisateur (image
            par défaut si aucune image).</p>

        <h3>Navigation</h3>
        <p>Barre de navigation accessible sur toutes les pages.</p>
        <p>Bouton d’accès rapide à la page d’accueil.</p>
        <p>Champ de recherche pour trouver les utilisateurs.</p>

        <h3>Réseau social</h3>
        <p>Page Profil : voir son propre profil et ses publications, accéder à celui
            d’autres utilisateurs, ajouter des amis.</p>
        <p>Gestion des amis : liste d’amis, invitations envoyées et reçues.</p>
        <p>Messagerie privée : système de chat intégré.</p>
        <p>Notifications : pour les nouvelles invitations et messages.</p>
        <p>Menu utilisateur : paramètres du compte, déconnexion.</p>

        <h3>Interface administrateur</h3>
        <p>Accès réservé aux administrateurs.</p>
        <p>Liste des utilisateurs, visualisation de leurs données et de leur niveau.</p>

        <h3>Page d’accueil – Interactions principales</h3>
        <p>Création de stories valables 24h.</p>
        <p>Publications avec texte et image.</p>
        <p>Flux d’actualités gaming.</p>
        <p>Bouton “Jouer en ligne” (fonctionnalité multijoueur à venir).</p>
        <p>Boutons “Événements” et “Groupes” (non encore fonctionnels).</p>
        <p>Hashtags pour organiser les publications.</p>
        <p>Suggestions d’amis basées sur les interactions.</p>
        <p>Bulle de messagerie flottante pour accéder rapidement au chat.</p>
    </section>

    <section>
        <h2>Explications côté client (Front-end)</h2>
        <p>Le front-end de MetaForge est développé en HTML5, CSS3 et JavaScript, avec
            l'utilisation de frameworks comme Bootstrap pour une interface responsive et
            intuitive. Il gère l'affichage des pages, les interactions utilisateur (comme
            les clics sur les boutons, les formulaires d'inscription), et les mises à jour
            dynamiques via AJAX pour charger les notifications ou les messages sans
            recharger la page entière. Cela assure une expérience fluide pour les
            utilisateurs, en se concentrant sur l'aspect visuel et interactif du site.</p>
    </section>

    <section>
        <h2>Explications côté serveur (Back-end)</h2>
        <p>Le back-end est construit en PHP, avec une base de données MySQL pour stocker
            les données des utilisateurs, messages, publications, etc. Il gère les
            opérations sécurisées comme l'authentification, la gestion des sessions, les
            requêtes à la base de données, et les validations (par exemple, vérifier les
            mots de passe ou empêcher les injections SQL). Les fonctionnalités comme l'envoi
            de notifications ou la gestion des amis sont traitées côté serveur pour assurer
            la sécurité et la persistance des données.</p>
    </section>

    <section>
        <h2>Code source</h2>
        <p>Le code source complet du projet est disponible sur GitHub :
            <a href="https://github.com/ATFsaadi/metaforg" target="_blank">Code Source</a>.
            N'hésitez pas à explorer, contribuer ou forker le dépôt !</p>
    </section>

<section>
  <h2>Captures d'écran</h2>
  <p>Voici quelques captures d'écran du site pour illustrer les fonctionnalités :</p>

  <div class="row">
    <!-- Image 1 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/singIn.png" alt="Connexion à MetaForge"
             data-bs-toggle="modal" data-bs-target="#modal1"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Connexion</figcaption>
      </figure>
    </div>

    <!-- Image 2 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/singUp.png" alt="Inscription utilisateur"
             data-bs-toggle="modal" data-bs-target="#modal2"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Inscription</figcaption>
      </figure>
    </div>

    <!-- Image 3 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/mdpOblier.png" alt="Mot de passe oublié"
             data-bs-toggle="modal" data-bs-target="#modal3"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Mot de passe oublié</figcaption>
      </figure>
    </div>

    <!-- Image 4 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/accueil.png" alt="Page d'accueil"
             data-bs-toggle="modal" data-bs-target="#modal4"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Page d'accueil</figcaption>
      </figure>
    </div>

    <!-- Image 5 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/profileConnecté.png" alt="Profil connecté"
             data-bs-toggle="modal" data-bs-target="#modal5"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Profil connecté</figcaption>
      </figure>
    </div>

    <!-- Image 6 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/prifileAmis.png" alt="Profil d’un ami"
             data-bs-toggle="modal" data-bs-target="#modal6"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Profil d’un ami</figcaption>
      </figure>
    </div>

    <!-- Image 7 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/rechercheAmis.png" alt="Recherche d’amis"
             data-bs-toggle="modal" data-bs-target="#modal7"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Recherche d’amis</figcaption>
      </figure>
    </div>

    <!-- Image 8 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/amis.png" alt="Liste d’amis"
             data-bs-toggle="modal" data-bs-target="#modal8"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Liste d’amis</figcaption>
      </figure>
    </div>

    <!-- Image 9 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/notifications.png" alt="Notifications"
             data-bs-toggle="modal" data-bs-target="#modal9"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Notifications</figcaption>
      </figure>
    </div>

    <!-- Image 10 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/demandesReçues.png" alt="Demandes reçues"
             data-bs-toggle="modal" data-bs-target="#modal10"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Demandes reçues</figcaption>
      </figure>
    </div>

    <!-- Image 11 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/suggestionsAmis.png" alt="Suggestions d’amis"
             data-bs-toggle="modal" data-bs-target="#modal11"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Suggestions d’amis</figcaption>
      </figure>
    </div>

    <!-- Image 12 -->
    <div class="col-md-3 mb-4">
      <figure>
        <img src="assets/images/MetaForg/jeuxEnligne.png" alt="Jeux en ligne"
             data-bs-toggle="modal" data-bs-target="#modal12"
             style="width:100%;height:200px;object-fit:cover;border-radius:10px;cursor:pointer;">
        <figcaption class="text-center mt-2">Jeux en ligne</figcaption>
      </figure>
    </div>
  </div>

  <!-- === LES MODALES (une par image) === -->
  <div>
    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header"><h5 id="modalLabel1">Connexion</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
          <div class="modal-body text-center"><img src="assets/images/MetaForg/singIn.png" class="img-fluid rounded"></div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="modal2" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Inscription</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/singUp.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 3 -->
    <div class="modal fade" id="modal3" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Mot de passe oublié</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/mdpOblier.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 4 -->
    <div class="modal fade" id="modal4" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Page d'accueil</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/accueil.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 5 -->
    <div class="modal fade" id="modal5" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Profil connecté</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/profileConnecté.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 6 -->
    <div class="modal fade" id="modal6" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Profil d’un ami</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/prifileAmis.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 7 -->
    <div class="modal fade" id="modal7" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Recherche d’amis</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/rechercheAmis.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 8 -->
    <div class="modal fade" id="modal8" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Liste d’amis</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/amis.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 9 -->
    <div class="modal fade" id="modal9" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Notifications</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/notifications.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 10 -->
    <div class="modal fade" id="modal10" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Demandes reçues</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/demandesReçues.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 11 -->
    <div class="modal fade" id="modal11" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Suggestions d’amis</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/suggestionsAmis.png" class="img-fluid rounded"></div></div></div></div>

    <!-- Modal 12 -->
    <div class="modal fade" id="modal12" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5>Jeux en ligne</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body text-center"><img src="assets/images/MetaForg/jeuxEnligne.png" class="img-fluid rounded"></div></div></div></div>
  </div>
</section>



</section>
</div>
<?php require_once(__DIR__ . "/components/footer.php"); ?>