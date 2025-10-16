<title data-i18n="BTS SIO - Détails">Edge Computing</title>
<?php require_once("includes/header.php"); ?>

<!-- SECTION VEILLE TECHNOLOGIQUE -->
<section class="section-texte">
  <div class="container py-5">
    <h2 class="mb-4">Edge Computing</h2>

    <p class="paragraphe">
      Avec la croissance des objets connectés et des capteurs, les volumes de données explosent. 
      Transmettre en continu vers le cloud augmente la latence et la consommation de bande passante. 
      L’Edge Computing est apparu comme une réponse pour améliorer la rapidité et l’efficacité.
    </p>

    <p class="paragraphe">
      Technologies et exemples : IoT + Edge (traitement local sur capteurs), 5G (réduction de la latence via Edge nodes), 
      Edge AI (déploiement de modèles d’intelligence artificielle proches des utilisateurs).
    </p>

    <p class="paragraphe">
      Cas d’usage : véhicules autonomes, Industrie 4.0, santé connectée, villes intelligentes.
    </p>

    <p class="paragraphe">
      Avantages : faible latence, réduction de la bande passante, sécurité accrue. 
      Limites : coûts d’infrastructure, complexité de gestion, sécurité physique.
    </p>

    <p class="paragraphe">
      Tendances et perspectives : D’après Gartner, plus de 75 % des données produites en entreprise seront traitées en périphérie d’ici 2025. 
      L’Edge Computing sera un pilier de l’IA, de l’IoT et des réseaux 6G.
    </p>

    <p class="paragraphe">
      Conclusion : L’Edge Computing transforme le traitement des données et complète le cloud, ouvrant la voie à de nouveaux services temps réel.
    </p>
  </div>
</section>

<!-- SECTION ACTUALITÉ -->
<section id="news" class="section-actualite">
  <div class="container">
    <h2 class="title">Actualité de l’Edge Computing</h2>
    <div id="news-feed" class="news-grid">
      <p>Chargement des actualités...</p>
    </div>
  </div>
</section>

<script>
async function loadNews() {
    const container = document.getElementById("news-feed");
    container.innerHTML = "<p>Chargement des actualités...</p>";

    try {
        const response = await fetch("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/tag/edge-computing");
        const data = await response.json();

        container.innerHTML = ""; 

        data.items.slice(0, 6).forEach(article => {
            const imgMatch = article.description.match(/<img[^>]+src="([^">]+)"/);
            const imageUrl = imgMatch ? imgMatch[1] : "images/default-news.jpg";

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

<?php require_once("includes/footer.php"); ?>
