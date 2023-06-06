<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos enviados</title>
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/animacion.css">
    <link rel="shortcut icon" href="../favicon.png">
</head>
<body>
    <!--Main Principal-->
    <main class="main bggame">
        <div class="starwave"></div>
        <!--Logo-->
        <figure class="logo">
            <img src="../img/logo.png" id="logo">
        </figure>
        <section>
            <div class="container container_website">
                <aside class="column">
                    <div class="column-12 t_c">
                        <?php
                        $usu = $_POST["usuario"];
                        $pas = $_POST["contrasena"];
                        if( !empty($usu) && !empty($pas)){
                        echo ("<script>alert('Inicio de Sesión correctamente'); window.location.href = '../dashboard/'</script>");
                        }
                        else{
                            echo ("<script>alert('Los datos no se han enviado correctamente'); window.location.href = '../login.php'</script>");
                       }
                        ?>
                    </div>
                </aside>
            </div>
        </section>
    </main>
</body>
</html>