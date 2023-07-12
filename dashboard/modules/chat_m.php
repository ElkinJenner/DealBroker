<article class="widgets last_child" style="height:100%">
    <div class="widgets_head">
        <h6 class="font_m f_weight color_w"><img src="../img/chat_varios.jpg"></h6>
     </div>
    <div class="widgets_body">
        <!--Muestra Mensaje-->
        <?php
        $con = Db::connect();
        $Perfilpropio = $_SESSION['Usuario'];
        $ChatStaff = "SELECT * FROM ChatStaff c INNER JOIN Staff s ON c.Idstaff = s.IdStaff ORDER BY IdChatStaff ASC";
        $resultado_chatS = mysqli_query($con, $ChatStaff);

        if(mysqli_num_rows($resultado_chatS)<1) {
             echo "<br><h6 class='f_weight t_c color_w'>No hay registro de mensajes</h6><br>";
        }

        while($r_chatS=mysqli_fetch_assoc($resultado_chatS)){ ?>
        
        <?php if($r_chatS['Usuario'] != $Perfilpropio){?>

        <div class="mensajes_chat">
            <figure class="mensajes_chat_autor">
                <img class="author_img" src="<?php echo $r_chatS['FotoPerfil'];?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </figure>
            
            <div class="mensajes_chat_word bg_chat">
                <h6 class="color_w"><?php echo $r_chatS['Nombres'];?></h6>
                <span class="color_w"><?php echo $r_chatS['MensajeStaff'];?></span> 
                <small class="color_s"><?php echo $r_chatS['FechaChat'];?></small>
            </div>
        </div>

        <?php }else{?> 
        
        <div class="mensajes_chat">

            <div class="mensajes_chat_word left bg_chat">
                <h6 class="color_w"><?php echo $r_chatS['Nombres'];?></h6>
                <span class="color_w"><?php echo $r_chatS['MensajeStaff'];?></span> 
                <small class="color_s"><?php echo $r_chatS['FechaChat'];?></small>
            </div>

            <figure class="mensajes_chat_autor left">
                <img class="author_img" src="<?php echo $r_chatS['FotoPerfil'];?>">
                <svg class="bg_verify" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </figure>
        </div>

        <?php }?>


        <?php } mysqli_free_result($resultado_chatS);?>

    </div>
    <div class="widgets_footer">
            <!--Captura de Datos obtenidos para el registro de mensajes de chat-->
            <form class="chat_widgets" method="POST" autocomplete="off">

            <!--Seleccionar Id-->
            <?php
            $con = Db::connect();
            $CuentaPropia = $_SESSION['Usuario'];
            $IdChat = "SELECT * FROM Staff WHERE Usuario = '$CuentaPropia'";
            $resultado_IdChat = mysqli_query($con, $IdChat);
            while($r_IdChat=mysqli_fetch_assoc($resultado_IdChat)){ ?>

             <input type="hidden" name="IdStaff" value="<?php echo $r_IdChat['IdStaff'];?>">
             <input type="hidden" name="FechaChat" value="<?php echo date('Y-m-d\TH-i:s');?>">

            <?php } mysqli_free_result($resultado_IdChat);?>
            
            <input class="bg_chat" name="MensajeStaff" id="MensajeStaff" type="text" placeholder="Write your message">
            </form>
     </div>
        <!--Mandar al Action para registrar-->
        <?php
            if(isset($_POST['IdStaff']) && isset($_POST['FechaChat']) && isset($_POST['MensajeStaff'])){
                require_once "../action/registrarChat.php";
            }
        ?>
</article>