window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});


// Afficher/masquer le bouton dès le début du défilement
window.addEventListener('scroll', function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    // Afficher le bouton dès que l'utilisateur commence à défiler (seuil minimal pour éviter les clignotements)
    if (window.scrollY > 100) {  // Vous pouvez changer 100 en 0 pour une apparition immédiate, ou ajuster selon vos besoins
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

// Retour en haut fluide au clic (inchangé)
document.getElementById('scrollToTop').addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});