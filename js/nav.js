var navbar = document.getElementById('mainNavJS');

window.addEventListener('scroll', function(event) {
    event.preventDefault();

    if (window.scrollY <= 1) {
        navbar.classList.add('navbar-main-noscroll');
        navbar.classList.add('navbar-dark');
        navbar.classList.remove('navbar-main-scroll');
        navbar.classList.remove('navbar-light');
        document.getElementById("navbarMainLogo").src = "images/logo_w.png";
    } else {
        navbar.classList.add('navbar-main-scroll');
        navbar.classList.add('navbar-light');
        navbar.classList.remove('navbar-main-noscroll');
        navbar.classList.remove('navbar-dark');
        document.getElementById("navbarMainLogo").src = "images/logo.png";
    }
});