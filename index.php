<?php
require_once("vue/components/header.php");
?>

<!-- Hero -->
<section id="hero" class="hero">
  <div class="container">
    <div class="row align-items-center">

      <!-- Hero : texte -->
      <div class="col-lg-6">
        <h1 class="hero-text">Bienvenue sur mon portfolio</h1>

        <h2 class="h1 mb-2">
          <span class="name-highlight downloads">Atef Saadi</span>
        </h2>

        <h3 class="h4 mb-4">
          <a href="vue/Bts_Sio.php" class="underline">BTS SIO</a> option SLAM
        </h3>

        <p class="lead mb-4">
          Étudiant en BTS SIO option SLAM, je me spécialise dans le développement d’applications web et de solutions métiers.
        </p>

        <div class="d-flex gap-3 flex-wrap">
          <a href="#projects" class="btn btn-projects">Voir mes projets</a>

          <button type="button" class="btn btn-projects" onclick="openModal('syntheseModal')">
            Tableau de synthèse
          </button>

          <button type="button" class="btn btn-projects" onclick="openPDFModal('assets/documents/CV_Atef_Saadi.pdf', 'CV')">
            CV
          </button>

          <a href="#contact" class="btn btn-projects">Me contacter</a>
        </div>
      </div>

      <!-- Hero : image -->
      <div class="col-lg-6 text-center">
        <div class="profile-container mt-5 mt-lg-0">
          <img
            src="assets/images/atef.png"
            alt="Photo de profil d'Atef Saadi"
            class="profile-img"
            loading="lazy"
            decoding="async"
          >
        </div>
      </div>

    </div>
  </div>
</section>

<!-- À propos -->
<section id="about" class="section custom-border">
  <div class="container">
    <h2 class="title text-center">À propos de moi</h2>

    <div class="row g-4">

      <!-- À propos : présentation -->
      <div class="col-12 col-lg-6">
        <div class="card about-card h-100">
          <div class="card-body">
            <h3 class="mb-4 text-center">
              <i class="fas fa-user-circle me-2" aria-hidden="true"></i>Atef Saadi
            </h3>

            <p>
              Titulaire d’un baccalauréat en mathématiques, option génie des procédés, et d’un BTS
              Hôtellerie-Restauration, j’ai construit un parcours professionnel riche, combinant
              rigueur, sens du service et expérience de terrain dans le secteur de l’hôtellerie.
            </p>

            <p>
              Cette expérience m’a permis de développer des compétences essentielles telles que
              l’organisation, le travail en équipe, l’adaptabilité et la relation client.
            </p>

            <p>
              Aujourd’hui, animé par un fort intérêt pour le numérique, je me réoriente vers
              le développement informatique. Cette reconversion me permet de mobiliser pleinement
              mes capacités d’analyse, ma logique et mon goût pour la résolution de problèmes.
            </p>
          </div>
        </div>
      </div>

      <!-- À propos : formation -->
      <div class="col-12 col-lg-6">
        <div class="card about-card h-100">
          <div class="card-body">
            <h3 class="mb-4 text-center">
              <i class="fas fa-graduation-cap me-2" aria-hidden="true"></i>Formation
            </h3>

            <div class="education-item mb-3">
              <div class="d-flex align-items-center gap-2 mb-1">
                <h4 class="h6 mb-0"><strong>BTS SIO – option SLAM</strong></h4>
                <span class="text-muted">(2024 – 2026)</span>
              </div>
              <p class="mb-1">
                <a href="https://ecoleiris.fr/" target="_blank" rel="noopener noreferrer">
                  IRIS – École Supérieure d’Informatique, Paris
                </a>
              </p>
              <p class="mb-0">
                Formation spécialisée en développement d’applications web et logicielles,
                couvrant l’analyse des besoins, la conception, la programmation, la gestion
                des bases de données et la maintenance applicative.
              </p>
            </div>

            <div class="education-item mb-3">
              <div class="d-flex align-items-center gap-2 mb-1">
                <h4 class="h6 mb-0"><strong>BTS Hôtellerie-Restauration – gestion de restaurant</strong></h4>
                <span class="text-muted">(2010 – 2012)</span>
              </div>
              <p class="mb-1">
                <a href="https://inht-tiziouzou.dz/fr" target="_blank" rel="noopener noreferrer">
                  Institut National d’Hôtellerie et de Tourisme, Tizi Ouzou (Algérie)
                </a>
              </p>
              <p class="mb-0">
                Formation professionnelle orientée vers la gestion opérationnelle, le management
                d’équipe, l’organisation des services et la relation client dans un environnement exigeant.
              </p>
            </div>

            <div class="education-item">
              <div class="d-flex align-items-center gap-2 mb-1">
                <h4 class="h6 mb-0"><strong>Baccalauréat en mathématiques – option génie des procédés</strong></h4>
                <span class="text-muted">(2008)</span>
              </div>
              <p class="mb-1">Lycée Chrif Lerguet, Algérie</p>
              <p class="mb-0">
                Acquisition de bases solides en mathématiques, en physique et en chimie appliquée,
                constituant une préparation aux études supérieures techniques et industrielles.
              </p>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Compétences -->
