<?PHP
/*
Desarrollar un programa que permita por medio de la edad de una
persona, determinar la categoría en la que pertenece a raíz de la siguiente
tabla:
*/
// Definir la edad de la persona
$edad = 30; // Cambia este valor para probar otros casos
/*
En este caso, cuando hablamos de la tabla de verdad, nos referimos a cómo funcionan las condiciones lógicas que estás utilizando para determinar la categoría según la edad. Las tablas de verdad muestran todas las posibles combinaciones de valores de las expresiones lógicas y sus resultados (verdadero o falso). Para ilustrar esto, podemos ver cómo se comportan los operadores lógicos en cada condicional del código.

En este ejemplo, los operadores lógicos que usamos son:

&& (AND): Este operador requiere que ambas condiciones sean verdaderas para que la expresión completa sea verdadera.
*/
// Determinar la categoría según la edad usando condicionales anidadas
if ($edad >= 0 && $edad <= 5) {
    echo "Categoría: Infante";
} elseif ($edad >= 6 && $edad <= 10) {
    echo "Categoría: Niño";
} elseif ($edad >= 11 && $edad <= 15) {
    echo "Categoría: Pre adolescente";
} elseif ($edad >= 16 && $edad <= 18) {
    echo "Categoría: Adolescente";
} elseif ($edad >= 19 && $edad <= 25) {
    echo "Categoría: Pre adulto";
} elseif ($edad >= 26 && $edad <= 40) {
    echo "Categoría: Adulto";
} elseif ($edad >= 41 && $edad <= 55) {
    echo "Categoría: Pre anciano";
} elseif ($edad >= 56) {
    echo "Categoría: Anciano";
} else {
    echo "Edad no válida";
}
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un programa que permita determinar la cantidad de cifras de
un número X teniendo en cuenta que el número únicamente puede tener
4 cifras. Mostrar un mensaje por defecto si el número supera las 4 cifras.
*/
// Definir el número X
$numero = 1234; // Cambia este valor para probar otros casos

// Convertir el número a cadena para contar los caracteres
$longitud = strlen((string)$numero);

// Verificar la cantidad de cifras
if ($longitud <= 4) {
    echo "El número $numero tiene $longitud cifra(s).";
} else {
    echo "El número $numero tiene más de 4 cifras.";
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un programa que, por medio de 3 números enteros,
determinar cuál es el mayor.
*/
$enteroUno = 3;
$enteroDos = 7;
$enteroTres = 5;

if ($enteroUno>$enteroDos)
{
	if ($enteroUno > $enteroTres)
	{
		echo "El numero mayor es: ".$enteroUno."<br>";
	}
	else
	{
		if ($enteroTres > $enteroDos)
		{
			echo "El numero mayor es: ".$enteroTres."<br>";
		}
	}
}
else
{
	if($enteroDos > $enteroTres)
	{
		echo "El numero mayor es: ".$enteroDos."<br>";
	}
	else
	{
		echo "El numero mayor es: ".$enteroTres."<br>";
	}

}
//----------------------------------------------------------------------------------------------------------
/*
Un postulante a un empleo, realiza un test de capacitación, se obtuvo la
siguiente información: cantidad total de preguntas que se le realizaron y
la cantidad de preguntas que contestó correctamente. Desarrolle un
programa que informe el nivel según el porcentaje de respuestas
correctas que ha obtenido, y sabiendo que:
*/
$cantidadpreguntasrealizadascorrectamente = 10;
$cprc = $cantidadpreguntasrealizadascorrectamente;
$cantidadpreguntastotales = 10;
$cpt = $cantidadpreguntastotales;


if (($cprc/$cpt) < 0.5)
{
	echo "El estudiante esta fuera de nivel";
}
else
{
	if (($cprc/$cpt) >= 0.5 && $cprc/$cpt < 0.75)
	{
		echo "El estudiante esta en el nivel regular";
	}
	else
	{
		if (($cprc/$cpt) >= 0.75 && ($cprc/$cpt) < 0.9)
		{
			echo "El estudiante esta en el nivel medio";
		}
		else
		{
			if (($cprc/$cpt) >= 0.9)
			{
				echo "El estudiante esta en el nivel máximo";
			}
		}
	}
}

















?>