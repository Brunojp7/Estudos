<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Bruno',
	'idade' => 24,
	'signo' => 'gêmeos'
	));

array_push($pessoas, array(
	'nome' => 'Maria do Carmo',
	'idade' => 54,
	'signo' => 'aquario'
	));

//transformando array em JSON
echo json_encode($pessoas);


?>