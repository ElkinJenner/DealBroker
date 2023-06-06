<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta | Dashboard</title>
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
                    <h5 class="f_weight color_w">MI CUENTA / DASHBOARD</h5>
                    </article>
                    <aside class="column" >
                    <!--Ventana Modal-->
                    <div class="bg_panel">
                        <form class="form_register form_login">
                            <article class="column">
       
                            <div class="column-6">
                                <img class="img200 b_r_50" src="../upload/img/user.png"><br>
                                  <div class="form_register_file color_def">
                                    <input type='file'>
                                    <span class='bg_input button'><h5 class="color_w fi-upload"></h5></span>
                                    <p class='color_w label' data-js-label>No ha seleccionado ningun archivo</p>
                                </div>
                            </div>

                           

                            <div class="column-6">
                                <small class="color_w">Nombres Completos</small>
                                <input type="text" value="Administrador General">

                                <small class="color_w">Usuario</small>
                                <input type="text" value="Admin">

                                <small class="color_w">Email</small>
                                <input type="email" value="info@artigames.com" >
                            </div>

                       

                            <div class="column-6">
                     
                                <br><h6 class="color_w f_weight">CARGO</h6>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Informes" checked="">
                                    <i class="bg_s"></i>Computer programming
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Reclamo">
                                    <i class="bg_s"></i>Database Designer
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Soy Colaborador">
                                    <i class="bg_s"></i>3D Designer
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Quiero colaborar con ustedes!">
                                    <i class="bg_s"></i>System Analyst
                                </label>
                                    
                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Otro">
                                    <i class="bg_s"></i>Otro
                                </label>
                            </div>

                    

                            <div class="column-6">
                                <small class="color_w">Contraseña</small>
                                <input class="input"  type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >

                                 <small class="color_w">Repetir Contraseña</small>
                                <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                            </div>

                     

                            <div class="column-2">
                                <button class="bg_verify color_w" type="submit"><i class="icon-checkmark"></i> GUARDAR</button>
                            </div>
                

                            </article>
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