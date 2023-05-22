<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Broker - Contactos</title>
    <?php include "inc/link.php"?>
</head>
<body>
    <?php include "inc/menu.php"?>
    <!--Main Principal-->
    <main class="main bggame">
        <?php include "inc/logo.php"?>
        <section>
            <div class="container container_website">
                <h1 class="h1 color_w">CONTACTOS</h1>
                <h3 class="f_weight color_s">Llena el formulario y recibe información</h3><br><br>
                <aside class="column">
                    <div class="column-6">
                        <form method="POST" autocomplete="off"  action="action/registrarContactForm.php">
                            
                            <article>
                                <input type="text" name="nombres" id="nombres" placeholder="Nombres Completos">
                            </article>
                            
                            <article>
                                <input type="email" name="email" id="email" placeholder="Correo electrónico">
                            </article>

                            <article class="article_form">
                                <h5 class="color_w f_weight"> Selecciona una opción</h5><br>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Informes" checked>
                                    <i class="bg_s"></i>Informes
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Reclamo">
                                    <i class="bg_s"></i>Reclamo
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Soy Colaborador">
                                    <i class="bg_s"></i>Soy Usuario
                                </label>

                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Quiero colaborar con ustedes!">
                                    <i class="bg_s"></i>Quiero colaborar !
                                </label>
                                    
                                <label class="color_w">
                                    <input id="categoria" name="categoria" type="radio" value="Otro">
                                    <i class="bg_s"></i>Otro
                                </label>
                            </article>
                            
                            <article>
                                <textarea placeholder="Mensaje" id="mensaje" name="mensaje"></textarea>
                            </article>
                            
                            <article>
                                <button class="bg_s color_w f_r" type="submit">ENVIAR</button>
                            </article>
                            
                        </form>
                    </div>
                </aside>

                <div class="contact_map">
                    <img  src="img/mapa.png">
                </div>
            </div>
        </section>
    </main>
    <?php include "inc/footer.php"?>
</body>
</html>