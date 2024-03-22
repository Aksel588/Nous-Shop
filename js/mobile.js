document.getElementById('mobile-menu').addEventListener('click', function() {
    var menuContainer = document.getElementById('menu-container');
    menuContainer.classList.toggle('active');

    var body = document.getElementById("body");
    if (body.style.overflow === "hidden") {
        body.style.overflow = "scroll";
    } else {
        body.style.overflow = "hidden";
    }
});