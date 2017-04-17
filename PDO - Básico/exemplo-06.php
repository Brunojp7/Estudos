<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", ""); //Verificar usuário e senha

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");//? será a respectiva ? na linha da função execute

$id = 2;

$stmt->execute(array($id));//Como só tem uma ?, será a descrita na linha 7, caso haja mais serão respectivas.

//$conn->rollback(); Desfaz qualquer mudança (em caso de erros)
$conn->commit();//Confirma qualquer mudança (em caso de sucesso)

Echo "Deletado com sucesso !";

//Aula PDO - Transaction
 ?>

