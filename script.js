const btn = document.getElementById("btn-login");
const card = document.getElementById("card-login");

btn.addEventListener("click", (e) => {
    e.stopPropagation();
    card.classList.toggle("ativo");
});

document.addEventListener("click", (e) => {
    if (!card.contains(e.target) && !btn.contains(e.target)) {
        card.classList.remove("ativo");
    }
});