<?php
require_once "../action/ValidarSesion.php";
require_once "../action/conexion.php";
?>
<?php
$UserI = (isset($_GET['usuario'])) ? $_GET['usuario'] : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta | Dashboard</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <main class="main_dashboard">
        <!--Contenido Izquierda-->
        <aside class="sidebar" id="sidebar">
            <?php include "inc/nav.php" ?>
        </aside>
        <!--Contenido Derecha-->
        <aside class="wrapper" id="wrapper">
            <?php include "inc/header.php" ?>
            <main class="contender_dashboard">
                <div class="container container_dashboard">
                    <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">MI CUENTA</h6>
                        <code class="f_weight font_m"><span class="bx bx-dice-2"></span> MI CUENTA / DASHBOARD</code>
                    </article>
                    <div class="widgets">
                        <form class="form_register form_login">
                            <article class="column">
                            <?php
                            $con = Db::connect();
                            $cuenta= $con->query("SELECT * FROM staff WHERE Usuario='$UserI'");
                            if($cuenta->rowCount()>0){
                                $datos=$cuenta->fetch();
                            ?>
       
                            <div class="column-6">
                                <img class="img200" src="../upload/img/<?php echo $datos['FotoPerfil'];?>"><br>
                            </div>

                            <div class="column-6">
                                <small class="color_w">Nombres Completos</small>
                                <input type="text" value="<?php echo $datos['Nombres'];?>">

                                <small class="color_w">Usuario</small>
                                <input type="text" value="<?php echo $datos['Usuario'];?>">

                                <small class="color_w">Email</small>
                                <input type="email" value="<?php echo $datos['Email'];?>" >
                            </div>
                            
                           <?php
                           }
                          
                           ?>

                            <div class="column-6">
                     
                                <br><h6 class="color_w f_weight">CARGO</h6>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Informes" checked="">
                                    <i class="bg_s"></i>Computer programming
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Reclamo">
                                    <i class="bg_s"></i>Database Designer
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Soy Colaborador">
                                    <i class="bg_s"></i>3D Designer
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Quiero colaborar con ustedes!">
                                    <i class="bg_s"></i>System Analyst
                                </label>
                                    
                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Otro">
                                    <i class="bg_s"></i>Otro
                                </label>
                            </div>

                    

                            <div class="column-6">
                                <small class="color_w">Contraseña</small>
                                <input class="input"  type="password" name="contrasena">

                                 <small class="color_w">Repetir Contraseña</small>
                                <input class="input" type="password" name="contrasena">
                            </div>

                     

                            <div class="column-2">
                                <button class="bg_verify color_w" type="submit"><i class="icon-checkmark"></i> GUARDAR</button>
                            </div>
                

                            </article>
                        </form>
                    </div>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>