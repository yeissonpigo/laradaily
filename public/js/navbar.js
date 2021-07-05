window.addEventListener("scroll", () => {
    //Navbar effect
    var navbar = document.getElementById("navbar__top");
    var text_logo = document.getElementById("text_logo");
    var img_logo = document.getElementById("img_logo");
    var slide = document.getElementById("slide");
    text_logo.classList.toggle("p__moved", window.scrollY > 0);
    navbar.classList.toggle("navbar__down", window.scrollY > 0);
    slide.classList.toggle("navbar__down", window.scrollY > 0);
    img_logo.classList.toggle("img__hidden", window.scrollY > 0);
});

var burger = document.getElementById("burger");
burger.addEventListener("click", () => {
    var slide = document.getElementById("slide");
    slide.classList.toggle("show");
});
