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
                    <aside class="column">
                        <div class="column-8">
                            <article class="widgets bg_def">
                                <div class="widgets_head">
                                    <h5 class="font_d color_w">GRÁFICA DE DOBLE ESCALA</h5>
                                </div><br>
                               <canvas id="linechart"></canvas>
                            </article>
                        </div>
                        <div class="column-4">
                            <?php require_once "modules/chat_m.php" ?>
                        </div>
                        <?php require_once "modules/staff_m.php" ?>
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>