<?php 
    require_once ("includes/header.php");
?>
<center>
    <!-- Section principale -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-text">Bienvenue sur mon Portfolio</h1>
                    <h1><span class="name-highlight Downloads">Atef Saadi</span></h1>
                    <h2 class="h4 mb-4"><h2><a href="Bts_Sio.php" class="underline">BTS SIO</a> option SLAM
</h2>

                    <p class="lead mb-4">Développeur passionné spécialisé en création d'applications web et solutions métiers.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-projects">Me contacter</a>
                        <a href="#projects" class="btn btn-projects">Voir mes projets</a>
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
    <!-- Section à propos -->
    <section id="about" class="section custom-border">
        <div class="container">
            <h2 class="title">À Propos de Moi</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-card card h-100">
                        <div class="card-body">
                            <div class="personal-info mt-4">
                                <div class="info-item">
                                    <i class="fas fa-user-circle me-2"></i>
                                    <span class="info-label">Nom :</span>
                                    <span class="info-value">Atef Saadi</span>
                                </div>
                            </div>
                            <br>
                            <p>Après un parcours initial en génie des procédés et une longue expérience dans l’hôtellerie, j’ai développé un sens aigu de la rigueur, du service et du travail d’équipe.</p>
                            <p>Mon intérêt croissant pour le numérique m’a conduit à me réorienter vers le développement informatique, un domaine où je peux allier logique, créativité et résolution de problèmes.</p>
                            <p>Aujourd’hui, je m’épanouis dans cette nouvelle voie et je poursuis mon apprentissage avec curiosité et ambition, prêt à relever de nouveaux défis techniques et humains.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="education-card card h-100">
                        <div class="card-body">
                            <h3>Formation</h3>
                            <div class="education-item mb-3">
                                <h4>BTS SIO SLAM</h4>
                                <p class="text-muted">2024–2026</p>
                                <p><a href="https://ecoleiris.fr/" target="_blank" rel="noopener noreferrer">IRIS École Supérieure d’Informatique, Paris</a></p>
                                <p>Spécialisation en développement d’applications web et logiciels.</p>
                            </div>
                            <div class="education-item mb-3">
                                <h4>BTS Hôtellerie – Gestion de restaurant</h4>
                                <p class="text-muted">2010–2012</p>
                                <p><a href="https://inht-tiziouzou.dz/fr" target="_blank" rel="noopener noreferrer">Institut National d'hôtellerie et de tourisme, Tizi Ouzou, Algérie</a></p>
                                <p>École d’Hôtellerie et de Tourisme, formation axée sur la gestion d’équipe et la relation client.</p>
                            </div>
                            <div class="education-item">
                                <h4>Baccalauréat Génie des Procédés</h4>
                                <p class="text-muted">2008</p>
                                <p>Lycée Chrif Lerguet, Algérie — Mention Bien</p>
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
            <h2 class="title">Mes Compétences</h2>
            <p class="mb-4">Passionné par le développement web et les technologies réseau, je combine des compétences techniques variées pour créer des solutions modernes et sécurisées.</p>
            <div class="row">
                <!-- Bloc 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="about-card card h-100">
                        <div class="card-body">
                            <h3>Développement Front & Back</h3>
                            <p>Je crée des interfaces utilisateur fluides avec HTML/CSS et JavaScript, tout en développant des logiques serveur robustes avec PHP, pour des applications web dynamiques.</p>
                            <ul class="skill-list">
                                <li><span>HTML/CSS – la base solide</span><div class="skill-bar"><div class="skill-progress" style="--width: 90%;"></div></div></li>
                                <li><span>PHP – logique serveur</span><div class="skill-bar"><div class="skill-progress" style="--width: 85%;"></div></div></li>
                                <li><span>JavaScript – l’âme interactive</span><div class="skill-bar"><div class="skill-progress" style="--width: 80%;"></div></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Bloc 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="education-card card h-100">
                        <div class="card-body">
                            <h3>Gestion des Données</h3>
                            <p>La gestion efficace des données est au cœur de mes projets. Avec MySQL et SQL, je conçois et interroge des bases de données pour des performances optimales.</p>
                            <ul class="skill-list">
                                <li><span>MySQL – fidèle et rapide</span><div class="skill-bar"><div class="skill-progress" style="--width: 80%;"></div></div></li>
                                <li><span>SQL – requêtes précises</span><div class="skill-bar"><div class="skill-progress" style="--width: 75%;"></div></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Bloc 3 -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="about-card card h-100">
                        <div class="card-body">
                            <h3>Réseau & Sécurité</h3>
                            <p>Mon expertise en réseaux Cisco et en VLAN me permet de concevoir des infrastructures réseau fiables et sécurisées, adaptées aux besoins modernes.</p>
                            <ul class="skill-list">
                                <li><span>Cisco – infrastructures fiables</span><div class="skill-bar"><div class="skill-progress" style="--width: 85%;"></div></div></li>
                                <li><span>VLAN – segmentation intelligente</span><div class="skill-bar"><div class="skill-progress" style="--width: 80%;"></div></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section projets -->
    <section id="projects" class="section custom-border">
        <div class="container">
            <h2 class="title">Mes Projets</h2>
            <div class="row g-4">
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
                    <a href="autreprojet.php" class="project-card card h-100 text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="project-image">
                                <img src="images/AutreProjet/logo.png" alt="SnakeGame" loading="lazy" class="card-img-top">
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
                <!-- Carte 6 -->
                <div class="col-lg-4 col-md-6">
                    <a href="portfolio.php" class="project-card card h-100 text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="project-image">
                                <img src="images/Portfolio/logo.png" alt="Projet" loading="lazy" class="card-img-top">
                            </div>
                            <div class="project-content mt-3">
                                <h3>Projet</h3>
                                <p class="project-date badge bg-secondary">Projet</p>
                                <p>@</p>
                                <div class="project-tech">
                                    <span class="badge bg-dark">@</span>
                                    <span class="badge bg-dark">@</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section veille technologique -->
    <section id="tech-watch" class="section custom-border">
        <div class="container">
            <h2 class="title">Veille Technologique</h2>
            <p>La veille technologique est un processus continu et structuré de collecte et d’analyse d’informations sur les innovations scientifiques et techniques. Elle permet aux organisations d’anticiper les évolutions, de renforcer leur compétitivité et de nourrir une culture de l’innovation et de l’adaptation face aux changements technologiques et sociétaux.</p>
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
                                    <span><strong>Téléphone :</strong> 06 38 式 84 48</span>
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
                                            <input type="text" class="form-control" name="nom" placeholder="Votre nom" required="required" aria-label="Votre nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" placeholder="Votre email" aria-label="Votre email" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                        <input type="text" class="form-control" name="sujet" placeholder="Sujet" required="required" aria-label="Sujet">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        <textarea class="form-control" name="message" placeholder="Votre message" aria-label="Votre message" required="required"></textarea>
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
</center>
<script>
 document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.skill-progress').forEach(bar => {
        const width = bar.style.getPropertyValue('--width');
        bar.style.width = width;
    });
});
</script>
<?php require_once("includes/footer.php")?>