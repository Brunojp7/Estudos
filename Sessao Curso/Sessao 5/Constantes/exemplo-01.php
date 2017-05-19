<?php

	define("NOME_CONSTANTE_EM_CAPS", "Valor da constante");

	define("SERVIDOR", [
		'127.0.0.1',
		'root',
		'teste'
		]);

	echo NOME_CONSTANTE_EM_CAPS;

	echo "<br>";

	print_r(SERVIDOR);

	//Constantes existentes no PHP

	echo "<br>";

	echo PHP_VERSION;

	echo "<br>";

	echo DIRECTORY_SEPARATOR;


?>