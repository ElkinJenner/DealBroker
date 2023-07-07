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
                        <?php
                        $staff = "SELECT * FROM staff";
                        $con = Db::connect();
                        $resultado = mysqli_query($con, $staff);
                        while($row=mysqli_fetch_assoc($resultado)){ ?>

                        <div class="column-3">
                            <article class="article_perfil article_staff bg_def">
                                <figure>
                                <img src="../upload/profiles/<?php echo $row['FotoPerfil'];?>">
                                </figure>
                                <h5 class="f_weight color_w"><?php echo $row['Nombres'];?></h5>
                                <small class="f_weight color_w"><?php echo $row['NomCargo'];?></small>
                                <p class="redes_s">
                                    <a href=""><i class="color_w bx bxl-facebook"></i></a>
                                    <a href=""><i class="color_w bx bxl-linkedin"></i></a>
                                    <a href=""><i class="color_w bx bxl-instagram"></i></a>
                                </p>
                            </article>
                        </div>
                        <?php } mysqli_free_result($resultado);?>
                    </aside>
                    <!--Ventana para añadir Staff-->
                    <aside class="column">
                        <?php require_once "modules/staff_add_m.php" ?>
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>
