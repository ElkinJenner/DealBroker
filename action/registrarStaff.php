<?php
require_once "conexion.php";
$Nombres = $_POST["Nombres"];
$Usuario = $_POST["Usuario"];
$Email = $_POST["Email"];
$NomCargo = $_POST["NomCargo"];
$Contrasena = $_POST["Contrasena"];
$con = Db::connect();
$insertar = "INSERT INTO Staff(Nombres,Usuario,Email, NomCargo, Contrasena) VALUES('$Nombres', '$Usuario','$Email', '$NomCargo', '$Contrasena')";
$resultado = mysqli_query($con, $insertar);
if($resultado){
    echo"<script>alert('Registrado'); window.location.href = 'staff.php'</script>";
    }
    else{
    echo "No se logro conectar";
    }
?>