<?php 

    header('Content-Type: text/html; charset=utf-8');

    $conn = new mysqli("localhost", "root", "", "dbphp7"); //IP - Login - Senha - Database

    if ($conn->connect_error) {

        echo "Error: " . $conn->connect_error();
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)"); //?, ? caem na função bind_param

    $stmt->bind_param("ss", $login, $pass);//Não da erro pois só é executado na função execute();

    $login = "user2";
    $pass = "54321";

    if ($stmt->execute()) {
        echo "Inserido com sucesso";
    }

    else {
        echo "Houve um problema durante a inserção";
    }

?>