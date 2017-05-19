<?php 

class Pessoa {

	public $nome = "Bruno Jacinto Parpagnoli";//Pode ser herdado
	protected $idade = 48; //Pode ser herdado 
	private $senha = "12356";//Não pode ser herdado

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

class Programador extends Pessoa {

	public function verDados(){ //Este método é chamado ao invés do defino na class Pessoa

		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

$objeto = new Programador();

//echo $objeto->nome . "<br>";

//echo $objeto->idade . "<br>";

//echo $objeto->senha . "<br>";

$objeto->verDados();


?>