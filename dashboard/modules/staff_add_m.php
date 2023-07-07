<!--Ventana Modal-->
<div class="modal_d bg_panel hidden" id="modal">
    <article class="color_def title_dashboard">
        <h6 class="f_weight font_m color_w">STAFF</h6>
        <code class="f_weight font_m"><span class="bx bx-dice-2"></span> STAFF / DASHBOARD</code>
        <button class="bg_danger color_w" id="close"><i class="bx bx-x"></i></button>
    </article>

    <form class="form_register form_login" method="POST" enctype="multipart/form-data" action="../action/registrarStaff.php" methode>
        <aside class="column_2">
            <div class="left">
                <aside class="column">
                     <div class="column-12">
                        <small class="color_w">Fotografia</small>
                        <article class="file_content">
                            <input type="file" name="FotoPerfil">
                            <p><i class="color_w bx bx-image-add"></i> Arrastra una imagen hasta aquí o <span> Sube archivo</span></p>
                        </article>
                                    
                        <br><h6 class="color_w f_weight">CARGO</h6>
                        <?php
                        $con = Db::connect();
                        $cargo = "SELECT * FROM cargo";
                        $resultado_cargo = mysqli_query($con, $cargo);
                        while($r_cargo=mysqli_fetch_assoc($resultado_cargo)){ ?>

                        <label class="color_w">
                            <input id="categoria" name="NomCargo" type="radio" value="<?php echo $r_cargo['NomCargo'];?>">
                            <i class="bg_s"></i><?php echo $r_cargo['NomCargo'];?>
                        </label>
                                        
                        <?php } mysqli_free_result($resultado_cargo);?>
                    </div>
                </aside>
            </div>

            <div class="right">
                <aside class="column">
                    <div class="column-12">                   
                        <small class="color_w">Nombres Completos</small>
                        <input type="text" name="Nombres">

                        <small class="color_w">Usuario</small>
                        <input type="text" name="Usuario">

                        <small class="color_w">Email</small>
                        <input type="text" name="Email">

                        <small class="color_w">Contraseña</small>
                        <input class="input"  type="password" name="Contrasena">

                        <small class="color_w">Repetir Contraseña</small>
                        <input class="input" type="password" name="Contrasena">
                    </div>

                    <div class="column-4">
                        <button class="bg_verify color_w" type="submit"><i class="bx bx-check"></i> REGISTRAR</button>
                    </div>
                </aside>
            </div>

        </aside>
    </form>
</div>