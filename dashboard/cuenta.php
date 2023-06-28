<?php
require_once "../action/ValidarSesion.php";
require_once "../action/conexion.php";
?>
<?php
$UserStaff = $_SESSION["usuario"];
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
        <?php include "inc/nav.php" ?>
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
                        <form class="form_register form_login" action="" method="POST">
                            <article class="column">
                            <?php
                            $con = Db::connect();
                            $cuenta = "SELECT * FROM staff WHERE Usuario = '$UserStaff'";
                            $resultado = mysqli_query($con, $cuenta);

                            while($row=mysqli_fetch_assoc($resultado)){ ?>
                           
       
                            <div class="column-6">
                                <img class="img300" src="../upload/img/<?php echo $row['FotoPerfil'];?>"><br>
                            </div>

                            <div class="column-6">
                                <small class="color_w">Nombres Completos</small>
                                <input type="text" value="<?php echo $row['Nombres'];?>">

                                <small class="color_w">Usuario</small>
                                <input type="text" value="<?php echo $row['Usuario'];?>">
                                
                            </div>
                            
                            <div class="column-6">
                     
                                <br><h6 class="color_w f_weight">CARGO</h6>

                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="<?php echo $row['NomCargo'];?>" checked="">
                                    <i class="bg_s"></i><?php echo $row['NomCargo'];?>
                                </label> 

                                <?php
                                $con = Db::connect();
                                $CargoCheck = $row['NomCargo'];
                                $cargo = "SELECT * FROM cargo WHERE NomCargo != '$CargoCheck'";
                                $resultado_cargo = mysqli_query($con, $cargo);
                                while($r_cargo=mysqli_fetch_assoc($resultado_cargo)){ ?>

                                 <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="<?php echo $r_cargo['NomCargo'];?>">
                                    <i class="bg_s"></i><?php echo $r_cargo['NomCargo'];?>
                                </label>
                                
                                 <?php } mysqli_free_result($resultado_cargo);?>
                            </div>

                    

                            <div class="column-6">
                                
                                <small class="color_w">Contraseña</small>
                                <input class="input"  type="password" name="contrasena" value="<?php echo $row['Contrasena'];?>">

                                 <small class="color_w">Repetir Contraseña</small>
                                <input class="input" type="password" name="contrasena" value="<?php echo $row['Contrasena'];?>">
                                
                            </div>

                            <?php } mysqli_free_result($resultado);?>
                     

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
