<?php 

$pessoa = array(
	'nome' => 'Bruno',
	'idade' => '24',
	);

foreach ($pessoa as &$value) { //Por referencia, vai alterar o valor do array fora do foreach.
	
	if (gettype($value) === 'integer') $value += 10;

	echo $value . "<br>";

}

print_r($pessoa);

?>