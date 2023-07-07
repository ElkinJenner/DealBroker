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
                        <!--Product Item-->
                        <div class="column-3">
                            <article class="product_item bg_def">
                                 <!--Acciones product-->
                                <div class="acciones">
                                <!--Boton-->
                                    <a class="btn_acciones">
                                        <i class="color_w bx bx-dots-vertical"></i>
                                        <input type="radio" name="selector" class="input_check">
                                    </a>
                                    <!--Contenido a mostrar-->
                                    <div class="product_action">
                                    <ul>
                                        <li><a href="product_edit.php"><i class="color_w bx bx-pencil"></i> Editar</a></li>
                                        <li><a href=""><i class="color_w bx bx-trash"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                                <!--Fin de Contenido a mostrar-->
                                </div>
                                <figure class="bg_def">
                                    <img src="../upload/products/computadora.png">
                                </figure>
                                
                                <div class="description">
                                    <h5 class="t_t f_weight color_w"> Computadora 16x16</h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <small class="f_weight color_w">15 mon</small>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-3">
                            <article class="product_item bg_def">
                                 <!--Acciones product-->
                                <div class="acciones">
                                <!--Boton-->
                                    <a class="btn_acciones">
                                        <i class="color_w bx bx-dots-vertical"></i>
                                        <input type="radio" name="selector" class="input_check">
                                    </a>

                                    <!--Contenido a mostrar-->
                                    <div class="product_action">
                                    <ul>
                                        <li><a href=""><i class="color_w bx bx-pencil"></i> Editar</a></li>
                                        <li><a href=""><i class="color_w bx bx-trash"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                                <!--Fin de Contenido a mostrar-->
                                </div>
                                <!--Fin Acciones product-->
                                <figure class="bg_def">
                                    <img src="../upload/products/central.png">
                                </figure>
                                <div class="description">
                                    <h5 class="f_weight t_t color_w">Central Park</h5>
                                    <div class="precio_products">
                                         <img src="../img/icons/moneda_icon.png"> 
                                        <small class="f_weight color_w">30000 mon</small>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="column-3">
                            <article class="product_item bg_def">
                                <!--Acciones product-->
                                <div class="acciones">
                                <!--Boton-->
                                    <a class="btn_acciones">
                                        <i class="color_w bx bx-dots-vertical"></i>
                                        <input type="radio" name="selector" class="input_check">
                                    </a>

                                    <!--Contenido a mostrar-->
                                    <div class="product_action">
                                    <ul>
                                        <li><a href=""><i class="color_w bx bx-pencil"></i> Editar</a></li>
                                        <li><a href=""><i class="color_w bx bx-trash"></i> Eliminar</a></li>
                                    </ul>
                                </div>
                                <!--Fin de Contenido a mostrar-->
                                </div>
                                <!--Fin Acciones product-->
                                <figure class="bg_default">
                                    <img src="../upload/products/house.png">
                                </figure>
                                <div class="description">
                                    <h5 class="f_weight t_t color_w"> Propiedad Zona Sur</h5>
                                    <div class="precio_products">
                                        <img src="../img/icons/moneda_icon.png"> 
                                        <small class="f_weight  color_w">20000 mon</small>
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