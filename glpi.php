<title>GLPI</title>
<?php require_once("includes/header.php"); ?>

<!-- Conteneur principal -->
<main class="tuto-container">
    <div class="tuto-content">

        <h1>Tutoriel d’installation et de configuration de GLPI sur Debian 12 (VMware)</h1>

        <!-- Sommaire fusionné -->
        <h2>Sommaire</h2>
        <ul class="sommaire">
            <li><a href="#etape-1">1. Introduction à GLPI</a></li>
            <li><a href="#etape-2">2. Prérequis officiels de GLPI</a></li>
            <li><a href="#etape-3">3. Préparation du serveur Debian 12</a></li>
            <li><a href="#etape-4">4. Installation du socle LAMP</a></li>
            <li><a href="#etape-5">5. Configuration sécurisée de MariaDB</a></li>
            <li><a href="#etape-6">6. Téléchargement et préparation de GLPI</a></li>
            <li><a href="#etape-7">7. Configuration d’Apache avec VirtualHost</a></li>
            <li><a href="#etape-8">8. Configuration de PHP-FPM et extensions requises</a></li>
            <li><a href="#etape-9">9. Installation via navigateur web</a></li>
            <li><a href="#etape-10">10. Première connexion et sécurité</a></li>
            <li><a href="#etape-11">11. Bonnes pratiques post-installation</a></li>
            <li><a href="#etape-12">12. Conclusion</a></li>
        </ul>

        <!-- 1. Introduction -->
        <h2 id="etape-1">1. Introduction à GLPI</h2>
        <p>GLPI (Gestionnaire Libre de Parc Informatique) est un logiciel libre de gestion de parc informatique, offrant une solution complète pour la gestion des équipements (ordinateurs, téléphones, périphériques), le suivi des tickets de support, ainsi que l’administration des contrats, licences et ressources matérielles.</p>
        <p>Depuis sa création en 2003, GLPI s’est imposé comme une solution fiable et largement adoptée. Ce tutoriel vous guide pas à pas dans son installation sur <strong>Debian 12</strong> avec un environnement <strong>LAMP</strong> sous VMware.</p>

        <div class="video-container">
            <h3>Présentation de GLPI</h3>
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/oaa-OIDGQBM?si=ELmBVk2gwxB5lXj8"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen></iframe>
        </div>

        <!-- 2. Prérequis -->
        <h2 id="etape-2">2. Pré-requis pour l'installation de GLPI</h2>
        <p>Avant de procéder à l’installation, il est important de vérifier que votre environnement répond aux prérequis nécessaires. GLPI nécessite un serveur web, PHP et une base de données pour fonctionner correctement. Sur un système Linux, cela correspond généralement à une architecture LAMP. GLPI est compatible avec plusieurs serveurs web, notamment :</p>
        <ul>
            <li>Apache2, Nginx, Lighttpd et IIS</li>
        </ul>

        <h5>Versions requises</h5>

        <h7>● PHP</h7>
        <ul>
            <li>Version : 8.2</li>
        </ul>

        <h7>● Base de données</h7>
        <ul>
            <li>MySQL : version 5.1 minimum</li>
            <li>MariaDB : version 10.2 minimum</li>
        </ul>

        <p>Notez également que plusieurs extensions PHP doivent être installées pour assurer le bon fonctionnement de GLPI.</p>

        <p>La dernière version disponible à ce jour, <strong>GLPI 10.0.10</strong>, introduit le support de PHP 8.3 (future version stable) et MySQL 8.1, tout en corrigeant de nombreuses vulnérabilités critiques.</p>

        <p>Pour cette démonstration, nous utiliserons une machine sous <strong>Debian 12</strong>, sur laquelle nous installerons <strong>Apache2</strong>, <strong>PHP 8.3</strong> et <strong>MariaDB</strong>.</p>

        <p>Pour plus de détails, vous pouvez consulter la <a href="https://glpi-install.readthedocs.io/en/latest/prerequisites.html" target="_blank">documentation officielle des prérequis de GLPI</a>.</p>

        <!-- 3. Mise à jour -->
        <h2 id="etape-3">3. Préparation du serveur Debian 12</h2>
        <p>Commençons par l'installation par une mise à jour des paquets sur la machine Debian 12. Pensez également à lui attribuer une adresse IP et à effectuer la configuration du système.</p>
        <pre>sudo apt update && sudo apt upgrade</pre>

        <!-- 4. LAMP -->
        <h2 id="etape-4">4. Installation du socle LAMP</h2>
        <p>La première grande étape consiste à installer les paquets du socle LAMP : Linux Apache2 MariaDB PHP. Sous Debian 12, PHP 8.2 est distribué par défaut dans les dépôts officiels. Commençons par installer ces trois paquets :</p>
        <pre>sudo apt install apache2 mariadb-server</pre>
        <p>Puis, nous allons installer toutes les extensions nécessaires au bon fonctionnement de GLPI.</p>
        <pre>sudo apt-get install php-xml php-common php-json php-mysql php-mbstring php-curl php-gd php-intl php-zip php-bz2 php-imap php-apcu</pre>
        <p>Ces commandes vont permettre de récupérer les versions de ces extensions pour PHP 8.2.</p>
        <br>
        <p>Si vous envisagez d'associer GLPI avec un annuaire LDAP comme l'Active Directory, vous devez installer l'extension LDAP de PHP. Sinon, ce n'est pas nécessaire et vous pouvez le faire par la suite, si besoin.</p>
        <pre>sudo apt-get install php-ldap</pre>
        <p>Nous venons d'installer Apache2, MariaDB, PHP et un ensemble d'extensions.</p>

        <!-- 5. MariaDB -->
        <h2 id="etape-5">5. Configuration sécurisée de MariaDB</h2>
        <p>Nous allons préparer MariaDB pour qu'il puisse héberger la base de données de GLPI. Exécutez la commande suivante :</p>
        <pre>sudo mysql_secure_installation</pre>
        <p>Ensuite, créez une base et un utilisateur dédiés :</p>
        <pre>sudo mysql -u root -p
