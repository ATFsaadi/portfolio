document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const headerLeft = document.querySelector('.header-left');

    menuToggle.addEventListener('click', function () {
        if (headerLeft.style.display === 'block') {
            headerLeft.style.display = 'none';
        } else {
            headerLeft.style.display = 'block';
        }
    });
});