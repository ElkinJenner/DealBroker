<?php
require_once "conexion.php";

$IdStaff  = $_POST["IdStaff"];
$FechaChat = $_POST["FechaChat"];
$MensajeStaff = $_POST["MensajeStaff"];
$con = Db::connect();

$insertar = "INSERT INTO ChatStaff(IdStaff, FechaChat, MensajeStaff) VALUES('$IdStaff', '$FechaChat', '$MensajeStaff')";
$resultado = mysqli_query($con, $insertar);
if($resultado){
    echo"<script>window.location.href = '../dashboard/mensajes.php'</script>";
}
else{
    echo "No se logro conectar";
}
?>