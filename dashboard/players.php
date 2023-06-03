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
                    <aside class="lista border_1 color_def bg_sp">
                        <div class="lista_item">
                            <h6 class="color_m"></h6>
                        </div>
                        <div class="lista_item">
                            <h6 class="color_m">Nombres Completos <i class="color_m icon-arrow-down4"></i></h6>
                        </div>
                        <div class="lista_item">
                            <h6 class="color_m">Usuario</h6>
                        </div>

                        <div class="lista_item">
                            <h6 class="color_m">Registro</h6>
                        </div>

                         <div class="lista_item">
                            <h6 class="color_m">Status</h6>
                        </div>

                        <div class="lista_item">
                            <h6 class="color_m">Obs</h6>
                        </div>
                    </aside>
                   <!--Contenido de Lista -->
                    <aside class="lista border_1 color_def">
                        <div class="lista_item ">
                            <div class="perfil_admin m_c">
                                <img src="../img/person2.jpg">
                            </div>
                        </div>
                        <div class="lista_item ">
                            <h6 class="color_w">Ulises Miranda Vega</h6>
                        </div>
                        <div class="lista_item border_1">
                            <h6 class="color_w">@UlisesM</h6>
                        </div>

                        <div class="lista_item border_1">
                            <h6 class="color_w">12/06/2023</h6>
                        </div>

                         <div class="lista_item border_1">
                            <h6 class="status_active">Activo</h6>
                        </div>

                        <div class="lista_item border_1">
                            <h6 class="color_w">Bloqueado</h6>
                        </div>

                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>