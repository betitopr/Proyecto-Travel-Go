var lastScrollTop = 0;

window.onscroll = function() {
    var footer = document.getElementById("footer");
    var st = window.pageYOffset || document.documentElement.scrollTop;

    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        // Estás en la parte inferior de la página, muestra el pie de página
        footer.classList.remove("hidden");
    } else if (st > lastScrollTop) {
        // Estás desplazándote hacia abajo, oculta el pie de página
        footer.classList.add("hidden");
    }

    lastScrollTop = st <= 0 ? 0 : st; // Para compatibilidad con Mobile Safari
};
