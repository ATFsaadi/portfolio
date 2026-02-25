// Configuration des particules avec Particles.js
function initParticles(color) {
    particlesJS("particles-js", {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: color },
            shape: { type: "triangle", stroke: { width: 0, color: "#000000" } },
            opacity: { value: 0.6, random: true, anim: { enable: false } },
            size: { value: 4, random: true, anim: { enable: false } },
            line_linked: {
                enable: true,
                distance: 120,
                color: color,
                opacity: 0.5,
                width: 1
            },
            move: {
                enable: true,
                speed: 3,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
                bounce: false
            }
        },
        interactivity: {
            detect_on: "window",
            events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" },
                resize: true
            },
            modes: {
                repulse: { distance: 150, duration: 0.8 },
                push: { particles_nb: 4 }
            }
        },
        retina_detect: true
    });
}


document.addEventListener("DOMContentLoaded", function () {
  
    const initialTheme = localStorage.getItem('theme') || 'light';
    const initialColor = initialTheme === 'light' ? '#4CA8D6' : '#D6974C';
    initParticles(initialColor);

    document.addEventListener('themeChange', (event) => {
        initParticles(event.detail.color);
    });


    const burgerButton = document.getElementById("burger-button");
    const navbar = document.getElementById("navbar");


    if (!burgerButton || !navbar) {
        console.error("Erreur : Éléments burger-button ou navbar introuvables.");
        return;
    }


    burgerButton.addEventListener("click", function (event) {
        event.stopPropagation();
        const isExpanded = navbar.classList.toggle("show");
        burgerButton.setAttribute("aria-expanded", isExpanded);
    });


    document.addEventListener("click", function (event) {
        if (!navbar.contains(event.target) && !burgerButton.contains(event.target)) {
            navbar.classList.remove("show");
            burgerButton.setAttribute("aria-expanded", "false");
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && navbar.classList.contains("show")) {
            navbar.classList.remove("show");
            burgerButton.setAttribute("aria-expanded", "false");
        }
    });
});