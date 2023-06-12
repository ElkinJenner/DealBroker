/* Sound click */
let audio = new Audio(),
a = document.getElementById("active");
audio.src = "../sound/click.mp3";
function play(num) {
    audio.play();
}
/* Sound Active */
let btnMusic = document.getElementById("btnMusic");
let sound_icon = document.getElementById("sound_icon");
let mute_icon = document.getElementById("mute_icon");
let music = new Audio();
music.src = "../sound/bgmusic.mp3";
music.volume = 0.6;
music.loop = Infinity;
let contador = 0;

function reproducirAudio() {

    if (contador == 0) {
        music.play();
        contador = 1;
        mute_icon.classList.add("hidden");
        sound_icon.classList.remove("hidden");
    }
    else {
        music.pause();
        contador = 0;
        mute_icon.classList.remove("hidden");
        sound_icon.classList.add("hidden");
    }
}
btnMusic.addEventListener('click', reproducirAudio, true);

//Press Disk To Start
let game_antesala = document.getElementById("game_antesala");
function antesala() {
    if(contador==0){
        music.play();
        game_antesala.classList.add("hidden");
        contador =1;
    }

}
game_antesala.addEventListener('click', antesala, true);
