
//Nigh Mode /Light Mode
document.querySelector('.switch_content').addEventListener('click', _ => document.body.classList.toggle('light_mode'));

//Menu despegable Mi Cuenta
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

//Dropdow_sidebar
let btn_dropdow_sidebar = document.getElementById("btn_dropdow_sidebar");
let nav_dashboard = document.getElementById("nav_dashboard");
let sidebar = document.getElementById("sidebar");
let wrapper = document.getElementById("wrapper");
let count_s = 0;
function dropdow_nav(){
    if (count_s ==0){
        wrapper.classList.add("wrapper_max");
        sidebar.classList.add("sidebar_min");
        count_s =1;
    }
    else{
        wrapper.classList.remove("wrapper_max");
        sidebar.classList.remove("sidebar_min");
        count_s = 0;
    }
}
btn_dropdow_sidebar.addEventListener('click', dropdow_nav, true);

//Acciones product
//let action_p = document.getElementById("acciones");
let action_p = document.querySelectorAll('#acciones');
//let product_action = document.querySelectorAll('#product_action');
let product_action = document.getElementById("product_action");
let count_p_a = 0;

function product_item() {
    if (count_p_a == 0) {
        product_action.classList.remove("hidden");
        count_p_a = 1;
  }
    else {
        product_action.classList.add("hidden");
        count_p_a = 0;
    }
}
action_p.forEach((action_p) =>{
    action_p.addEventListener('click', product_item, true);
});

//Ventana Modal
let btnOpen = document.getElementById("open");
let btnClose = document.getElementById("close");
let modal = document.getElementById("modal");
let count_m=0;

function modale(){
    if (count_m ==0){
        modal.classList.remove("hidden");
        count_m =1;
    }
    else{
        modal.classList.add("hidden");
        count_m =0;
    }
}
btnOpen.addEventListener('click', modale, true);
btnClose.addEventListener('click', modale, true);
