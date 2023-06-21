<?php
$usu = $_POST["usuario"];
$foto = $_POST["FotoPerfil"];
$pas = $_POST["contrasena"];

$con = Db::connect();
$query = "SELECT * FROM Staff WHERE Usuario = '$usu' AND Contrasena = '$pas'";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if($row > 0){
    session_start();
    $_SESSION['usuario']= $usu;
    $_SESSION['FotoPerfil']= $foto;
    header("Location: ../dashboard/");
}
else{
    echo '
	    <div class="notifacion_bottom bg_danger">
                <p class="color_w t_c f_weight"><i class="bx bx-user-x"></i>Usuario incorrecto</p>
        </div>
	';
}