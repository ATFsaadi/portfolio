<title data-i18n="BTS SIO - Détails">LOW CODE/NO CODE</title>
<?php require_once("includes/header.php"); ?>

<!-- SECTION VEILLE TECHNOLOGIQUE -->
<section class="section-texte">
  <div class="container py-5">
    <h2 class="mb-4">Le Low-code / No-code</h2>

    <p class="paragraphe">
      Le Low-code et le No-code sont des approches innovantes du développement
      d’applications permettant de créer des solutions numériques avec peu ou pas de
      programmation. Apparues à partir de 2014, ces technologies connaissent
      aujourd’hui une forte croissance, portée par la transformation digitale et la
      pénurie de développeurs.
    </p>

    <p class="paragraphe">
      Cette thématique m’a paru pertinente car elle représente une évolution majeure
      dans le domaine du développement logiciel : elle permet à des utilisateurs non
      techniques de concevoir rapidement des applications fonctionnelles. Des outils
      comme PowerApps, Bubble ou Webflow favorisent la rapidité, la réduction des
      coûts et l’autonomie des utilisateurs.
    </p>

    <p class="paragraphe">
      Malgré certaines limites liées à la sécurité, à la dépendance aux plateformes et
      à la personnalisation, le Low-code / No-code s’impose comme un levier essentiel
      de l’innovation. Il ne remplace pas les développeurs, mais complète leurs
      compétences en rendant la création d’applications plus accessible et
      collaborative. Cette technologie constitue aujourd’hui un pilier de la
      transformation numérique.
    </p>
  </div>
</section>


<!-- SECTION ACTUALITÉ -->
<!-- SECTION ACTUALITÉ -->
<section id="news" class="section-actualite">
  <div class="container">
    <h2 class="title">Actualité du Low-Code / No-Code</h2>
    <div id="news-feed" class="news-grid">
      
      <!-- Exemple d’actualité -->
      <article class="news-item">
        <img src="images/lowcode-news1.jpg" alt="Illustration du low-code" class="news-image">
        <div class="news-content">
          <h3 class="news-title">Microsoft PowerApps accélère sa croissance</h3>
          <p>La plateforme PowerApps continue d'évoluer avec de nouvelles fonctionnalités basées sur l'IA pour simplifier la création d'applications sans code.</p>
        </div>
      </article>

      <!-- Une autre actualité -->
      <article class="news-item">
        <img src="images/webflow-update.jpg" alt="Webflow mise à jour" class="news-image">
        <div class="news-content">
          <h3 class="news-title">Webflow intègre une IA de génération de design</h3>
          <p>Le constructeur de sites Web low-code Webflow a ajouté un générateur de sections automatisé propulsé par l’IA.</p>
        </div>
      </article>

    </div>
  </div>
</section>
>

<!-- Script pour charger un flux RSS/JSON -->
<script>
async function loadNews() {
    const container = document.getElementById("news-feed");
    container.innerHTML = "<p>Chargement des actualités...</p>";

    try {
        // 🔹 Récupère le flux RSS de Medium avec le tag "no-code"
        const response = await fetch("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/tag/no-code");
        const data = await response.json();

        container.innerHTML = ""; // vide le texte de chargement

        // 🔹 On affiche les 6 premiers articles
        data.items.slice(0, 6).forEach(article => {
            // ✅ Extraction de l'image depuis la description (souvent contenue en HTML)
            const imgMatch = article.description.match(/<img[^>]+src="([^">]+)"/);
            const imageUrl = imgMatch ? imgMatch[1] : "images/default-news.jpg"; // image par défaut

            // ✅ Création de la carte actualité
            const newsItem = document.createElement("article");
            newsItem.className = "news-item";
            newsItem.innerHTML = `
                <img src="${imageUrl}" alt="${article.title}" class="news-image">
                <div class="news-content">
                    <h3 class="news-title"><a href="${article.link}" target="_blank">${article.title}</a></h3>
                    <p class="news-date">${new Date(article.pubDate).toLocaleDateString("fr-FR")}</p>
                    <p class="news-desc">${article.description.replace(/<[^>]*>?/gm, '').substring(0, 160)}...</p>
                </div>
            `;
            container.appendChild(newsItem);
        });
    } catch (error) {
        console.error("Erreur lors du chargement des actualités :", error);
        container.innerHTML = "<p>Impossible de charger les actualités pour le moment.</p>";
    }
}

loadNews();
</script>


<?php require_once("includes/footer.php")?>