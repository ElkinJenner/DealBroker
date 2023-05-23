var cadena, cod, responder;
var tiempo = RegExp("(CUANDO|EN QUE MOMENTO|Cuando)");
var lugar = RegExp("(DONDE|POR DONDE|Dónde|Donde)");
var causa = RegExp("(POR QUÉ|Por que|CÓMO|Cómo|HAS)");
var participantes = RegExp("(QUIENES|Quien|QUIENES)");
var years = /AÑOS/;

function evaluarPreguntas() {
    cadena = document.getElementById('bpregunta').value;
    //cadena = cadena.toUppercase();

    document.getElementById('bpregunta').innerHTML = tiempo.test(cadena);
    document.getElementById('bpregunta').innerHTML = years.test(cadena);
    document.getElementById('bpregunta').innerHTML = lugar.test(cadena);
    document.getElementById('bpregunta').innerHTML = causa.test(cadena);
    document.getElementById('bpregunta').innerHTML = participantes.test(cadena);

    if (tiempo.test(cadena) == true && years.test(cadena) == true) {
        cod = 4;
    }
    else if (tiempo.test(cadena) == true) {
        cod = 1;
    }
    else if (lugar.test(cadena) == true) {
        cod = 2;
    }
    else if (causa.test(cadena) == true) {
        cod = 3;
    }
    responder();
}

function responder() {
    switch (cod) {
        case 1:
            mensaje = "El lanzamiento del videojuego es el 20 de Junio del 2023"
            break;
        case 2:
            mensaje = "Se juega desde un navegador web, con conexión a internet"
            break;
        case 3:
            mensaje = "El videojuego te permite interactuar con desafios, retos y preguntas"
            break;
        case 4:
            mensaje = "El videojuego es gratuito, pero posiblemente tenga funcionalidades premium en el futuro"
            break;
        default:
    }
    document.getElementById('respuesta').innerHTML = mensaje;
}