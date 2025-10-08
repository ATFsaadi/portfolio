<title data-i18n="BTS SIO - Détails">LOW CODE/NO CODE</title>
<?php require_once("includes/header.php"); ?>

<!-- SECTION VEILLE TECHNOLOGIQUE -->
<section>
    <div class="container py-5">
        <h2 class="mb-4">
            Veille technologique : Le Low-code / No-code</h2>

        <h4>1. Introduction</h4>
        <p>La veille technologique est un processus de recherche et d’analyse sur les
            innovations. Le Low-code et le No-code révolutionnent la manière de développer
            des applications en permettant aux non-développeurs et aux professionnels de
            créer des solutions rapidement.</p>

        <h4>2. Historique et contexte</h4>
        <p>Le terme
            <strong>Low-code</strong>
            est apparu en 2014 grâce à Forrester Research. Aujourd’hui, avec la pénurie de
            développeurs et la transformation numérique, ces solutions connaissent une
            croissance rapide.</p>

        <h4>3. Technologies et outils</h4>
        <ul>
            <li>
                <strong>No-code :</strong>
                Bubble, Glide, Webflow, Airtable.</li>
            <li>
                <strong>Low-code :</strong>
                OutSystems, Mendix, PowerApps, AppSheet.</li>
        </ul>

        <h4>4. Cas d’usage</h4>
        <ul>
            <li>Automatiser des processus métiers en entreprise.</li>
            <li>Prototyper rapidement une idée de start-up.</li>
            <li>Créer des applications citoyennes dans le secteur public.</li>
            <li>Lancer une app personnelle sans compétences techniques poussées.</li>
        </ul>

        <h4>5. Avantages et limites</h4>
        <p>
            <strong>✅ Avantages :</strong>
            rapidité, réduction des coûts, accessibilité.
            <br>
            <strong>❌ Limites :</strong>
            dépendance aux plateformes, sécurité, manque de personnalisation.</p>

        <h4>6. Tendances et perspectives</h4>
        <p>Le marché du Low/No-code pourrait dépasser
            <strong>65 milliards $ d’ici 2027</strong>. Avec l’IA intégrée, ces outils
            deviendront un pilier de la transformation numérique.</p>

        <h4>7. Conclusion</h4>
        <p>Le Low/No-code n’a pas vocation à remplacer les développeurs mais à compléter
            leurs compétences. Il s’impose comme une solution incontournable pour créer
            rapidement des applications modernes.</p>
    </div>
</section>

<!-- SECTION ACTUALITÉ -->
<section id="news" class="section bg-dark custom-border">
    <div class="container">
        <h2 class="title">Actualité du Low-Code / No-Code</h2>
        <div id="news-feed" class="row g-4">
            <p>Chargement des actualités...</p>
        </div>
    </div>
</section>


<!-- Script pour charger un flux RSS/JSON -->
<script>
    async function loadNews() {
        const container = document.getElementById("news-feed");
        container.innerHTML = "<p>Chargement en cours...</p>";

        try {
            const response = await fetch("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/tag/no-code");
            const data = await response.json();

            container.innerHTML = "";
            data
                .items
                .slice(0, 6)
                .forEach(article => {
                    const card = document.createElement("div");
                    card.className = "col-lg-4 col-md-6";
                    card.innerHTML = `
                            <div class="project-card card h-100">
                                <div class="card-body">
                                    <h3><a href="${article
                        .link}" target="_blank">${article
                        .title}</a></h3>
                                    <p class="text-muted">${new Date(
                            article.pubDate
                        )
                        .toLocaleDateString("fr-FR")}</p>
                                    <p>${article
                        .description
                        .substring(0, 120)}...</p>
                                </div>
                            </div>
                        `;
                    container.appendChild(card);
                });
        } catch (error) {
            container.innerHTML = "<p>Impossible de charger les actualités pour le moment.</p>";
            console.error(error);
        }
    }

    loadNews();
</script>


<?php require_once("includes/footer.php")?>