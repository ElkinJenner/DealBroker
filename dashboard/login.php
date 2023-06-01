<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Deal Broker</title>
     <?php include "inc/link.php" ?>
</head>
<body class="bg_m">
    <main class="main">
        <div class="container">
            <aside class="contender_center">
                <!--Logo Form-->
                <figure class="logo_form">
                    <img src="../img/logo.png">
                </figure>
                
                <!--Formulario-->
                <form class="form_login" method="POST" action="action/validarLogin.php" autocomplete="off">
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

                    <article class="article">
                        <a href="restaurar_clave.html"><p class="color_s">Olvidaste tu contraseña</p></a>
                    </article>
                </form>
            </aside>

        </div>
    </main>
</body>
</html>