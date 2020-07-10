let section = document.querySelector(".affiche");
let envoyés = document.getElementById("envoyés");

envoyés.addEventListener("click", (e) => {
    section.classList.add("section");
    e.preventDefault();
});