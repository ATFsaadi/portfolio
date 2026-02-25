<?php
session_start();
$lang = $_SESSION['lang'] ?? 'fr';
$pageTitle = $pageTitle ?? "Atef Saadi - Portfolio BTS SIO";
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang); ?>" <?= $lang === 'ar' ? 'dir="rtl"' : 'dir="ltr"'; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio d'Atef Saadi, étudiant en BTS SIO, présentant mes compétences et projets.">
  <meta name="keywords" content="Atef Saadi, BTS SIO, portfolio, développeur, informatique">
  <meta name="author" content="Atef Saadi">

  <title><?= htmlspecialchars($pageTitle); ?></title>

  <!-- important : base url du projet -->
  <base href="/projet-ecole/portfolio/">

  <!-- Google Fonts -->
  <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap"
        as="style" onload="this.rel='stylesheet'">

  <!-- FontAwesome -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

  <!-- Flags -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.0/css/flag-icons.min.css">

  <!-- CSS du projet -->
  <link id="theme-style" rel="stylesheet" href="assets/styles/moon.css">
  <link rel="stylesheet" href="assets/styles/responsive.css">
</head>

<body>

<div id="particles-js"></div>

<button id="scrollToTop" aria-label="Remonter en haut">
  <i class="fas fa-arrow-up"></i>
</button>

<header class="header">

  <div class="header-right">
    <a href="index.php" aria-label="Retour à l'accueil">
      <img src="assets/images/LogoAcc.png" alt="Logo Atef Saadi" width="60">
    </a>

    <a href="https://www.linkedin.com/in/atef-saadi-b86970345/" target="_blank" rel="noopener">
      <i class="fab fa-linkedin"></i>
    </a>

    <a href="https://github.com/ATFsaadi/" target="_blank" rel="noopener">
      <i class="fab fa-github"></i>
    </a>

    <a href="tel:+33638368448"><i class="fas fa-phone"></i></a>
    <a href="mailto:atef_saadi@outlook.fr"><i class="fas fa-envelope"></i></a>
  </div>

  <nav class="header-left">
    <button class="burger-menu" id="burger-button" aria-label="Ouvrir le menu">
      <i class="fas fa-bars"></i>
    </button>

    <ul class="navbar-links" id="navbar">
      <li><a href="index.php#about">Profil</a></li>
      <li><a href="index.php#skills">Compétences</a></li>
      <li><a href="index.php#certifications">Certifications</a></li>
      <li><a href="index.php#projects">Projets</a></li>
      <li><a href="index.php#tech-watch">Veille</a></li>
      <li><a href="index.php#stages">Stages</a></li>
      <li><a href="index.php#contact">Contact</a></li>
    </ul>
  </nav>

  <div class="language-switcher">
    <button onclick="setLanguage('fr')" aria-label="Français"><i class="flag-icon flag-icon-fr"></i></button>
    <button onclick="setLanguage('en')" aria-label="English"><i class="flag-icon flag-icon-gb"></i></button>
    <button onclick="setLanguage('ar')" aria-label="Arabe"><i class="flag-icon flag-icon-dz"></i></button>

    <div class="theme-switcher">
      <button id="theme-toggle" onclick="toggleTheme()">
        <i class="fas fa-sun"></i>
      </button>
    </div>
  </div>

</header>