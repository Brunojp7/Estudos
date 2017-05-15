<?php
//Funções de sessão

require_once("config.php");

echo session_save_path(); //Mostra o diretório da onde php está salvando os arquivos de sessão.

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "as sessões estão desabilitadas.";
		break;
	
	case PHP_SESSION_NONE:
		echo "as sessões estão habilitadas, mas nenhuma existe.";
		break;

	case PHP_SESSION_ACTIVE:
		echo "as sessões estão habilitadas, e uma ou mais existem.";
		break;
}

?>