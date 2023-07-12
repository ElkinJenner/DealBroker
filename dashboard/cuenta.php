<?php
require_once "../action/ValidarSesion.php";
require_once "../action/conexion.php";
?>
<?php
$UserStaff = $_SESSION["Usuario"];
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
                    <div class="widgets bg_none">
                        <form class="form_register form_login" action="../action/editStaff.php" method="POST">
                            <article class="column">
                            <?php
                            $con = Db::connect();
                            $cuenta = "SELECT * FROM staff WHERE Usuario = '$UserStaff'";
                            $resultado = mysqli_query($con, $cuenta);

                            while($row=mysqli_fetch_assoc($resultado)){ ?>
                           
       
                            <div class="column-3">
                                <input type="hidden" name="FotoPerfil" value="<?php echo $row['FotoPerfil'];?>">
                                <img class="img350 p_1 b_r_15" src="<?php echo $row['FotoPerfil'];?>"><br>
                            </div>

                            
                            <div class="column-5">
                            
                                <small class="color_w">Nombres Completos</small>
                                <input type="text" name="Nombres" value="<?php echo $row['Nombres'];?>">

                                <small class="color_w">Usuario</small>
                                <input type="text" name="Usuario" value="<?php echo $row['Usuario'];?>"><br>

                                <br><small class="color_w">Profesión</small><br><br>

                                <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="<?php echo $row['NomCargo'];?>" checked="">
                                    <i class="bg_s"></i><?php echo $row['NomCargo'];?>
                                </label><br>

                                <?php
                                $con = Db::connect();
                                $CargoCheck = $row['NomCargo'];
                                $cargo = "SELECT * FROM cargo WHERE NomCargo != '$CargoCheck'";
                                $resultado_cargo = mysqli_query($con, $cargo);
                                while($r_cargo=mysqli_fetch_assoc($resultado_cargo)){ ?>

                                 <label class="color_w">
                                    <input id="categoria" name="NomCargo" type="radio" value="<?php echo $r_cargo['NomCargo'];?>">
                                    <i class="bg_s"></i><?php echo $r_cargo['NomCargo'];?>
                                </label><br>
                                
                                 <?php } mysqli_free_result($resultado_cargo);?>
                            </div>

                            <div class="column-4">

                               
                                <small class="color_w">Email</small>
                                <input type="text" name="Email" value="<?php echo $row['Email'];?>">
                                
                                <small class="color_w">Contraseña</small>
                                <input class="input"  type="password" name="Contrasena" value="<?php echo $row['Contrasena'];?>">
                                
                                <div class="column-4">
                                    <button class="bg_verify color_w" type="submit"><i class="bx bx-save"></i> GUARDAR</button>
                                </div>

                            </div>

                            <?php } mysqli_free_result($resultado);?>

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
