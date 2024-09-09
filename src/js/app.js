function Menu(e) {
    var menu = document.getElementById("navbar-items");

    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }

    e.classList.contains("bx-menu") ? 
    (menu.classList.add = "flex", e.classList.toggle("bx-x")) : 
    (menu.classList.add = "hidden", e.classList.toggle("bx-menu"));
}


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
        });
    });
});
