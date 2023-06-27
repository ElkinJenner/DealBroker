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
    <title>Staff | Dashboard</title>
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
                    <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">STAFF</h6>
                        <code class="f_weight font_m"><span class="bx bx-dice-2"></span> STAFF / DASHBOARD</code>
                        <button class="bg_verify color_w" id="open"><i class="bx bx-plus"></i></button>
                    </article>
                    <aside class="column" >
                        <?php require_once "modules/staff_m.php" ?>
                    </aside>
                    <!--Ventana Modal-->
                    <div class="modal_d bg_panel hidden" id="modal">
                        <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">STAFF</h6>
                        <code class="f_weight font_m"><span class="bx bx-dice-2"></span> STAFF / DASHBOARD</code>
                         <button class="bg_danger color_w" id="close"><i class="bx bx-x"></i></button>
                    </article>
                        <form class="form_register form_login" method="POST" enctype="multipart/form-data" action="../action/registrarStaff.php" methode>
                            <article class="column">

                            <div class="column-6">
                                <small class="color_w">Nombres Completos</small>
                                <input type="text" name="Nombres">
                            </div>

                            <div class="column-6">
                                <small class="color_w">Usuario</small>
                                <input type="text" name="Usuario">
                            </div>

                            <div class="column-6">
                     
                                <br><h6 class="color_w f_weight">CARGO</h6>

                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="Informes" checked="">
                                    <i class="bg_s"></i>Computer programming
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="Reclamo">
                                    <i class="bg_s"></i>Database Designer
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="Soy Colaborador">
                                    <i class="bg_s"></i>3D Designer
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="Quiero colaborar con ustedes!">
                                    <i class="bg_s"></i>System Analyst
                                </label>
                                    
                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="Otro">
                                    <i class="bg_s"></i>Otro
                                </label>
                            </div>

                            <div class="column-6">
                                <small class="color_w">Email</small>
                                <input type="text" name="Email">
                            </div>

                            <div class="column-6">
                                <small class="color_w">Contraseña</small>
                                <input class="input"  type="password" name="Contrasena">
                            </div>

                            <div class="column-6">
                                <small class="color_w">Repetir Contraseña</small>
                                <input class="input" type="password" name="Contrasena">
                            </div>

                            <div class="column-2">
                                <button class="bg_verify color_w" type="submit"><i class="bx bx-check"></i> REGISTRAR</button>
                            </div>
                            </article>
                        </form>
                    </div>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>