<section id="skills" class="section custom-border">
  <div class="container">
    <h2 class="title">Compétences – BTS SIO option SLAM</h2>
    <p class="mb-4 text-center">
      Dans le cadre de ma formation en BTS SIO, option SLAM (Solutions Logicielles et Applications Métiers),
      j’acquiers des compétences en conception, en développement et en sécurisation d’applications web
      et logicielles. Je m’appuie pour cela sur des bases solides en programmation, en bases de données
      et en méthodes de conception.
    </p>

    <div class="row">

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Développement Front-end</h3>
            <p>Conception d’interfaces web ergonomiques, structurées et responsives.</p>
            <ul class="skill-list">
              <li><strong>HTML5</strong> : structuration sémantique des pages</li>
              <li><strong>CSS3</strong> : mise en page, design responsive</li>
              <li><strong>JavaScript</strong> : interactions dynamiques et manipulation du DOM</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Développement Back-end</h3>
            <p>Développement de la logique métier et des fonctionnalités côté serveur.</p>
            <ul class="skill-list">
              <li><strong>PHP</strong> : traitement côté serveur et architecture MVC</li>
              <li><strong>CRUD</strong> : création, lecture, mise à jour et suppression des données</li>
              <li><strong>Sessions</strong> : gestion de l’authentification et des rôles utilisateurs</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Développement Java</h3>
            <p>Programmation orientée objet et structuration d’applications.</p>
            <ul class="skill-list">
              <li><strong>Java</strong> : création de classes, objets et méthodes</li>
              <li><strong>POO</strong> : héritage, encapsulation et polymorphisme</li>
              <li><strong>Logique algorithmique</strong> : traitements, conditions et validations</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Bases de données</h3>
            <p>Conception, modélisation et exploitation de bases de données relationnelles.</p>
            <ul class="skill-list">
              <li><strong>MySQL</strong> : création et gestion de bases de données</li>
              <li><strong>SQL</strong> : requêtes, jointures et manipulation des données</li>
              <li><strong>Merise</strong> : modélisation conceptuelle et logique des données</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Conception et méthodes</h3>
            <p>Analyse des besoins, modélisation et organisation du développement.</p>
            <ul class="skill-list">
              <li><strong>UML</strong> : cas d’utilisation et diagrammes de conception</li>
              <li><strong>MVC</strong> : séparation des responsabilités dans une application</li>
              <li><strong>Documentation</strong> : rédaction de dossiers techniques et schémas</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="about-card card h-100">
          <div class="card-body">
            <h3>Sécurité et outils</h3>
            <p>Application des bonnes pratiques de sécurité et utilisation d’outils professionnels.</p>
            <ul class="skill-list">
              <li><strong>Sécurité web</strong> : validation des données et gestion sécurisée des sessions</li>
              <li><strong>Git / GitHub</strong> : gestion de versions et suivi des projets</li>
              <li><strong>API / JSON</strong> : échange et traitement des données</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Certifications -->
<section id="certifications" class="section custom-border">
  <div class="container">
    <h2 class="title">Certifications</h2>
    <p class="mb-4 text-center">
      Cette section présente les certifications que j’ai obtenues au cours de ma formation.
      Elles attestent de mes compétences techniques et de mon engagement dans une démarche
      d’apprentissage continu.
    </p>

    <div class="row justify-content-center">

      <div class="col-lg-4 col-md-6 mb-4">
        <button
          type="button"
          class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable"
          onclick="openPDFModal('assets/documents/certif/CertifHtmlCss.pdf', 'Certificat HTML / CSS')"
        >
          <div class="card-body p-0">
            <img
              src="assets/images/HtmlCssC.png"
              alt="Certificat HTML5 / CSS3"
              class="cert-img"
              loading="lazy"
            >
            <div class="p-3">
              <h3>HTML5 / CSS3</h3>
              <p>Compétences en intégration web et en mise en page responsive.</p>
            </div>
          </div>
        </button>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <button
          type="button"
          class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable"
          onclick="openPDFModal('assets/documents/certif/securite.pdf', 'Certificat Cybersécurité')"
        >
          <div class="card-body p-0">
            <img
              src="assets/images/anssi.png"
              alt="Certificat Cybersécurité"
              class="cert-img"
              loading="lazy"
            >
            <div class="p-3">
              <h3>Cybersécurité</h3>
              <p>Maîtrise des fondamentaux de la sécurité informatique.</p>
            </div>
          </div>
        </button>
      </div>

    </div>
  </div>
