<?php 
require_once ("includes/header.php");
?>

<!-- Section principale -->
<section id="hero" class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-text">Bienvenue sur mon Portfolio</h1>
                <h1><span class="name-highlight Downloads">Atef Saadi</span></h1>
                <h2 class="h4 mb-4"><a href="Bts_Sio.php" class="underline">BTS SIO</a> option SLAM</h2>
                <p class="lead mb-4">Développeur passionné spécialisé en création d'applications web et solutions métiers.</p>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="#projects" class="btn btn-projects">Voir mes projets</a>
                    <button class="btn btn-projects" onclick="openSyntheseModal()">Tableau de synthèse</button>

                    <!-- CV : ouvre le PDF dans la modal PDF réutilisable -->
                    <button class="btn btn-projects" onclick="openPDFModal('pdfs/CV_Atef_Saadi.pdf')">CV</button>

                    <a href="#contact" class="btn btn-projects">Me contacter</a>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <div class="profile-container mt-5 mt-lg-0">
                    <img src="images/ATEF.jpg" alt="Photo de profil d'Atef Saadi" class="profile-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tableau de synthèse (Excel + PDF) -->
<div id="syntheseModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeSyntheseModal()">&times;</span>

        <div class="modal-actions mb-3">
            <!-- Excel officiel -->
            <a href="pdfs/Tableau-de-synthese-Epreuve.xls" class="btn btn-projects" download>
                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 16l-6-6h4V4h4v6h4l-6 6zm-7 4h14v2H5v-2z"/>
                </svg>
                Télécharger (Excel officiel)
            </a>

            <!-- PDF (download) -->
            <a href="pdfs/Tableau-de-synthese-Epreuve.pdf" class="btn btn-projects" download>
                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 16l-6-6h4V4h4v6h4l-6 6zm-7 4h14v2H5v-2z"/>
                </svg>
                Télécharger (PDF)
            </a>

            <!-- Imprimer le PDF affiché -->
            <button class="btn btn-projects" onclick="printSynthese()">
                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 12v2H8v-4h8v2zm2-10h2c.55 0 1 .45 1 1s-.45 1-1 1h-2v-2z"/>
                </svg>
                Imprimer
            </button>
        </div>

        <!-- Affichage PDF -->
        <iframe src="pdfs/Tableau-de-synthese-Epreuve.pdf"
                title="Tableau de synthèse BTS SIO SLAM"
                class="cv-iframe"></iframe>
    </div>
</div>

