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
    <title>Chat | Dashboard</title>
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
                     <!--Titulo panel-->
                    <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">MENSAJES</h6>
                        <code class="f_weight font_m"><span class="bx bx-home-alt"></span> MENSAJES / DASHBOARD</code>
                    </article>
                    <aside class="column">
                        <div class="column-4">
                            <article class="widgets">
                                <div class="widgets_head">
                                    <div class="contender_buscador bg_none mt_cero">
                                        <div class="btn_search">
                                            <i class="bx bx-search"></i>
                                        </div>
                                        <input type="search" id="buscar" placeholder="Buscar persona">
                                    </div>
                                </div>
                                <div class="widgets_body p_cero">
                                    <!--Lista de staff -->
                                    <?php
                                    $con = Db::connect();
                                    $Perfilpropio = $_SESSION['Usuario'];
                                    $Staff = "SELECT * FROM Staff WHERE Usuario !='$Perfilpropio' ";
                                    $resultado_Staff = mysqli_query($con, $Staff);

                                    if(mysqli_num_rows($resultado_Staff)<1) {
                                        echo "<br><h6 class='f_weight t_c color_w'>Lista vacia</h6><br>";
                                    }
                                    while($r_Staff=mysqli_fetch_assoc($resultado_Staff)){ ?>

                                     <li class="mensajes_chat">
                                        <figure class="mensajes_chat_autor">
                                            <img class="author_img" src="<?php echo $r_Staff['FotoPerfil'];?>">
                                        </figure>
                                        <div class="mensaje_chat_lista">
                                            <summary>
                                                <h6 class="color_w"><?php echo $r_Staff['Nombres'];?></h6>
                                                <span class="color_w"><?php echo $r_Staff['Email'];?></span>
                                            </summary>
                                            <summary><span class="color_w">5 hrs</span></summary>
                                        </div>
                                    </li>

                                    <?php } mysqli_free_result($resultado_Staff);?>

                                </div>
                            </article>

                        </div>

                        <div class="column-8">
                        <?php require_once "modules/chat_m.php" ?>
                        </div>
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>