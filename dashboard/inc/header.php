<header class="header_sticky bg_panel">
    <div class="container container_dashboard">
        <article class="header_contender-left">
            <div class="contender_buscador">
                <input type="search" placeholder="Buscar">
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
                         <?php } mysqli_free_result($resultado);?>
                    </div>
                    <div class="dropdow_menu bg_def hidden" id="dropdow_menu">
                        <ul>
                            <li><a href="cuenta.php">"><i class="bx bx-user"></i> Mi Cuenta</a></li>
                            <li><a href=""><i class="bx bx-wrench"></i> Configuración</a></li>
                            <li><a href="../action/LogoutAdmin.php"><i class="bx bx-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
         </article>
    </div>
</header>
