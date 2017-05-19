Aula 14 - Sessão 3

<!-- Tipos de dados no PHP

-8 Tipos de dados primitivos dividos em 3 grupos

-Grupo I:         Basicos     -> inteiro, string, float e boolean;
-Grupo II:         Compostos     -> Array e Objetos;
-Grupo III:        Speciais     -> Resourse e NULL; -->

<?php

$nome = "Bruno";
$site = 'www.google.com.br';
$ano = 1992;
$salario = 5500.99;
$bloqueado = false;

///////////////////////////////////////////////

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

$nascimento = new DateTime();

var_dump($nascimento);
echo $nascimento->timezone;

///////////////////////////////////////////////

$arquivo = fopen("exemplo.php", "r");

var_dump($arquivo);

$nulo = NULL;
$vazio = "";
?>