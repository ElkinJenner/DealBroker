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
                         <form class="form_register form_login" method="POST" enctype="multipart/form-data" action="../action/registrarStaff.php" methode>
                            <aside class="column">
                                <div class="column-3">
                                    <small class="color_w">Foto de Producto</small>
                                    <article class="file_content">
                                        <input type="file" name="FotoProducto">
                                        <small><h5 class="color_w bx bx-image-add"></h5> <br> Arrastra una imagen aquí o <br><span> Sube archivo</span></small>
                                    </article>
                                    <small class="small">Formatos aceptados: JPG-PNG-GIF / Escala de 400x400 px</small>
                                </div>

                                <div class="column-5">
                                    <small class="color_w">Nombre del producto</small>
                                    <input type="text" name="NombreProducto">

                                    <small class="color_w">Descripción del producto</small>
                                    <textarea></textarea>

                                    <small class="color_w">Código</small>
                                    <input type="text" name="CodProducto"><br>

                                    <br><small class="color_w">Categoria</small><br><br>
                                    <?php
                                    $con = Db::connect();
                                    $Categoria = "SELECT * FROM CategoriaProd";
                                    $resultado_Categoria = mysqli_query($con, $Categoria);

                                    if(mysqli_num_rows($resultado_Categoria)<1) {
                                        echo "<br><h6 class='f_weight color_w'>No se ha registrado ninguna categoria</h6><br>";
                                    }
                                    while($r_Categoria=mysqli_fetch_assoc($resultado_Categoria)){ ?>

                                    <label class="color_w">
                                        <input id="categoria" name="NombreCategoria" type="radio" value="<?php echo $r_Categoria['NombreCategoria'];?>">
                                        <i class="bg_s"></i><?php echo $r_Categoria['NombreCategoria'];?>
                                    </label><br>
                                    <?php } mysqli_free_result($resultado_Categoria);?>
                                </div>

                                <div class="column-4">
                                    <small class="color_w">Stock</small>
                                    <input type="text" name="Stock">

                                    <br><small class="color_w">Estado</small><br>
                                    <label class="color_w">
                                        <input id="EstadoProducto" name="EstadoProducto" type="radio">
                                        <i class="bg_s"></i>Activo
                                    </label>
                                    <label class="color_w">
                                        <input id="EstadoProducto" name="EstadoProducto" type="radio">
                                        <i class="bg_s"></i>Inactivo
                                    </label><br>

                                    <small class="color_w">Precio</small>
                                    <input type="text" name="Stock">
                                    
                                    <div class="column-4">
                                        <button class="bg_verify color_w" type="submit"><i class="bx bx-save"></i> REGISTRAR</button>
                                    </div>
                                </div>

                            </aside>
                        </form>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>