</section>

<!-- Projets réalisés -->
<section id="projects" class="section custom-border">
  <div class="container">
    <h2 class="title">Projets réalisés</h2>
    <p class="mb-4 text-center">
      Cette section présente les différents projets que j’ai réalisés au cours de ma formation.
      Ils illustrent mes compétences en développement web, en programmation, en gestion de bases
      de données et en administration d’environnements applicatifs.
    </p>

    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <a href="vue/butterfly.php" class="project-card card h-100 text-decoration-none text-dark">
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/ButterFly/logo-off.png" alt="Projet Butterfly - Site vitrine" loading="lazy" class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>ButterFly</h3>
              <p class="project-date badge bg-secondary">IRIS École, Paris - 10/2025</p>
              <p>Création d’un site vitrine avec PHP et Bootstrap.</p>
              <div class="project-tech">
                <span class="badge bg-dark">HTML / CSS</span>
                <span class="badge bg-dark">PHP</span>
                <span class="badge bg-dark">Bootstrap</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="vue/snakGame.php" class="project-card card h-100 text-decoration-none text-dark">
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/SnakGame/snake-game.webp" alt="Projet SnakeGame" loading="lazy" class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>SnakeGame</h3>
              <p class="project-date badge bg-secondary">IRIS École, Paris - 12/2025</p>
              <p>Modification et adaptation d’un code open source en langage C.</p>
              <div class="project-tech">
                <span class="badge bg-dark">C</span>
                <span class="badge bg-dark">conio.h</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="vue/glpi.php" class="project-card card h-100 text-decoration-none text-dark">
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/Glpi/LogoGLPI.png" alt="Projet GLPI - Installation et configuration" loading="lazy" class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>GLPI</h3>
              <p class="project-date badge bg-secondary">IRIS École, Paris - 10/2024</p>
              <p>Installation et configuration de GLPI dans un environnement virtualisé.</p>
              <div class="project-tech">
                <span class="badge bg-dark">VMware</span>
                <span class="badge bg-dark">Debian 12</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="vue/metaforg.php" class="project-card card h-100 text-decoration-none text-dark">
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/MetaForg/LogoMF.png" alt="Projet MetaForg - Réseau social" loading="lazy" class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>MetaForg</h3>
              <p class="project-date badge bg-secondary">IRIS École, Paris - 04/2025</p>
              <p>Développement d’un réseau social avec PHP, MySQL et JavaScript.</p>
              <div class="project-tech">
                <span class="badge bg-dark">PHP</span>
                <span class="badge bg-dark">MySQL</span>
                <span class="badge bg-dark">JavaScript</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="vue/altimmo.php" class="project-card card h-100 text-decoration-none text-dark">
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/Altimmo/logoAltImmo.png" alt="Projet AltImmo - Agence immobilière" loading="lazy" class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>AltImmo</h3>
              <p class="project-date badge bg-secondary">IRIS École, Paris - 02/2025</p>
              <p>Conception d’un site web complet pour une agence immobilière.</p>
              <div class="project-tech">
                <span class="badge bg-dark">HTML / CSS</span>
                <span class="badge bg-dark">PHP</span>
                <span class="badge bg-dark">Bootstrap</span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="vue/langages-web.php" class="project-card card h-100 text-decoration-none text-dark">
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/langages-web.png" alt="Projet Langages du Web" loading="lazy" class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>Langages du Web</h3>
              <p class="project-date badge bg-secondary">IRIS École, Paris - 04/2025</p>
              <p>Création d’un site de présentation des langages HTML, CSS, PHP et JavaScript.</p>
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

