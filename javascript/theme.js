// Gestion du toggle de thème
document.addEventListener('DOMContentLoaded', () => {
    const themeLink = document.getElementById('theme-style');
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = themeToggle.querySelector('i');

    // Thème par défaut
    const defaultTheme = 'light';
    let savedTheme = localStorage.getItem('theme') || defaultTheme;
    applyTheme(savedTheme);

    // Toggle thème au clic
    themeToggle.addEventListener('click', () => {
        const newTheme = savedTheme === 'light' ? 'dark' : 'light';
        localStorage.setItem('theme', newTheme);
        applyTheme(newTheme);
        savedTheme = newTheme;
    });

    // Application du thème
    function applyTheme(theme) {
        const particleColors = {
            light: '#4CA8D6', // Bleue pour clair
            dark: '#D6974C'   // Orangée pour sombre
        };
        if (theme === 'light') {
            themeLink.href = 'styles/sun.css';
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeLink.href = 'styles/moon.css';
            themeIcon.classList.replace('fa-sun', 'fa-moon');
        }
        // Déclencher un événement personnalisé pour les particules
        const event = new CustomEvent('themeChange', { detail: { color: particleColors[theme] } });
        document.dispatchEvent(event);
    }
});