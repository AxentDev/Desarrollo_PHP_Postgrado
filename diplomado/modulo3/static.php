<?php
//Static
/*
Los elementos estáticos (o miembros de clase) son aquellos que pertenecen
a la clase, en lugar de pertenecer a un objeto en particular.
Declarar propiedades o métodos de clases como estáticos los hacen
accesibles sin la necesidad de instanciar la clase. Una propiedad declarada como
static no puede ser accedida con un objeto de clase instanciado (aunque un método
estático sí lo puede hacer).
Debido a que los métodos estáticos se pueden invocar sin tener creada una
instancia del objeto, la seudovariable $this no está disponible dentro de los métodos
declarados como estáticos.
*/
class Circunferencia
{
	public static $pi=3.14159262535;

	public function valorStatic1()
	{
		echo "Self: ".self::$pi."<br>";
	}
	public function valorStatic2()
	{
		echo "This: ".$this->pi."<br>";
	}
}






























?>