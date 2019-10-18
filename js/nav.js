var navbar = document.getElementById('mainNavJS');

window.addEventListener('scroll', function(event) {
    event.preventDefault();

    if (window.scrollY <= 1) {
        navbar.classList.add('main-nav-noscroll');
        navbar.classList.add('navbar-dark');
        navbar.classList.remove('main-nav-scroll');
        navbar.classList.remove('navbar-light');
    } else {
        navbar.classList.add('main-nav-scroll');
        navbar.classList.add('navbar-light');
        navbar.classList.remove('main-nav-noscroll');
        navbar.classList.remove('navbar-dark');
    }
});