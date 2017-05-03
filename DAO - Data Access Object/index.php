<?php 

require_once("config.php");

//Carrega um usuário a partir de um dado ID
//$usuario = new usuario;
//$usuario->loadById(2);
//echo $usuario;

//Carrega uma lsita de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carega uma lista de usuárius buscando pelo Login
//$search = Usuario::search("");
//echo json_encode($search);

//Carrega um usuário usando login e a senha

$usuario = new Usuario();
$usuario->login ("Bruno", "!@#$%");

echo $usuario;
?>