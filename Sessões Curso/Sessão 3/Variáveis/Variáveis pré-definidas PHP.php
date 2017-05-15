<!--Informações do usuário vindas pelo formulário vem pelos metodos GET ou POST-->

<!--Exemplos de variáveis super globais (variaveis pre definidas)
-->

<?php 

$nome = (int)$_GET["a"];

var_dump($nome);

echo "<br>";

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br>";

$file = $_SERVER["SCRIPT_NAME"];
echo $file;


?>