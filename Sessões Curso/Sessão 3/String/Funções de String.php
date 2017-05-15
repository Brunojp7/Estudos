<?php

$empresa = "Google";
$nome = "bruno jacinto parpagnoli";
$frase = "Fire in the hole.";

$nome = strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo  $nome;

echo "<br>";

echo ucfirst($nome);

echo "<br>";

echo ucwords($nome);

echo "<br>";

echo "_____________________________";

echo "<br>";

echo $empresa;

echo "<br>";

$empresa = str_replace("o", "0", $empresa);

echo $empresa;

echo "<br>";

echo $frase;

$q = strrpos($frase, "hole");

echo "<br>";

echo "posição de onde começa o termpo procurado (index)" . var_dump($q);

$substring = substr($frase, 0, $q);

echo "<br>";

echo "Substring da frase acima (ate hole)" .  "<br>" . $substring;

$substring2 = substr($frase, $q);

echo "<br>";

echo "Substring da frase acima (iniciando em hole)" .  "<br>" . $substring2;

// Deixando dinâmico (pegando substring, iniciando na palavra buscada mas excluindo-a)
// $substring3 = substr($frase, $q + strlen($palavrabuscada), strlen($frase));
 ?>