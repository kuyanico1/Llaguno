const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.site-nav');

if (menuButton && navigation) {
    menuButton.addEventListener('click', function () {
        const isOpen = navigation.classList.toggle('open');
        menuButton.setAttribute('aria-expanded', String(isOpen));
    });

    navigation.addEventListener('click', function (event) {
        if (event.target.matches('a')) {
            navigation.classList.remove('open');
            menuButton.setAttribute('aria-expanded', 'false');
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 820) {
            navigation.classList.remove('open');
            menuButton.setAttribute('aria-expanded', 'false');
        }
    });
}
