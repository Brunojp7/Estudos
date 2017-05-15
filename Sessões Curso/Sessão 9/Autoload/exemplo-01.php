<?php 

function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}

//require_once("Delrey.php");

$carro = new Delrey();

$carro->acelerar(80);

?>