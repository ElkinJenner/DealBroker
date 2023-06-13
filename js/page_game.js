// Pagina Mi cuenta
let micuenta = document.getElementById("micuenta");
let btnCerrar = document.getElementById("close");
let page_micuenta = document.getElementById("page_micuenta");
// Pagina Players
let players = document.getElementById("players");
let btnCerrar2 = document.getElementById("close2");
let page_players = document.getElementById("page_players");

micuenta.onclick = function () {
    page_micuenta.classList.remove("hidden");
}

btnCerrar.onclick = function () {
    page_micuenta.classList.add("hidden");

}

players.onclick = function () {
    page_players.classList.remove("hidden");
}
btnCerrar2.onclick = function () {
    page_players.classList.add("hidden");

}
