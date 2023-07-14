 <!--Ventana Modal-->
 <div class="modal_d bg_panel hidden" id="modal">
     <article class="color_def title_dashboard">
        <h6 class="f_weight font_m color_w">TIENDA</h6>
        <code class="f_weight font_m"><span class="bx bx-dice-2"></span> TIENDA / DASHBOARD</code>
        <button class="bg_danger color_w" id="close"><i class="bx bx-x"></i></button>
    </article>

        <form class="form_register form_login" method="POST" enctype="multipart/form-data" autocomplete="off">
            <aside class="column">
                <div class="column-3">
                    <small class="color_w">Foto de Producto</small>
                    <article class="file_content">
                        <input type="file" name="FotoProducto">
                        <small><h5 class="color_w bx bx-image-add"></h5> <br> Arrastra una imagen aquí o <br><span> Sube archivo</span></small>
                    </article>
                    <small class="small">Formatos: JPG-PNG-GIF / Escala de 400 x 400px</small>
                </div>

                <div class="column-5">
                    <small class="color_w">Nombre del producto</small>
                    <input type="text" name="NombreProducto">

                    <small class="color_w">Descripción del producto</small>
                    <textarea name="DescrProducto"></textarea>

                    <small class="color_w">Código</small>
                    <input type="text" name="CodProducto"><br>

                    <br><small class="color_w">Categoria</small><br><br>
                    <?php
                    $con = Db::connect();
                    $Categoria = "SELECT * FROM CategoriaProd";
                    $resultado_Categoria = mysqli_query($con, $Categoria);

                    if(mysqli_num_rows($resultado_Categoria)<1) {
                        echo "<h6 class='f_weight color_w'>Aun no hay categorias añadidas</h6><br>";
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

                    <?php
                    $con = Db::connect();
                    $Estado = "SELECT * FROM Estado";
                    $resultado_Estado = mysqli_query($con, $Estado);
                    if(mysqli_num_rows($resultado_Estado)<1) {
                        echo "<br><h6 class='f_weight color_w'>Aun no hay datos registrados</h6><br>";
                    }
                    while($r_Estado=mysqli_fetch_assoc($resultado_Estado)){ ?>

                    <label class="color_w">
                        <input id="EstadoProducto" name="EstadoProducto" type="radio" value="<?php echo $r_Estado['EstadoProducto'];?>">
                        <i class="bg_s"></i><?php echo $r_Estado['EstadoProducto'];?>
                    </label>
                    <?php } mysqli_free_result($resultado_Estado);?>
                    <br>
                    <small class="color_w">Precio</small>
                    <input type="text" name="PrecioMoneda">
                                    
                    <div class="column-4">
                        <button class="bg_verify color_w" type="submit"><i class="bx bx-save"></i> REGISTRAR</button>
                    </div>
                </div>

            </aside>
        </form>            
    </div>