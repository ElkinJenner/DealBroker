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
                    <aside class="column">
                        <div class="column-3">
                            <article class="product_item">
                                <figure class="bgcolor_1">
                                    <img src="../upload/img/products/playera.png">
                                </figure>
                                <div class="acciones"><i class="color_w bx bx-dots-vertical"></i></div>
                                <div class="description bg_def">
                                    <h5 class="f_weight t_c color_w"> Playera Trust me</h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h6 class="f_weight  color_w">
                                           15 monedas
                                        </h6>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-3">
                            <article class="product_item">
                                <figure class="bgcolor_3">
                                    <img src="../upload/img/products/facemask.png">
                                </figure>
                                <div class="acciones"><i class="color_w bx bx-dots-vertical"></i></div>
                                <div class="description bg_def">
                                    <h5 class="f_weight t_c color_w"> Mascarilla anti-covid</h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h6 class="f_weight  color_w">
                                           5 monedas
                                        </h6>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-3">
                            <article class="product_item">
                                <figure class="bgcolor_4">
                                    <img src="../upload/img/products/house.png">
                                </figure>
                                <div class="acciones"><i class="color_w bx bx-dots-vertical"></i></div>
                                <div class="description bg_def">
                                    <h5 class="f_weight t_c color_w"> Casa - Propiedad</h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h6 class="f_weight  color_w">
                                           20000 monedas
                                        </h6>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-3">
                            <article class="product_item">
                                <figure class="bgcolor_1">
                                    <img src="../upload/img/products/playera.png">
                                </figure>
                                <div class="acciones"><i class="color_w bx bx-dots-vertical"></i></div>
                                <div class="description bg_def">
                                    <h5 class="f_weight t_c color_w"> Playera Trust me</h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h6 class="f_weight  color_w">
                                           15 monedas
                                        </h6>
                                    </div>
                                </div>
                            </article>
                        </div>
           
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>