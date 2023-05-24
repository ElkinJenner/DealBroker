var cadena, cod, responder;
let saludar = RegExp("(HOLA|HI|QUE TAL)");
let nombre = RegExp("(LLAMAS|TU NOMBRE|QUIEN ERES)");
let tener = RegExp("(TENER|TENGO|TIENES|HAVE|HAS)");
let edad = /AÑOS/;

function evaluarPreguntas() {
    cadena = document.getElementById('bpregunta').value;
    //cadena = cadena.toUppercase();

    document.getElementById('bpregunta').innerHTML = tener.test(cadena);
    document.getElementById('bpregunta').innerHTML = edad.test(cadena);
    document.getElementById('bpregunta').innerHTML = saludar.test(cadena);
    document.getElementById('bpregunta').innerHTML = nombre.test(cadena);

    if (tener.test(cadena) == true && edad.test(cadena) == true) {
        cod = 4;
    }
    else if (saludar.test(cadena) == true) {
        cod = 1;
    }
    else if (nombre.test(cadena) == true) {
        cod = 2;
    }
    responder();
}

function responder() {
    switch (cod) {
        case 1:
            mensaje = "Hola que tal"
            break;
        case 2:
            mensaje = "No puedo decirte mi nombre"
            break;
        case 4:
            mensaje = "Yo tengo X años"
            break;
        default:
    }
    document.getElementById('respuesta_faq').innerHTML = mensaje;
}