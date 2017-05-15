<?php 

echo strtotime("1992-06-20"); // Timestamp da data 
$Timestamp = strtotime("1992-06-20");
$Timestamp2 = strtotime("now"); // +1 day = Amanha +1 week = +7 dias

echo "<br>";

echo date("l d/m/Y", $Timestamp); // l = dia da semana
								  // Dado um Timestamp, ele retorna a data dele no formato especificado.

echo "<br>";
echo "<br>";

echo date("l d/m/Y", $Timestamp2);

?>