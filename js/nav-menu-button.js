// Constants
const menuButton = document.getElementById("navMenuButton");
const nav = document.getElementById("navMenu");


// On Click event for Menu button
menuButton.addEventListener("click", function() {
    // Toggle tracker attribute
    menuButton.toggleAttribute("show");

    if (menuButton.hasAttribute("show")) {
        nav.classList.remove("d-none");
    }
    else {
        nav.classList.add("d-none");
    }
});