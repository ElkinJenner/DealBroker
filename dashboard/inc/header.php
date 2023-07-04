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
                        $cuentePropia = $_SESSION['usuario'];
                        $cuenta = "SELECT * FROM staff WHERE Usuario = '$cuentePropia' ";
                        $resultado = mysqli_query($con, $cuenta);

                        while($row=mysqli_fetch_assoc($resultado)){ ?>
                        <img class="img300" src="../upload/img/<?php echo $row['FotoPerfil'];?>">
                    </div>
                    <div class="dropdow_menu bg_def hidden" id="dropdow_menu">
                        <ul>
                            <figure class="perfil_admin m_c">
                                <img class="img300" src="../upload/img/<?php echo $row['FotoPerfil'];?>">
                                <small class="color_w"><?php echo $row['Nombres'];?><br>
                                <div class="small">@<?php echo $row['Usuario'];?></div></small>
                            </figure>
                            <li><a href="cuenta.php"><i class="bx bx-user"></i> Mi Cuenta</a></li>
                            <li><a href=""><i class="bx bx-wrench"></i> Configuración</a></li>
                            <li><a href="../action/LogoutAdmin.php"><i class="bx bx-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                    <?php } mysqli_free_result($resultado);?>
                </li>
            </ul>
         </article>
    </div>
</header>
