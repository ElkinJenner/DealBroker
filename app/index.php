<?php
require_once "../action/conexion.php";
?>
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
   require_once "inc/header.php";
   ?>
   <?php
   //Sesion Player
   session_start();
    if(!isset($_SESSION['UsuarioPlayer'])){?>

        <!--Ventana si no hay Sesion-->
		<div class="modal">
            <aside class="bg_w p_2 contender_center">
    
                <article class=" nav_botones">
                    <a class="color_d" id="btnl">Iniciar Sesión / </a>
                    <a class="color_d" id="btnr">Registrarse</a>
                </article>

                <article class="content">
                    <!--Formulario Login-->
                    <form class="form_login visible" method="POST" autocomplete="off" id="content_login">
                        <article>
                            <label>Usuario</label>
                            <input type="text" name="UsuarioPlayer" class="border_n bg_g">
                        </article>
                    
                        <article>
                            <label>Contraseña</label>
                            <input type="password" name="Contrasena" class="border_n bg_g">
                        </article>
                    
                        <article>
                            <button class="border_n" type="submit">INICIAR SESIÓN</button>
                        </article>
                    </form>

                    <!--Formulario Registro-->
                    <form class="form_login hidden" method="POST" action="../action/RegisterPlayer.php" autocomplete="off" id="content_register">

                        <article>
                            <label>Nombres Completos</label>
                            <input type="text" name="Nombres" class="border_n bg_g">
                        </article>

                        <article>
                            <label>Usuario</label>
                            <input type="text" name="Usuario" class="border_n bg_g">
                        </article>
                    
                        <article>
                            <label>Contraseña</label>
                            <input type="password" name="Contrasena" class="border_n bg_g">
                        </article>
                    
                        <article>
                            <button class="border_n" type="submit">REGISTRAR</button>
                        </article>
                    </form>

                </article>
            </aside>
            <?php
            if(isset($_POST['UsuarioPlayer']) && isset($_POST['Contrasena'])){
                require_once "../action/LoginPlayer.php";
            }
            ?>
	</div>
   
    <?php } else{
    require_once "modules/loading.php";
    require_once "modules/press.php";
    ?>
    <?php }?>

     <main class="bg_escenario">
        <figure class="logo_game">
            <img src="../img/logo_game.png">
        </figure>
    </main>
      <!--Mi Cuenta-->
    <main id="page_micuenta" class="bg_q game_main hidden">
         <a onclick="play(1)" class="cerrar_game_main"><img id="close" src="../img/icons/close_icon.png"></a>
            <aside class="game_main_sidebar">
                <nav class="nav_profile_game">
                    <figure>
                        <img src="../img/profile.jpg">
                        <h4 class="color_d t_c">ADAM LOPEZ</h4>
                        <h5 class="color_d t_c font_d">@WolfLopez</h5>
                    </figure>
                    <ul>
                        <li onclick="play(1)"><a class="color_d t_c">ADQUISICIONES </a></li>
                        <li onclick="play(2)"><a class="color_d t_c">PREGUNTAS </a></li>
                        <li onclick="play(3)"><a class="color_d t_c">RETOS </a></li>
                        <li onclick="play(4)"><a class="color_d t_c">CONFIGURACIÓN </a></li>
                    </ul>
                </nav>
            </aside>
            <aside class="game_main_wrapper">
                <div class="container container_game">
                    <article class="game_main_head">
                        <h3 class="color_d">ADQUISICIONES</h3>
                    </article>
                </div>
            </aside>
    </main>
    <!--Players-->
    <main id="page_players" class="bg_s game_main hidden">
         <a onclick="play(2)" class="cerrar_game_main"><img id="close2" src="../img/icons/close_icon.png"></a>
                <div class="container container_game">
                    <article class="game_main_head">
                        <h3 class="t_c color_w">PLAYERS</h3>
                    </article>
    </div>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>