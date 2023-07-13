<?php
require_once "conexion.php";

$NombreProducto = $_POST["NombreProducto"];
$CodProducto = $_POST["CodProducto"];
$NombreCategoria = $_POST["NombreCategoria"];
$Stock = $_POST["Stock"];
$EstadoProducto = $_POST["EstadoProducto"];
$DescrProducto = $_POST["DescrProducto"];
$PrecioMoneda = $_POST["PrecioMoneda"];

$con = Db::connect();
if($_FILES["FotoProducto"]){
    $nombre_base = basename($_FILES["FotoProducto"]["name"]);
    $ruta ="../upload/products/" . $nombre_base;
    $subirfoto = move_uploaded_file($_FILES["FotoProducto"]["tmp_name"], $ruta);
    if($subirfoto){
        $insertar = "INSERT INTO Tienda(FotoProducto, NombreProducto, CodProducto, NombreCategoria, Stock, EstadoProducto, DescrProducto, PrecioMoneda)
        VALUES('$ruta', '$NombreProducto', '$CodProducto', '$NombreCategoria', '$Stock', '$EstadoProducto', '$DescrProducto','$PrecioMoneda' )";
        $resultado = mysqli_query($con, $insertar);
        if($resultado){
            echo '
	            <div class="notifacion_bottom bg_verify">
                <p class="p_1 color_w t_c f_weight"><i class="bx bx-happy-beaming"></i>Registro de producto exitoso</p>
                </div>
                ';
            echo"<META HTTP-EQUIV='REFRESH' CONTENT='4;'> ";
        }
        else{
            echo"<script>alert('No se logró conectar'); window.location.href = 'tienda.php'</script>";
        }

    }
}
?>