create database db23_glpi;
grant all privileges on db23_glpi.* to glpi_adm@localhost identified by "motdepasserobuste";
flush privileges;
exit;
</pre>

        <!-- 6. GLPI -->
        <h2 id="etape-6">6. Téléchargement et préparation de GLPI</h2>
        <pre>cd /tmp
wget https://github.com/glpi-project/glpi/releases/download/10.0.10/glpi-10.0.10.tgz
sudo tar -xzvf glpi-10.0.10.tgz -C /var/www/
sudo chown -R www-data:www-data /var/www/glpi/</pre>

        <!-- 7. Apache -->
        <h2 id="etape-7">7. Configuration d’Apache avec VirtualHost</h2>
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
        <h2 id="etape-8">8. Configuration de PHP-FPM et extensions requises</h2>
        <p>Installez PHP-FPM et configurez-le :</p>
        <pre>sudo apt-get install php8.2-fpm
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php8.2-fpm
sudo systemctl reload apache2</pre>

        <!-- 9. Navigateur -->
        <h2 id="etape-9">9. Installation via navigateur web</h2>
        <p>Ouvrez <code>http://IP_DE_VOTRE_VM</code> et suivez les étapes d’installation.</p>
        <p><strong>⚠️ Sécurité :</strong> Supprimez immédiatement le script d’installation :</p>
        <pre>sudo rm /var/www/glpi/install/install.php</pre>

        <!-- 10. Première connexion -->
        <h2 id="etape-10">10. Première connexion et sécurité</h2>
        <ul>
            <li><strong>Admin :</strong> glpi / glpi</li>
            <li><strong>Technicien :</strong> tech / tech</li>
            <li><strong>Utilisateur :</strong> normal / normal</li>
            <li><strong>Post-only :</strong> post-only / postonly</li>
        </ul>
        <p>Changez <strong>tous les mots de passe</strong> après la première connexion.</p>

        <!-- 11. Bonnes pratiques -->
        <h2 id="etape-11">11. Bonnes pratiques post-installation</h2>
        <ul>
            <li>Activer HTTPS avec Let’s Encrypt</li>
            <li>Mettre à jour régulièrement GLPI et PHP</li>
            <li>Sauvegarder la base : <code>mysqldump -u root -p glpi_db > /backup/glpi_$(date +%F).sql</code></li>
            <li>Installer des plugins utiles : FusionInventory, LDAP, PDF, etc.</li>
            <li>Restreindre l’accès à l’interface d’admin par IP</li>
        </ul>

        <!-- 12. Conclusion -->
        <h2 id="etape-12">12. Conclusion</h2>
        <p>Vous disposez maintenant d’une instance sécurisée et fonctionnelle de GLPI sur Debian 12. Ce système vous permet de gérer efficacement votre parc informatique, vos tickets d’assistance et vos ressources.</p>
        <p>Pour aller plus loin : intégration LDAP, monitoring, automatisation des inventaires avec FusionInventory.</p>

    </div>
</main>

<?php require_once("includes/footer.php"); ?>
