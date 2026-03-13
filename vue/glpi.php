<?php
$pageTitle = "GLPI - Installation et gestion des tickets";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">

    <h1>GLPI</h1>
    <p>
      Cette page présente l’installation, la configuration et une démonstration de gestion des tickets
      avec GLPI dans le cadre de ma formation en BTS SIO.
    </p>

    <!-- Sommaire -->
    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/glpi.php#etape-1">1. Introduction à GLPI</a></li>
      <li><a href="vue/glpi.php#etape-2">2. Pré-requis pour l’installation</a></li>
      <li><a href="vue/glpi.php#etape-3">3. Préparation du serveur Debian 12</a></li>
      <li><a href="vue/glpi.php#etape-4">4. Installation du socle LAMP</a></li>
      <li><a href="vue/glpi.php#etape-5">5. Configuration sécurisée de MariaDB</a></li>
      <li><a href="vue/glpi.php#etape-6">6. Téléchargement et préparation de GLPI</a></li>
      <li><a href="vue/glpi.php#etape-7">7. Configuration d’Apache avec VirtualHost</a></li>
      <li><a href="vue/glpi.php#etape-8">8. Configuration de PHP-FPM et des extensions</a></li>
      <li><a href="vue/glpi.php#etape-9">9. Installation via le navigateur</a></li>
      <li><a href="vue/glpi.php#etape-10">10. Première connexion et sécurité</a></li>
      <li><a href="vue/glpi.php#etape-11">11. Bonnes pratiques post-installation</a></li>
      <li><a href="vue/glpi.php#etape-12">12. Conclusion</a></li>
      <li><a href="vue/glpi.php#partie-2">13. Démonstration : connexion et gestion d’un ticket</a></li>
      <li><a href="vue/glpi.php#demo-1">13.1 Accès à l’interface GLPI</a></li>
      <li><a href="vue/glpi.php#demo-2">13.2 Connexion utilisateur</a></li>
      <li><a href="vue/glpi.php#demo-3">13.3 Création d’un ticket</a></li>
      <li><a href="vue/glpi.php#demo-4">13.4 Traitement du ticket par l’administrateur</a></li>
      <li><a href="vue/glpi.php#demo-5">13.5 Résolution et clôture</a></li>
    </ul>

    <!-- 1. Introduction -->
    <h2 id="etape-1">1. Introduction à GLPI</h2>
    <p>
      GLPI (Gestionnaire Libre de Parc Informatique) est une solution open source permettant de gérer
      un parc informatique, les équipements, les utilisateurs, les contrats, ainsi que les tickets
      d’assistance. Cet outil est largement utilisé dans les organisations pour centraliser les demandes
      de support et améliorer le suivi des interventions.
    </p>
    <p>
      Dans ce projet, l’objectif est de mettre en place GLPI sur une machine virtuelle Debian 12,
      puis de démontrer son fonctionnement à travers la création et le traitement d’un ticket.
    </p>

    <div class="video-container">
      <h3>Présentation de GLPI</h3>
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/oaa-OIDGQBM?si=ELmBVk2gwxB5lXj8"
        title="Présentation de GLPI"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>
    </div>

    <!-- 2. Pré-requis -->
    <h2 id="etape-2">2. Pré-requis pour l’installation</h2>
    <p>
      Avant d’installer GLPI, il est nécessaire de préparer un environnement serveur compatible.
      GLPI repose sur un serveur web, PHP et une base de données. Dans ce projet, l’installation
      est réalisée sur une architecture de type LAMP.
    </p>
    <p>GLPI peut fonctionner avec plusieurs serveurs web, par exemple :</p>
    <ul>
      <li>Apache2</li>
      <li>Nginx</li>
      <li>Lighttpd</li>
      <li>IIS</li>
    </ul>

    <h3>Versions utilisées</h3>
    <ul>
      <li><strong>Debian :</strong> Debian 12</li>
      <li><strong>Serveur web :</strong> Apache2</li>
      <li><strong>Base de données :</strong> MariaDB</li>
      <li><strong>PHP :</strong> version compatible avec GLPI et les extensions nécessaires</li>
    </ul>

    <p>
      Plusieurs extensions PHP sont également requises pour garantir le bon fonctionnement de l’application.
    </p>

    <p>
      Pour plus de détails, il est possible de consulter la
      <a href="https://glpi-install.readthedocs.io/en/latest/prerequisites.html" target="_blank" rel="noopener noreferrer">
        documentation officielle des pré-requis de GLPI
      </a>.
    </p>

    <!-- 3. Préparation du serveur -->
    <h2 id="etape-3">3. Préparation du serveur Debian 12</h2>
    <p>
      La première étape consiste à mettre à jour les paquets de la machine Debian 12
      et à préparer l’environnement système.
    </p>
    <pre>sudo apt update && sudo apt upgrade</pre>

    <!-- 4. LAMP -->
    <h2 id="etape-4">4. Installation du socle LAMP</h2>
    <p>
      L’installation du socle LAMP permet de disposer d’un environnement prêt à héberger GLPI.
      Il faut installer Apache2, MariaDB ainsi que PHP et ses extensions.
    </p>

    <pre>sudo apt install apache2 mariadb-server</pre>

    <p>Puis installer les extensions PHP nécessaires :</p>

    <pre>sudo apt-get install php-xml php-common php-json php-mysql php-mbstring php-curl php-gd php-intl php-zip php-bz2 php-imap php-apcu</pre>

    <p>
      Si l’intégration à un annuaire LDAP est envisagée, il faut également ajouter l’extension correspondante :
    </p>

    <pre>sudo apt-get install php-ldap</pre>

    <!-- 5. MariaDB -->
    <h2 id="etape-5">5. Configuration sécurisée de MariaDB</h2>
    <p>
      MariaDB doit être sécurisée avant de créer la base de données de GLPI.
    </p>

    <pre>sudo mysql_secure_installation</pre>

    <p>Ensuite, il faut créer une base de données et un utilisateur dédiés :</p>

    <pre>sudo mysql -u root -p
