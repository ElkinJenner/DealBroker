<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Broker - Website</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <?php include "inc/menu.php" ?>
    <!--Main(Principal)-->
    <main class="main">
        <?php include "inc/logo.php" ?>
        <div class="tablero"></div>
        <div class="nube"></div>
        <div class="nave"></div>
        <div class="car"></div>
        <div class="nave_humo"></div>
        <img src="img/banner_main.png">
    </main>
    
    <main>
        <div class="container container_website">
            <h1 class="h1 color_w t_c">UNA EXPERIENCIA ÚNICA, DONDE PODRÁS CONOCER NUEVOS RETOS E INTERACTUAR CONTIGO MISMO</h1>
            <h1 class="color_q t_c">PRÓXIMO LANZAMIENTO</h1>
            <h1 id="conteo" class="big color_q t_c"></h1>
        </div>
    </main>

    <main class="main">
        <aside class="column">
            <div class="column-6 main_avatar">
                <img class="avatar1" src="img/gamer1.png">
            </div>

            <div class="contender_center">
                <h1 class="h1 f_weight color_w t_c">
                    <img src="img/strellas_layout.png"><br>
                    ENFRENTA ADVERSARIOS Y GANA MONEDAS</h1><br>
                <h3 class="f_weight color_s t_c">RESPONDE PREGUNTAS DE TUS ADVERSARIOS Y GANA MONEDAS, RECOLECTA Y HAZ LO QUE QUIERAS CON ELLAS.</h3>
            </div>

            <div class="column-6 main_avatar">
                <img class="avatar2" src="img/gamer2.png">
            </div>
        </aside>
    </main>

    <section class="bg_w">
        <div class="container container_website">
            <h3 class="color_m t_c">FAQ</h3>
            <h1 class="h1 color_m t_c">PREGUNTAS <br> FRECUENTES</h1><br>
            <aside class="faq">

                <article class="faq_item">
                    <input type="checkbox" id="rd1" checked>
                    <label class="title_item_faq" for="rd1">
                        <h2 class="f_weight color_w">¿CÓMO SE JUEGA?</h2>
                    <div class="plus"></div>
                    </label>

                    <div class="content_item_faq">
                        <h3 class="f_weight color_m">El videojuego se enfoca en aplicar tus habilidades estrategicas, ya sea para ganar monedas,
                            cumplir retos y/o convivir dentro de la plataforma con los distintos desafios que se presentan.</h3>
                    </div>
                </article>

                <article class="faq_item">
                    <input type="checkbox" id="rd2">
                    <label class="title_item_faq" for="rd2">
                        <h2 class="f_weight color_w">¿PRÓPOSITO DEL VIDEOJUEGO?</h2>
                    <div class="plus" id="clickfaq"></div>
                    </label>

                    <div class="content_item_faq">
                        <h3 class="f_weight color_m">Interacturar con la plataforma, construir tu propio entorno, responder preguntas, resolver retos, ganar monedas.
                        </h3>
                    </div>
                </article>

                <article class="faq_item">
                    <input type="checkbox" id="rd3">
                    <label class="title_item_faq" for="rd3">
                        <h2 class="f_weight color_w">¿QUÉ PASARÁ CON MI INFORMACIÓN?</h2>
                    <div class="plus" id="clickfaq"></div>
                    </label>

                    <div class="content_item_faq">
                        <h3 class="f_weight color_m">La información es confidencial, no lo usamos con fines de terceros.</h3>
                    </div>
                </article>

            </aside>
        </div>
    </section>

    <?php include "inc/footer.php"?>
</body>
</html>