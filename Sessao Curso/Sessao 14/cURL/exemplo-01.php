<?php 

	$cep = "18602270";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link); //inicia conexão

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Seta opção de retorno como TRUE
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//Elimina verificação local de certificado digital (SSL)

	$response = curl_exec($ch);//Guarda o retorno na variável

	curl_close($ch);//Finaliza conexão

	$data = json_decode($response, true);//Retorno vem em JSON, transformando para array

	print_r($data);

 ?>