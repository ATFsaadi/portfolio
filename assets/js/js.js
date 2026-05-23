window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (!header) return;

    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});


// Afficher/masquer le bouton dès le début du défilement
window.addEventListener('scroll', function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    if (!scrollToTopBtn) return;

    if (window.scrollY > 100) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

const scrollToTopBtn = document.getElementById('scrollToTop');
if (scrollToTopBtn) {
  scrollToTopBtn.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
  });
}
