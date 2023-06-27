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
        <aside class="sidebar" id="sidebar">
            <?php include "inc/nav.php"?>
        </aside>
        <!--Contenido Derecha-->
        <aside class="wrapper" id="wrapper">
            <?php include "inc/header.php"?>
            <main class="contender_dashboard">
                <div class="container container_dashboard">
                   <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">PLAYERS</h6>
                        <code class="f_weight font_m"><span class="bx bx-joystick"></span> PLAYERS / DASHBOARD</code>
                    </article>
                    <!--Title Lista -->
                    <aside class="column color_def">
                        <div class="column-1">
                            <article class="table bg_def">
                                 <h6 class="color_w"><i class="bx bx-hash"></i></h6>
                            </article>
                             <div class="table_item">
                                <h6 class="color_w">1</h6>
                            </div>
                        </div>
                        <div class="column-4">
                            <article class="table bg_def">
                                <h6 class="color_w">Nombres Completos <i class="color_w bx bx-stats"></i></h6> 
                            </article>

                            <div class="table_item perfil_admin m_c">
                                <img src="../upload/img/person2.jpg">
                                <h6 class="color_w">John Marcos Valderrama</h6>
                            </div>
                        </div>
                        <div class="column-2">
                            <article class="table bg_def">
                                <h6 class="color_w">Usuario</h6>
                            </article>

                            <div class="table_item">
                                <h6 class="color_w">@JohnV</h6>
                            </div>
                        </div>

                        <div class="column-2">
                            <article class="table bg_def">
                            <h6 class="color_w">Registro</h6>
                            </article>
                            <div class="table_item">
                                <h6 class="color_w">12/05/2023</h6>
                            </div>
                        </div>

                         <div class="column-1">
                            <article class="table bg_def">
                                <h6 class="color_w">Status</h6>
                            </article>

                            <div class="table_item">
                                <h6 class="color_w">Activo</h6>
                            </div>
                        </div>

                        <div class="column-2">
                            <article class="table bg_def">
                            <h6 class="color_w">Acciones</h6>
                            </article>

                            <div class="table_item">
                                <h6>
                                    <i class="color_w bx bx-run"></i>
                                    <i class="color_w bx bx-pencil"></i>
                                    <i class="color_w bx bx-trash"></i>
                                </h6>
                            </div>
                        </div>
                    </aside>
                   <!--Contenido de Lista -->
            
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>