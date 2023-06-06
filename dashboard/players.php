<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players | Dashboard</title>
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
                    <h5 class="f_weight color_w">PLAYERS / DASHBOARD</h5>
                    </article>
                    <!--Title Lista -->
                    <aside class="column color_def">
                        <div class="column-1">
                            <article class="table bgcolor_subpanel">
                                 <h5 class="color_w">#</h5>
                            </article>
                             <div class="table_item">
                                <h6 class="color_w">1</h6>
                            </div>
                        </div>
                        <div class="column-3">
                            <article class="table bgcolor_subpanel">
                                <h5 class="color_w">Nombres Completos <i class="color_w icon-arrow-down4"></i></h5>
                            </article>

                            <div class="table_item perfil_admin m_c">
                                <img src="../img/person2.jpg">
                                <h6 class="color_w">John Marcos Valderrama</h6>
                            </div>
                        </div>
                        <div class="column-2">
                            <article class="table bgcolor_subpanel">
                                <h5 class="color_w">Usuario</h5>
                            </article>

                            <div class="table_item">
                                <h6 class="color_w">@JohnV</h6>
                            </div>
                        </div>

                        <div class="column-2">
                            <article class="table bgcolor_subpanel">
                            <h5 class="color_w">Registro</h5>
                            </article>
                            <div class="table_item">
                                <h6 class="color_w">12/05/2023</h6>
                            </div>
                        </div>

                         <div class="column-2">
                            <article class="table bgcolor_subpanel">
                                <h5 class="color_w">Status</h5>
                            </article>

                            <div class="table_item">
                                <h6 class="color_w">Activo</h6>
                            </div>
                        </div>

                        <div class="column-2">
                            <article class="table bgcolor_subpanel">
                            <h5 class="color_w">Acciones</h5>
                            </article>

                            <div class="table_item">
                                <p>
                                    <i class="color_w fi-eye"></i>
                                    <i class="color_w fi-link"></i>
                                    <i class="color_w fi-trash"></i>
                                </p>
                            </div>
                        </div>
                    </aside>
                   <!--Contenido de Lista -->
            
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>