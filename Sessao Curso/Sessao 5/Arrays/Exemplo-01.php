<?php 

//syntax para array 
$frutas = array("Bruno", "Pedro", "Mardu");

print_r($frutas);

echo "<br>";

//funções de array

$pessoas = array();

//add
array_push($pessoas, array(
	'nome' => 'Bruno',
	'idade' => '24',
	'signo' => 'gêmeos'
	));

array_push($pessoas, array(
	'nome' => 'Maria do Carmo',
	'idade' => '54',
	'signo' => 'aquario'
	));

print_r($pessoas);

?>