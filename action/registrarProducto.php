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
    $ruta ="../upload/profiles/" . $nombre_base;
    $subirfoto = move_uploaded_file($_FILES["FotoPerfil"]["tmp_name"], $ruta);
    if($subirfoto){
        $insertar = "INSERT INTO Staff(FotoPerfil, Nombres,Usuario,Email, NomCargo, Contrasena) VALUES('$ruta', '$Nombres', '$Usuario', '$Email', '$NomCargo', '$Contrasena')";
        $resultado = mysqli_query($con, $insertar);
        if($resultado){
            echo '
	            <div class="notifacion_bottom bg_verify">
                <p class="p_1 color_w t_c f_weight"><i class="bx bx-happy-beaming"></i>Registro exitoso</p>
                </div>
                ';
            echo"<META HTTP-EQUIV='REFRESH' CONTENT='4;'> ";
        }
        else{
            echo"<script>alert('No se logró conectar'); window.location.href = 'staff.php'</script>";
        }

    }
}
?>