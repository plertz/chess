let nav_button = document.getElementsByClassName("show-nav")[0]
let nav = document.getElementsByClassName("nav")[0]
let span = document.getElementsByClassName("span-nav")[0]
let nav_visible = false

let time = "1s";
let forwards = "forwards"

nav_button.addEventListener("click", function(e) {
    if (nav_visible) {
        nav_visible = false
        document.getElementsByClassName("nav-background")[0].style.display = "none";
        nav.style.animation = "slide_nav_reverse";
        nav.style.animationDuration = time;
        nav.style.animationFillMode = forwards;

        nav_button.style.animation = "slide_show_nav_reverse";
        nav_button.style.animationDuration = time;
        nav_button.style.animationFillMode = forwards;

        span.style.animation = "rotate_span_reverse";
        span.style.animationDuration = time;
        span.style.animationFillMode = forwards;

    } else {
        nav_visible = true
        document.getElementsByClassName("nav-background")[0].style.display = "block";
        nav.style.animation = "slide_nav";
        nav.style.animationDuration = time;
        nav.style.animationFillMode = forwards;

        nav_button.style.animation = "slide_show_nav";
        nav_button.style.animationDuration = time;
        nav_button.style.animationFillMode = forwards;

        span.style.animation = "rotate_span";
        span.style.animationDuration = "2s";
        span.style.animationFillMode = forwards;
    }
})