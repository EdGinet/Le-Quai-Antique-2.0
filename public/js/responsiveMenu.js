const toggle = document.querySelector(".toggle");
const body = document.querySelector("body");
const navContainer = document.querySelector(".nav-container");

toggle.addEventListener('click', function () {
    body.classList.toggle('open');
});

window.addEventListener('resize', function () {
    if (window.innerWidth > 1160) {
        document.body.classList.remove('open');
    }
});

function scrollFunction() {
    if (window.scrollY > 0) {
        navContainer.classList.add('sticky');
    } else {
        navContainer.classList.remove('sticky');
    }
}

window.addEventListener('load', scrollFunction);
window.addEventListener('scroll', scrollFunction);

function applyStickyClass() {
    if (window.location.href.includes('/connexion.php') || window.location.href.includes('/inscription.php') || window.scrollY > 0) {
        navContainer.classList.add('sticky');
    } else {
        navContainer.classList.remove('sticky');
    }
}

if (window.location.href.includes('/connexion.php') || window.location.href.includes('/inscription.php')) {
    window.addEventListener('load', applyStickyClass);
    window.addEventListener('scroll', applyStickyClass);
}
