particlesJS("particles-js", {
    particles: {
      number: { value: 100, density: { enable: true, value_area: 800 } },
      color: { value: "#D6974C" },
      shape: { type: "triangle" },
      opacity: { value: 0.5, random: true },
      size: { value: 3, random: true },
      line_linked: {
        enable: true,
        distance: 100,
        color: "#D6974C",
        opacity: 0.4,
        width: 1
      },
      move: {
        enable: true,
        speed: 2,
        direction: "none",
        random: false,
        straight: false,
        out_mode: "out",
        bounce: false
      }
    },
    interactivity: {
      detect_on: "window", // important pour capter la souris partout
      events: {
        onhover: {
          enable: true,
          mode: "repulse" // effet de "fuite"
        },
        onclick: {
          enable: true,
          mode: "remove" // ou "push", à toi de voir
        },
        resize: true
      },
      modes: {
        repulse: {
          distance: 200, // plus la distance est grande, plus ça fuit tôt
          duration: 1 // durée du mouvement de fuite
        }
      }
    },
    retina_detect: true
  });
  




  document.addEventListener("DOMContentLoaded", function () {
    const burgerButton = document.getElementById("burger-button");
    const navbar = document.getElementById("navbar");

    // Lorsque l'utilisateur clique sur le bouton hamburger
    burgerButton.addEventListener("click", function () {
        navbar.classList.toggle("show");
    });

    // Ferme le menu si l'utilisateur clique en dehors
    document.addEventListener("click", function (event) {
        if (!navbar.contains(event.target) && !burgerButton.contains(event.target)) {
            navbar.classList.remove("show");
        }
    });
});
