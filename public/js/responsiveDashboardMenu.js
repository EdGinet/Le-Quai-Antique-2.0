let toggle = document.querySelector(".toggle");
let body = document.querySelector("body");
let navContainer = document.querySelector(".nav-container");
let links = document.querySelectorAll(".nav-container nav .menu li a");
let btns = document.querySelectorAll(".btn");
let primary = document.querySelector(".btn-primary");
let secondary = document.querySelector(".btn-secondary");
let title = document.querySelector("#title");

window.addEventListener("load", function () {
    toggle.style.color = "#4B4F59";

    links.forEach(function (link) {
        link.style.color = "#4B4F59";
    })

    btns.forEach(function(btn) {
        btn.style.color = "#fff";
    })

    title.style.color = "#4B4F59";

    navContainer.style.boxShadow = "0 0 20px 1px rgba(0,0,0,.2)";
})

toggle.addEventListener('click', function () {
    body.classList.toggle('open');
    
    if (body.classList.contains('open')) {
        primary.style.color = "#4B4F59";
        secondary.style.color = "#e50817"
    } else {
        btns.forEach(function(btn) {
            btn.style.color = "#fff";
        })
    }
})

window.addEventListener('resize', function () {
    if (window.innerWidth > 1130) {
        document.body.classList.remove('open');        
    }
})

