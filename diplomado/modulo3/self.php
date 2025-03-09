<?php
//Self

/*
En PHP, self y this se utilizan para referir miembros de clase dentro del
alcance de una clase. Los miembros de la clase pueden ser variables o métodos.
Estas palabras claves de PHP difieren con el comportamiento estático de los
miembros de la clase.
Cuando queramos acceder a una constante o método estático o un atributo
desde dentro de la clase, se usa la palabra reservada: self.
*/
class Palabra
{
	private static $palabra;
	public function __construct($palabra)
	{
		self::$palabra = $palabra;
	}
	public function mostrarpalabra()
	{
		echo self::$palabra."<br>";
	}
}
/*
Recordar:
Un método en programación, específicamente en el contexto de la programación orientada a objetos (POO), es una función que está asociada a una clase y que define un comportamiento específico de los objetos que son instancias de esa clase. Los métodos permiten que los objetos realicen acciones, manipulen datos y respondan a eventos.
*/































?>