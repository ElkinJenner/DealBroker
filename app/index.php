<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App | Deal Broker</title>
    <?php include "inc/link.php" ?>
</head>
<body>
   <?php require_once "modules/loading.php" ?>

   <div class="game_antesala" id="game_antesala">
    <h4 class="color_w">Press <img src="../img/icons/cursor3.png">Click To Start</h4>
   </div>

    <header>
        <div class="container container_game">
            <article class="navegacion_contender_left navegacion_game">
                <ul>
                    <li><a onclick="play(1)">MI CUENTA </a></li>
                    <li><a onclick="play(2)">PLAYERS </a></li>
                    <li><a onclick="play(3)">TIENDA </a></li>
                    <li><a onclick="play(4)">SALIR </a></li>
                </ul>
            </article>
            <article class="navegacion_contender_right navegacion_game">
                <ul class="iconos_gamers">
                <li>
                    <div class="monedas">
                        <img src="../img/icons/moneda_icon.png">
                        <span class="color_w">15</span>
                    </div>
                </li>
                <li>
                    <a id="btnMusic">
                        <img id="sound_icon" src="../img/icons/sound_icon.gif">
                        <img id="mute_icon" class="hidden" src="../img/icons/mute_icon.png">
                    </a>
                </li>
                <li><a id="fullscreen"><img src="../img/icons/fullscreen_icon.png"></a></li>
                </ul>
            </article>
         
        </div>
    </header>
    <main class="bg_escenario">
        <figure class="logo_game">
            <img src="../img/logo_game.png">
        </figure>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>