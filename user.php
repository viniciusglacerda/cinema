<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user_style.css">
    <title><?php $title = $_GET['id'] ?? 1;if($title == 1){echo 'Login';}else{echo 'Registre-se';};?></title>
</head>
<body>
    <header>
        <div id="logo">
            <h1>CINEMA</h1>
            <p>Felicidade nas telonas</p>
        </div>
    </header>
    <div id="screen">
        <?php
            $screen = $_GET['id'] ?? 1;

            if($screen == 1){
                include_once './view/user-login-form.php';
            }else{
                include_once './view/register.php';
            }

        ?>
    </div> 
    <footer>
        <div id="logo_footer">
            <h1>CINEMA</h1>
            <p>Felicidade nas telonas</p>
        </div>
        <div id="rod">
            <span>Copyright &copy; 2022 Cinema</span>
        </div>
    </footer>  
</body>
</html>