<!-- Stages -->
<section id="stages" class="section custom-border">
  <div class="container">
    <h2 class="title">Stages en entreprise</h2>
    <p class="text-center mb-3">
      Cette section présente mes expériences professionnelles réalisées dans le cadre de ma formation.
      Elles m’ont permis de découvrir le fonctionnement d’une entreprise et de mettre en pratique
      mes compétences techniques dans un environnement concret.
    </p>
    <p class="text-center mb-4">
      Cliquez sur une carte pour consulter l’attestation correspondante.
    </p>

    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4">
        <button
          type="button"
          class="about-card card h-100 w-100 text-start border-0 is-clickable"
          onclick="openPDFModal('assets/documents/stages/Attestation-juin-2025.pdf', 'Attestation de stage 1')"
          aria-label="Ouvrir l’attestation du stage 1"
        >
          <div class="card-body">
            <h3>Stage 1 — Tanios Consulting</h3>
            <p class="text-muted">Saint-Denis • 09/06/2025 au 11/06/2025</p>
            <p>
              Stage réalisé au sein de l’entreprise Tanios Consulting dans le cadre de ma formation en BTS SIO.
              Cette expérience m’a permis de découvrir l’environnement professionnel et de participer à différentes missions.
            </p>
            <ul class="skill-list">
              <li><span>Mission 1 : à compléter</span></li>
              <li><span>Mission 2 : à compléter</span></li>
              <li><span>Technologies / outils : à compléter</span></li>
            </ul>
          </div>
        </button>
      </div>

      <div class="col-lg-6 col-md-12 mb-4">
        <button
          type="button"
          class="about-card card h-100 w-100 text-start border-0 is-clickable"
          onclick="openPDFModal('assets/documents/stages/Attestation-dec-2026.pdf', 'Attestation de stage 2')"
          aria-label="Ouvrir l’attestation du stage 2"
        >
          <div class="card-body">
            <h3>Stage 2 — Tanios Consulting</h3>
            <p class="text-muted">Saint-Denis • 17/11/2026 au 19/12/2026</p>
            <p>
              Ce second stage m’a permis de poursuivre mon immersion en entreprise, de renforcer mes compétences
              techniques et de mieux comprendre les besoins professionnels liés au développement informatique.
            </p>
            <ul class="skill-list">
              <li><span>Mission 1 : à compléter</span></li>
              <li><span>Mission 2 : à compléter</span></li>
              <li><span>Technologies / outils : à compléter</span></li>
            </ul>
          </div>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Veille technologique -->
<section id="tech-watch" class="section custom-border">
  <div class="container">
    <h2 class="title">Veille technologique</h2>
    <p class="text-center mb-4">
      La veille technologique est une démarche continue de recherche, d’analyse et de suivi
      des évolutions du numérique. Elle me permet de rester informé des innovations, des bonnes
      pratiques et des enjeux actuels du développement informatique.
    </p>

    <div class="row g-4 justify-content-center">

      <!-- Veille IA -->
      <div class="col-lg-5 col-md-6">
        <button
          type="button"
          class="project-card card h-100 w-100 text-start border-0 p-0 is-clickable"
          onclick="window.location.href='vue/ia-logiciel.php';"
          aria-label="Ouvrir la veille IA dans le développement"
        >
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/veille-ia.png"
                   alt="Veille IA dans le développement"
                   loading="lazy"
                   class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>IA dans le développement</h3>
              <p class="mb-0 text-muted">
                Assistants de code, productivité, automatisation et limites
              </p>
              <span class="badge bg-primary mt-2">Veille technologique</span>
            </div>
          </div>
        </button>
      </div>

      <!-- Veille Cybersécurité -->
      <div class="col-lg-5 col-md-6">
        <button
          type="button"
          class="project-card card h-100 w-100 text-start border-0 p-0 is-clickable"
          onclick="window.location.href='vue/veille-cybersecurite.php';"
          aria-label="Ouvrir la veille cybersécurité"
        >
          <div class="card-body">
            <div class="project-image">
              <img src="assets/images/cybersecurite.png"
                   alt="Veille cybersécurité"
                   loading="lazy"
                   class="card-img-top">
            </div>
            <div class="project-content mt-3">
              <h3>Cybersécurité</h3>
              <p class="mb-0 text-muted">
                OWASP, SQLi, XSS, protection des données et sécurisation web
              </p>
              <span class="badge bg-danger mt-2">Veille technologique</span>
            </div>
          </div>
        </button>
      </div>

    </div>
  </div>
</section>

