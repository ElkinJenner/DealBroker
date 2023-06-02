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
        <aside class="sidebar">
            <?php include "inc/nav.php" ?>
        </aside>
        <!--Contenido Derecha-->
        <aside class="wrapper">
            <?php include "inc/header.php" ?>
            <main class="contender_dashboard">
                <div class="container">
                    <article class="color_def title_dashboard">
                    <h5 class="f_weight color_w">STAFF / DASHBOARD</h5>
                    <button class="bg_verify" id="open"><i class="icon-plus2"></i> Nuevo</button>
                    </article>
                    <aside class="column">
                        <?php require_once "modules/staff_m.php" ?>
                    </aside>
                    <!--Ventana Modal-->
                    <div class="modal bg_panel" id="modal">
                        <form class="form_register form_login contender_center">
                            <article class="column">

                            <div class="column-6">
                                <label class="color_w">Nombres Completos</label>
                                <input type="text" >
                            </div>

                            <div class="column-6">
                                <label class="color_w">Usuario</label>
                                <input type="text" >
                            </div>

                            <div class="column-6">
                                <label class="color_w">Cargo</label>
                                <input type="text" >
                            </div>

                            <div class="column-6">
                                <label class="color_w">Email</label>
                                <input type="text" >
                            </div>

                            <div class="column-6">
                                <label class="color_w">Contraseña</label>
                                <input class="input"  type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                            </div>

                            <div class="column-6">
                                <label class="color_w">Repetir Contraseña</label>
                                <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                            </div>

                            <div class="column-2">
                                <button class="bg_verify color_w" type="submit"><i class="icon-checkmark"></i> REGISTRAR</button>
                            </div>
                            <div class="column-2">
                                <a id="close" class="boton2 bg_danger color_w"><i class="fi-delete"></i> CANCELAR</a>
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