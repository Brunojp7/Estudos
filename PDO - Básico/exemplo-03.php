<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", ""); //Verificar usuário e senha

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Parpa";
$password = "123123";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

Echo "Inserido OK!";

//Aula PDO - Insert
 ?>

