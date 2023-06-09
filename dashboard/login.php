<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Deal Broker</title>
     <?php
     require_once "inc/link.php";
     require_once "../action/conexion.php";
     ?>
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
                <form class="form_login" method="POST" autocomplete="off">
                    <article>
                        <h5>Usuario</h5>
                        <input type="text" name="Usuario" id="usuario">
                    </article>
                
                    <article>
                        <h5>Contraseña</h5>
                        <input type="password" name="Contrasena" id="contrasena">
                    </article>
                
                    <article>
                        <button type="submit">INICIAR SESIÓN</button>
                    </article>
                </form>
            </aside>
        </div>
        <?php
            if(isset($_POST['Usuario']) && isset($_POST['Contrasena'])){
                require_once "../action/LoginAdmin.php";
            }
        ?>
    </main>
</body>
</html>