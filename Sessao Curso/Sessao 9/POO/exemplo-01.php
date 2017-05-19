<?php 

header('Content-Type: text/html; charset=utf-8');// correção de acentuação

class Pessoa { //Nome de classe CamelCased
	
	public $nome; //Atributo

	public function falar(){ //Método

		return "O meu nome é " . $this->nome; // referencia a variável do objeto

	}

}

$bruno = new Pessoa();

$bruno->nome = "Bruno Jacinto Parpagnoli";

echo $bruno->falar();


?>