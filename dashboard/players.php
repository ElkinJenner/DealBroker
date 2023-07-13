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
    <title>Players | Dashboard</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <main class="main_dashboard">
        <!--Contenido Izquierda-->
        <?php include "inc/nav.php" ?>
        <!--Contenido Derecha-->
        <aside class="wrapper" id="wrapper">
            <?php include "inc/header.php"?>
            <main class="contender_dashboard">
                <div class="container container_dashboard">
                   <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">PLAYERS</h6>
                        <code class="f_weight font_m"><span class="bx bx-joystick"></span> PLAYERS / DASHBOARD</code>
                    </article>

                    <aside class="column color_def">
                        <!--Player Item -->
                        <div class="column-3">
                            
                        </div>
                        <!--Fin Player Item -->
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>