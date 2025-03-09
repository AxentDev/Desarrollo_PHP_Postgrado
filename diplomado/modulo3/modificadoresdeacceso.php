<?php
/*
Modificadores de acceso
Los modificadores de acceso introducen el concepto de encapsulamiento. El
encapsulamiento busca controlar el acceso a los datos que conforman un objeto o
instancia; de este modo una clase, y por ende sus objetos que hacen uso de
modificadores de acceso (especialmente privados), son objetos encapsulados.
Los modificadores de acceso permiten dar un nivel de seguridad mayor
restringiendo el acceso a diferentes atributos, métodos y constructores, asegurando
que el usuario deba seguir una «ruta» especificada para acceder a la información.
Implementando el uso de los modificadores de acceso se podrá asegurar que
un valor no será modificado incorrectamente. Generalmente el acceso a los
atributos se consigue por medio de los métodos get y set, es estrictamente
necesario que los atributos de una clase sean privados.

Existen tres modificadores de acceso:
- Public - default: la propiedad o método podrá usarse en cualquier parte del
script.
- Private: la propiedad o método solo podrá usarse en la clase a la que
pertenece.
- Protected: la propiedad o método se podrá usar por la clase a la que
pertenece y por sus descendientes.
*/
class PerroR
{
	public $nombre;
	private $propietario;
	protected $raza;

	public function __construct($nombre, $propietario, $raza)
	{
		$this->nombre = $nombre;
		$this->propietario = $propietario;
		$this->raza = $raza;
	}

	public function ladrar()
	{
		echo "¡Guau! <br>";
	}
	// Métodos para acceder a propiedades privadas/protegidas
    public function getPropietario()
    {
        return $this->propietario;
    }

    public function getRaza()
    {
        return $this->raza;
    }
}






















?>