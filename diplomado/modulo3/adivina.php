<?php
//Adivinar
class Adivina
{
	private $numeroGenerado;
	private $numeroElegido;
	private $min;
	private $max;

	public function __construct($min, $max, $numeroElegido)
	{
		$this->min = $min;
		$this->max = $max;
		$this->numeroElegido = $numeroElegido;
		$this->verificar();
	}
	public function generarNumero()
	{
		return $this->numeroGenerado = rand($this->min, $this->max);
	}
	public function verificar()
	{
		if($this->numeroElegido > $this->max)
		{
			echo "El numero es mayor al limite <br>";
		}
		elseif ($this->numeroElegido < $this->min)
		{
			echo "El numero es menor al limite <br>";
		}
		elseif ($this->generarNumero() == $this->numeroElegido)
		{
			echo "Haz acertado el numero <br>";
		}
		$this->mostrarNumeroGenerado();
	}
	public function mostrarNumeroGenerado()
	{
		echo "El número generado es: ".$this->numeroGenerado."<br>";
	}
}





















?>