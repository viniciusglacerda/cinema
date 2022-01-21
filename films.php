<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header_style.css">
    <link rel="stylesheet" href="./css/footer_style.css">
    <link rel="stylesheet" href="./css/films_style.css">
    <link rel="stylesheet" href="./css/sala_style.css">
    <title>Filmes</title>
</head>
<body>
    <div id="opacity">
        <?php
            include_once './view/header.php';
            include_once './view/details.php';
            include_once './view/show_room.php';
            include_once './view/footer.php';
        ?>
    </div>
    <?php include_once './js/film_js.php';?>
</body>
</html>