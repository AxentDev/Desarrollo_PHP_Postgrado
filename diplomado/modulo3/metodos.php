<?php
class Carro
{
	private $velocidad = 0;
	private $estadoCarro = "apagado";
	private $personas = 1;

	public function encender()
	{
		echo "Encendiendo el carro <br>";
		$this->estadoCarro = "Encendido";
		echo "Carro encendido <br>";
	}
	public function frenar($rapidez)
	{
		echo "Frenando el carro <br>";
		$this->velocidad = $this->velocidad - $rapidez;
		echo "La velocidad del carro ahora es: ".$this->velocidad."<br>";
	}
	public function apagar()
	{
		echo "Apagando el carro <br>";
		$this->estadoCarro = "Apagado";
		echo "Carro apagado <br>";
	}
}
























?>