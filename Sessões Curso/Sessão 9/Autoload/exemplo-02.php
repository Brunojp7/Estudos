<?php 

function incluirClasses($nomeClasse){

	if(file_exists($nomeClasse . ".php") == true){
		require_once($nomeClasse . ".php");

	}
	

}

var_dump(spl_autoload_register());

var_dump(spl_autoload_register(function($nomeClasse){

	echo $nomeClasse;
	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") == true){
		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}

}));

$carro = new Delrey();

$carro->acelerar(80);

?>