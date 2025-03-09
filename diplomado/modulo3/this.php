<?php
//THIS
/*
La pseudovariable $this sirve para hacer referencia a un método, propiedad
o atributo del objeto actual. Se utiliza principalmente cuando existe sobrecarga de
nombres. La sobrecarga de nombres se da cuando hay una variable local de un
método o constructor, o un parámetro formal de un método o constructor, con un
nombre idéntico al que está presente en la clase al momento de relacionarse
*/
class Calculadora
{
	private $numero1;
	private $numero2;

	public function __construct($numero1,$numero2)
	{
		$this->numero1 = $numero1;
		$this->numero2 = $numero2;
	}
	public function suma()
	{
		$suma = $this->numero1 + $this->numero2;
		echo "La suma es: ".$suma."<br>";
	}
}























?>