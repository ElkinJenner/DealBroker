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
                        <div class="column-6">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h6 class="font_d f_weight color_w">GRÁFICA DE USUARIOS ( PLAYERS )</h6>
                                </div><br>
                               <canvas id="linechart"></canvas>
                            </article>
                        </div>
                        <div class="column-6">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h6 class="font_d f_weight color_w">PLAYERS TOTAL</h6>
                                </div><br>
                                <canvas id="barchart"></canvas>
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