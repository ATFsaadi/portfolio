<?php
$pageTitle = "BTS SIO - Détails";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>BTS SIO</h1>

    <!-- sommaire -->
    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/Bts_Sio.php#about">1. Présentation</a></li>
      <li><a href="vue/Bts_Sio.php#options">2. Les options</a></li>
      <li><a href="vue/Bts_Sio.php#exams">3. Les épreuves</a></li>
      <li><a href="vue/Bts_Sio.php#career">4. Les débouchés</a></li>
      <li><a href="vue/Bts_Sio.php#studies">5. Poursuite d’études</a></li>
    </ul>

    <!-- 1. présentation -->
    <h2 id="about">1. Présentation</h2>
    <p>
      Le BTS SIO, pour <strong>Services Informatiques aux Organisations</strong>, est un diplôme national
      de niveau Bac +2 qui forme des techniciens supérieurs capables d’intervenir dans le domaine
      de l’informatique au sein des entreprises, des administrations ou des collectivités.
    </p>

    <p>
      Cette formation permet d’acquérir des compétences techniques, méthodologiques et professionnelles
      dans plusieurs domaines : développement d’applications, gestion des données, administration des systèmes,
      maintenance des équipements et cybersécurité.
    </p>

    <p>
      Le BTS SIO se prépare en deux ans après le baccalauréat. Il s’adresse aux étudiants souhaitant
      travailler dans l’informatique ou poursuivre leurs études vers une spécialisation plus avancée.
      La formation comprend des enseignements généraux, des enseignements professionnels, des projets encadrés
      ainsi que des périodes de stage en entreprise.
    </p>

    <!-- 2. les options -->
    <h2 id="options">2. Les options</h2>
    <p>
      À partir d’un socle commun de connaissances, le BTS SIO propose deux spécialités permettant
      de s’orienter selon son projet professionnel.
    </p>

    <div class="options">
      <div class="card p-3">
        <h3>SLAM</h3>
        <p><strong>Solutions Logicielles et Applications Métiers</strong></p>
        <p>
          L’option SLAM est orientée vers la conception, le développement, la maintenance
          et la sécurisation d’applications informatiques.
        </p>
        <ul>
          <li>Développement d’applications web, mobiles ou logicielles</li>
          <li>Conception et gestion de bases de données</li>
          <li>Analyse des besoins et rédaction de documentation technique</li>
          <li>Maintenance évolutive et corrective des applications</li>
          <li>Prise en compte de la cybersécurité dans le développement</li>
        </ul>
        <p>
          Cette spécialité prépare notamment aux métiers de développeur, analyste-programmeur
          ou concepteur d’applications.
        </p>
      </div>

      <div class="card p-3">
        <h3>SISR</h3>
        <p><strong>Solutions d’Infrastructure, Systèmes et Réseaux</strong></p>
        <p>
          L’option SISR est orientée vers l’installation, l’administration, la sécurisation
          et la maintenance des infrastructures réseau et systèmes.
        </p>
        <ul>
          <li>Installation et configuration de serveurs et postes clients</li>
          <li>Gestion des réseaux informatiques et des équipements</li>
          <li>Supervision et maintenance des infrastructures</li>
          <li>Support aux utilisateurs</li>
          <li>Mise en œuvre de solutions de cybersécurité</li>
        </ul>
        <p>
          Cette spécialité prépare notamment aux métiers d’administrateur systèmes et réseaux,
          technicien d’infrastructure ou technicien réseau.
        </p>
      </div>
    </div>

    <!-- 3. examens -->
    <h2 id="exams">3. Les épreuves</h2>
    <p>
      Le BTS SIO comprend des épreuves générales et professionnelles permettant d’évaluer
      aussi bien les connaissances théoriques que les compétences techniques acquises durant la formation.
    </p>

    <div class="card p-3">
      <ul>
        <li><strong>E1</strong> – Culture générale et expression</li>
        <li><strong>E2</strong> – Expression et communication en langue anglaise</li>
        <li><strong>E3</strong> – Mathématiques pour l’informatique</li>
        <li><strong>E4</strong> – Culture économique, juridique et managériale</li>
        <li><strong>E5</strong> – Support et mise à disposition de services informatiques</li>
        <li><strong>E6</strong> – Épreuve professionnelle de spécialité :
          administration des systèmes et réseaux pour SISR,
          ou conception et développement d’applications pour SLAM
        </li>
        <li><strong>E7</strong> – Cybersécurité des services informatiques</li>
      </ul>
    </div>

    <p>
      Certaines épreuves s’appuient sur des situations professionnelles, des projets, des stages
      et des réalisations concrètes menées au cours de la formation.
    </p>

    <!-- 4. les débouchés -->
    <h2 id="career">4. Les débouchés</h2>
    <p>
      Après l’obtention du BTS SIO, plusieurs métiers sont accessibles selon la spécialité choisie.
      Ce diplôme permet une insertion professionnelle rapide dans les métiers de l’informatique.
    </p>

    <div class="debouches">
      <div class="card p-3">
        <h3>SISR</h3>
        <ul>
          <li>Administrateur systèmes et réseaux</li>
          <li>Technicien systèmes et réseaux</li>
          <li>Technicien d’infrastructure</li>
          <li>Gestionnaire de parc informatique</li>
          <li>Technicien support</li>
          <li>Analyste d’exploitation</li>
          <li>Technicien réseaux et télécommunications</li>
        </ul>
      </div>

      <div class="card p-3">
        <h3>SLAM</h3>
        <ul>
          <li>Développeur web</li>
          <li>Développeur d’applications</li>
          <li>Programmeur</li>
          <li>Analyste-programmeur</li>
          <li>Technicien d’études informatiques</li>
          <li>Concepteur de solutions logicielles</li>
          <li>Responsable des services applicatifs</li>
        </ul>
      </div>
    </div>

    <!-- 5. poursuite d'études -->
    <h2 id="studies">5. Poursuite d’études</h2>
    <p>
      Le BTS SIO permet également de poursuivre ses études afin de se spécialiser davantage
      ou d’obtenir un niveau supérieur.
    </p>

    <div class="card p-3">
      <ul>
        <li>Licence professionnelle dans le domaine du développement, des réseaux ou de la cybersécurité</li>
        <li>Bachelor en informatique</li>
        <li>Licence générale en informatique</li>
        <li>École spécialisée en développement ou administration systèmes et réseaux</li>
        <li>Formation en alternance pour approfondir l’expérience professionnelle</li>
      </ul>
    </div>

    <p>
      Le choix entre insertion professionnelle et poursuite d’études dépend du projet de l’étudiant,
      de ses compétences et de son objectif de carrière.
    </p>

  </div>
</main>

<?php require_once(__DIR__ . "/components/footer.php"); ?>