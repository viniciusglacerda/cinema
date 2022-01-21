<?php 
    include_once './includes/connect.php';

    $film = $_GET['film'];

    $stmt = $conn->prepare('SELECT * FROM films WHERE title = :title');
    $stmt->execute(array('title'=>$film));

    $result = $stmt->fetchAll();

    $stmt2 = $conn->prepare('SELECT * FROM films_add WHERE title = :film');
    $stmt2->execute(array('film'=>$film));

    $return = $stmt2->fetchAll();
?>