<?php
require_once "../action/ValidarSesion.php";
require_once "../action/conexion.php";
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
        <?php include "inc/nav.php" ?>
        <!--Contenido Derecha-->
        <aside class="wrapper" id="wrapper">
            <?php include "inc/header.php" ?>
            <main class="contender_dashboard">
                <div class="container container_dashboard">
                    <!--Titulo panel-->
                    <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">HOME</h6>
                        <code class="f_weight font_m"><span class="bx bx-home-alt"></span> HOME / DASHBOARD</code>
                    </article>

                    <aside class="column_2">
                        <div class="left">
                            <aside class="column">
                                <div class="column-6">
                                    <article class="widgets widgets_h">
                                        <img src="../img/a1.jpg">
                                    </article>

                                    <article class="widgets widgets_h">
                                        <img src="../img/a2.jpg">
                                    </article>
                                </div>

                                <div class="column-6">
                                    <article class="widgets widgets_h">
                                       <img src="../img/a3.jpg">
                                    </article>

                                     <article class="widgets widgets_h">
                                       <img src="../img/a4.jpg">
                                    </article>

                                </div>
                            </aside>
                        </div>
                        <div class="right">
                            <article class="widgets widgets_h last_child">
                                <img src="../img/b1.jpg">
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