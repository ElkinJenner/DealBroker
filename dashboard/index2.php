<?php
require_once "../action/ValidarSesion.php";
?>
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
                        <h6 class="f_weight font_m color_w">HOME</h6>
                        <code class="f_weight font_m"><span class="bx bx-home-alt"></span> HOME / DASHBOARD</code>
                    </article>
                    <aside class="column">
                        <div class="column-8">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h6 class="font_d f_weight color_w">GRÁFICA DE USUARIOS ( PLAYERS )</h6>
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
                                    <h6 class="font_d f_weight color_w">PLAYERS TOTAL</h6>
                                </div>
                                <canvas id="barchart"></canvas>
                            </article>
                        </div>
                                  
                        <div class="column-3">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h6 class="font_d f_weight color_w"> MONEDAS TOTALES</h6>
                                </div>
                                <div class="monedas_totales">
                                         <img class="img100 m_c" src="../img/icons/monedas_icon.png"> 
                                        <h5 class="f_weight t_c color_w">25mil monedas</h5>
                                </div>
                            </article>

                            <article class="widgets bg_def">
                                <div class="pie_chart">
                                        <img src="../img/pie-chart.png"> 
                                        <h6 class="f_weight t_c color_w"> 1,555k <i class="fi-layers"></i> (3.56)</h6>
                                </div>
                            </article>
                        </div>

                        <div class="column-4">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h6 class="font_d f_weight color_w">RANKING PLAYERS</h6>
                                </div>
                                <div class="table_item perfil_admin m_c">
                                    <img src="../img/person2.jpg">
                                    <h6 class="color_w">John Marcos Valderrama</h6>
                                </div>
                                    <div class="table_item perfil_admin m_c">
                                    <img src="../img/person3.jpg">
                                    <h6 class="color_w">John Marcos Valderrama</h6>
                                </div>
                                    <div class="table_item perfil_admin m_c">
                                    <img src="../img/person4.jpg">
                                    <h6 class="color_w">John Marcos Valderrama</h6>
                                </div>
                                    <div class="table_item perfil_admin m_c">
                                    <img src="../img/person1.jpg">
                                    <h6 class="color_w">John Marcos Valderrama</h6>
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