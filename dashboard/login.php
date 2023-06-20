<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Deal Broker</title>
     <?php include "inc/link.php" ?>
</head>
<body>
    <main class="main">
        <div class="container">
            <aside class="contender_center">
                <!--Logo Form-->
                <figure class="logo_form">
                    <img src="../img/logo.png">
                </figure>
                
                <!--Formulario-->
                <form class="form_login" method="POST" action="../action/LoginAdmin.php" autocomplete="off">
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
            </aside>

        </div>
    </main>
</body>
</html>