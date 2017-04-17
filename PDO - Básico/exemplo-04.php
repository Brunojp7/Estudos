<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", ""); //Verificar usuário e senha

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Bruno";
$password = "1809Thunderbolt1";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

Echo "Alterado com sucesso !";

//Aula PDO - UPDATE
 ?>

