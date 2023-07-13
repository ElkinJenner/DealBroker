<?php
require_once "conexion.php";

$IdProducto = $_GET["id"];
$NombreProducto = $_POST["NombreProducto"];
$CodProducto = $_POST["CodProducto"];
$NombreCategoria = $_POST["NombreCategoria"];
$Stock = $_POST["Stock"];
$EstadoProducto = $_POST["EstadoProducto"];
$DescrProducto = $_POST["DescrProducto"];
$PrecioMoneda = $_POST["PrecioMoneda"];

$con = Db::connect();
$actualizar = "UPDATE Tienda SET NombreProducto='$NombreProducto', CodProducto='$CodProducto', NombreCategoria='$NombreCategoria',
Stock='$Stock', EstadoProducto='$EstadoProducto', DescrProducto='$DescrProducto', PrecioMoneda='$PrecioMoneda' WHERE IdProducto='$IdProducto'";
$resultado = mysqli_query($con, $actualizar);
if($resultado){
    echo '
	<div class="notifacion_bottom bg_verify">
                <p class="p_1 color_w t_c f_weight"><i class="bx bx-happy-beaming"></i>Producto actualizado correctamente</p>
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