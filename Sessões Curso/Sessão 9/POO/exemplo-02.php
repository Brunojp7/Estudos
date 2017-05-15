<?php 

	class Carro {

		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){ // lowcamelCased e get seguido do nome da variável

			return $this->modelo;

		}	

		public function setModelo($modelo){

			return $this->modelo = $modelo;

		}

		public function getMotor():float{ // lowcamelCased e get seguido do nome da variável

			return $this->motor;

		}	

		public function setMotor($motor){

			return $this->motor = $motor;

		}

		public function getAno():int{ // lowcamelCased e get seguido do nome da variável

			return $this->ano;

		}

			function setAno($ano){

			return $this->ano = $ano;

		}

		public function exibir(){

			return array(
				"modelo" => $this -> getModelo(),
				"motor" => $this -> getMotor(),
				"ano" => $this -> getAno(),
			);
		}
	}//Fim classe Carro

$gol = new Carro();
$gol -> setModelo("Gol GT");
$gol -> setMotor("2.0");
$gol -> setAno("2017");

var_dump($gol->exibir());

?>