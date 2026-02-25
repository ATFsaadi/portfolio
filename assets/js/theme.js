document.addEventListener('DOMContentLoaded', () => {
    const themeLink = document.getElementById('theme-style');
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = themeToggle.querySelector('i');

    const defaultTheme = 'light';
    let savedTheme = localStorage.getItem('theme') || defaultTheme;
    applyTheme(savedTheme);

    themeToggle.addEventListener('click', () => {
        const newTheme = savedTheme === 'light' ? 'dark' : 'light';
        localStorage.setItem('theme', newTheme);
        applyTheme(newTheme);
        savedTheme = newTheme;
    });

    function applyTheme(theme) {
        const particleColors = {
            light: '#4CA8D6',
            dark: '#D6974C'
        };
        if (theme === 'light') {
            themeLink.href = 'assets/styles/sun.css';
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeLink.href = 'assets/styles/moon.css';
            themeIcon.classList.replace('fa-sun', 'fa-moon');
        }
        const event = new CustomEvent('themeChange', { detail: { color: particleColors[theme] } });
        document.dispatchEvent(event);
    }
});