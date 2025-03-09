<?PHP
// Arrays
/*
Los arrays en PHP son un tipo de estructura de datos que permite almacenar
múltiples elementos de un tipo de datos similar en una sola variable, lo que ahorra
el esfuerzo de crear una variable diferente para cada dato.
Los arrays son útiles para crear una lista de elementos de tipos similares, a
los que se puede acceder utilizando su índice o clave.
Suponiendo que se desea almacenar cinco nombres e imprimirlos
consecutivamente. Esto se puede hacer fácilmente mediante el uso de cinco
variables de cadena diferentes. Pero si en lugar de cinco el número aumenta a cien,
entonces sería muy difícil. Aquí la matriz entra en juego y ayuda a almacenar cada
elemento dentro de una sola variable y también permite un fácil acceso utilizando
un índice o una clave.
*/

$arrayuno = array ("diego", "henry", "sandra", "lizzeth", "alex");

echo $arrayDos[0] = "diego"."<br>";
echo $arrayDos[0] = "henry"."<br>";
echo $arrayDos[0] = "sandra"."<br>";
echo $arrayDos[0] = "lizzeth"."<br>";
echo $arrayDos[0] = "alex"."<br>";
//----------------------------------------------------------------------------------------------------------
// Array Indexado
/*
Estructura de un array indexado
- Los elementos de un array se empiezan a numerar en 0 y permiten gestionar
desde un solo elemento hasta múltiples de diferentes tipos
*/
$arrayUno = array("19 años", "72 años", "55 años");

// Imprimir todo el array usando print_r()
echo "Contenido de arrayUno:";
echo "<br>";


// También puedes mostrar los elementos individualmente usando un bucle foreach
foreach ($arrayUno as $edad) {
    echo $edad . "<br>";
}
//----------------------------------------------------------------------------------------------------------
//Contar caracteres del array
$arrayTres = array("Matematicas", "Fisica", "Ingles", "Estadística");
echo "El total de elementos del array es: ".count($arrayTres);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
// Recorrido del array.
$arrayCuatro = array("Matematicas", "Fisica", "Ingles", "Estadística");
echo "Usando un ciclo for: <br>";

for ($x=0; $x<count($arrayCuatro); $x++)
{
	echo $arrayCuatro[$x]."<br>";
}
//----------------------------------------------------------------------------------------------------------
// ciclo Foreach
/*
El bucle foreach es un tipo especial de bucle que permite recorrer estructuras
que contienen varios elementos (como arrays, recursos u objetos) sin necesidad de
preocuparse por el número de elementos.
*/
$personas = array("diego", "juan", "nico","sandra", "diana");
foreach ($personas as $persona)
{
	echo $persona."<br>";
}
//----------------------------------------------------------------------------------------------------------
// Arrays asociativos
/*
Este tipo de arrays son similares a los arrays indexados, pero en lugar de un
almacenamiento lineal con indexes, cada valor puede asignarse con una clave de
cadena definida por el usuario. Se pueden declarar arrays asociativos de las
siguientes formas:
*/
$edades = array('Diego'=>33,'Andres'=>25,'Juan'=>16);
$edades['Diego'] = 33;
$edades['Andres'] = 25;
$edades['Juan'] = 16;

foreach ($edades as $nombre => $edad)
{
    echo $nombre . " tiene " . $edad . " años.<br>";
}
//----------------------------------------------------------------------------------------------------------
// Arrays asociativos de tipo mixto
/*
Los arrays de PHP pueden contener claves int y string al mismo tiempo, estos
arrays se conocen como arrays asociativos de tipo mixtos.
*/
$array = array("Pais" => "Argentina", 5325 =>"Colombia", 2522 => "Chile");
var_dump($array);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
$array1 = array("a", "b", "letras" => "c", "d");
var_dump($array1);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
// Array foreach

//Se puede hacer un array asociativo utilizando este cilo, a continuación un ejemplo:

$persona = array("nombre" => "diego", "ciudad" => "medellin", "altura" => "172cm");
foreach ($persona as $key => $value)
{
	echo $key." - ".$value."<br>";
}
//----------------------------------------------------------------------------------------------------------
// Arrays multidimensionales

/*
Los arrays multidimensionales son arrays que almacenan otro array en cada
índice en lugar de un solo elemento. En otras palabras, se puede definir arrays
multidimensionales como un array de arrays. Como su nombre lo indica, cada
elemento de este array puede ser un array y también pueden contener otros subarrays dentro. Se puede acceder a los arrays o sub-arrays en arrays
multidimensionales utilizando múltiples dimensiones.

A cotninuación un ejemplo:
*/
$empleados = array
			(
				array("Nombre" => "Diego Palacio", "Edad" =>"22", "Genero" => "Masculino"),array("Nombre" => "Diana Edwards", "Edad" =>"33", "Genero" => "Femenino"),array("Nombre" => "Alex Stevenson", "Edad" =>"51", "Genero" => "Sin identificar"),
			);

echo $empleados[0]["Nombre"]."<br>";
echo $empleados[2]["Genero"]."<br>";

/*
En este caso el array multidimensional cuenta con tres arrays internos
indexados, con las respectivas posiciones asignadas automáticamente (0,1,2) y
estos arrays internos son asociativos, con los elementos almacenados por clave. 
*/
//----------------------------------------------------------------------------------------------------------
//Funciones de los arrays:
/*
Array_push(): esta función permite insertar uno o más elementos al final de
un array. Dentro del paréntesis, recibe array al que se desea realizar la
inserción y el o los elementos a insertar.
*/
$ciudades = array("Medellin", "Bogota");
echo "Antes de insertar <br>";
foreach ($ciudades as $ciudad)
{
	echo $ciudad."<br>";
}

array_push($ciudades,"Barranquilla", "Cali");
echo "Despues de insertar <br>";

foreach ($ciudades as $ciudad)
{
	echo $ciudad."<br>";
}
/*
- Array_pop(): esta función permite extraer de un array el último elemento,
entiéndase extraer como eliminar. Dentro de los paréntesis recibe el array al
que se desea extraer el dato.
*/
$ciudades = array("Medellin", "Bogota","Barranquilla");
echo "El último elemento es: ".array_pop($ciudades)."<br>";
foreach ($ciudades as $ciudad)
{
	echo $ciudad."<br>";
}
//----------------------------------------------------------------------------------------------------------
/*
- Array_search(): esta función buscar un elemento determina en un array y
devolver la clave donde se encuentra. Dentro de los paréntesis recibe el valor
a buscar y el array donde se realizará la búsqueda.
*/
$ciudades = array("Medellin", "Bogota","Barranquilla","Cali");
echo array_search("Bogota", $ciudades);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
- Sort(): esta función permite ordenar un array. Dentro de los paréntesis recibe
el array que se desea ordenar:
*/
$ciudades = array("Medellin", "Bogota","Barranquilla","Cali");
sort($ciudades);
echo "Array ordenado <br>";
foreach ($ciudades as $ciudad) 
{
	echo $ciudad."<br>";
}












?>