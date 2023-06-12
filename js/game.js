/* Start Full screen button toggle */
(function () {
    let viewFullScreen = document.getElementById("fullscreen");
    if (viewFullScreen) {
        viewFullScreen.addEventListener("click", function () {
            var docElm = document.documentElement;
            if (docElm.requestFullscreen) {
                docElm.requestFullscreen();
            }
            else if (docElm.msRequestFullscreen) {
                docElm.msRequestFullscreen();
            }
            else if (docElm.mozRequestFullScreen) {
                docElm.mozRequestFullScreen();
            }
            else if (docElm.webkitRequestFullScreen) {
                docElm.webkitRequestFullScreen();
            }
        }, false);
    }

    let cancelFullScreen = document.getElementById("fullscreen");
    if (cancelFullScreen) {
        cancelFullScreen.addEventListener("click", function () {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            }
            else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
            else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            }
            else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }, false);
    }

})();

//Loading
function showLoading() {
    const load = document.getElementById('loading_game');
    load.classList.remove('hidden');
}

function hideLoading() {
    const load = document.getElementById('loading_game');
    load.classList.add('hidden');
}

// Para mostrar el Load
showLoading();

// Simula una operación asincrónica por ejemplo, una petición AJAX
setTimeout(() => {
    // Para ocultar el después de la operación asincrónica
    hideLoading();
}, 10000);

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


