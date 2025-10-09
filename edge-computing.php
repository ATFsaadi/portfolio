<title data-i18n="BTS SIO - Détails">Edge Computing</title>
<?php require_once("includes/header.php"); ?>

<!-- SECTION VEILLE TECHNOLOGIQUE -->
<section>
    <div class="container py-5">
        <h2 class="mb-4">Veille technologique : Edge Computing</h2>

        <h4>1. Contexte</h4>
        <p>Avec la croissance des objets connectés et des capteurs, les volumes de
            données explosent. Transmettre en continu vers le cloud augmente la latence et
            la consommation de bande passante. L’Edge Computing est apparu comme une réponse
            pour améliorer la rapidité et l’efficacité.</p>

        <h4>2. Technologies et exemples</h4>
        <ul>
            <li>
                <strong>IoT + Edge :</strong>
                traitement local des données sur capteurs industriels.</li>
            <li>
                <strong>5G :</strong>
                intégration d’Edge nodes pour réduire la latence.</li>
            <li>
                <strong>Edge AI :</strong>
                déploiement de modèles d’intelligence artificielle au plus près des
                utilisateurs.</li>
        </ul>

        <h4>3. Cas d’usage</h4>
        <ul>
            <li>Véhicules autonomes (décisions en temps réel).</li>
            <li>Industrie 4.0 (maintenance prédictive).</li>
            <li>Santé connectée (analyse locale des données médicales).</li>
            <li>Villes intelligentes (gestion trafic, énergie, sécurité).</li>
        </ul>

        <h4>4. Avantages et limites</h4>
        <p>
            <strong> Avantages :</strong>
            faible latence, réduction de la bande passante, sécurité accrue (données
            traitées localement).<br>
            <strong> Limites :</strong>
            coûts d’infrastructure, complexité de gestion, sécurité physique des
            équipements.</p>

        <h4>5. Tendances et perspectives</h4>
        <p>D’après
            <em>Gartner</em>, plus de 75 % des données produites en entreprise seront
            traitées en périphérie d’ici 2025. L’Edge Computing sera un pilier de l’IA, de
            l’IoT et des réseaux 6G.</p>

        <h4>6. Conclusion</h4>
        <p>L’Edge Computing transforme la manière dont les données sont traitées et
            ouvre la voie à de nouveaux services temps réel. Cette tendance complète le
            cloud, sans le remplacer.</p>
    </div>
</section>

<!-- SECTION ACTUALITÉ -->
<section id="news" class="section bg-dark custom-border">
    <div class="container">
        <h2 class="title">Actualité de l’Edge Computing</h2>
        <div id="news-feed" class="row g-4">
            <p>Chargement des actualités...</p>
        </div>
    </div>
</section>


<!-- Script pour charger les flux RSS -->
<script>
    async function loadNews() {
        const container = document.getElementById("news-feed");
        container.innerHTML = "<p>Chargement en cours...</p>";

        // Flux RSS fiables (FR + EN)
        const sources = [
            {
                url: "https://www.journaldunet.com/rss/",
                lang: "FR"
            }, {
                url: "https://www.lemondeinformatique.fr/flux-rss/",
                lang: "FR"
            }, {
                url: "https://www.edgecomputing-news.com/feed/",
                lang: "EN"
            }, {
                url: "https://techcrunch.com/tag/edge-computing/feed/",
                lang: "EN"
            }, {
                url: "https://www.iotworldtoday.com/feed/",
                lang: "EN"
            }
        ];

        container.innerHTML = ""; // Vider le conteneur

        for (let source of sources) {
            try {
                const response = await fetch(source.url);
                if (!response.ok) {
                    console.warn(`Erreur pour ${source.url}: ${response.status}`);
                    continue; // Passe au flux suivant en cas d'erreur
                }
                const text = await response.text();
                const parser = new DOMParser();
                const xml = parser.parseFromString(text, "application/xml");

                const items = xml.querySelectorAll("item");

                items.forEach((item, index) => {
                    if (index < 2) { // 2 articles par flux
                        const title = item.querySelector("title")
                            ?.textContent || "Sans titre";
                        const link = item.querySelector("link")
                            ?.textContent || "#";
                        const pubDate = item.querySelector("pubDate")
                            ?.textContent;
                        const date = pubDate
                            ? new Date(pubDate).toLocaleDateString("fr-FR")
                            : "";
                        const desc = item.querySelector("description")
                            ?.textContent || "";

                        // Filtrer les articles pertinents pour l'Edge Computing
                       if (title.toLowerCase().includes("edge computing") || desc.toLowerCase().includes("edge computing")) {
                            const card = document.createElement("div");
                            card.className = "col-lg-4 col-md-6";
                            card.innerHTML = `
                            <div class="project-card card h-100">
                                <div class="card-body">
                                    <h3><a href="${link}" target="_blank">${title}</a></h3>
                                    <p class="text-muted">${date}</p>
                                    <p>${desc.substring(
                                0,
                                120
                            )}...</p>
                                    <span class="badge ${source.lang === "FR"
                                ? "bg-primary"
                                : "bg-secondary"}">
                                        ${source.lang}
                                    </span>
                                </div>
                            </div>
                        `;
                            container.appendChild(card);
                        }
                    }
                });
            } catch (error) {
                console.error(`Erreur pour ${source.url}:`, error);
            }
        }

        // Message si aucun article n'est chargé
        if (!container.innerHTML) {
            container.innerHTML = "<p>Aucune actualité pertinente trouvée pour le moment.</p>";
        }
    }

    loadNews();
</script>


<?php require_once("includes/footer.php")?>