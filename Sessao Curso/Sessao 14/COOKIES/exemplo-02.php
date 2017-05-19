<?php 

if (isset($_COOKIE["NOME_DO_COOKIE"])) {
	
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);// sem o parametro 1 ao final transformará em OBJ e não Array.

	echo $obj->empresa;

	echo "<br>";

	$cookie = json_decode($_COOKIE["NOME_DO_COOKIE"], 1);

	var_dump($cookie);


}

 ?>