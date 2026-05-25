<?php
$pageTitle = "ButterFly JAVA - Projet";
require_once(__DIR__ . "/components/header.php");
?>

<main class="tuto-container">
  <div class="tuto-content">
    <h1>ButterFly - Client lourd</h1>

    <h2>Sommaire</h2>
    <ul class="sommaire">
      <li><a href="vue/butterfly-java.php#objectif">1. Objectif du projet</a></li>
      <li><a href="vue/butterfly-java.php#contexte">2. Contexte</a></li>
      <li><a href="vue/butterfly-java.php#bdd">3. Base de données</a></li>
      <li><a href="vue/butterfly-java.php#architecture">4. Architecture et méthode</a></li>
      <li><a href="vue/butterfly-java.php#poo">5. Programmation orientée objet</a></li>
      <li><a href="vue/butterfly-java.php#fonctionnalites">6. Fonctionnalités</a></li>
      <li><a href="vue/butterfly-java.php#interface">7. Interface Java Swing</a></li>
      <li><a href="vue/butterfly-java.php#traitements">8. Traitements Java et MySQL</a></li>
      <li><a href="vue/butterfly-java.php#difficultes">9. Difficultés rencontrées</a></li>
      <li><a href="vue/butterfly-java.php#ameliorations">10. Améliorations possibles</a></li>
      <li><a href="vue/butterfly-java.php#captures">11. Captures d’écran</a></li>
    </ul>

    <h2 id="objectif">1. Objectif du projet</h2>
    <p>
      Le client lourd ButterFly est une application Java destinée à l’administration d’une agence
      de voyage. Elle permet à un administrateur de gérer les données principales de l’application
      ButterFly depuis une interface installée et exécutée localement.
    </p>
    <p>
      Ce projet complète le client léger réalisé en PHP. Le site web permet la consultation et la
      réservation côté utilisateur, tandis que l’application Java sert principalement à la gestion
      administrative des données.
    </p>

    <h2 id="contexte">2. Contexte</h2>
    <p>
      Ce projet a été réalisé dans le cadre de ma formation en <strong>BTS SIO option SLAM</strong>.
      Il m’a permis de travailler sur une application métier en Java, avec une base de données MySQL
      et une architecture simple respectant la méthode demandée en cours.
    </p>
    <p>
      L’objectif était de créer une application claire, maintenable et facile à présenter à l’oral,
      sans ajouter une architecture trop complexe.
    </p>

    <h2 id="bdd">3. Base de données</h2>
    <p>
      L’application utilise la base de données <strong>bfly</strong>, commune au projet ButterFly.
      Elle contient les informations nécessaires à la gestion des utilisateurs, clients, destinations,
      voyages organisés, offres et réservations.
    </p>
    <ul>
      <li>Gestion des utilisateurs administrateurs</li>
      <li>Gestion des clients</li>
      <li>Gestion des destinations</li>
      <li>Gestion des voyages organisés</li>
      <li>Gestion des offres</li>
      <li>Suivi des réservations destinations et voyages</li>
    </ul>
    <p>
      Les requêtes SQL ont été adaptées pour correspondre aux tables et colonnes de la nouvelle base
      de données, afin d’éviter les erreurs liées aux anciennes structures.
    </p>

    <h2 id="architecture">4. Architecture et méthode utilisée</h2>
    <p>
      Le projet respecte une architecture simple, adaptée à la méthode scolaire :
    </p>
    <ul>
      <li><strong>Vue Swing :</strong> affichage des fenêtres et formulaires Java</li>
      <li><strong>Contrôleur :</strong> lien entre les vues et le modèle</li>
      <li><strong>Modèle :</strong> traitements SQL et accès aux données</li>
      <li><strong>BDD :</strong> stockage des informations dans MySQL</li>
    </ul>
    <p>
      L’organisation générale peut être résumée ainsi :
      <strong>Vue Swing → Contrôleur → Modèle → Base de données MySQL</strong>.
    </p>

    <h2 id="poo">5. Programmation orientée objet</h2>
    <p>
      Ce projet m’a permis de mettre en pratique la <strong>programmation orientée objet</strong>
      avec Java. Le code est organisé autour de classes, d’objets et de méthodes afin de séparer
      les responsabilités entre l’interface, les traitements et l’accès aux données.
    </p>
    <ul>
      <li><strong>Classes :</strong> modèles de structure pour représenter les écrans, les contrôleurs et les traitements</li>
      <li><strong>Objets :</strong> instances utilisées pour manipuler les données et les composants de l’application</li>
      <li><strong>Méthodes :</strong> actions permettant de se connecter, afficher, ajouter, modifier ou supprimer des données</li>
      <li><strong>Encapsulation :</strong> organisation du code pour limiter les mélanges entre affichage, logique métier et requêtes SQL</li>
    </ul>
    <p>
      Cette approche rend l’application plus lisible, plus facile à corriger et plus simple à faire
      évoluer.
    </p>

    <h2 id="fonctionnalites">6. Fonctionnalités disponibles</h2>

    <h3>Authentification</h3>
    <ul>
      <li>Connexion réservée aux administrateurs</li>
      <li>Vérification du rôle utilisateur</li>
      <li>Modification du mot de passe de l’administrateur connecté</li>
    </ul>

    <h3>Gestion administrative</h3>
    <ul>
      <li>Gestion des clients</li>
      <li>Gestion des destinations</li>
      <li>Gestion des voyages organisés</li>
      <li>Gestion des offres</li>
      <li>Gestion des réservations de destinations</li>
      <li>Gestion des réservations de voyages</li>
    </ul>

    <h3>Actions principales</h3>
    <ul>
      <li>Ajouter des données</li>
      <li>Modifier des informations existantes</li>
      <li>Supprimer des éléments</li>
      <li>Filtrer les tableaux</li>
      <li>Afficher le nombre d’éléments présents dans chaque table</li>
    </ul>

    <h2 id="interface">7. Interface Java Swing</h2>
    <p>
      L’interface graphique a été développée avec <strong>Java Swing</strong>. Elle est composée
      d’une fenêtre principale contenant un menu de navigation et plusieurs panneaux de gestion.
    </p>
    <p>
      Chaque écran correspond à une partie importante de l’administration : profil, clients,
      voyages, destinations, offres et réservations.
    </p>
    <p>
      Les tableaux ont été ajustés pour être plus lisibles, avec des colonnes adaptées au contenu
      et une barre de défilement lorsque les données sont trop larges.
    </p>

    <h2 id="traitements">8. Traitements Java et MySQL</h2>
    <p>
      Le lien entre l’application Java et la base de données MySQL est réalisé à l’aide du connecteur
      MySQL pour Java. Les traitements sont centralisés dans la partie modèle afin de garder un code
      organisé.
    </p>
    <ul>
      <li>Connexion à la base de données <strong>bfly</strong></li>
      <li>Exécution des requêtes SQL depuis le modèle</li>
      <li>Transmission des données vers le contrôleur</li>
      <li>Affichage des résultats dans les vues Swing</li>
    </ul>
    <p>
      Le projet reste compatible avec <strong>Java 8</strong> et peut être utilisé dans
      <strong>Eclipse</strong>, conformément à l’environnement utilisé en formation.
    </p>

    <h2 id="difficultes">9. Difficultés rencontrées</h2>
    <ul>
      <li>Adapter l’application Java à la nouvelle base de données</li>
      <li>Supprimer les anciennes fonctionnalités inutiles comme les catégories</li>
      <li>Corriger les requêtes SQL pour respecter les nouvelles colonnes</li>
      <li>Gérer proprement les voyages organisés et les réservations</li>
      <li>Améliorer l’affichage des tableaux Swing</li>
      <li>Garder une architecture simple et compréhensible</li>
    </ul>

    <h2 id="ameliorations">10. Améliorations possibles</h2>
    <ul>
      <li>Améliorer encore l’ergonomie de l’interface graphique</li>
      <li>Ajouter des contrôles plus précis sur les champs de formulaire</li>
      <li>Ajouter une confirmation plus détaillée avant certaines suppressions</li>
      <li>Mettre en place une gestion plus avancée des droits administrateurs</li>
      <li>Ajouter des statistiques simples pour l’administrateur</li>
    </ul>

    <h2 id="captures">11. Captures d’écran</h2>
    <p>
      Cette section peut contenir des captures de l’application Java : écran de connexion,
      menu principal, gestion des voyages, gestion des destinations, offres et réservations.
    </p>

  </div>
</main>

<?php
require_once(__DIR__ . "/components/footer.php");
?>
