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
    <title>Players | Dashboard</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <main class="main_dashboard">
        <!--Contenido Izquierda-->
        <?php include "inc/nav.php" ?>
        <!--Contenido Derecha-->
        <aside class="wrapper" id="wrapper">
            <?php include "inc/header.php"?>
            <main class="contender_dashboard">
                <div class="container container_dashboard">
                   <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">PLAYERS</h6>
                        <code class="f_weight font_m"><span class="bx bx-joystick"></span> PLAYERS / DASHBOARD</code>
                    </article>

                    <aside class="column color_def">
                        <!--Player Item -->
                        <?php
                        $con = Db::connect();
                        $Players = "SELECT * FROM Players p INNER JOIN Avatar a ON p.FotoPlayer=a.FotoAvatar ORDER BY Nombres ASC";
                        $Resultado_Players = mysqli_query($con, $Players);

                        while($r_player=mysqli_fetch_assoc($Resultado_Players)){?>

                        <div class="column-2">
                            <article class="players_item bg_def">
                                <date_add class="activo_cuenta">
                                    <?php if($r_player['TipoGenero']!='Otro'){?>
                                        <div class="m_1 bg_verify btn_estado color_w">Activo</div>
                                    <?php } else{?>
                                        <div class="m_1 bg_danger btn_estado color_w">Inactivo</div>
                                    <?php } ?>


                                </date_add>
                                <figure>
                                <img src="<?php echo $r_player['FotoPlayer'];?>">
                                </figure>
                                <h5 class="f_weight color_w"><?php echo utf8_encode($r_player['Nombres']);?></h5>
                                <small class="f_weight color_w">@<?php echo $r_player['Usuario'];?></small>
                                <p class="redes_s">
                                    <a href=""><i class="color_w bx bx-show-alt"></i></a>
                                    <a href=""><i class="color_w bx bx-x"></i></a>
                                </p>
                            </article>
                        </div>
                        <!--Fin Player Item -->
                        <?php } mysqli_free_result($Resultado_Players);?>
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>