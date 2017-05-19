<?php 

$filename = fopen("teste.txt", "w+");

fclose($filename);

unlink("teste.txt");

echo "Arquivo removido com sucesso!";

?>