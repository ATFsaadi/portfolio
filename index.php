<?php 
    require_once ("includes/header.php");
?>
<center>
<!-- Section principale -->
<section id="hero" class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-text" data-i18n="Bienvenue sur mon Portfolio">Bienvenue sur mon Portfolio</h1>
                <h1>
                    <span class="name-highlight Downloads" data-i18n="Atef Saadi">Atef Saadi</span></h1>
                <h2 class="h4 mb-4" data-i18n="Étudiant en BTS SIO option SLAM">Étudiant en
                    <a href="Bts_Sio.php">BTS SIO</a>
                    option SLAM</h2>
                <p
                    class="lead mb-4"
                    data-i18n="Développeur passionné spécialisé en création d'applications web et solutions métiers.">Développeur
                    passionné spécialisé en création d'applications web et solutions métiers.</p>
                <div class="d-flex gap-3">
                    <a href="#contact" class="btn btn-projects" data-i18n="Me contacter">Me contacter</a>
                    <a href="#projects" class="btn btn-projects" data-i18n="Voir mes projets">Voir mes projets</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="profile-container mt-5 mt-lg-0">
                    <img
                        src="images/ATEF.jpg"
                        alt="Photo de profil d'Atef Saadi"
                        class="profile-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section à propos -->
<section id="about" class="section custom-border">
    <div class="container">
        <h2 class="title" data-i18n="À Propos de Moi">À Propos de Moi</h2>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-card card h-100">
                    <div class="card-body">
                        <div class="personal-info mt-4">
                            <div class="info-item">
                                <i class="fas fa-user-circle me-2"></i>
                                <span class="info-label" data-i18n="Nom :"></span>
                                <span class="info-value" data-i18n="Atef Saadi">Atef Saadi</span>
                            </div>
                           
                        </div>
                        <br>
                        <p
                            data-i18n="Titulaire d’un bac en génie des procédés et d’un BTS en hôtellerie, j’ai travaillé treize ans dans ce secteur où j’ai acquis de solides compétences en gestion, organisation et relation client.">
                            Titulaire d’un bac en génie des procédés et d’un BTS en hôtellerie, j’ai
                            travaillé treize ans dans ce secteur où j’ai acquis de solides compétences en
                            gestion, organisation et relation client.
                        </p>
                        <p
                            data-i18n="Animé par une passion croissante pour l’informatique, j’ai entrepris une reconversion professionnelle et poursuis actuellement ma deuxième année de BTS SIO option SLAM afin de devenir développeur.">
                            Animé par une passion croissante pour l’informatique, j’ai entrepris une
                            reconversion professionnelle et poursuis actuellement ma deuxième année de BTS
                            SIO option SLAM afin de devenir développeur.
                        </p>
                        <p
                            data-i18n="Motivé, rigoureux et déterminé, je souhaite mettre mes nouvelles compétences en développement au service d’une entreprise innovante.">
                            Motivé, rigoureux et déterminé, je souhaite mettre mes nouvelles compétences en
                            développement au service d’une entreprise innovante.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="education-card card h-100">
                    <div class="card-body">
                        <h3 data-i18n="Formation">Formation</h3>

                        <div class="education-item mb-3">
                            <h4 data-i18n="BTS SIO option SLAM">BTS SIO option SLAM</h4>
                            <p class="text-muted" data-i18n="2025">2025</p>
                            <p>
                                <a href="https://ecoleiris.fr/" target="_blank" rel="noopener noreferrer">IRIS École supérieure d'informatique, Paris</a>
                            </p>
                        </div>

                        <div class="education-item mb-3">
                            <h4 data-i18n="BTS Hôtellerie - Gestion de restaurant">BTS Hôtellerie - Gestion de restaurant</h4>
                            <p class="text-muted" data-i18n="2012">2012</p>
                            <p data-i18n="École d’Hôtellerie et de Tourisme">École d’Hôtellerie et de Tourisme</p>
                        </div>

                        <div class="education-item">
                            <h4 data-i18n="Baccalauréat Génie des Procédés">Baccalauréat Génie des Procédés</h4>
                            <p class="text-muted" data-i18n="2008">2008</p>
                            <p data-i18n="Lycée Chrif Lerguet, Algérie (Mention bien)">Lycée Chrif Lerguet, Algérie (Mention bien)</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Section compétences -->