create database db23_glpi;
grant all privileges on db23_glpi.* to glpi_adm@localhost identified by "motdepasserobuste";
flush privileges;
exit;
</pre>

    <!-- 6. Téléchargement -->
    <h2 id="etape-6">6. Téléchargement et préparation de GLPI</h2>
    <p>
      Après la préparation du serveur, l’étape suivante consiste à télécharger GLPI,
      à l’extraire dans le répertoire web et à attribuer les bons droits.
    </p>

    <pre>cd /tmp
wget https://github.com/glpi-project/glpi/releases/download/10.0.10/glpi-10.0.10.tgz
sudo tar -xzvf glpi-10.0.10.tgz -C /var/www/
sudo chown -R www-data:www-data /var/www/glpi/</pre>

    <!-- 7. Apache -->
    <h2 id="etape-7">7. Configuration d’Apache avec VirtualHost</h2>
    <p>
      Apache doit ensuite être configuré pour pointer vers le dossier public de GLPI.
    </p>

    <pre>sudo nano /etc/apache2/sites-available/glpi.conf</pre>

    <pre>
&lt;VirtualHost *:80&gt;
    ServerName support.it-connect.tech
    DocumentRoot /var/www/glpi/public
    &lt;Directory /var/www/glpi/public&gt;
        Require all granted
        RewriteEngine on
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.*)$ index.php [QSA,L]
    &lt;/Directory&gt;
    &lt;FilesMatch \.php$&gt;
        SetHandler "proxy:unix:/run/php/php8.2-fpm.sock|fcgi://localhost/"
    &lt;/FilesMatch&gt;
