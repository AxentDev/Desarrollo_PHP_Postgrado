<?php
//Variable
$numero  = 8;
$nombre = "Diego";
$altura = 1.72;
$edad = 22;
$x = 9;
$y = 8;
$z = 0;
$variable1 = 8754;
$x = "Punto x";
$nombre_persona = "Andres";
$_edad = 78;
$_1apellido = "Caramelo";
$NUMEROPAR = 46;
$NOMBRE = "Alejandro";
$nombre = "Alex";//Aca reemplazamos el nombre Diego por Alex
$name = &$nombre;



echo $edad. "<br>";// br es break y significa un salto de linea o un enter en word.
echo $x. "<br>";
echo $y. "<br>";
echo $z. "<br>";
echo $variable1. "<br>";
echo $nombre. "<br>";
echo $NOMBRE. "<br>";// Ojo las mayusculas se diferencian de las minusculas.
echo $name. "<br>";
//----------------------------------------------------------------------------------------------------------
//Variable local
function prueba()
{
	$x = 5;
	echo "variable: $x<br>";
}
prueba();
//----------------------------------------------------------------------------------------------------------
// Variables globales
$edad = 41;
function prueba1()
{
	global $edad;//global es la palabra reservada y se debe usar antes de de la variable para accederla
	$edad = 22;
}
prueba1();
echo $edad. "<br>";
//----------------------------------------------------------------------------------------------------------
$altura = 141;
function prueba2()
{
	$GLOBALS['altura'] = 172;
/*
$GLOBALS representa el grupo de variables globales declaradas, esta
variable guarda el nombre textual de todas las variables anteriormente declaradas
y, gracias a que almacena el nombre, los valores pueden ser leídos y sobrescritos
con facilidad.
*/

}
prueba2();
echo $altura. "<br>";
//----------------------------------------------------------------------------------------------------------
//Variables Estaticas
//Las variables estáticas deben su nombre a que son variables que cuentan con la palabra clave static
/*
static brinda a las variables locales la posibilidad de retener información en tiempo de ejecución, es decir, en el
llamado a una función todos los valores contenidos en estas se reinician cada vez que se realiza un llamado diferente, 
con static, alguna propiedad/variable puede retener información durante todo el tiempo de ejecución, a continuación
un ejemplo:
*/

function prueba3() {
    static $x = 0;     // Declaración de la variable estática
    echo $x. "<br>";   // Muestra el valor actual de $x
    $x++;              // Incrementa el valor de $x en 1
}

prueba3();
prueba3();
prueba3();
/*
El proceso que realiza la función se basa en crear una variable $x, imprimir su valor y posteriormente incrementar este a razón
de 1 (++). En caso de que la propiedad static no estuviese presente, el resultado de impresión del echo sería 0. porque en cada 
llamado a la función esta reiniciaría el valor de $x
*/
//----------------------------------------------------------------------------------------------------------
//Variables constantes
/*Las constantes son elementos de PHP que guardan un valor fijo que no se puede modificar a lo largo del programa.
Las constantes pueden ser definidas por el programa o estar predefinidas por el propio PHP o por algún módulo. Los nombres
de las constantes siguen las mismas reglas que los nombres de las variables, pero sin el símbolo ($) inicial.
La costumbre es escribir los nombres de las constantes en mayúsculas.
Existen dos formas para declarar variables constantes en PHP:
-Const
-Define
*/
//Usando la funcion const
const ESTUDIANTE = "Stiven Tangarife Serna";
echo ESTUDIANTE. "<br>";
//Usando la función define
define("PROFESOR", "Diego Alejandro Palacio Valencia");
echo PROFESOR. "<br>";













 ?>