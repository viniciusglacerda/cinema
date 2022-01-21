<?php
    $host = '127.0.0.1';
    $dbname = 'cinema';
    $username = 'root';
    $password = '';
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo 'Desculpe, mas algo não saiu como o esperado. ERROR: ' . $e->getMessage();
    }

?>