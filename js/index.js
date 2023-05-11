document.addEventListener("DOMContentLoaded", setup);

function setup() {
    document.getElementById("bcontact").addEventListener("click", opencontact);
    document.getElementById("closes").addEventListener("click", closecontact);
}

function opencontact(event) {
    let element = document.getElementById("contact");
    element.classList.add("active");
}

function closecontact(event) {
    let element = document.getElementById("contact");
    element.classList.remove("active");
}