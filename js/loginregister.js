//Botones del Login y Registro
let btnlogin = document.getElementById("btnl");
let btnregister = document.getElementById("btnr");
let c_login = document.getElementById("content_login");
let c_register = document.getElementById("content_register");
let cont = 0;
let cont2 = 1;

function botones() {
    if (cont == 0 && cont2 == 1) {
        c_register.classList.remove('hidden');
        c_login.classList.add('hidden');
        c_register.classList.add('transicion');
        c_login.classList.add('transicion');
        cont = 1;
        cont2 = 0;
    }
    else {
        c_register.classList.add('hidden');
        c_login.classList.remove('hidden');
        cont = 0;
        cont2 = 1;
    }

}
//Dom.addEventListener('Tipo de Evento', funcion, booleano);
btnlogin.addEventListener('click', botones, true);
btnregister.addEventListener('click', botones, true);