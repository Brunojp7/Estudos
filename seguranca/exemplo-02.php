<?php 
//Evitando SQL Injection

$id = (isset($_GET["id"])) ? $_GET["id"]:3; // Se for digitado um ID, ID = 3

if (!is_numeric($id) || strlen($id) > 5) {
	exit("Gotcha !");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){
	var_dump($resultado);
}

//Outra prevenção é utilizar das classes PDO para fazer conexões e acessos ao banco

 ?>