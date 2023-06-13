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
   <?php
   require_once "modules/loading.php";
   require_once "modules/press.php";
   require_once "inc/header.php";
   ?>
   <!--Escenario principal -->
    <main class="bg_escenario">
        <figure class="logo_game">
            <img src="../img/logo_game.png">
        </figure>
    </main>
    <!--Escenario Páginas -->
    <main id="page_micuenta" class="bg_q game_main hidden">
         <a onclick="play(1)" class="cerrar_game_main bg_m"><img id="close" src="../img/icons/close_icon.png"></a>
            <aside class="game_main_sidebar">
                <nav>
                    <ul>
                        <li onclick="play(1)"><a class="color_d">ADQUISICIONES </a></li>
                        <li onclick="play(2)"><a class="color_d">PREGUNTAS </a></li>
                        <li onclick="play(3)"><a class="color_d">RETOS </a></li>
                        <li onclick="play(4)"><a class="color_d">CONFIGURACIÓN </a></li>
                    </ul>
                </nav>
            </aside>
            <aside class="game_main_wrapper">
                <div class="container container_game">
                    <article class="game_main_head">
                        <h3 class="t_c">ADQUISICIONES</h3>
                    </article>
                </div>
            </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>