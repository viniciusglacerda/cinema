<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login_style.css">
    <title>Login</title>
</head>
<body>
    <div id="screen">
        <?php
            $user = $_POST['user'] ?? "";
            $pass = $_POST['pass'] ?? "";
            if(empty($user) || empty($pass)){
                require './view/user-login-form.php';
            }else{
                $q = "select * from usuarios WHERE users LIKE '$user'";
                $verif_user = $banco->query($q);
                $ver = $verif_user->fetch_object();
                if($ver->users == $user && $verif_pass){
                    echo "Login efetuado";
                    $_SESSION['user'] = "$ver->users";
                    $_SESSION['name'] = "$ver->nomes";
                    $_SESSION['type'] = "$ver->tipo";
                    header('Location: ./index.php');
                }else{
                    echo "<p id='alert'>USER OR PASSWORD IS INCORRET!</p>";
                    require './view/user-login-form.php';
                }  
            }
        ?>
    </div>    
</body>
</html>