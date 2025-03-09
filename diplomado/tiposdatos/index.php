<?php
/*
String:
Una cadena es una secuencia de caracteres, como «¡Hola mundo!». Una cadena puede ser cualquier texto entre comillas. Puedes usar comillas simples o
dobles, ejemplo:
*/
echo "Hola a todos,". "<br>";
echo "¿cómo están?". "<br>";
$ciudad = "Medellín";
var_dump($ciudad);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/* Int/Integer:
Un tipo de datos Integer o entero es un número no decimal entre - 2147483648 y 9223372036854775807.
Para observar y validar que efectivamente se trata de un número entero, hágase uso de var_dump sobre una variable que contenga un número entero:
*/
$numero = 8417;
var_dump($numero);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/* Float:
Un tipo de datos Integer o entero es un número no decimal mayor a 9223372036854775807.
Para observar y validar que efectivamente se trata de un número float, hágase uso de var_dump sobre una variable que contenga un número float:
A continuación un ejemplo:
*/
$numero = 9223372036854775809;
var_dump($numero);
echo "<br>";

/*
El tipo float o double (número de punto flotante) es un número con un punto decimal. Hay características para tener en cuenta con el trabajo de números
decimales:
- Un float debe tener al menos un dígito decimal.
- Un float puede ser positivo o negativo.
- Un float no debe ir entre comillas simples o dobles.

Para entender de mejor forma cómo operan las variables float o los tipos de datos, obsérvese el siguiente ejemplo:
*/
$numero_decimal = -7.0545;
echo $numero_decimal. "<br>";
//----------------------------------------------------------------------------------------------------------
/* Boolean
El tipo de dato boolean solo representa dos posibles estados o valores: verdadero o falso (true o false).
*/
$verdadero = true;
var_dump($verdadero);
echo "<br>";
$falso = false;
var_dump($falso);
echo "<br>";
// A continuación algunos ejemplos de conversión de boolean con var_dump:
var_dump((bool) "");
echo "<br>";
var_dump((bool) 1);
echo "<br>";
var_dump((bool) -2);
echo "<br>";
var_dump((bool) "foo");
echo "<br>";
var_dump((bool) 2.3e5);
echo "<br>";
var_dump((bool) array());
echo "<br>";
var_dump((bool) "false");
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/* Arrays o Arreglos:
El tipo de dato array representa una matriz donde pueden almacenarse múltiples valores en una sola variable asignada en una posición de la matriz.
A continuación un ejemplo:
*/

$ciudades = array("Medellín", "Bogotá", "Cali", "Cartagena");
var_dump ($ciudades);
echo "<br>";
/*
En el ejemplo anterior, en la declaración de array «Ciudades», esta toma
todos los valores separados por coma como valores totalmente independientes, es
decir, existen cuatro «variables» —valores en el array—. var_dump ayuda a ilustrar
un poco la forma de almacenar valores en los arrays.
*/
//----------------------------------------------------------------------------------------------------------
/* Null:
Null es un tipo de datos especial que puede tener un solo valor: null. Una
variable de tipo de datos null es una variable que no tiene ningún valor asignado.
Nota: cuando se crea una variable sin valor, se le asigna automáticamente null.
*/

$x = "Diego";
var_dump($x);
echo "<br>";
$x = null;
var_dump($x);
echo "<br>";


?>
