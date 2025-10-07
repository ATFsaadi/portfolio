document.addEventListener('DOMContentLoaded', () => {
    const themeLink = document.getElementById('theme-style'); // Lien CSS thème
    const themeToggle = document.getElementById('theme-toggle'); // Bouton toggle
    const themeIcon = themeToggle.querySelector('i'); // Icône soleil/lune

    // Thème par défaut : 'light'
    const defaultTheme = 'light';
    let savedTheme = localStorage.getItem('theme') || defaultTheme;
    localStorage.setItem('theme', savedTheme); // Sauvegarde thème
    applyTheme(savedTheme); // Applique thème au chargement

    // Toggle thème au clic
    themeToggle.addEventListener('click', () => {
        const newTheme = themeLink.getAttribute('href') === 'styles/style.css' ? 'light' : 'dark';
        localStorage.setItem('theme', newTheme);
        applyTheme(newTheme);
    });

    // Application du thème
    function applyTheme(theme) {
        if (theme === 'light') {
            themeLink.href = 'styles/light.css'; // CSS thème clair
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeLink.href = 'styles/style.css'; // CSS thème sombre
            themeIcon.classList.replace('fa-sun', 'fa-moon');
        }
    }
});