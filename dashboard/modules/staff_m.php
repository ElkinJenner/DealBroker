<?php
    require_once "../action/conexion.php";
    $staff = "SELECT * FROM staff";
    $con = Db::connect();
    $resultado = mysqli_query($con, $staff);
    while($row=mysqli_fetch_assoc($resultado)){ ?>

<div class="column-3">
    <article class="article_perfil article_staff bg_def">
         <figure>
              <img src="../upload/img/<?php echo $row['FotoPerfil'];?>">
         </figure>
            <h5 class="f_weight color_w"><?php echo $row['Nombres'];?></h5>
            <small class="f_weight color_w"><?php echo $row['NomCargo'];?></small>
            <p class="redes_s">
                <a href=""><i class="color_w bx bxl-facebook"></i></a>
                <a href=""><i class="color_w bx bxl-linkedin"></i></a>
                <a href=""><i class="color_w bx bxl-discord"></i></a>
            </p>
     </article>
</div>

<?php } mysqli_free_result($resultado);?>