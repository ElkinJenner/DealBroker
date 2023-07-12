<header class="header_sticky">
    <div class="container container_dashboard">
        <article class="header_contender-left">
          <div class="contender_buscador">
                <div class="btn_search">
                    <i class="bx bx-search"></i>
                </div>
                <input type="search" id="buscar" placeholder="Buscar">
            </div>
        </article>

        <article class="header_contender-right">
            <ul>
                <li><a href="./"><i class="bx bx-envelope"></i></a></li>
                <li><a class="switch_content bgcolor_subpanel b_r color_w"><div class="switch"></div></a></li>
                <li>
                    <div class="perfil_admin" id="dropdow_toogle">
                        <?php
                        $con = Db::connect();
                        $cuentePropia = $_SESSION['Usuario'];
                        $cuenta = "SELECT * FROM staff WHERE Usuario = '$cuentePropia' ";
                        $resultado = mysqli_query($con, $cuenta);

                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                        <img class="img300" src="<?php echo $row['FotoPerfil'];?>">
                    </div>
                    <div class="dropdow_menu bg_def hidden" id="dropdow_menu">
                        <ul>
                            <figure class="perfil_admin m_c">
                                <img class="img300" src="<?php echo $row['FotoPerfil'];?>">
                                <small class="color_w"><?php echo $row['Nombres'];?><br>
                                <div class="small">@<?php echo $row['Usuario'];?></div></small>
                            </figure>
                            <li><a href="cuenta.php"><i class="bx bx-user"></i> Mi Cuenta</a></li>
                            <li><a href=""><i class="bx bx-wrench"></i> Configuración</a></li>
                            <li><a id="btnCerrarS"><i class="bx bx-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                    <?php } mysqli_free_result($resultado);?>
                </li>
            </ul>
         </article>
    </div>
</header>
<!--Ventana Modal CRUD-->
<div class="modal_crud hidden" id="modal_c">
    <aside class="modal_crud_contenedor bg_w">
        <div class="modal_crud_contenedor_h">
            <h5 class="font_d f_weight color_m">¿Estas seguro que desea salir?</h5>
        </div>
        <div class="modal_crud_contenedor_f">
            <date_add class="left">
                <a href="../action/LogoutAdmin.php">Sí</a>
            </date_add>
            <date_add class="right">
                <a href="" id="btnCancelar">No</a>
            </date_add>
        </div>
    </aside>
</div>
<script>
    //Ventana Modal Salir
    let btnCerrarS = document.getElementById("btnCerrarS");
    let btnCancelar = document.getElementById("btnCancelar");
    let modal_c = document.getElementById("modal_c");
    let count_c = 0;

    function salirSession() {
        if (count_c == 0) {
            modal_c.classList.remove("hidden");
            count_c = 1;
        }
        else {
            modal_c.classList.add("hidden");
            count_c = 0;
        }
    }
    btnCerrarS.addEventListener('click', salirSession, true);
    btnCancelar.addEventListener('click', salirSession, true);
</script>
