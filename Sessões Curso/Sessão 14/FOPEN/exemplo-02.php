<?php 

require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");

$headers = array();		//Cabeçalho da tabela com os nomes das colunas da tabela

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv" , "w+");		//Escreve e cria o arquivo caso nao exista

fwrite($file, implode(",", $headers)  . "\r\n");		//Separa os campos do array com ','

foreach ($usuarios as $row) { //Acessa os registros
	
	$data = array();

	foreach ($row as $key => $value) { //Acessa o conteúdo dos registros
		
		array_push($data, $value);

	}//Foreach coluna

	fwrite($file, implode(",", $data) . "\r\n");

}//Foreach linha

fclose($file);

?>