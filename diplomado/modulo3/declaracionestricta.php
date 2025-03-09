<?php
/*
Siguiendo el ejemplo de la clase casa y el método aumentarPrecio,
realicemos ahora una tipificación estricta.
*/
class CasaCerezal
{
	private $precio = 0;
	private $propietario;
	private $estadoVenta;
	public function __construct(int $precio, string $propietario, bool $estadoVenta)
	{
		$this->precio = $precio;
		$this->propietario = $propietario;
		$this->estadoVenta = $estadoVenta;
	}
	public function aumentarPrecio($precio): int
	{
		return $this->precio = $this->precio + $precio;
	}
	public function cambiarPropietario(string $propietario): void
	{
		$this->propietario = $propietario;
	}
	public function cambioEstadoCasa(): string
	{
		return $this->estadoVenta ? "en venta":"no en venta";
	}
	public function obtenerPropietario(): string
    {
        return $this->propietario; // Retorna el nombre del propietario
    }
}






























?>