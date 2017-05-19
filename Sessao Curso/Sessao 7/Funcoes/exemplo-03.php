<?php 

function ola($texto = "mundo"){
	
	return "Olá $texto <br>";
	return 'Ola ' . $texto;

}

function ola2($texto){
	
	return 'Ola ' . $texto . "<br>";

}

echo ola("Bruno");//função utilizando aspas duplas
echo ola2("Jazz");//função utilizando aspas simples

echo ola();//caso seja chamada sem parametro, o valor default atribuido na declaração da função toma o valor da variável.

?>