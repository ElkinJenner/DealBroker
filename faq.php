<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Deal Broker</title>
    <?php include "inc/link.php"?>
</head>
<body class="bg_w">
    <header class="bg_d bgfaq">
        <div class="container container_website">
        <!--Logo-->
        <figure class="logo">
            <a href="./"><img src="img/logo_w.png" id="logo"></a>
        </figure>
            <article class="content_faq">
                <div class="bg_w" id="respuesta"></div>
            <div class="buscador_faq">
                <input type="search" placeholder="Buscar pregunta" id="bpregunta" value="">
                <button type="submit" onclick="evaluarPreguntas()"><img class="img25" src="img/icons/buscador_icono.png"></button>
            </div>
            </article>
        </div>
    </header>

    <section>
        <div class="container">
            <aside class="column">
        
                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono.png">
                        </figure>
                        <h5 class="f_weight color_w">¿Cuando es el lanzamiento del videojuego?</h5>
                    </article>
                </div>
        
                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono2.png">
                        </figure>
                        <h5 class="f_weight color_w">¿De que trata el videojuego 'Deal Broker'?</h5>
                    </article>
                </div>
        
                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono3.png">>
                        </figure>
                        <h5 class="f_weight color_w">¿Dondé se puede jugar y en que plaforma?</h5>
                    </article>
                </div>
        
                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono4.png">>
                        </figure>
                        <h5 class="f_weight color_w">¿Es gratuito o debo pagar algun costo adicional ?</h5>
                    </article>
                </div>

                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono5.png">>
                        </figure>
                        <h5 class="f_weight color_w">¿Es necesario registrarme para jugar ?</h5>
                    </article>
                </div>

                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono6.png">>
                        </figure>
                        <h5 class="f_weight color_w">¿Quienes desarrollan el videojuego?</h5>
                    </article>
                </div>

               <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono7.png">>
                        </figure>
                        <h5 class="f_weight color_w">¿Cómo puedo borrar mi cuenta?</h5>
                    </article>
                </div>

                <div class="column-3">
                    <article class="article_faq bg_d">
                        <figure>
                            <img class="img100 filter_i" src="img/icons/game_icono8.png">>
                        </figure>
                        <h5 class="f_weight color_w">¿Política de y terminos de condición?</h5>
                    </article>
                </div>
                
            </aside>
        </div>
    </section>
    <script src="js/faq.js"></script>
</body>
</html>