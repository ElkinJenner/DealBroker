
function preguntaf(){
    let preguntasb = document.getElementById("bpregunta").value;
    let c_respuesta = document.querySelector("#respuesta");
    c_respuesta.innerHTML += `
    <main class="main">
        <div class="container container_website">
            <h3 class="t_c">${preguntasb}</h3>
        </div>
    </main>
    `;
    return false;
}