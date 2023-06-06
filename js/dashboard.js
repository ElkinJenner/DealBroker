
//Nigh Mode /Light Mode
document.querySelector('.switch_content').addEventListener('click', _ => document.body.classList.toggle('light_mode'));

let dropdow_toogle = document.getElementById("dropdow_toogle");
let dropdow_menu = document.getElementById("dropdow_menu");
let count = 0;

function menu_overlay(){
    if(count ==0){
        dropdow_toogle.classList.remove('icon-arrow-down6');
        dropdow_menu.classList.remove('hidden');
        count=1;
    }
    else{
        dropdow_menu.classList.add('hidden');
        count=0;
    }
}
dropdow_toogle.addEventListener('click', menu_overlay, true);

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