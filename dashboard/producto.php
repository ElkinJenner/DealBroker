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
    <title>Producto | Dashboard</title>
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
                        <h6 class="f_weight font_m color_w">PRODUCTO</h6>
                        <code class="f_weight font_m"><span class="bx bx-dice-2"></span> TIENDA / DASHBOARD</code>
                    </article>
                    <!--Obtener Id de cada producto-->
                    <?php
                    $con = Db::connect();
                    $IdPr = $_GET["id"];
                    $productoE = "SELECT * FROM Tienda WHERE IdProducto = '$IdPr'";
                    $resultadoEPr = mysqli_query($con, $productoE);
                    
                    while($rowPr=mysqli_fetch_assoc($resultadoEPr)){ ?>

                    <form class="form_register form_login" method="POST" enctype="multipart/form-data">
                        <aside class="column">
                                <div class="column-3">
                                    <img class="m_c img350 p_1 b_r_15" src="<?php echo $rowPr['FotoProducto'];?>">
                                    <article class="file_content">
                                        <input type="file" name="FotoProducto" value="<?php echo $rowPr['FotoProducto'];?>">
                                        <small><h5 class="color_w bx bx-image-add"></h5> <br> Arrastra una imagen aquí o <br><span> Sube archivo</span></small>
                                    </article>
                                </div>

                                <div class="column-5">
                                    <small class="color_w">Nombre del producto</small>
                                    <input type="text" name="NombreProducto" value="<?php echo $rowPr['NombreProducto'];?>">

                                    <small class="color_w">Descripción del producto</small>
                                    <textarea name="DescProducto" value="<?php echo $rowPr['DescrProducto'];?>"><?php echo $rowPr['DescrProducto'];?> </textarea>

                                    <small class="color_w">Código</small>
                                    <input type="text" name="CodProducto" value="<?php echo $rowPr['CodProducto'];?>"><br>

                                    <br><small class="color_w">Categoria</small><br><br>

                                    <?php
                                    $con = Db::connect();
                                    $CategoriaPropia = $rowPr['NombreCategoria'];
                                    $Categoria = "SELECT * FROM CategoriaProd";
                                    $resultado_Categoria = mysqli_query($con, $Categoria);

                                    if(mysqli_num_rows($resultado_Categoria)<1) {
                                        echo "<br><h6 class='f_weight color_w'>No se ha registrado ninguna categoria</h6><br>";
                                    }
                                    while($r_Categoria=mysqli_fetch_assoc($resultado_Categoria)){ ?>

                                        <?php if($r_Categoria['NombreCategoria'] != $CategoriaPropia){?>
                                            <label class="color_w">
                                                <input id="categoria" name="NombreCategoria" type="radio" value="<?php echo $r_Categoria['NombreCategoria'];?>">
                                                <i class="bg_s"></i><?php echo $r_Categoria['NombreCategoria'];?>
                                            </label><br>

                                        <?php }else{?>

                                        <label class="color_w">
                                        <input id="categoria" name="NombreCategoria" type="radio" value="<?php echo $rowPr['NombreCategoria'];?>" checked>
                                        <i class="bg_s"></i><?php echo $rowPr['NombreCategoria'];?>
                                    </label><br>

                                            
                                    <?php }?>

                                    
                                    <?php } mysqli_free_result($resultado_Categoria);?>
                                </div>

                                <div class="column-4">
                                    <small class="color_w">Stock</small>
                                    <input type="text" name="Stock" value="<?php echo $rowPr['Stock'];?>">

                                    <br><small class="color_w">Estado</small><br>

                                    <?php
                                    $con = Db::connect();
                                    $Estado = "SELECT * FROM Estado";
                                    $Resultado_Estado = mysqli_query($con, $Estado);

                                    if(mysqli_num_rows($Resultado_Estado)<1) {
                                        echo "<br><h6 class='f_weight color_w'>No se ha registrado ningun Estado</h6><br>";
                                    }
                                    while($r_Estado=mysqli_fetch_assoc($Resultado_Estado)){ ?>
                                    
                                    <?php if($r_Estado['EstadoProducto'] != $rowPr['EstadoProducto']){?>
                                        <label class="color_w">
                                            <input id="EstadoProducto" name="EstadoProducto" type="radio" value="<?php echo $r_Estado['EstadoProducto'];?>">
                                            <i class="bg_s"></i> <?php echo $r_Estado['EstadoProducto'];?>
                                        </label>
                                    <?php }else{?>
                                         <label class="color_w">
                                            <input id="EstadoProducto" name="EstadoProducto" type="radio" checked value="<?php echo $rowPr['EstadoProducto'];?>">
                                            <i class="bg_s"></i> <?php echo $rowPr['EstadoProducto'];?>
                                        </label>
                                    <?php }?>


                                    <?php } mysqli_free_result($Resultado_Estado);?>

                                    <br>

                                    <small class="color_w">Precio</small>
                                    <input type="text" name="Stock" value="<?php echo $rowPr['PrecioMoneda'];?>">
                                    
                                    <div class="column-4">
                                        <button class="color_w" type="submit"><i class="bx bx-save"></i> ACTUALIZAR</button>
                                    </div>
                                </div>

                            </aside>
                        </form>
                        <?php } mysqli_free_result($resultadoEPr);?>  
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>
