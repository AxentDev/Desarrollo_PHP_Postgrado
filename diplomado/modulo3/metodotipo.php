<?php
class Casa
{
	private $precio = 0;
	public function __construct($precio)
	{
		$this->precio = $precio;
	}
	public function aumentarPrecio($precio)
	{
		return $this->precio = $this->precio + $precio;
	}
}

?>