<?php
/*
Metodos magicos
Los métodos mágicos en PHP permiten realizar acciones en objetos cuando
suceden determinados eventos que activan dichos métodos. Estos, denominados
con doble barra baja __nombreMetodo(), determinan cómo reaccionará el objeto.
Los métodos mágicos disponibles en PHP son los siguientes:
__construct
__destruct
__get
__set
__isset
__unset
__sleep
__call
__callStatic
__clone
__invoke

Suponemos que tenemos una aplicación en la que queremos extraer tweets
de Twitter. Extraemos los tweets del usuario y queremos transformar cada tweet en
un objeto de PHP con el que trabajar. Hagamos uso de algunos métodos
construct() y destruct(). El método mágico más utilizado en PHP es
___construct(), un método que es llamado automáticamente cuando se crea el
objeto. Permite adjuntar parámetros para construir el objeto.
Cuando creamos una nueva instancia del objeto tweet podemos pasarle
parámetros que se iniciarán en el método __construct(). No se puede llamar al
método ya que es llamado automáticamente al crear el objeto.

Al igual que podemos construir cosas cuando instanciamos un objeto,
también podemos destruirlas cuando el objeto se destruye. Si por ejemplo tenemos
una conexión a la base de datos en el objeto y queremos asegurarnos de que se
cierra al destruir el objeto, podemos hacer lo siguiente:

public function __destruct()
{
	echo "objeto destruido";
}

__get() y __set(). Cuando se trabaja con objetos, las propiedades pueden
ser accedidas de esta forma si son public:

*/





























?>