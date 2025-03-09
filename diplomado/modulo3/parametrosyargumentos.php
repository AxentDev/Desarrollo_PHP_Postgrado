<?php
//Parametros-Argumentos
/*
Los parámetros o argumentos son una forma de intercambiar información con
el método. Pueden servir para introducir datos para ejecutar el método (entrada) o
para obtener o modificar datos tras su ejecución (salida).
- Parámetros: uso en la declaración del método, son los valores que un método
recibe desde un objeto.
A continuación un ejemplo:
*/
class persona
{
	public function mostrarInformacion($nombre, $edad, $correo)
	{
		echo "Nombre: ".$nombre.", Edad: ".$edad.", Correo: ".$correo."<br>";
	}

}

/*
Argumentos: uso en el paso de datos a métodos desde un objeto. Son los valores
que un objeto recibe para operar un método.
*/


































?>