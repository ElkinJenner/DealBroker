<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Deal Broker</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <main class="main_dashboard">
        <!--Contenido Izquierda-->
        <aside class="sidebar">
            <?php include "inc/nav.php" ?>
        </aside>
        <!--Contenido Derecha-->
        <aside class="wrapper">
            <?php include "inc/header.php" ?>
            <main class="contender_dashboard">
                <div class="container">
                    <article class="color_def title_dashboard">
                        <h5 class="f_weight color_w"><span class="icon-house"></span> / DASHBOARD</h5>
                    </article>
                    <aside class="column">
                        <div class="column-8">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h5 class="font_d color_w">GRÁFICA DE USUARIOS ( PLAYERS )</h5>
                                </div><br>
                               <canvas id="linechart"></canvas>
                            </article>
                        </div>
                        <div class="column-4">
                            <?php require_once "modules/chat_m.php" ?>
                        </div>
                        <div class="column-5">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h5 class="font_d color_w">USUARIOS TOTALES</h5>
                                </div>
                                <canvas id="barchart"></canvas>
                            </article>
                        </div>
                                  
                        <div class="column-3">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h5 class="font_d color_w">MONEDAS TOTALES</h5>
                                </div>
                                <div class="monedas_totales">
                                         <img class="img100" src="../img/icons/monedas_icon.png"> 
                                        <h5 class="f_weight color_w">15 monedas</h5>
                                </div>
                            </article>
                        </div>

                        <div class="column-4">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h5 class="font_d color_w">RANKING PLAYERS</h5>
                                </div>
                            </article>
                        </div>
                        
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>