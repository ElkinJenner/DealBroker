// Pagina Mi cuenta
let micuenta = document.getElementById("micuenta");
let btnCerrar = document.getElementById("close");
let page_micuenta = document.getElementById("page_micuenta");

micuenta.onclick = function () {
    page_micuenta.classList.remove("hidden");
}

btnCerrar.onclick = function () {
    page_micuenta.classList.add("hidden");

}
