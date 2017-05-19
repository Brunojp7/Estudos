<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Bruno Jacinto Parpagnoli");
	$cad->setEmail("brnjparpagnoli@gmail.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();

?>