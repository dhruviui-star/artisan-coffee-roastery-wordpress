document.addEventListener("DOMContentLoaded", function () {

    const menuButton = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".site-navigation");

    if (!menuButton || !navigation) {
        return;
    }

    menuButton.addEventListener("click", function () {

        const isOpen = navigation.classList.toggle("is-open");

        menuButton.setAttribute(
            "aria-expanded",
            isOpen ? "true" : "false"
        );

    });

});