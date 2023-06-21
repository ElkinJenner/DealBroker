<header class="header_sticky bg_panel">
    <div class="container">
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
                        <img src="../upload/img/user.png">
                        <small class="color_w"><?php echo $_SESSION['usuario']; ?><i class="color_w bx bx-chevron-down"></i></small>
                    </div>
                    <div class="dropdow_menu bg_def hidden" id="dropdow_menu">
                        <ul>
                            <li><a href="cuenta.php?&UserI=<?php echo $_SESSION['usuario']; ?>"><i class="bx bx-user"></i> Mi Cuenta</a></li>
                            <li><a href=""><i class="bx bx-wrench"></i> Configuración</a></li>
                            <li><a href="../action/LogoutAdmin.php"><i class="bx bx-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
         </article>
    </div>
</header>