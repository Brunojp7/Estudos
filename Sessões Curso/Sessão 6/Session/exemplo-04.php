<?php

require_once("config.php");

session_regenerate_id(); // Gera uma nova sessão

echo session_id();

var_dump($_SESSION);

?>