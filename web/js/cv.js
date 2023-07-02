document.addEventListener("DOMContentLoaded", setup);

function setup() {
    let ongContainer = document.getElementById("ong-slide");
    let ongs = ongContainer.getElementsByClassName("ong");
    ongs.addEventListener("click", toggles);
}

function toggles(event) {
    $(this).classList.add("active").siblings().classList.remove("active");
}