<!-- Section à propos -->
<section id="about" class="section custom-border">
    <div class="container">
        <h2 class="title text-center">À Propos de Moi</h2>

        <div class="row g-4">

            <!-- PRÉSENTATION (GAUCHE) -->
            <div class="col-12 col-lg-6">
                <div class="card about-card h-100">
                    <div class="card-body">

                        <div class="personal-info mb-3">
                            <div class="info-item">
                                <h3 class="mb-4">
                                    <center><i class="fas fa-user-circle me-2"></i>Atef Saadi</h3></center>
                            </div>
                        </div>

                        <p>
                            Titulaire d’un baccalauréat en génie des procédés et d’un
                            BTS Hôtellerie-Restauration, j’ai construit un parcours
                            professionnel alliant rigueur technique et sens du service,
                            à travers une expérience significative dans le secteur
                            de l’hôtellerie.
                        </p>

                        <p>
                            Cette trajectoire m’a permis de développer des compétences
                            solides en organisation, travail d’équipe et relation client.
                        </p>

                        <p>
                            Animé par un intérêt croissant pour le numérique, j’ai entrepris
                            une reconversion vers le développement informatique, un domaine
                            dans lequel je mets à profit mes capacités d’analyse, de logique
                            et de résolution de problèmes.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FORMATION (DROITE) -->
            <div class="col-12 col-lg-6">
                <div class="card about-card h-100">
                    <div class="card-body">

                        <center>
                            <h3 class="mb-4">
                                <i class="fas fa-graduation-cap me-2"></i>Formation
                            </h3>
                        </center>

                        <!-- BTS SIO -->
                        <div class="education-item mb-3">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h6 class="mb-0"><strong>BTS SIO – Option SLAM</strong></h6>
                                <span class="text-muted">(2024 – 2026)</span>
                            </div>
                            <p class="mb-1">
                                <a href="https://ecoleiris.fr/" target="_blank" rel="noopener noreferrer">
                                    IRIS – École Supérieure d’Informatique, Paris
                                </a>
                            </p>
                            <p class="mb-0">
                                Formation spécialisée en développement d’applications web et logicielles,
                                couvrant l’analyse des besoins, la conception, la programmation,
                                la gestion des bases de données et la maintenance applicative.
                            </p>
                        </div>

                        <!-- BTS Hôtellerie -->
                        <div class="education-item mb-3">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h6 class="mb-0"><strong>BTS Hôtellerie – Gestion de restaurant</strong></h6>
                                <span class="text-muted">(2010 – 2012)</span>
                            </div>
                            <p class="mb-1">
                                <a href="https://inht-tiziouzou.dz/fr" target="_blank" rel="noopener noreferrer">
                                    Institut National d’Hôtellerie et de Tourisme, Tizi Ouzou (Algérie)
                                </a>
                            </p>
                            <p class="mb-0">
                                Formation professionnelle orientée vers la gestion opérationnelle,
                                le management d’équipe, l’organisation des services
                                et la relation client dans un environnement exigeant.
                            </p>
                        </div>

                        <!-- Baccalauréat -->
                        <div class="education-item">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h6 class="mb-0"><strong>Baccalauréat Mathématiques – Option Génie des Procédés</strong></h6>
                                <span class="text-muted">(2008)</span>
                            </div>
                            <p class="mb-1">
                                Lycée Chrif Lerguet, Algérie
                            </p>
                            <p class="mb-0">
                                Baccalauréat à dominante scientifique offrant une base solide
                                en mathématiques, physique et chimie appliquée,
                                constituant une préparation aux études supérieures techniques et industrielles.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section compétences -->
<section id="skills" class="section custom-border">
    <div class="container">
        <h2 class="title">Compétences – BTS SIO (SLAM)</h2>
        <p class="mb-4">
            Spécialisé en Solutions Logicielles et Applications Métiers (SLAM),
            je conçois, développe et sécurise des applications web et logicielles
            en m’appuyant sur des bases solides en programmation, en bases de données
            et en méthodes de conception.
        </p>

        <div class="row">
            <!-- Développement Front-end -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about-card card h-100">
                    <div class="card-body">
                        <h3>Développement Front-end</h3>
                        <p>
                            Conception d’interfaces web ergonomiques et responsives,
                            respectant les standards du web et l’expérience utilisateur.
                        </p>
                        <ul class="skill-list">
                            <li><strong>HTML5</strong> : structuration sémantique des pages</li>
                            <li><strong>CSS3</strong> : mise en page, responsive design</li>
                            <li><strong>JavaScript</strong> : interactions dynamiques, manipulation du DOM</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Développement Back-end -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="education-card card h-100">
                    <div class="card-body">
                        <h3>Développement Back-end</h3>
                        <p>
                            Développement de la logique métier et des fonctionnalités serveur,
                            avec gestion des traitements, des formulaires et des données.
                        </p>
                        <ul class="skill-list">
                            <li><strong>PHP</strong> : traitement serveur, architecture MVC</li>
                            <li><strong>CRUD</strong> : création, lecture, mise à jour, suppression</li>
                            <li><strong>Sessions</strong> : authentification et gestion des rôles</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Développement Java -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="education-card card h-100">
                    <div class="card-body">
                        <h3>Développement Java</h3>
                        <p>
                            Développement d’applications en Java en appliquant les principes
                            de la programmation orientée objet et de la structuration du code.
                        </p>
                        <ul class="skill-list">
                            <li><strong>Java</strong> : classes, objets, encapsulation</li>
                            <li><strong>POO</strong> : héritage, polymorphisme</li>
                            <li><strong>Logique applicative</strong> : traitements, validations</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bases de données -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about-card card h-100">
                    <div class="card-body">
                        <h3>Bases de données</h3>
                        <p>
                            Conception et exploitation de bases de données relationnelles
                            garantissant la cohérence, la sécurité et la performance.
                        </p>
                        <ul class="skill-list">
                            <li><strong>MySQL</strong> : modélisation et administration</li>
                            <li><strong>SQL</strong> : requêtes, jointures, optimisation</li>
                            <li><strong>Merise</strong> : MCD / MLD</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Conception & Méthodes -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="education-card card h-100">
                    <div class="card-body">
                        <h3>Conception & Méthodes</h3>
                        <p>
                            Analyse des besoins, modélisation et organisation du développement
                            afin de produire des applications maintenables et évolutives.
                        </p>
                        <ul class="skill-list">
                            <li><strong>UML</strong> : cas d’utilisation, diagrammes</li>
                            <li><strong>MVC</strong> : séparation des responsabilités</li>
                            <li><strong>Documentation</strong> : dossiers techniques, schémas</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sécurité & Outils -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about-card card h-100">
                    <div class="card-body">
                        <h3>Sécurité & Outils</h3>
                        <p>
                            Application de bonnes pratiques de sécurité et utilisation
                            d’outils professionnels de développement.
                        </p>
                        <ul class="skill-list">
                            <li><strong>Sécurité web</strong> : validation des entrées, gestion des sessions</li>
                            <li><strong>Git / GitHub</strong> : gestion de versions</li>
                            <li><strong>API / JSON</strong> : échanges et structuration des données</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section certifications -->
