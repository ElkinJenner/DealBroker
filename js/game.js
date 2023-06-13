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

