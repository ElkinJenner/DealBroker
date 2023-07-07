<?php
require_once "conexion.php";

$Nombres = $_POST["Nombres"];
$Usuario = $_POST["Usuario"];
$Email = $_POST["Email"];
$NomCargo = $_POST["NomCargo"];
$Contrasena = $_POST["Contrasena"];

$con = Db::connect();
if($_FILES["FotoPerfil"]){
    $nombre_base = basename($_FILES["FotoPerfil"]["name"]);
    $ruta ="../upload/products/" . $nombre_base;
    $subirfoto = move_uploaded_file($_FILES["FotoPerfil"]["tmp_name"], $ruta);
    if($subirfoto){
        $insertar = "INSERT INTO Staff(FotoPerfil, Nombres,Usuario,Email, NomCargo, Contrasena) VALUES('$ruta', '$Nombres', '$Usuario', '$Email', '$NomCargo', '$Contrasena')";
        $resultado = mysqli_query($con, $insertar);
        if($resultado){
             echo"<script>alert('Registrado'); window.location.href = 'staff.php'</script>";
        }
        else{
            echo"<script>alert('No se logró conectar'); window.location.href = 'staff.php'</script>";
        }

    }
}
?>