<section id="certifications" class="section custom-border">
    <div class="container">
        <h2 class="title">Certifications</h2>
        <p class="mb-4">
            Certifications attestant de mes compétences techniques
            et de mon engagement dans l’apprentissage continu.
        </p>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about-card card h-100 text-center" style="cursor:pointer;"
                     onclick="openPDFModal('pdfs/certif/CertifHtmlCss.pdf')">
                    <div class="card-body">
                        <img src="images/HtmlCss.jpg" alt="Certificat HTML5/CSS3"
                             class="img-fluid mb-3" style="max-height:150px;">
                        <h3>HTML5 / CSS3</h3>
                        <p>Intégration web et mise en page responsive.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about-card card h-100 text-center" style="cursor:pointer;"
                     onclick="openPDFModal('pdfs/certif/CertifJS.pdf')">
                    <div class="card-body">
                        <img src="images/js.jpg" alt="Certificat JavaScript"
                             class="img-fluid mb-3" style="max-height:150px;">
                        <h3>JavaScript</h3>
                        <p>Fondamentaux du langage JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="stages" class="section custom-border">
  <div class="container">
    <h2 class="title">Mes Stages</h2>
    <p class="mb-4">Voici mes deux expériences en entreprise.</p>

    <div class="row">
      <!-- Stage 1 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Stage — Entreprise 1</h3>
            <p class="text-muted">Ville • Dates</p>
            <p>1–2 phrases sur le contexte et la mission.</p>

            <ul class="skill-list">
              <li><span>Mission 1</span></li>
              <li><span>Mission 2</span></li>
              <li><span>Technos : …</span></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Stage 2 -->
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="education-card card h-100">
          <div class="card-body">
            <h3>Stage — Entreprise 2</h3>
            <p class="text-muted">Ville • Dates</p>
            <p>1–2 phrases sur le contexte et la mission.</p>

            <ul class="skill-list">
              <li><span>Mission 1</span></li>
              <li><span>Mission 2</span></li>
              <li><span>Technos : …</span></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Section projets -->