<!-- Conclusion -->
<section id="conclusion" class="section custom-border">
  <div class="container">
    <h2 class="title">Conclusion</h2>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card about-card">
          <div class="card-body">
            <p>
              Ce portfolio met en avant les compétences, projets, stages et travaux de veille
              que j’ai réalisés au cours de ma formation en BTS SIO option SLAM.
            </p>

            <p>
              Il reflète mon évolution, ma motivation et mon engagement dans le domaine
              du développement informatique.
            </p>

            <p>
              Mon objectif est de poursuivre ma progression professionnelle et de continuer
              à développer mes compétences dans la conception et le développement d’applications.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="section custom-border">
  <div class="container">
    <h2 class="title">Contact</h2>
    <p class="mb-4 text-center">
      Vous pouvez me contacter pour toute demande d’information, échange professionnel
      ou opportunité liée à mon parcours en BTS SIO option SLAM.
    </p>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-card card h-100">
          <div class="card-body">
            <h3 class="contact-title text-center mb-4">Coordonnées</h3>

            <ul class="contact-list list-unstyled">
              <li class="contact-item mb-3">
                <i class="fas fa-phone contact-icon me-3" aria-hidden="true"></i>
                <span><strong>Téléphone :</strong> 06 38 36 84 48</span>
              </li>

              <li class="contact-item mb-3">
                <i class="fas fa-envelope contact-icon me-3" aria-hidden="true"></i>
                <span><strong>Email :</strong> <a href="mailto:atef_saadi@outlook.fr">atef_saadi@outlook.fr</a></span>
              </li>

              <li class="contact-item mb-3">
                <i class="fas fa-map-marker-alt contact-icon me-3" aria-hidden="true"></i>
                <span><strong>Localisation :</strong> Colombes (92700)</span>
              </li>
            </ul>

            <div class="contact-social mt-4">
              <a href="https://www.linkedin.com/in/atef-saadi/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <i class="fab fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://github.com/ATFsaadi/" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <i class="fab fa-github" aria-hidden="true"></i>
              </a>
              <a href="mailto:atef_saadi@outlook.fr" aria-label="Envoyer un email">
                <i class="fas fa-envelope" aria-hidden="true"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal : tableau de synthèse -->
<div id="syntheseModal" class="custom-modal">
  <div class="custom-modal-content">
    <h2 id="syntheseTitle" class="visually-hidden">Tableau de synthèse</h2>

    <button type="button" class="close-btn" aria-label="Fermer" onclick="closeModal('syntheseModal')">&times;</button>

    <div class="modal-actions mb-3">
      <a href="assets/documents/Tableau-de-synthese-Epreuve.xls" class="btn btn-projects" download>
        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12 16l-6-6h4V4h4v6h4l-6 6zm-7 4h14v2H5v-2z"/>
        </svg>
        Télécharger (Excel officiel)
      </a>

      <a href="assets/documents/Tableau-de-synthese-Epreuve.pdf" class="btn btn-projects" download>
        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12 16l-6-6h4V4h4v6h4l-6 6zm-7 4h14v2H5v-2z"/>
        </svg>
        Télécharger (PDF)
      </a>

      <button type="button" class="btn btn-projects" onclick="printIframeInModal('syntheseModal')">
        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 12v2H8v-4h8v2zm2-10h2c.55 0 1 .45 1 1s-.45 1-1 1h-2v-2z"/>
        </svg>
        Imprimer
      </button>
    </div>

    <iframe
      src="assets/documents/Tableau-de-synthese-Epreuve.pdf"
      title="Tableau de synthèse BTS SIO SLAM"
      class="cv-iframe"
      loading="lazy"
    ></iframe>
  </div>
</div>

<!-- Modal PDF -->
<div id="pdfModal" class="custom-modal">
  <div class="custom-modal-content">
    <h2 id="pdfTitle" class="visually-hidden">Document PDF</h2>

    <button type="button" class="close-btn" aria-label="Fermer" onclick="closePDFModal()">&times;</button>

    <div class="modal-actions mb-3">
      <a id="downloadPDF" href="#" class="btn btn-projects" download>
        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12 16l-6-6h4V4h4v6h4l-6 6zm-7 4h14v2H5v-2z"/>
        </svg>
        Télécharger
      </a>

      <button type="button" class="btn btn-projects" onclick="printIframeInModal('pdfModal')">
        <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 12v2H8v-4h8v2zm2-10h2c.55 0 1 .45 1 1s-.45 1-1 1h-2v-2z"/>
        </svg>
        Imprimer
      </button>
    </div>

    <iframe id="pdfFrame" src="" title="Document PDF" class="cv-iframe" loading="lazy"></iframe>
  </div>
</div>

<?php require_once("vue/components/footer.php") ?>