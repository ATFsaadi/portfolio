<?php
$pageTitle = "Veille technologique - IA dans le développement logiciel";
require_once(__DIR__ . "/components/header.php");

function e(string $s): string {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$articles = [
  [
    "title" => "GitHub Copilot coding agent is now generally available",
    "date" => "25/09/2025",
    "source" => "GitHub Changelog",
    "link" => "https://github.blog/changelog/2025-09-25-copilot-coding-agent-is-now-generally-available/",
    "image" => "assets/images/veilleTechno/IALogiciel/agent.webp",
    "tags"  => ["Copilot", "Agent", "Développement"],
    "summary" => "Cet article montre l’évolution de GitHub Copilot vers un assistant capable d’aider le développeur sur des tâches plus complètes."
  ],
  [
    "title" => "GitHub Copilot coding agent 101 : getting started with agentic workflows",
    "date" => "11/09/2025",
    "source" => "GitHub Blog",
    "link" => "https://github.blog/ai-and-ml/github-copilot/github-copilot-coding-agent-101-getting-started-with-agentic-workflows-on-github/",
    "image" => "assets/images/veilleTechno/IALogiciel/workflows.jpg",
    "tags"  => ["Copilot", "Workflows", "Productivité"],
    "summary" => "Cette publication explique comment l’IA peut faire gagner du temps dans certaines tâches de développement."
  ],
  [
    "title" => "Effective context engineering for AI agents",
    "date" => "29/09/2025",
    "source" => "Anthropic Engineering",
    "link" => "https://www.anthropic.com/engineering/effective-context-engineering-for-ai-agents",
    "image" => "assets/images/veilleTechno/IALogiciel/context.png",
    "tags"  => ["Agents", "Contexte", "Méthodes"],
    "summary" => "Cet article montre que la qualité des réponses de l’IA dépend beaucoup du contexte qu’on lui fournit."
  ],
  [
    "title" => "Say hello to a new level of interactivity in Gemini CLI",
    "date" => "15/10/2025",
    "source" => "Google Developers Blog",
    "link" => "https://developers.googleblog.com/say-hello-to-a-new-level-of-interactivity-in-gemini-cli/",
    "image" => "assets/images/veilleTechno/IALogiciel/gemini-cli.jpg",
    "tags"  => ["Gemini", "CLI", "Développeurs"],
    "summary" => "Cet article présente Gemini CLI comme un outil destiné à accompagner les développeurs directement depuis le terminal."
  ]
];
?>

<main class="tuto-container">
  <div class="tuto-content">

    <h2 class="text-center mb-4">IA dans le développement logiciel</h2>

    <section class="mt-4">
      <div class="row g-4">
        <div class="col-lg-8">
          <div class="about-card card h-100 p-4">
            <div class="card-body text-center">
              <p>
                L’intelligence artificielle occupe aujourd’hui une place importante dans le domaine
                du développement logiciel. De nombreux outils permettent d’aider les développeurs
                dans l’écriture du code, la correction d’erreurs, la génération de documentation
                ou l’automatisation de certaines tâches.
              </p>

              <p class="mb-0">
                Cette veille technologique a pour objectif de suivre l’évolution de ces outils,
                de comprendre leurs usages et d’évaluer leur impact dans le métier de développeur.
              </p>

              <div class="p-3 bg-light border-start border-4 border-primary rounded mt-4">
               <h3 class="mb-4">Problématique</h3>
                <p class="mb-0 fst-italic">
                  Dans quelle mesure l’intelligence artificielle peut-elle aider le développeur logiciel,
                  tout en gardant la qualité, la sécurité et la compréhension du code produit ?
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
                <li><strong><i>Feedly</i></strong> : pour suivre les blogs et sites spécialisés.</li>
                <li><strong><i>Google Alerts</i></strong> : pour être informé des nouveautés liées à l’IA et au développement logiciel.</li>
                <li><strong><i>Sources principales</i></strong> : GitHub Blog, OpenAI, Google Developers, Anthropic Engineering.</li>
              </ul>

              <h5 class="mb-4">Notions étudiées</h5>
              <p class="small mb-0">
                Cette veille m’a permis de mieux comprendre les assistants de code,
                les agents IA, la génération de contenu technique et l’aide apportée
                aux développeurs dans leur travail quotidien.
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
                Ce sujet est particulièrement intéressant dans le cadre du BTS SIO option SLAM,
                car il est directement lié au développement d’applications.
              </p>

              <p class="mb-0">
                Les outils d’IA peuvent aider à produire du code plus rapidement,
                à mieux comprendre certaines notions techniques et à gagner du temps
                sur des tâches répétitives.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="about-card card h-100 p-4">
            <div class="card-body">
              <h5 class="mb-4 text-center">Limites et vigilance</h5>

              <ul class="mb-0">
                <li>Le code proposé par l’IA peut contenir des erreurs.</li>
                <li>L’IA ne comprend pas toujours tout le contexte du projet.</li>
                <li>Une mauvaise utilisation peut entraîner des problèmes de qualité ou de sécurité.</li>
                <li>Le développeur doit toujours vérifier, tester et comprendre le résultat obtenu.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="articles" class="mt-5">
  <h2 class="title">Articles retenus</h2>
  <p class="text-center mx-auto mb-4" style="max-width:850px;">
    Dans le cadre de ma veille, j’ai retenu plusieurs publications montrant
    l’évolution des assistants de code et l’intégration croissante de l’IA
    dans le développement logiciel.
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
            L’intelligence artificielle transforme progressivement les pratiques de développement logiciel.
            Elle apporte un gain de temps et peut aider à apprendre plus rapidement.
          </p>

          <p class="mb-0">
            Cependant, elle ne remplace pas les compétences du développeur.
            Il reste indispensable de comprendre, vérifier, tester et sécuriser le code produit.
            Cette veille me permet donc de mieux comprendre les outils qui peuvent accompagner
            mon futur métier.
          </p>
        </div>
      </div>
    </section>

  <section id="sources-ia" class="section custom-border">
    <div class="container">
      <h2 class="title">Sources et veille continue</h2>
      <p class="mb-4 text-center">
        Cette section présente les principales sources que j’utilise pour assurer une veille
        technologique continue autour du développement logiciel, de l’intelligence artificielle
        et des outils numériques.
      </p>

      <div class="row justify-content-center">

        <!-- GitHub -->
        <div class="col-lg-4 col-md-6 mb-4">
          <a
            href="https://github.blog/"
            target="_blank"
            rel="noopener noreferrer"
            class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
          >
            <div class="card-body p-0">
              <img
                src="assets/images/veilleTechno/IALogiciel/github-blog.png"
                alt="GitHub Blog"
                loading="lazy"
                style="width: 100%; height: 180px; object-fit: contain; display: block;"
              >
              <div class="p-2">
                <p class="mb-0">Actualités et nouveautés autour de GitHub.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- OpenAI -->
        <div class="col-lg-4 col-md-6 mb-4">
          <a
            href="https://openai.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
          >
            <div class="card-body p-0">
              <img
                src="assets/images/veilleTechno/IALogiciel/openai.png"
                alt="OpenAI"
                loading="lazy"
                style="width: 100%; height: 180px; object-fit: contain; display: block;"
              >
              <div class="p-2">
                <p class="mb-0">Informations et publications sur l’intelligence artificielle.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Google Developers Blog -->
        <div class="col-lg-4 col-md-6 mb-4">
          <a
            href="https://developers.googleblog.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
          >
            <div class="card-body p-0">
              <img
                src="assets/images/veilleTechno/IALogiciel/google-blog.png"
                alt="Google Developers Blog"
                loading="lazy"
                style="width: 100%; height: 180px; object-fit: contain; display: block;"
              >
              <div class="p-2">
                <p class="mb-0">Articles techniques et nouveautés pour développeurs.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Anthropic -->
        <div class="col-lg-4 col-md-6 mb-4">
          <a
            href="https://www.anthropic.com/engineering"
            target="_blank"
            rel="noopener noreferrer"
            class="about-card card h-100 text-center w-100 border-0 p-0 overflow-hidden is-clickable text-decoration-none text-dark d-block"
          >
            <div class="card-body p-0">
              <img
                src="assets/images/veilleTechno/IALogiciel/anthropic.png"
                alt="Anthropic Engineering"
                loading="lazy"
                style="width: 100%; height: 180px; object-fit: contain; display: block;"
              >
              <div class="p-2">
                <p class="mb-0">Réflexions et travaux sur les agents IA et l’ingénierie.</p>
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
                src="assets/images/veilleTechno/IALogiciel/feedly.png"
                alt="Feedly"
                loading="lazy"
                style="width: 100%; height: 180px; object-fit: contain; display: block;"
              >
              <div class="p-2">
                <p class="mb-0">Outil de veille pour centraliser les flux RSS.</p>
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
                src="assets/images/veilleTechno/IALogiciel/google.png"
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
        Ma veille est organisée avec Feedly pour centraliser les flux RSS
        et avec Google Alerts pour suivre les nouveautés liées à l’IA
        appliquée au développement logiciel.
      </p>
    </div>
  </section>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>