<!-- Section projets -->
<section id="projects" class="section custom-border">
    <div class="container">
        <h2 class="title">Mes Projets</h2>
        <div class="row g-4">

             <!-- Carte 4 -->
            <div class="col-lg-4 col-md-6">
                <a href="butterfly.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/ButterFly/logo-off.png" alt="Projet Butterfly - Site vitrine" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>ButterFly</h3>
                            <p class="project-date badge bg-secondary">IRIS Ecole, Paris - 10/2025</p>
                            <p>Création d'un site vitrine avec PHP et Bootstrap</p>
                            <div class="project-tech">
                                <span class="badge bg-dark">HTML/CSS</span>
                                <span class="badge bg-dark">PHP</span>
                                <span class="badge bg-dark">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
           
            <!-- Carte 5 -->
            <div class="col-lg-4 col-md-6">
                <a href="snakGame.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/SnakGame/snake-game.webp" alt="SnakeGame" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>SnakeGame</h3>
                            <p class="project-date badge bg-secondary">IRIS Ecole, Paris - 12/2025</p>
                            <p>Modification d'un code open source</p>
                            <div class="project-tech">
                                <span class="badge bg-dark">C</span>
                                <span class="badge bg-dark">Conio.h</span>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>

             <!-- Carte 3 -->
            <div class="col-lg-4 col-md-6">
                <a href="glpi.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/Glpi/LogoGLPI.png" alt="Projet GLPI - Installation et configuration" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>GLPI</h3>
                            <p class="project-date badge bg-secondary">IRIS Ecole, Paris - 10/2024</p>
                            <p>Installation et configuration de GLPI</p>
                            <div class="project-tech">
                                <span class="badge bg-dark">VMWare</span>
                                <span class="badge bg-dark">Debian 12</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte 1 -->
            <div class="col-lg-4 col-md-6">
                <a href="metaforg.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/MetaForg/LogoMF.png" alt="Projet MetaForg - Réseau Social" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>MetaForg</h3>
                            <p class="project-date badge bg-secondary">IRIS Ecole, Paris - 04/2025</p>
                            <p>Création d'un réseau social avec PHP et MySQL</p>
                            <div class="project-tech">
                                <span class="badge bg-dark">PHP</span>
                                <span class="badge bg-dark">MySQL</span>
                                <span class="badge bg-dark">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte 2 -->
            <div class="col-lg-4 col-md-6">
                <a href="altimmo.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/Altimmo/logoAltImmo.png" alt="Projet AltImmo - Agence Immobilière" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>AltImmo</h3>
                            <p class="project-date badge bg-secondary">IRIS Ecole, Paris - 02/2025</p>
                            <p>Site web complet pour une agence immobilière</p>
                            <div class="project-tech">
                                <span class="badge bg-dark">HTML/CSS</span>
                                <span class="badge bg-dark">PHP</span>
                                <span class="badge bg-dark">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte 6 -->
            <div class="col-lg-4 col-md-6">
                <a href="langages-web.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/langages-web.png" alt="Projet Langages" loading="lazy" class="card-img-top">
                        </div>

                        <div class="project-content mt-3">
                            <h3>Langages du Web</h3>
                            <p class="project-date badge bg-secondary">IRIS École, Paris - 04/2025</p>
                            <p>Réalisation d’un site présentant HTML, CSS, PHP et JavaScript (définition, créateur, vidéo, liens & PDF).</p>
                            <div class="project-tech">
                                <span class="badge bg-dark">HTML</span>
                                <span class="badge bg-dark">CSS</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<!-- Section Veille Technologique -->
<section id="tech-watch" class="section custom-border">
    <div class="container">
        <h2 class="title">Veille Technologique</h2>
        <p>La veille technologique est un processus continu et structuré de collecte et d’analyse d’informations...</p>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="project-card card h-100" onclick="window.location.href='edge-computing.php';" style="cursor:pointer;">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/bigstock-Edge-Computing.webp" alt="Veille sur l'IA" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>Edge Computing</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="project-card card h-100" onclick="window.location.href='nocode.php';" style="cursor:pointer;">
                    <div class="card-body">
                        <div class="project-image">
                            <img src="images/low-code-no-code.jpg" alt="Veille sur la cybersécurité" loading="lazy" class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3>Low-Code/No-Code</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section contact -->
