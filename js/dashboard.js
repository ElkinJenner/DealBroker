//Nigh Mode /Light Mode
document.querySelector('.switch_content').addEventListener('click', _ => document.body.classList.toggle('light_mode'));

//Ventana Modal
let btnOpen = document.getElementById("open");
let btnClose = document.getElementById("close");
let modal = document.getElementById("modal");

btnOpen.onclick = function () {
    modal.style.display = "block";
}

btnClose.onclick = function () {
    modal.style.display = "none";
}