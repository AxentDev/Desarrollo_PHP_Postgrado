<?php
//Constructores
/*
Es un método que contiene las acciones que se realizarán por defecto al
crear un objeto, en la mayoría de los casos se inicializan los valores de los atributos
en el constructor.
No es obligatoria su creación.
- Se utiliza la palabra reservada __construct.
- No retorna ningún valor.
- Se recomienda el uso de modificadores de accesos (public, private, protected)
*/
class Perro//ojooooooo el nombre debe comenzar con una mayuscula
{
	private $raza;
    private $nombre;
    private $edad;
    private $encargada;

	public function __construct($raza, $nombre, $edad, $encargada)
	{
		$this->raza = $raza;
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->encargada = $encargada;
	}
	    public function getRaza()
    {
        return $this->raza;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getEncargada()
    {
        return $this->encargada;
    }
}
?>