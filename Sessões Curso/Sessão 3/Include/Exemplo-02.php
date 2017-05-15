<?php 

//include "Exemplo-01.php";
require "Exemplo-01.php";
require_once "Exemplo-01"; // Chama o arquivo apenas uma vez, evitando que ele seja chamado mais de uma vez por outros recursos, que no caso vai gerar erros.s

$result = somar(10, 20);

echo $result;

?>