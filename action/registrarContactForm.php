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
                <h5 class="color_w t_c">DATOS ENVIADOS CORRECTAMENTE POR:</h5>
                <aside class="column">
                    <div class="column-12 t_c">
                        <?php
                        $nom = $_POST["nombres"];
                        $ema = $_POST["email"];
                        $cat = $_POST["categoria"];
                        $men = $_POST["mensaje"];

                        echo ("<h1 class='big color_s'>$nom</h1>");
                        echo ("<h3 class='f_weight color_w'> Muchas Gracias por enviar, <br> nos comunicaremos contigo lo más pronto posible...</h3><br>");
                        ?>
                        <a class="boton bg_s color_w" href="../contactos">← Regresar </a>
                    </div>
                </aside>
            </div>
        </section>
    </main>
</body>
</html>