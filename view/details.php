<?php include_once './includes/film_control.php';?>
<div class="containers">
    <div id="path">
        <span>HOME/FILME/<?php echo $result[0]['title'];?></span>
        <h1><?php echo $result[0]['title'];?></h1>
    </div>
    <div id="trailer">
        <img id="cover" src="<?php echo $result[0]['cover_back'];?>" alt="cover">
        <img id="btn_trailer" src="./icons/play_btn.png" alt="play_btn">
    </div>
    <div id="container_profile">
        <img src="<?php echo $result[0]['cover_front'];?>" alt="cover_profile">
        <div>
            <h1 id="film_name"><?php echo $result[0]['title'];?></h1>
            <div id="info_div">
                <img src="./icons/classification/<?php echo $result[0]['classification'];?>anos.png" alt="classificação">
                <span><?php echo $result[0]['tempo'];?> min</span>
                <span><?php echo $return[0]['genero']?></span>
            </div>
        </div>
    </div>
    <div id="sinopse">
        <p id="title_sinop">Leia a sinopse: </p>
        <p id="sinopse_p"><?php echo $result[0]['sinopse'];?></p>
    </div>
    <div id="container_info">
        <span><img class="img_ico" src="./icons/1/star.png">Elenco: <?php echo $return[0]['elenco']?></span>
        <span><img class="img_ico" src="./icons/1/claquete.png">Diretor: <?php echo $return[0]['diretor']?></span>
        <span><img class="img_ico" src="./icons/1/mascara.png">Gênero: <?php echo $return[0]['genero']?></span>
        <span><img class="img_ico" src="./icons/1/rolodefilme.png">Duração: <?php echo $result[0]['tempo']?> min</span>
        <span><img class="img_ico" src="./icons/1/camera.png">Distribuidora: <?php echo $return[0]['distribuidora']?></span>
        <span><img class="img_ico" src="./icons/1/indicacao.png">classificação: <?php echo $result[0]['classification']?> anos</span>
    </div>
</div>