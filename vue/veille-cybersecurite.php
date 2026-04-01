<?php
$pageTitle = "Veille technologique - Cybersécurité dans le développement web";
require_once(__DIR__ . "/components/header.php");

function e(string $s): string {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$articles = [
  [
    "title" => "CodeQL 2.23.0 adds support for Rust log injection and other security detection improvements",
    "date" => "10/09/2025",
    "source" => "GitHub Changelog",
    "link" => "https://github.blog/changelog/2025-09-10-codeql-2-23-0-adds-support-for-rust-log-injection-and-other-security-detection-improvements/",
    "image" => "assets/images/veilleTechno/cybersecurite/codeQl.jpg",
    "tags"  => ["CodeQL", "Sécurité", "Détection"],
    "summary" => "Cet article montre comment un outil comme CodeQL peut aider à repérer plus facilement certains problèmes de sécurité dans le code."
  ],
  [
    "title" => "Incremental security analysis with CodeQL is now available for all languages",
    "date" => "23/09/2025",
    "source" => "GitHub Changelog",
    "link" => "https://github.blog/changelog/2025-09-23-incremental-security-analysis-with-codeql-is-now-available-for-all-languages/",
    "image" => "assets/images/veilleTechno/cybersecurite/SecurityDarkMode.webp",
    "tags"  => ["CodeQL", "CI/CD", "Analyse"],
    "summary" => "Cette publication explique comment intégrer plus facilement l’analyse de sécurité dans le travail quotidien du développeur."
  ],
  [
    "title" => "Cookie Chaos: How to bypass __Host and __Secure cookie prefixes",
    "date" => "03/09/2025",
    "source" => "PortSwigger Research",
    "link" => "https://portswigger.net/research/cookie-chaos-how-to-bypass-host-and-secure-cookie-prefixes",
    "image" => "assets/images/veilleTechno/cybersecurite/cookie.jpg",
    "tags"  => ["Cookies", "Sessions", "Web"],
    "summary" => "Cet article rappelle que les cookies et les sessions doivent être bien configurés pour éviter certains risques de sécurité."
  ],
  [
    "title" => "The Fragile Lock: Novel Bypasses For SAML Authentication",
    "date" => "10/12/2025",
    "source" => "PortSwigger Research",
    "link" => "https://portswigger.net/research/the-fragile-lock",
    "image" => "assets/images/veilleTechno/cybersecurite/fragile.png",
    "tags"  => ["Authentification", "Accès", "Sécurité"],
    "summary" => "Cette recherche montre que la gestion des accès utilisateurs doit être mise en place avec beaucoup de rigueur."
  ]
];
?>

<main class="tuto-container">
  <div class="tuto-content">

    <h2 class="text-center mb-4">Cybersécurité dans le développement web</h2>

    <section class="mt-4">
      <div class="row g-4">
        <div class="col-lg-8">
          <div class="about-card card h-100 p-4">
            <div class="card-body text-center">
              <p>
                La cybersécurité dans le développement web consiste à créer des applications
                capables de mieux protéger les données, les comptes utilisateurs et les échanges
                entre le navigateur et le serveur.
              </p>

              <p class="mb-0">
                Cette veille technologique me permet de suivre les principaux risques liés
                au développement web et de mieux comprendre comment appliquer de bonnes pratiques
                dès la création d’un projet.
              </p>

              <div class="p-3 bg-light border-start border-4 border-primary rounded mt-4">
                <h2 class="mb-4">Problématique</h2>
                <p class="mb-0 fst-italic">
                  Comment développer des applications web plus sûres, tout en tenant compte
                  des nouvelles failles, des outils de détection et des bonnes pratiques ?
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="about-card card h-100 p-4">
            <div class="card-body">
              <h5 class="mb-4">Outils de veille</h5>
              <ul class="small mb-4">
                <li><strong><i>Feedly</i></strong> : pour suivre les blogs spécialisés en cybersécurité.</li>
                <li><strong><i>Google Alerts</i></strong> : pour être informé des nouveautés liées à la sécurité web.</li>
                <li><strong><i>Sources principales</i></strong> : GitHub Security, PortSwigger Research et OWASP.</li>
              </ul>

              <h5 class="mb-4">Notions étudiées</h5>
              <p class="small mb-0">
                Cette veille m’a permis de mieux comprendre la sécurité du code,
                la gestion des sessions, l’authentification des utilisateurs
                et les recommandations de l’OWASP, qui servent de repère
                pour identifier les principaux risques web.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-4">
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="about-card card h-100 p-4">
            <div class="card-body">
              <h5 class="mb-4 text-center">Intérêt pour le BTS SIO SLAM</h5>
              <p>
                Ce sujet est directement lié au BTS SIO option SLAM, car un développeur
                ne doit pas seulement créer une application qui fonctionne, mais aussi
                une application fiable et sécurisée.
              </p>

              <p class="mb-0">
                En développement web, la sécurité concerne les formulaires,
                les comptes utilisateurs, les bases de données, les sessions
                et les échanges entre le client et le serveur.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="about-card card h-100 p-4">
            <div class="card-body">
              <h5 class="mb-4 text-center">Enjeux et vigilance</h5>

              <ul class="mb-0">
                <li>Une application peut sembler correcte tout en contenant une faille.</li>
                <li>La gestion des accès et des sessions doit être faite avec sérieux.</li>
                <li>Les outils aident, mais ils ne remplacent pas la vérification humaine.</li>
                <li>Le développeur doit tester, relire et comprendre ce qu’il met en place.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="articles" class="mt-5">
      <h2 class="title">Articles retenus</h2>
      <p class="text-center mx-auto mb-4" style="max-width:850px;">
        Dans le cadre de cette veille, j’ai retenu plusieurs publications montrant
        l’importance de la sécurité du code, de la gestion des accès
        et de la protection des sessions.
      </p>

      <div class="row g-3 mt-2">
        <?php foreach ($articles as $article): ?>
          <div class="col-lg-6 col-md-6">
            <a
              href="<?= e($article['link']); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="card h-100 shadow-sm border-0 text-decoration-none d-block"
            >
              <div class="overflow-hidden">
                <img
                  src="<?= e($article['image']); ?>"
                  alt="<?= e($article['title']); ?>"
                  class="card-img-top"
                  loading="lazy"
                  style="height:170px; object-fit:cover;"
                  onerror="this.src='assets/images/articles/default.jpg'">
              </div>

              <div class="card-body d-flex flex-column p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <span class="badge bg-secondary small"><?= e($article['source']); ?></span>
                  <span class="text-muted small"><?= e($article['date']); ?></span>
                </div>

                <h3 class="fw-bold mb-2" style="font-size:1.05rem; min-height:2.8rem; line-height:1.35;">
                  <?= e($article['title']); ?>
                </h3>

                <p class="small text-muted mb-3" style="line-height:1.5;">
                  <?= e($article['summary']); ?>
                </p>

                <div class="mb-2 text-center">
                  <?php foreach ($article['tags'] as $tag): ?>
                    <span class="badge bg-dark small me-1"><?= e($tag); ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="mt-5">
      <div class="card about-card p-4">
        <div class="card-body">
          <h2 class="title">Conclusion</h2>

          <p>
            La cybersécurité est une partie essentielle du développement web.
            Elle doit être prise en compte dès la conception d’une application.
          </p>

          <p class="mb-0">
            Cette veille m’a permis de mieux comprendre l’importance des bonnes pratiques,
            de la protection des accès et de la vérification du code
            pour produire des applications plus fiables et plus professionnelles.
          </p>
        </div>
      </div>
    </section>

    <section id="sources" class="section custom-border">
      <div class="container">
        <h2 class="title">Sources et veille continue</h2>
        <p class="mb-4 text-center">
          Cette section présente les principales sources que j’utilise pour assurer une veille continue
          en cybersécurité. Elles me permettent de suivre l’actualité, les nouvelles vulnérabilités,
          ainsi que les bonnes pratiques liées à la sécurité web.
        </p>

        <div class="row justify-content-center">

          <!-- GitHub -->
          <div class="col-lg-4 col-md-6 mb-4">
            <a
              href="https://github.blog/security/"
              target="_blank"
              rel="noopener noreferrer"
              class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
            >
              <div class="card-body p-0">
                <img
                  src="assets/images/veilleTechno/cybersecurite/github-security.png"
                  alt="GitHub Security Blog"
                  loading="lazy"
                  style="width: 100%; height: 180px; object-fit: contain; display: block;"
                >
                <div class="p-2">
                  <p class="mb-0">Actualités et nouveautés autour de la sécurité du code.</p>
                </div>
              </div>
            </a>
          </div>

          <!-- PortSwigger -->
          <div class="col-lg-4 col-md-6 mb-4">
            <a
              href="https://portswigger.net/research"
              target="_blank"
              rel="noopener noreferrer"
              class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
            >
              <div class="card-body p-0">
                <img
                  src="assets/images/veilleTechno/cybersecurite/portswigger.png"
                  alt="PortSwigger Research"
                  loading="lazy"
                  style="width: 100%; height: 180px; object-fit: contain; display: block;"
                >
                <div class="p-2">
                  <p class="mb-0">Recherches et analyses avancées autour des vulnérabilités web.</p>
                </div>
              </div>
            </a>
          </div>

          <!-- OWASP -->
          <div class="col-lg-4 col-md-6 mb-4">
            <a
              href="https://owasp.org/"
              target="_blank"
              rel="noopener noreferrer"
              class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
            >
              <div class="card-body p-0">
                <img
                  src="assets/images/veilleTechno/cybersecurite/OWASP.png"
                  alt="OWASP"
                  loading="lazy"
                  style="width: 100%; height: 180px; object-fit: contain; display: block;"
                >
                <div class="p-2">
                  <p class="mb-0">Référence majeure pour les bonnes pratiques et les risques applicatifs.</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Feedly -->
          <div class="col-lg-4 col-md-6 mb-4">
            <a
              href="https://feedly.com/"
              target="_blank"
              rel="noopener noreferrer"
              class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
            >
              <div class="card-body p-0">
                <img
                  src="assets/images/veilleTechno/cybersecurite/feedly.png"
                  alt="Feedly"
                  loading="lazy"
                  style="width: 100%; height: 180px; object-fit: contain; display: block;"
                >
                <div class="p-2">
                  <p class="mb-0">Outil de veille permettant de centraliser les flux RSS spécialisés.</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Google Alerts -->
          <div class="col-lg-4 col-md-6 mb-4">
            <a
              href="https://www.google.com/alerts"
              target="_blank"
              rel="noopener noreferrer"
              class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
            >
              <div class="card-body p-0">
                <img
                  src="assets/images/veilleTechno/cybersecurite/google.png"
                  alt="Google Alerts"
                  loading="lazy"
                  style="width: 100%; height: 180px; object-fit: contain; display: block;"
                >
                <div class="p-2">
                  <p class="mb-0">Alertes automatiques pour suivre les nouveautés du domaine.</p>
                </div>
              </div>
            </a>
          </div>

        </div>

        <p class="text-muted small text-center mt-4">
          Ma veille est organisée avec Feedly pour centraliser les flux RSS et avec Google Alerts
          pour suivre les nouveautés liées à la sécurité web à partir de mots-clés ciblés.
        </p>
      </div>
    </section>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>