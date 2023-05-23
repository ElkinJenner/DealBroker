//Expresiones Regulares
const expresiones = {
    nombres: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    categoria: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    mensaje: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
}

const formulario = document.getElementById('FormContact');
const inputs = document.querySelectorAll('#FormContact input');


//Creamos la clase y atributos con constructor
class DatosF {
    constructor(nombres, email, categoria, mensaje) {
        this.nombres = nombres;
        this.email = email;
        this.categoria = categoria;
        this.mensaje = mensaje;
    }
}
//Instanciamos los Objetos de las clase Padre
const datos1 = new DatosF();
datos1.nombres;
datos1.email;
datos1.categoria;
datos1.mensaje;

const validarForm = document.getElementById("FormContact");
validarForm.addEventListener('keyup', (event) => {

    let nombres = document.getElementById("nombres");
    nombres = event.target.value;
    let email = document.getElementById("email");
    email = event.target.value;
    let categoria = document.getElementById("categoria");
    categoria = event.target.value;
    let mensaje = document.getElementById("mensaje");
    mensaje = event.target.value;
    
    let e_email = !(/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test());


    let c_nombres = document.querySelector("#r_nombres");
    let c_email = document.querySelector("#r_email");
    let c_mensaje = document.querySelector("#r_mensaje");

    switch (event.target.name){
        case "nombres":
            if(nombres != "") {
                c_nombres.innerHTML = ``;
                document.getElementById("nombres").classList.add('verify');
            }
            else {
                c_nombres.innerHTML = `
                <h6 class="color_danger f_r"> Debe llenar los campos</h6>
                `;
                document.getElementById("nombres").classList.remove('verify');
                document.getElementById("nombres").classList.add('danger');
            }
        break;

        case "email":
            if (email != "") {
                c_email.innerHTML = ``;
                document.getElementById("email").classList.add('verify');

                    if (email != e_email.test(email)) {
                        c_email.innerHTML = `<h6 class="color_alert f_r">Debes contener un @</h6>`;
                    }
                    else {
                        c_email.innerHTML = `<h6 class="color_w f_r">Listo</h6>`;
                    }
            }
            else {
                c_email.innerHTML = `<h6 class="color_danger f_r">Debes de escribir un email</h6>`;
                document.getElementById("email").classList.remove('verify');
                document.getElementById("email").classList.add('danger');
            }
            break;

        case "mensaje":
            if (mensaje != "") {
                c_mensaje.innerHTML = ``;
                document.getElementById("mensaje").classList.add('verify');
            }
            else {
                c_mensaje.innerHTML = `
                <h6 class="color_danger"> Debe llenar los campos</h6>
                `;
                document.getElementById("mensaje").classList.remove('verify');
                document.getElementById("mensaje").classList.add('danger');
            }
        break;
    }

});