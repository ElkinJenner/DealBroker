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
     echo"<script>alert('Datos actualizados'); window.location.href = '../dashboard/cuenta.php'</script>";
}
else{
    echo "No se logro conectar";
}
?>