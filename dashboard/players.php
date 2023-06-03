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
                    <aside class="lista border_1 color_def bgcolor_subpanel">
                        <div class="lista_item">
                        </div>
                        <div class="lista_item">
                            <h6 class="color_w">Nombres Completos <i class="color_w icon-arrow-down4"></i></h6>
                        </div>
                        <div class="lista_item">
                            <h6 class="color_w">Usuario</h6>
                        </div>

                        <div class="lista_item">
                            <h6 class="color_w">Registro</h6>
                        </div>

                         <div class="lista_item">
                            <h6 class="color_w">Status</h6>
                        </div>

                        <div class="lista_item">
                            <h6 class="color_w">Obs</h6>
                        </div>
                    </aside>
                   <!--Contenido de Lista -->
                   <div id="lista_c"></div>
                   <script>
                    let content_l = document.querySelector("#lista_c");
                    let i =0;
                    while(i<2){
                    content_l.innerHTML +=`
                     <aside class="lista border_1 color_def">
                        <div class="lista_item ">
                            <div class="perfil_admin m_c">
                                <img src="../img/person2.jpg">
                            </div>
                        </div>
                        <div class="lista_item ">
                            <span class="color_w">Ulises Miranda Vega</span>
                        </div>
                        <div class="lista_item border_1">
                            <span class="color_w">@UlisesM</span>
                        </div>

                        <div class="lista_item border_1">
                            <span class="color_w">12/06/2023</span>
                        </div>

                         <div class="lista_item border_1">
                            <span class="status_active">Activo</span>
                        </div>

                        <div class="lista_item border_1">
                            <span class="color_w">Bloqueado</span>
                        </div>
                    </aside>
                    <!--Contenido de Lista -->
                    <aside class="lista border_1 color_def">
                        <div class="lista_item ">
                            <div class="perfil_admin m_c">
                                <img src="../img/person3.jpg">
                            </div>
                        </div>
                        <div class="lista_item ">
                            <span class="color_w">Luis Gabriel Tiznado</span>
                        </div>
                        <div class="lista_item border_1">
                            <span class="color_w">@LuisM</span>
                        </div>

                        <div class="lista_item border_1">
                            <span class="color_w">11/06/2023</span>
                        </div>

                         <div class="lista_item border_1">
                            <span class="status_active">Activo</span>
                        </div>

                        <div class="lista_item border_1">
                            <span class="color_w">Bloqueado</span>
                        </div>
                    </aside>
                    `;
                    i++;
                    }
                    </script>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>