<?php

$a = 10;

function trocaValor(&$b){ // passagem de valor por referencia, o que acontecer com a variável $b dentro da função ira alterar o valor da variável $a que estava fora da função.

	 $b += 50;

	 return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;

?>