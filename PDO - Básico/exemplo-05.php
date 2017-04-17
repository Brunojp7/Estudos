<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", ""); //Verificar usuário e senha

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$login = "Bruno";
$password = "1809Thunderbolt1";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

Echo "Deletado com sucesso !";

//Aula PDO - DELETE
 ?>

