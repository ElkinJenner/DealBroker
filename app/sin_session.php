<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App | Deal Broker</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <?php
   require_once "modules/loading.php";
   require_once "modules/press.php";
   require_once "inc/header.php";
   ?>
    <!--Ventana Modal sin Sesion-->
		<div class="modal">
            <aside class="bg_w p_2 contender_center">
    
                <article class=" nav_botones">
                    <a class="color_d" id="btnl">Iniciar Sesión / </a>
                    <a class="color_d" id="btnr">Registrarse</a>
                </article>

                <article class="content">
                    <!--Formulario Login-->
                    <form class="form_login visible" method="POST" action="../action/LoginPlayer.php" autocomplete="off" id="content_login">
                        <article>
                            <label>Usuario</label>
                            <input type="text" name="usuario">
                        </article>
                    
                        <article>
                            <label>Contraseña</label>
                            <input type="password" name="contrasena">
                        </article>
                    
                        <article>
                            <button type="submit">INICIAR SESIÓN</button>
                        </article>
                    </form>

                    <!--Formulario Registro-->
                    <form class="form_login hidden" method="POST" action="../action/RegisterPlayer.php" autocomplete="off" id="content_register">

                        <article>
                            <label>Nombres Completos</label>
                            <input type="text" name="Nombres">
                        </article>

                        <article>
                            <label>Usuario</label>
                            <input type="text" name="usuario">
                        </article>
                    
                        <article>
                            <label>Contraseña</label>
                            <input type="password" name="contrasena">
                        </article>
                    
                        <article>
                            <button type="submit">REGISTRAR</button>
                        </article>
                    </form>

                </article>
            </aside>
	</div>

    <main class="bg_escenario">
        <figure class="logo_game">
            <img src="../img/logo_game.png">
        </figure>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>