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

//$usuario = new Usuario();
//$usuario->login ("Bruno", "!@#$%");
//echo $usuario;

//Criando um novo usuário sem método construct
// $aluno = new Usuario();
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("4lun0");
// $aluno->insert();
//echo $aluno;

//Criando um novo usuário com método construct
// $pessoa = new Usuario("Mardu", "marduca31");
// $pessoa->insert();
// echo $pessoa;

// //Alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(7);
// $usuario->update("Maria do Carmo", "marduca3311");
// echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>