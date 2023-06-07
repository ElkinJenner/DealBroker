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
    <header>
        <div class="container container_game">
            <article class="navegacion_contender_left navegacion_game">
                <ul>
                    <li><a href="./">MI CUENTA </a></li>
                    <li><a href="./">PLAYERS </a></li>
                    <li><a href="./">TIENDA </a></li>
                    <li><a href="./">SALIR </a></li>
                </ul>
            </article>
         
        </div>
    </header>
    <!--Ventana Modal sin Sesion-->

		<div class="modal">
            <aside class="bg_m p_2 contender_center">
                <!--Logo Form-->
                <figure class="logo_form">
                    <img src="../img/logo.png">
                </figure>

                <article class=" nav_botones">
                    <a class="color_w" id="btnl">Iniciar Sesión / </a>
                    <a class="color_w" id="btnr">Registrarse</a>
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