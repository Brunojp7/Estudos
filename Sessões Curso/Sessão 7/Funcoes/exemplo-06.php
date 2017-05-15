<?php

function soma(int ...$valores):string { 
// :string transforma o retorno da funcao para string (cast to string). podendo também ser outros tipos, para facilitar conversões de tipos de variáveis.
// (...$valores) para que a função possa receber N parâmetros salvando dentro de um ARRAY cada parametro enviado a função.
// int = tipo que serão os parametros.

	return array_sum($valores);

}

function soma2(int ...$valores):float { 
// :string transforma o retorno da funcao para flat (cast to float). podendo também ser outros tipos, para facilitar conversões de tipos de variáveis.

	return array_sum($valores);

}

echo var_dump(soma (2, 2));

echo "<br>";

echo var_dump(soma2(1.5, 1, 2, 3, 5));
?>