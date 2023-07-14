<?php
require_once "conexion.php";
$UsuarioPlayer = $_POST["UsuarioPlayer"];
$Contrasena = $_POST["Contrasena"];

$con = Db::connect();
$query = "SELECT * FROM Players WHERE Usuario = '$UsuarioPlayer' AND Contrasena = '$Contrasena'";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if($row > 0){
    //session_start();
    $_SESSION['UsuarioPlayer']= $UsuarioPlayer;
     echo"<META HTTP-EQUIV='REFRESH' CONTENT='0.1;'> ";
}
else{
    echo '
	    <div class="notifacion_bottom bg_danger">
                <p class="color_w t_c f_weight"><i class="bx bx-user-x"></i>Acceso denegado</p>
        </div>
	';
}