//Menu de navegacion
let icono_h = document.getElementById("icono_navegacion");
let navegacion_w = document.getElementById("navegacion_website");
let count =0;

function navegar_menu(){
    if(count==0){
        navegacion_w.classList.remove('hidden');
        icono_h.classList.add('navegacion_icono_cerrar');
        icono_h.classList.add('menu_cerrar');
        icono_h.classList.add('icono_close');
        count =1;
    }
    else{
        navegacion_w.classList.add('hidden');
        icono_h.classList.remove('navegacion_icono_cerrar');
        icono_h.classList.remove('menu_cerrar');
        icono_h.classList.remove('icono_close');
        count =0;
    }

}
icono_h.addEventListener('click', navegar_menu, true);


//Conteo Lanzamiento
const getRemainingTime = deadline => {
    let now = new Date(),
        remainTime = (new Date(deadline) - now + 1000) / 1000,
        remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
        remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
        remainDays = Math.floor(remainTime / (3600 * 24));

    return {
        remainSeconds,
        remainMinutes,
        remainHours,
        remainDays,
        remainTime
    }
};

const conteo = (deadline, elem, finalMessage) => {
    const el = document.getElementById(elem);

    const timerUpdate = setInterval(() => {
        let t = getRemainingTime(deadline);
        el.innerHTML =`${t.remainDays}:${t.remainHours}:${t.remainMinutes}:${t.remainSeconds}`;
        el.innerHTML += `
        <h3 class="font_w"> DÍAS - HORAS - MINUTOS - SEGUNDOS </h3>
        `
        if (t.remainTime <= 1) {
            clearInterval(timerUpdate);
            el.innerHTML = finalMessage;
        }

    }, 1000)
};

conteo('Jun 31 2023 00:00:00 GMT-0500', 'conteo', 'Se acabo la espera');