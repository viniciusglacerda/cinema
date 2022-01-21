<?php
    include_once './includes/connect.php';

    $users = $_POST['nome'] ?? ''; 
    $email = $_POST['email'] ?? '';
    $pass = $_POST['pass'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $rua = $_POST['log'] ?? '';
    $num = $_POST['num'] ?? '';
    $comple = $_POST['compl'] ?? '';
    $bairro = $_POST['bairro'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $cidade = $_POST['cidade'] ?? '';

    if(!empty($email)){
        $stmt = $conn->prepare('SELECT users FROM users WHERE email = :email');
        $stmt->execute(array('email'=>$email));

        $result = $stmt->fetchAll();

        if(count($result)){
            echo '<div class="alert" id="failed">Já existente uma conta com este e-mail!</div>';
        }else{
            $stmt = $conn->prepare('
                insert into users(
                    users, email, pass, cpf, tel, cep, rua, num, complem, bairro, estado, cidade
                    ) 
                values(
                    :users, :email, :pass, :cpf, :tel, :cep, :rua, :num, :comple, :bairro, :estado, :cidade
                )'
            );
            $stmt->execute(array(':users' => $users, ':email' => $email, ':pass' => $pass, ':cpf' => $cpf, 
            ':tel' => $tel, ':cep' => $cep, ':rua' => $rua, ':num' => $num, ':comple' => $comple, 
            ':bairro' => $bairro, ':estado' => $estado, ':cidade' => $cidade
            ));
            echo '<div class="alert" id="success">Cadastro efetuado com sucesso!!!</div>';
        }
    }
?>