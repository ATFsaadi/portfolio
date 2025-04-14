document.addEventListener('DOMContentLoaded', () => {
    const themeLink = document.getElementById('theme-style');  // Lien vers le fichier CSS
    const themeToggle = document.getElementById('theme-toggle');  // Le bouton de changement de thème
    const themeIcon = themeToggle.querySelector('i');  // L'icône de changement de thème (soleil/lune)

    // Vérifie si un thème est déjà sauvegardé dans localStorage
    let savedTheme = localStorage.getItem('theme');
    
    // Si aucun thème n'est trouvé dans localStorage, applique le thème sombre par défaut
    if (!savedTheme) {
        savedTheme = 'dark';  // Par défaut, c'est le thème sombre
        localStorage.setItem('theme', savedTheme);  // Sauvegarde ce choix dans localStorage
    }

    // Applique le thème au chargement de la page
    applyTheme(savedTheme);

    // Gère le clic sur le bouton pour changer de thème
    themeToggle.addEventListener('click', () => {
        const newTheme = (themeLink.getAttribute('href') === 'styles/style.css') ? 'light' : 'dark';  // Basculer entre les thèmes
        localStorage.setItem('theme', newTheme);  // Sauvegarde le nouveau thème
        applyTheme(newTheme);  // Applique le nouveau thème
    });

    // Fonction pour appliquer un thème en fonction du choix
    function applyTheme(theme) {
        if (theme === 'light') {
            themeLink.href = 'styles/light.css';  // Lien vers le fichier CSS pour le thème clair
            themeIcon.classList.replace('fa-moon', 'fa-sun');  // Change l'icône du bouton
        } else {
            themeLink.href = 'styles/style.css';  // Lien vers le fichier CSS pour le thème sombre
            themeIcon.classList.replace('fa-sun', 'fa-moon');  // Change l'icône du bouton
        }
    }
});
