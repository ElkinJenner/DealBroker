<?php
require_once "../action/ValidarSesion.php";
require_once "../action/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda | Dashboard</title>
    <?php include "inc/link.php" ?>
</head>
<body>
    <main class="main_dashboard">
        <!--Contenido Izquierda-->
        <?php include "inc/nav.php" ?>
        <!--Contenido Derecha-->
        <aside class="wrapper" id="wrapper">
            <?php include "inc/header.php" ?>
            <main class="contender_dashboard">
                <div class="container container_dashboard">                   
                    <article class="color_def title_dashboard">
                        <h6 class="f_weight font_m color_w">TIENDA</h6>
                        <code class="f_weight font_m"><span class="bx bx-shopping-bag"></span> TIENDA / DASHBOARD</code>
                        <button class="bg_verify color_w" id="open"><i class="bx bx-plus"></i></button>
                    </article>
                     <!--Ventana para añadir producto-->
                    <aside class="column">
                        <?php require_once "modules/product_add_m.php" ?>
                    </aside>
                    <aside class="column">
                    <?php
                        $Productos = "SELECT * FROM Tienda";
                        $con = Db::connect();
                        $resultadoProd = mysqli_query($con, $Productos);
                        if(mysqli_num_rows($resultadoProd)<1) {
                        echo "<br> <h5 class='p_1 font_d f_weight color_w'> Aún no hay productos registrados </h5>";
                        }
                        while($row_Pr=mysqli_fetch_assoc($resultadoProd)){ ?>

                        <!--Product Item-->
                        <div class="column-3">
                            <article class="product_item bg_def">
                                <!--Acciones Crud-->
                                <date_add class="acciones_crud">
                                        <ul>
                                        <li><a class="color_w" href="producto.php?id=<?php echo $row_Pr["IdProducto"];?>">
                                            <i class="bx bx-pencil"></i> </a></li>
                                        <li><a class="color_w" href=""><i class="bx bx-trash"></i></a></li>
                                    </ul>
                                </date_add>

                                <date_add class="activo_cuenta">
                                       <div class="f_l m_1 bg_verify btn_estado color_w">Activo</div>
                                </date_add>

                                <figure class="bg_def">
                                    <img src="<?php echo $row_Pr['FotoProducto'];?>">
                                </figure>
                                
                                <div class="description">
                                    <h5 class="t_t f_weight color_w"><?php echo $row_Pr['NombreProducto'];?></h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <small class="f_weight color_w"> <?php echo $row_Pr['PrecioMoneda'];?> mon</small>
                                    </div>
                                </div>
                            </article>
                            <!--Fin Product Item-->
                        </div>
                        <?php } mysqli_free_result($resultadoProd);?>

                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <!--Mandar al Action para registrar-->
    <?php
        if(isset($_POST['NombreProducto']) && isset($_POST['NombreCategoria']) && isset($_POST['EstadoProducto']) && isset($_POST['Stock'])){
            require_once "../action/registrarProducto.php";
        }
    ?>
    <?php include "inc/footer.php" ?>
</body>
</html>