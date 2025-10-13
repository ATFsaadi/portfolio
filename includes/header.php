<?php
// Démarrer la session pour gérer la langue
session_start();
// Définir la langue par défaut à 'fr' si non définie
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>" <?php echo $lang === 'ar' ? 'dir="rtl"' : 'dir="ltr"'; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio d'Atef Saadi, étudiant en BTS SIO, présentant mes compétences et projets.">
    <meta name="keywords" content="Atef Saadi, BTS SIO, portfolio, développeur, informatique">
    <meta name="author" content="Atef Saadi">
    <title data-i18n="Atef Saadi - Portfolio BTS SIO">Atef Saadi - Portfolio BTS SIO</title>
    
    <!-- Préchargement des polices -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.0/css/flag-icons.min.css">
    <link id="theme-style" rel="stylesheet" href="styles/moon.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>
    <!-- Fond animé avec Particles.js -->
    <div id="particles-js"></div>

    <!-- Header -->
    <header class="header">
        <div class="header-right">
            <a href="index.php" aria-label="Retour à l'accueil">
                <img src="images/LogoAcc.png" alt="Logo Atef Saadi" width="66">
            </a>
            <a href="https://www.linkedin.com/in/atef-saadi-b86970345/" target="_blank" target="_blank" rel="noopener" aria-label="Profil LinkedIn d'Atef Saadi">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/ATFsaadi/" target="_blank" rel="noopener" aria-label="Profil GitHub d'Atef Saadi">
                <i class="fab fa-github"></i>
            </a>
            <a href="tel:+33638368448" aria-label="Appeler Atef Saadi">
                <i class="fas fa-phone"></i>
            </a>
            <a href="mailto:atef_saadi@outlook.fr" aria-label="Envoyer un email à Atef Saadi">
                <i class="fas fa-envelope"></i>
            </a>
        </div>

        <!-- Navigation -->
        <nav class="header-left">
            <button class="burger-menu" id="burger-button" aria-label="Ouvrir le menu" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-links" id="navbar">
                <li><a href="index.php#about" data-i18n="À Propos de Moi">À Propos de Moi</a></li>
                <li><a href="index.php#skills" data-i18n="Mes Compétences">Mes Compétences</a></li>
                <li><a href="index.php#projects" data-i18n="Mes Projets">Mes Projets</a></li>
                <li><a href="index.php#contact" data-i18n="Contact">Contact</a></li>
            </ul>
        </nav>

        <!-- Sélecteur de langue et thème -->
        <div class="language-switcher">
            <button onclick="setLanguage('fr')" aria-label="Passer en Français">
                <i class="flag-icon flag-icon-fr"></i>
            </button>
            <button onclick="setLanguage('en')" aria-label="Passer en Anglais">
                <i class="flag-icon flag-icon-gb"></i>
            </button>
            <button onclick="setLanguage('ar')" aria-label="Passer en Arabe">
                <i class="flag-icon flag-icon-dz"></i>
            </button>
            <div class="theme-switcher">
                <button id="theme-toggle" onclick="toggleTheme()" aria-label="Changer le thème (clair/sombre)">
                    <i class="fas fa-sun"></i>
                </button>
            </div>
        </div>
    </header>