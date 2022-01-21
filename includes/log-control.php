<?php
    include_once './includes/connect.php';

    $user = $_POST['user'] ?? "";
    $pass = $_POST['pass'] ?? "";

    if(!empty($user) && !empty($pass)){
        $stmt = $conn->prepare('SELECT email, pass, cpf FROM users WHERE email = :email OR cpf = :cpf');
        $stmt->execute(array('email'=>$user, 'cpf'=>$user));
        
        $result = $stmt->fetchAll();

        if(count($result)){
           if(($result[0]['email'] == $user || $result[0]['cpf'] == $user) && $result[0]['pass'] == $pass){
                echo '<div class="alert" id="success">CONECTADO COM SUCESSO</div>';
           }else{
                echo '<div class="alert" id="failed">USUÁRIO OU SENHA INCORRETOS</div>';
           }
        }else{
            echo '<div class="alert" id="failed">CONTA INEXISTENTE!</div>';
        }
    }

?>