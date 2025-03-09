<?php
/*
Setters
Setters: hace referencia a la acción de establecer, sirve para asignar un valor
inicial a un atributo, pero de forma explícita, además el setter nunca retorna nada
(siempre asigna) y solo permite dar acceso público a ciertos atributos que el usuario
pueda modificar.

public function setNombre($nombre)
{
	$this->nombre = $nombre;
}

La palabra this ayuda a diferenciar el atributo de la clase y el parámetro, dado
que sin este se estaría operando únicamente con el parámetro, dejando a un
lado los atributos

A continuación un ejemplo de implementación:
*/
class Correo
{
	private $de;
	private $asunto;
	private $mensaje;
	private $para;

	public function setDe($de)
	{
		$this->de = $de;
	}
}
/*
De esta forma el atributo de del objeto CorreoGmail toma el valor de
“diego@gmail.com”.
Ahora, si ese valor se desea recuperar hay que hacer uso de get().
*/






























?>