<?php
require_once "conexion.php";

$Nombres = $_POST["Nombres"];
$Usuario = $_POST["Usuario"];
$Email = $_POST["Email"];
$NomCargo = $_POST["NomCargo"];
$Contrasena = $_POST["Contrasena"];

$con = Db::connect();
$actualizar = "UPDATE Staff SET Nombres='$Nombres', Usuario='$Usuario', Email='$Email', NomCargo='$NomCargo', Contrasena='$Contrasena' WHERE Usuario= '$Usuario'";
$resultado = mysqli_query($con, $actualizar);
if($resultado){
    echo '
	<div class="notifacion_bottom bg_verify">
                <p class="p_1 color_w t_c f_weight"><i class="bx bx-happy-beaming"></i> Datos actualizados correctamente</p>
        </div>
	';
     echo"<META HTTP-EQUIV='REFRESH' CONTENT='4;'> ";
}
else{
    echo '
	    <div class="notifacion_bottom bg_danger">
                <p class="color_w t_c f_weight"><i class="bx bx-user-x"></i>No se logró conectar</p>
        </div>
	';
}
?>