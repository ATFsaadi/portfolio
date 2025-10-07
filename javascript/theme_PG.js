document.addEventListener('DOMContentLoaded', () => {
    const themeLink = document.getElementById('theme-style');
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = themeToggle.querySelector('i');
    let savedTheme = localStorage.getItem('theme');
    
    if (!savedTheme) {
        savedTheme = 'dark';
        localStorage.setItem('theme', savedTheme);
    }
    
    applyTheme(savedTheme);
    
    themeToggle.addEventListener('click', () => {
        const newTheme = (themeLink.getAttribute('href') === 'styles/style.css') ? 'light' : 'dark';
        localStorage.setItem('theme', newTheme);
        applyTheme(newTheme);
    });
    
    function applyTheme(theme) {
        if (theme === 'light') {
            themeLink.href = 'styles/light.css';
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeLink.href = 'styles/style.css';
            themeIcon.classList.replace('fa-sun', 'fa-moon');
        }
    }
});