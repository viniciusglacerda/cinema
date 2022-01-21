<?php include_once './includes/main_control.php';?>
<div id="div_slide">
    <div id="btn_">
        <div id="slide__prev"><img  class="btn_slide" src="./icons/back.png" alt="voltar"></div>
        <div id="slide__next"><img class="btn_slide" src="./icons/forward.png" alt=""></div>
    </div>
    <div id="slide">
        <?php cover_main();?>
    </div>
</div>
<div id="container_">
    <div class="semi_title">
        <Span>
            Em Cartaz
        </Span>
    </div>
    <div id="container_main">
        <?php cover_cartaz();?>
    </div>
</div>
<div id="container_breve">
    <span class="semi_title">Em Breve</span>
    <div id="container_films_breve">
        <div class="btn__" id="volt" ><img src="./icons/back.png" alt="voltar"></div>
        <div id="cont_img">
            <?php cover_breve(); ?>
        </div>
        <div class="btn__" id="avan" ><img src="./icons/forward.png" alt="avancar"></div>
    </div>
</div>