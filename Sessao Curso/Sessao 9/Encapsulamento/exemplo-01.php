<?php 

class Pessoa {

	public $nome = "Bruno Jacinto Parpagnoli";
	protected $idade = 48; //Pode ser herdado 
	private $senha = "12356";//Não pode ser herdado

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

$objeto = new Pessoa();

//echo $objeto->nome . "<br>";

//echo $objeto->idade . "<br>";

//echo $objeto->senha . "<br>";

$objeto->verDados();


?>