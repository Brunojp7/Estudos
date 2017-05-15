<?php 

abstract class Animal {

	public function Falar(){
		
		return "Som";

	}

	public function Mover(){

		return "Anda";

	}

}

class Cachorro extends Animal {

	public function Falar(){

		return "Late";

	}
}

class Gato extends Animal {

	public function Falar(){

		return "Mia";

	}
}

class Passaro extends Animal{
 
	public function falar(){

		return "Canta";
	}

	public function Mover(){

		return "Voa e " . parent::Mover(); //Chama o método da classe pai também
	}
}

$pluto = new Cachorro();

echo $pluto->Falar() . "<br>";//Polimorfismo (utiliza o método da classe instanciada ao inves da classe pai que possui o método com o mesmo nome)
echo $pluto->Mover() . "<br>";

echo "----------------------------- <br>";

$garfield = new Gato();

echo $garfield->Falar() . "<br>";//Polimorfismo (utiliza o método da classe instanciada ao inves da classe pai que possui o método com o mesmo nome)
echo $garfield->Mover() . "<br>";

echo "----------------------------- <br>";

$ave = new Passaro();

echo $ave->Falar() . "<br>";//Polimorfismo (utiliza o método da classe instanciada ao inves da classe pai que possui o método com o mesmo nome)
echo $ave->Mover() . "<br>";//Polimorfismo (utiliza o método da classe instanciada ao inves da classe pai que possui o método com o mesmo nome)









?>