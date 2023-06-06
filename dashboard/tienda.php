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
        <aside class="sidebar">
            <?php include "inc/nav.php" ?>
        </aside>
        <!--Contenido Derecha-->
        <aside class="wrapper">
            <?php include "inc/header.php" ?>
            <main class="contender_dashboard">
                <div class="container">                   
                    <article class="color_def title_dashboard">
                        <h5 class="f_weight color_w"><span class="icon-bag"></span> TIENDA / DASHBOARD</h5>
                         <button class="bg_verify color_w" id="open"><i class="icon-plus2"></i> Nuevo</button>
                    </article>
                    <aside class="column">
                        <div class="column-4">
                            <article class="product_item">
                                <figure class="bgcolor_1">
                                    <img src="../upload/img/products/playera.png">
                                </figure>
                                <div class="acciones"><i class="color_w icon-dots"></i></div>
                                <div class="description bg_def">
                                    <h3 class="f_weight t_c color_w"> Playera Trust me</h3>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h5 class="f_weight  color_w">
                                           15 monedas
                                        </h5>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-4">
                            <article class="product_item">
                                <figure class="bgcolor_3">
                                    <img src="../upload/img/products/facemask.png">
                                </figure>
                                <div class="acciones"><i class="color_w icon-dots"></i></div>
                                <div class="description bg_def">
                                    <h3 class="f_weight t_c color_w"> Mascarilla anti-covid</h3>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h5 class="f_weight  color_w">
                                           5 monedas
                                        </h5>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-4">
                            <article class="product_item">
                                <figure class="bgcolor_4">
                                    <img src="../upload/img/products/house.png">
                                </figure>
                                <div class="acciones"><i class="color_w icon-dots"></i></div>
                                <div class="description bg_def">
                                    <h3 class="f_weight t_c color_w"> Casa - Propiedad</h3>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <h5 class="f_weight  color_w">
                                           20000 monedas
                                        </h5>
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