<section id="contact" class="section bg-dark custom-border">
    <div class="container">
        <h2 class="title">Contact</h2>
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-card card h-100">
                    <div class="card-body">
                        <h3 class="contact-title">Coordonnées</h3>
                        <ul class="contact-list list-unstyled">
                            <li class="contact-item mb-3">
                                <i class="fas fa-phone contact-icon me-3"></i>
                                <span><strong>Téléphone :</strong> 06 38 84 48</span>
                            </li>
                            <li class="contact-item mb-3">
                                <i class="fas fa-envelope contact-icon me-3"></i>
                                <span><strong>Email :</strong> atef_saadi@outlook.fr</span>
                            </li>
                            <li class="contact-item mb-3">
                                <i class="fas fa-map-marker-alt contact-icon me-3"></i>
                                <span><strong>Localisation :</strong> Colombes (92700)</span>
                            </li>
                            <li class="contact-social mt-4">
                                <a href="https://www.linkedin.com/in/atef-saadi/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-linkedin me-3"></i></a>
                                <a href="https://github.com/ATFsaadi/" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fab fa-github me-3"></i></a>
                                <a href="tel:+33638368448" aria-label="Appeler"><i class="fas fa-phone me-3"></i></a>
                                <a href="mailto:atef_saadi@outlook.fr" aria-label="Envoyer un email"><i class="fas fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-card card h-100">
                    <div class="card-body">
                        <h3>Envoyer un message</h3>
                        <form class="contact-form" id="contactForm" method="POST" action="contact.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" name="nom" placeholder="Votre nom" required aria-label="Votre nom">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Votre email" required aria-label="Votre email">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                    <input type="text" class="form-control" name="sujet" placeholder="Sujet" required aria-label="Sujet">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    <textarea class="form-control" name="message" placeholder="Votre message" required aria-label="Votre message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-projects w-100">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal PDF réutilisable (CV + certificats) -->
<div id="pdfModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closePDFModal()">&times;</span>

        <div class="modal-actions mb-3">
            <a id="downloadPDF" href="#" class="btn btn-projects" download>
                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 16l-6-6h4V4h4v6h4l-6 6zm-7 4h14v2H5v-2z"/>
                </svg>
                Télécharger
            </a>

            <button class="btn btn-projects" onclick="printPDFModal()">
                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3z"/>
                </svg>
                Imprimer
            </button>
        </div>

        <iframe id="pdfFrame" src="" title="Document PDF" class="cv-iframe"></iframe>
    </div>
</div>

<script>
// ===== Synthèse Modal =====
function openSyntheseModal() {
    const modal = document.getElementById('syntheseModal');
    if (modal) modal.style.display = 'flex';
}
function closeSyntheseModal() {
    const modal = document.getElementById('syntheseModal');
    if (modal) modal.style.display = 'none';
}
function printSynthese() {
    const iframe = document.querySelector('#syntheseModal .cv-iframe');
    if (!iframe) return;
    try { iframe.contentWindow.print(); } catch(e) { window.open(iframe.src, '_blank'); }
}

// ===== PDF Modal (CV + certificats) =====
function openPDFModal(pdfPath) {
    const frame = document.getElementById('pdfFrame');
    const dl = document.getElementById('downloadPDF');
    const modal = document.getElementById('pdfModal');

    if (!frame || !dl || !modal) {
        window.open(pdfPath, '_blank');
        return;
    }

    frame.src = pdfPath;
    dl.href = pdfPath;
    modal.style.display = 'flex';
}
function closePDFModal() {
    const frame = document.getElementById('pdfFrame');
    const modal = document.getElementById('pdfModal');
    if (frame) frame.src = '';
    if (modal) modal.style.display = 'none';
}
function printPDFModal() {
    const frame = document.getElementById('pdfFrame');
    if (!frame) return;
    try { frame.contentWindow.print(); } catch(e) { window.open(frame.src, '_blank'); }
}

// ===== Fermer les modals si clic en dehors =====
window.addEventListener('click', function(event) {
    const pdfModal = document.getElementById('pdfModal');
    const syntheseModal = document.getElementById('syntheseModal');

    if (event.target === pdfModal) closePDFModal();
    if (event.target === syntheseModal) closeSyntheseModal();
});
</script>

<?php require_once("includes/footer.php")?>
