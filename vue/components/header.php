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
  <meta name="description" content="Portfolio d’Atef Saadi, étudiant en BTS SIO option SLAM, présentant mon parcours, mes compétences, mes projets, mes stages et ma veille technologique.">
  <meta name="keywords" content="Atef Saadi, BTS SIO, SLAM, portfolio, développeur web, étudiant informatique, projets, stages">
  <meta name="author" content="Atef Saadi">

  <title><?= htmlspecialchars($pageTitle); ?></title>

  <!-- Base URL du projet -->
  <base href="/projet-ecole/portfolio/">

  <!-- Google Fonts -->
  <link
    rel="preload"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap"
    as="style"
    onload="this.onload=null;this.rel='stylesheet'"
  >
  <noscript>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap"
    >
  </noscript>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  >

  <!-- Bootstrap -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
  >

  <!-- Flags -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.0/css/flag-icons.min.css"
  >

  <!-- CSS du projet -->
  <link id="theme-style" rel="stylesheet" href="assets/styles/moon.css">
  <link rel="stylesheet" href="assets/styles/responsive.css">
</head>

<body>

<div id="particles-js"></div>

<button id="scrollToTop" aria-label="Remonter en haut">
  <i class="fas fa-arrow-up" aria-hidden="true"></i>
</button>

<header class="header">

  <!-- Logo + liens rapides -->
  <div class="header-right">
    <a href="index.php" aria-label="Retour à l’accueil">
      <img src="assets/icones/LogoAcc.png" alt="Logo Atef Saadi" width="60">
    </a>

    <a href="https://www.linkedin.com/in/atef-saadi-b86970345/" target="_blank" rel="noopener noreferrer" aria-label="Profil LinkedIn">
      <i class="fab fa-linkedin" aria-hidden="true"></i>
    </a>

    <a href="https://github.com/ATFsaadi/" target="_blank" rel="noopener noreferrer" aria-label="Profil GitHub">
      <i class="fab fa-github" aria-hidden="true"></i>
    </a>

    <a href="tel:+33638368448" aria-label="Appeler Atef Saadi">
      <i class="fas fa-phone" aria-hidden="true"></i>
    </a>

    <a href="mailto:atef_saadi@outlook.fr" aria-label="Envoyer un e-mail à Atef Saadi">
      <i class="fas fa-envelope" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Navigation -->
  <nav class="header-left" aria-label="Navigation principale">
   <button class="burger-menu" id="burger-button" aria-label="Ouvrir le menu">
  <img src="assets/icones/LogoAcc.png" alt="Menu" class="burger-logo">
</button>

    <ul class="navbar-links" id="navbar">
      <li><a href="index.php#about">Profil</a></li>
      <li><a href="index.php#skills">Compétences</a></li>
      <li><a href="index.php#certifications">Certifications</a></li>
      <li><a href="index.php#projects">Projets</a></li>
      <li><a href="index.php#stages">Stages</a></li>
      <li><a href="index.php#tech-watch">Veille</a></li>
      <li><a href="index.php#conclusion">Conclusion</a></li>
      <li><a href="index.php#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Langues + thème -->
  <div class="language-switcher">
    <button type="button" onclick="setLanguage('fr')" aria-label="Passer en français">
      <i class="flag-icon flag-icon-fr" aria-hidden="true"></i>
    </button>

    <button type="button" onclick="setLanguage('en')" aria-label="Passer en anglais">
      <i class="flag-icon flag-icon-gb" aria-hidden="true"></i>
    </button>

    <button onclick="setLanguage('ar')" aria-label="Arabe">
      <i class="flag-icon flag-icon-dz"></i>
    </button>

    <div class="theme-switcher">
      <button type="button" id="theme-toggle" onclick="toggleTheme()" aria-label="Changer de thème">
        <i class="fas fa-sun" aria-hidden="true"></i>
      </button>
    </div>
  </div>

</header>