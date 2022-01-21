<?php
    include './includes/connect.php';

    $stmt = $conn->prepare('SELECT title,cover_back, cover_front, classification, exib FROM films');
    $stmt->execute();

    $result = $stmt->fetchAll();
    
    function cover_cartaz(){
        global $result;
        
        if(count($result)){
            for($i = 0; $i < count($result); $i++){
                if($result[$i]['exib'] == TRUE){
                    $cover = $result[$i]['cover_front'];
                    $title = $result[$i]['title'];
                    echo "
                    <div class='imgs'>
                        <a href='./films.php?film=$title'><img src='$cover' alt='$title'></a>
                    </div>";
                }
            }
        }else{
            echo 'Nenhum filme disponível';
        }
    }

    function cover_breve(){
        global $result;

        if(count($result)){
            for($i = 0; $i < count($result); $i++){
                if($result[$i]['exib'] == FALSE){
                    $cover = $result[$i]['cover_front'];
                    $title = $result[$i]['title'];
                    echo "
                    <div class='slide_js'>
                        <a href='./films.php?film=$title'><img src='$cover' alt='$title'></a>
                    </div>";
                }
            }
        }else{
            echo 'Nenhum filme disponível';
        }
    }
    function cover_main(){
        global $result;
        if(count($result)){
            for($i = 0; $i < count($result); $i++){
                $cover = $result[$i]['cover_back'];
                $title = $result[$i]['title'];
                echo "
                <a href='./films.php?film=$title'><img class='item' src='$cover' alt='$title'></a>
                ";
            }
        }else{
            echo 'Nenhum filme disponível';
        }
    }
?>