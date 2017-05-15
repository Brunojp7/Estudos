<?php

require_once("config.php");
//Contem session_start, podendo conter tambem outras configurações

session_unset($_SESSION); 
// para apagar a sessão inteira ou $_SESSION["nome"] para especifico na sessão.

echo $_SESSION["nome"];

//session_destroy($_SESSION); 
//Não mantem o usuário, apaga totalmente a sessão

?>