<section id="skills" class="section bg-dark custom-border">
    <div class="container">
        <h2 class="title" data-i18n="Ma boîte à outils">Ma boîte à outils</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="project-card h-100">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 data-i18n="Front & Back">Front & Back</h3>
                    <ul class="skill-list">
                        <li>
                            <span data-i18n="HTML/CSS – la base solide">HTML/CSS – la base solide</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 90%;"></div>
                            </div>
                        </li>
                        <li>
                            <span data-i18n="PHP – logique serveur">PHP – logique serveur</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 85%;"></div>
                            </div>
                        </li>
                        <li>
                            <span data-i18n="JavaScript – l’âme interactive">JavaScript – l’âme interactive</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 80%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="project-card h-100">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 data-i18n="Données bien rangées">Données bien rangées</h3>
                    <ul class="skill-list">
                        <li>
                            <span data-i18n="MySQL – fidèle et rapide">MySQL – fidèle et rapide</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 80%;"></div>
                            </div>
                        </li>
                        <li>
                            <span data-i18n="SQL – requêtes précises">SQL – requêtes précises</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 75%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="project-card h-100">
                    <div class="skill-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 data-i18n="Réseau & Sécurité">Réseau & Sécurité</h3>
                    <ul class="skill-list">
                        <li>
                            <span data-i18n="Cisco – infrastructures fiables">Cisco – infrastructures fiables</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 85%;"></div>
                            </div>
                        </li>
                        <li>
                            <span data-i18n="VLAN – segmentation intelligente">VLAN – segmentation intelligente</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="--width: 80%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section projets -->
