<?php
//Base de constructores 2
/*
Para el uso correcto de los constructores debemos entender el uso y
aplicación de los argumentos y parámetros que ayudan a inicializar esos valores.
Véase:
*/
class Calculadora2
{
	private $numero1;
	private $numero2;
	private $operador;

	public function __construct($numero1, $operador, $numero2)
	{
		$this->numero1 = $numero1;
		$this->operador = $operador;
		$this->numero2 = $numero2;
	}
	public function dibujarOperacion()
	{
		switch ($this->operador)
		{
			case"+";
			$this->dibujarsuma();
			break;
			case"*";
			$this->dibujarmultiplicacion();
			break;
			case"-";
			$this->dibujarresta();
			break;
			case"/";
			$this->dibujardivision();
			break;
			default:
			echo "Error";
			break;
		}
	}
	public function dibujarsuma()
	{
		$suma = $this->numero1 + $this->numero2;
		echo $this->numero1.$this->operador.$this->numero2." = ".$suma. "<br>";
	}
	public function dibujarresta()
	{
		$resta = $this->numero1 - $this->numero2;
		echo $this->numero1.$this->operador.$this->numero2." = ".$resta. "<br>";
	}
	public function dibujarmultiplicacion()
	{
		$multiplicacion = $this->numero1 * $this->numero2;
		echo $this->numero1.$this->operador.$this->numero2." = ".$multiplicacion. "<br>";
	}
	public function dibujardivision()
	{
		$division = $this->numero1 + $this->numero2;
		echo $this->numero1.$this->operador.$this->numero2." = ".$division. "<br>";
	}
}






















?>