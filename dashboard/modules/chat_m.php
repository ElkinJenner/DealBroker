<article class="widgets last_child" style="height:100%">
    <div class="widgets_head">
        <h6 class="font_m f_weight color_w"><img src="../img/chat_varios.jpg"></h6>
     </div>
    <div class="widgets_body">
        <!--Mensaje-->
        <?php
        $ChatStaff = "SELECT * FROM ChatStaff c INNER JOIN Staff s ON c.Idstaff = s.IdStaff";
        $con = Db::connect();
        $resultado_chatS = mysqli_query($con, $ChatStaff);
        while($r_chatS=mysqli_fetch_assoc($resultado_chatS)){ ?>

        <div class="mensajes_chat">
            <figure class="mensajes_chat_autor">
                <img class="author_img" src="../upload/profiles/<?php echo $r_chatS['FotoPerfil'];?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </figure>
            <div class="mensajes_chat_word bg_chat">
                <h6 class="color_w"><?php echo $r_chatS['Nombres'];?></h6>
                <span class="color_w"><?php echo $r_chatS['MensajeStaff'];?></span> 
                <small class="color_s">Dec, 12</small>
            </div>
        </div>
        <?php } mysqli_free_result($resultado_chatS);?>

    </div>
    <div class="widgets_footer">
        <div class="chat_widgets">
            <input class="bg_chat" type="text" placeholder="Write your message">
        </div>
     </div>
</article>