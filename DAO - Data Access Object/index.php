<?php 

require_once("config.php");

$usuario = new usuario;

$usuario->loadById(2);

echo $usuario;

?>