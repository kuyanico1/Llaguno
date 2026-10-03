// Mobile Navigation
const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.site-nav');

if (menuButton && navigation) {
    menuButton.addEventListener('click', function () {
        const isOpen = navigation.classList.toggle('open');
        menuButton.setAttribute('aria-expanded', isOpen);
    });

    navigation.addEventListener('click', function (event) {
        if (event.target.matches('a')) {
            navigation.classList.remove('open');
            menuButton.setAttribute('aria-expanded', 'false');
        }
    });
}
