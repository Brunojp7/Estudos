<?php 

$file = fopen("log.txt", "a+");
$server = $_SERVER;

fwrite($file, date("Y-m-d H:i:s") . "\r\n");
//fwrite($file, json_encode($server));

fclose($file);

echo "Arquivo criado com sucesso!";

?>