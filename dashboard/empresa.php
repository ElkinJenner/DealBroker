<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa | Dashboard</title>
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
                    <h5 class="f_weight color_w"><span class="icon-statistics"></span> EMPRESA / PÁGINA WEB</h5>
                    </article>
                    <aside class="column">
                        <div class="column-12">
                            <form class="form_pages" method="post">
                            <small class="color_w">Titulo: </small><br>
                            <input type="text" value="EMPRESA">
                            <small class="color_w">SubTitulo: </small><br>
                            <input type="text" value="Artigames es un AAA Game Developer Studio peruano independiente fundado en 2005.">
                             <small class="color_w">Descripción: </small><br>
                             <input type="text" style="height:200px;" value="Empresa especializada en el desarrollo de juegos de alto presupuesto para PC y consolas de...">
                            </form>
                        </div>
                    </aside>
                </div>
            </main>
        </aside>
    </main>
    <?php include "inc/footer.php" ?>
</body>
</html>