&lt;/VirtualHost&gt;
</pre>

    <!-- 8. PHP-FPM -->
    <h2 id="etape-8">8. Configuration de PHP-FPM et des extensions</h2>
    <p>
      Pour améliorer le fonctionnement de PHP avec Apache, il est recommandé d’utiliser PHP-FPM.
    </p>

    <pre>sudo apt-get install php8.2-fpm
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php8.2-fpm
sudo systemctl reload apache2</pre>

    <!-- 9. Navigateur -->
    <h2 id="etape-9">9. Installation via le navigateur</h2>
    <p>
      Une fois le serveur configuré, l’installation se termine depuis le navigateur
      en accédant à l’adresse de la machine virtuelle.
    </p>
    <p><code>http://IP_DE_VOTRE_VM</code></p>

    <p>
      Une fois l’installation terminée, il est important de supprimer le script d’installation :
    </p>

    <pre>sudo rm /var/www/glpi/install/install.php</pre>

    <!-- 10. Première connexion -->
    <h2 id="etape-10">10. Première connexion et sécurité</h2>
    <p>
      GLPI fournit plusieurs comptes par défaut. Ils doivent être utilisés uniquement
      pour la première connexion, puis sécurisés immédiatement.
    </p>

    <ul>
      <li><strong>Administrateur :</strong> glpi / glpi</li>
      <li><strong>Technicien :</strong> tech / tech</li>
      <li><strong>Utilisateur :</strong> normal / normal</li>
      <li><strong>Post-only :</strong> post-only / postonly</li>
    </ul>

    <p>
      Il est indispensable de modifier tous les mots de passe après la première connexion.
    </p>

    <!-- 11. Bonnes pratiques -->
    <h2 id="etape-11">11. Bonnes pratiques post-installation</h2>
    <ul>
      <li>Activer HTTPS pour sécuriser l’accès à l’application</li>
      <li>Mettre à jour régulièrement GLPI, PHP et MariaDB</li>
      <li>Sauvegarder la base de données</li>
      <li>Ajouter des plugins utiles selon les besoins</li>
      <li>Limiter l’accès à l’interface d’administration</li>
    </ul>

    <pre>mysqldump -u root -p db23_glpi > /backup/glpi_$(date +%F).sql</pre>

    <!-- 12. Conclusion -->
    <h2 id="etape-12">12. Conclusion</h2>
    <p>
      Cette installation de GLPI sur Debian 12 permet de mettre en place une solution fonctionnelle
      de gestion de parc informatique et de support utilisateur. Ce projet m’a permis de renforcer
      mes compétences en administration système, configuration serveur, sécurité et gestion d’un outil
      professionnel utilisé en entreprise.
    </p>

    <!-- Partie 2 -->
    <h2 id="partie-2">13. Démonstration : connexion et gestion d’un ticket</h2>
    <p>
      Cette seconde partie présente le cycle de vie d’un ticket dans GLPI : création par un utilisateur,
      prise en charge par un administrateur, traitement, réponse et clôture.
    </p>

    <!-- 13.1 -->
    <h3 id="demo-1">13.1 Accès à l’interface GLPI</h3>
    <p>Accès à l’interface via le navigateur : <code>http://IP_DE_VOTRE_VM</code></p>

    <div class="captures-grid">
      <figure class="capture">
        <img src="assets/images/Glpi/1.1.jpeg" alt="Accès à l’interface GLPI">
        <figcaption>Capture 1 — Accès à l’interface GLPI</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/1.2.png" alt="Page de connexion GLPI">
        <figcaption>Capture 2 — Page de connexion GLPI</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/1.3.png" alt="Interface GLPI vue générale">
        <figcaption>Capture 3 — Interface GLPI (vue générale)</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/1.4.png" alt="Navigation dans GLPI">
        <figcaption>Capture 4 — Navigation dans GLPI</figcaption>
      </figure>
    </div>

    <!-- 13.2 -->
    <h3 id="demo-2">13.2 Connexion utilisateur</h3>
    <p>
      L’utilisateur se connecte avec son compte, puis accède à son tableau de bord et à l’espace de gestion des tickets.
    </p>

    <div class="captures-grid">
      <figure class="capture">
        <img src="assets/images/Glpi/2.1.png" alt="Tableau de bord utilisateur GLPI">
        <figcaption>Capture 5 — Tableau de bord utilisateur</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/2.2.gif" alt="Interface après connexion">
        <figcaption>Capture 6 — Interface après connexion</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/2.3.webp" alt="Navigation côté utilisateur">
        <figcaption>Capture 7 — Navigation côté utilisateur</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/2.4.webp" alt="Vue tickets côté utilisateur">
        <figcaption>Capture 8 — Vue tickets côté utilisateur</figcaption>
      </figure>
    </div>

    <!-- 13.3 -->
    <h3 id="demo-3">13.3 Création d’un ticket</h3>
    <p>
      L’utilisateur crée un ticket en décrivant son problème, puis valide sa demande.
    </p>

    <div class="captures-grid">
      <figure class="capture">
        <img src="assets/images/Glpi/3.1.png" alt="Formulaire de création d’un ticket">
        <figcaption>Capture 9 — Formulaire de création d’un ticket</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/3.2.jpg" alt="Ticket créé vue utilisateur">
        <figcaption>Capture 10 — Ticket créé (vue utilisateur)</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/3.3.webp" alt="Détails du ticket">
        <figcaption>Capture 11 — Détails du ticket</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/3.4.png" alt="Suivi du ticket">
        <figcaption>Capture 12 — Suivi et message associé au ticket</figcaption>
      </figure>
    </div>

    <!-- 13.4 -->
    <h3 id="demo-4">13.4 Traitement du ticket par l’administrateur</h3>
    <p>
      L’administrateur consulte le ticket, l’analyse, puis répond à l’utilisateur ou l’assigne si nécessaire.
    </p>

    <div class="captures-grid">
      <figure class="capture">
        <img src="assets/images/Glpi/4.1.png" alt="Tableau de bord administrateur">
        <figcaption>Capture 13 — Tableau de bord administrateur</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/4.2.png" alt="Ticket vu côté administrateur">
        <figcaption>Capture 14 — Ticket vu côté administrateur</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/4.3.png" alt="Traitement du ticket">
        <figcaption>Capture 15 — Traitement et réponse du ticket</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/4.4.png" alt="Suivi côté administrateur">
        <figcaption>Capture 16 — Mise à jour et suivi côté administrateur</figcaption>
      </figure>
    </div>

    <!-- 13.5 -->
    <h3 id="demo-5">13.5 Résolution et clôture</h3>
    <p>
      Une fois le problème traité, le ticket est marqué comme résolu, puis clôturé.
    </p>

    <div class="captures-grid">
      <figure class="capture">
        <img src="assets/images/Glpi/5.1.png" alt="Ticket résolu">
        <figcaption>Capture 17 — Ticket résolu</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/5.2.webp" alt="Suivi après résolution">
        <figcaption>Capture 18 — Suivi après résolution</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/5.3.webp" alt="Préparation de la clôture">
        <figcaption>Capture 19 — Préparation de la clôture</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/5.4.webp" alt="Ticket clôturé">
        <figcaption>Capture 20 — Ticket clôturé</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/6.1.png" alt="Historique final">
        <figcaption>Capture 21 — Historique et résumé final</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/6.2.png" alt="Vue finale côté utilisateur">
        <figcaption>Capture 22 — Vue finale côté utilisateur</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/6.3.png" alt="Liste des tickets">
        <figcaption>Capture 23 — Liste des tickets</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/6.4.png" alt="Dernière vérification">
        <figcaption>Capture 24 — Dernière vérification</figcaption>
      </figure>

      <figure class="capture">
        <img src="assets/images/Glpi/7.1.webp" alt="Récapitulatif final">
        <figcaption>Capture 25 — Récapitulatif</figcaption>
      </figure>
    </div>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>