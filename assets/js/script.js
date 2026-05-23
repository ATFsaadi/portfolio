// Particules
function initParticles(color) {
  const particlesContainer = document.getElementById("particles-js");

  if (!particlesContainer || typeof particlesJS === "undefined") return;

  particlesContainer.innerHTML = "";

  particlesJS("particles-js", {
    particles: {
      number: {
        value: 80,
        density: {
          enable: true,
          value_area: 800
        }
      },
      color: {
        value: color
      },
      shape: {
        type: "triangle",
        stroke: {
          width: 0,
          color: "#000000"
        }
      },
      opacity: {
        value: 0.6,
        random: true,
        anim: {
          enable: false
        }
      },
      size: {
        value: 4,
        random: true,
        anim: {
          enable: false
        }
      },
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
        onhover: {
          enable: true,
          mode: "repulse"
        },
        onclick: {
          enable: true,
          mode: "push"
        },
        resize: true
      },
      modes: {
        repulse: {
          distance: 150,
          duration: 0.8
        },
        push: {
          particles_nb: 4
        }
      }
    },
    retina_detect: true
  });
}

// Couleur des particules selon le thème
function getParticleColor(theme) {
  return theme === "light" ? "#bfa046" : "#D6974C";
}

// Menu burger
function initBurgerMenu() {
  const burgerButton = document.getElementById("burger-button");
  const navbar = document.getElementById("navbar");

  if (!burgerButton || !navbar) return;

  burgerButton.setAttribute("aria-expanded", "false");

  burgerButton.addEventListener("click", (event) => {
    event.stopPropagation();

    const isExpanded = navbar.classList.toggle("show");
    burgerButton.setAttribute("aria-expanded", String(isExpanded));
  });

  document.addEventListener("click", (event) => {
    if (!navbar.contains(event.target) && !burgerButton.contains(event.target)) {
      navbar.classList.remove("show");
      burgerButton.setAttribute("aria-expanded", "false");
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && navbar.classList.contains("show")) {
      navbar.classList.remove("show");
      burgerButton.setAttribute("aria-expanded", "false");
    }
  });
}

// Initialisation générale
document.addEventListener("DOMContentLoaded", () => {
  const initialTheme = localStorage.getItem("theme") || "light";
  initParticles(getParticleColor(initialTheme));
  initBurgerMenu();

  document.addEventListener("themeChange", (event) => {
    const color = event?.detail?.color || getParticleColor(initialTheme);
    initParticles(color);
  });
});