<section id="projects" class="section custom-border">
    <div class="container">
        <h2 class="title" data-i18n="Mes Projets">Mes Projets</h2>
        <div class="row g-4">
            <!-- Carte 1 -->
            <div class="col-lg-4 col-md-6">
                <a href="metaforg.php" class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img
                                src="images/MetaForg/LogoMF.png"
                                alt="Projet Réseau Social"
                                loading="lazy"
                                class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3 data-i18n="Réseau Social">MetaForg</h3>
                            <p
                                class="project-date badge bg-secondary"
                                data-i18n="IRIS Ecole, Paris - 04/2025">IRIS Ecole, Paris - 04/2025</p>
                            <p data-i18n="Création d'un réseau social avec PHP et MySQL">Création d'un réseau social avec PHP et MySQL</p>
                            <div class="project-tech">
                                <span class="badge bg-dark" data-i18n="PHP">PHP</span>
                                <span class="badge bg-dark" data-i18n="MySQL">MySQL</span>
                                <span class="badge bg-dark" data-i18n="JavaScript">JavaScript</span>
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
                            <img
                                src="images/Altimmo/logoAltImmo.png"
                                alt="Projet Agence Immobilière"
                                loading="lazy"
                                class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3 data-i18n="Agence Immobilière">AltImmo</h3>
                            <p
                                class="project-date badge bg-secondary"
                                data-i18n="IRIS Ecole, Paris - 02/2025">IRIS Ecole, Paris - 02/2025</p>
                            <p data-i18n="Site web complet pour une agence immobilière">Site web complet pour une agence immobilière</p>
                            <div class="project-tech">
                                <span class="badge bg-dark" data-i18n="HTML/CSS">HTML/CSS</span>
                                <span class="badge bg-dark" data-i18n="PHP">PHP</span>
                                <span class="badge bg-dark" data-i18n="Bootstrap">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte 3 -->
            <div class="col-lg-4 col-md-6">
                <a
                    href="glpi.php"
                    class="project-card card h-100 text-decoration-none text-dark">
                    <div class="card-body">
                        <div class="project-image">
                            <img
                                src="images/Glpi/LogoGLPI"
                                alt="Installation et de configuration de GLPI"
                                loading="lazy"
                                class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3 data-i18n="Installation GLPI">GLPI</h3>
                            <p
                                class="project-date badge bg-secondary"
                                data-i18n="IRIS Ecole, Paris - 10/2024">IRIS Ecole, Paris - 10/2024</p>
                            <p data-i18n="Maintenance des équipements réseau">Installation et de configuration de GLPI</p>
                            <div class="project-tech">
                                <span class="badge bg-dark" data-i18n="VMWare">VMWare</span>
                                <span class="badge bg-dark" data-i18n="Debian12">Debian12</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="tech-watch" class="section custom-border">
    <div class="container">
        <h2 class="title" data-i18n="Veille Technologique">Veille Technologique</h2>
        <p>La veille technologique est un processus de recherche et d’analyse sur les
            innovations. Le Low-code et le No-code révolutionnent la manière de développer
            des applications en permettant aux non-développeurs et aux professionnels de
            créer des solutions rapidement.</p>
        <div class="row g-4">
            <div class="col-md-6">
                <div
                    class="project-card card h-100"
                    onclick="window.location.href='edge-computing.php';"
                    style="cursor:pointer;">
                    <div class="card-body">
                        <div class="project-image">
                            <img
                                src="images/bigstock-Edge-Computing.webp"
                                alt="Veille sur l'IA"
                                loading="lazy"
                                class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3 data-i18n="Révolution de l'IA">Edge Computing</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="project-card card h-100"
                    onclick="window.location.href='nocode.php';"
                    style="cursor:pointer;">
                    <div class="card-body">
                        <div class="project-image">
                            <img
                                src="images/low-code-no-code.jpg"
                                alt="Veille sur la cybersécurité"
                                loading="lazy"
                                class="card-img-top">
                        </div>
                        <div class="project-content mt-3">
                            <h3 data-i18n="Tendances en Cybersécurité">Low-Code/No-Code</h3>
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
        <h2 class="title" data-i18n="Contact">Contact</h2>
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-card card h-100">
                    <div class="card-body">
                        <h3 class="contact-title" data-i18n="Coordonnées">Coordonnées</h3>
                        <ul class="contact-list list-unstyled">
                            <li class="contact-item mb-3">
                                <i class="fas fa-phone contact-icon me-3"></i>
                                <span>
                                    <strong data-i18n="Téléphone :">Téléphone :</strong>
                                    <span data-i18n="06 38 式 84 48">06 38 式 84 48</span>
                                </span>
                            </li>
                            <li class="contact-item mb-3">
                                <i class="fas fa-envelope contact-icon me-3"></i>
                                <span>
                                    <strong data-i18n="Email :">Email :</strong>
                                    <span data-i18n="atef_saadi@outlook.fr">atef_saadi@outlook.fr</span>
                                </span>
                            </li>
                            <li class="contact-item mb-3">
                                <i class="fas fa-map-marker-alt contact-icon me-3"></i>
                                <span>
                                    <strong data-i18n="Localisation :">Localisation :</strong>
                                    <span data-i18n="Colombes (92700)">Colombes (92700)</span>
                                </span>
                            </li>
                            <li class="contact-social mt-4">
                                <a
                                    href="https://www.linkedin.com/in/atef-saadi/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="LinkedIn">
                                    <i class="fab fa-linkedin me-3"></i>
                                </a>
                                <a
                                    href="https://github.com/ATFsaadi/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="GitHub">
                                    <i class="fab fa-github me-3"></i>
                                </a>
                                <a href="tel:+33638368448" aria-label="Appeler">
                                    <i class="fas fa-phone me-3"></i>
                                </a>
                                <a href="mailto:atef_saadi@outlook.fr" aria-label="Envoyer un email">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-card card h-100">
                    <div class="card-body">
                        <h3 data-i18n="Envoyer un message">Envoyer un message</h3>
                        <form class="contact-form" id="contactForm" method="POST" action="contact.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nom"
                                            placeholder="Votre nom"
                                            required="required"
                                            aria-label="Votre nom"
                                            data-i18n="[placeholder]Votre nom; [aria-label]Votre nom">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            placeholder="Votre email"
                                            aria-label="Votre email"
                                            required="required"
                                            data-i18n="[placeholder]Votre email; [aria-label]Votre email">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-comment"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="sujet"
                                        placeholder="Sujet"
                                        required="required"
                                        aria-label="Sujet"
                                        data-i18n="[placeholder]Sujet; [aria-label]Sujet">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-pen"></i>
                                    </span>
                                    <textarea
                                        class="form-control"
                                        name="message"
                                        placeholder="Votre message"
                                        aria-label="Votre message"
                                        required="required"
                                        data-i18n="[placeholder]Votre message; [aria-label]Votre message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-projects w-100" data-i18n="Envoyer">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</center>
<!-- Footer -->

<?php require_once("includes/footer.php")?>