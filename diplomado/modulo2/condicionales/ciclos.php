<?PHP

//Ciclos For, While y Do While

//Ciclos for

/*
Los ciclos for (o ciclos para) son una estructura de control cíclica, que permite
ejecutar una o varias líneas de código de forma iterativa (o repetitiva), pero teniendo
control y conocimiento sobre las iteraciones.
En el ciclo for es necesario tener un valor inicial, una condición y valor final,
y opcionalmente hacer uso del tamaño del «paso» entre cada iteración del ciclo.
Es decir, un ciclo for es una estructura iterativa para ejecutar un mismo
segmento de código una cantidad de veces deseada; conociendo previamente un
valor de inicio, un tamaño de paso (incremento) y un valor final para el ciclo.

for(init counter; test counter; increment counter){
	code to be excuted;
}
*/
for ($i=0; $i<10;$i++)
{
	echo $i;
}
echo "<br>";

/*
Estructura del ciclo for. La estructura del ciclo for se compone de tres
elementos fundamentales:
- Valor de inicio: determina a partir de qué momento y de qué valor el ciclo inicia las iteraciones
- Condicional - valor de parada: evalúa los casos en que el ciclo realizará las iteraciones y el momento en que terminarán.
- Valor de incremento - decremento: realiza un incremento o decremento al valor de inicio para realizar las iteraciones
//----------------------------------------------------------------------------------------------------------
//Ejemplo:
//Desarrollar un programa que muestre los números pares entre 0 y 20 de forma ascendente.
*/
for ($i=0; $i<=20;$i+=2) //i+=2  para que las iteraciones se realicen adecuadamente en intervalos de dos (2) en dos (2), hasta el valor de parada que será (20).
{
	echo $i." ";
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
//Ejemplo:
//Desarrollar un programa que muestre los números pares entre 0 y 20 de forma descendente.

for ($i = 20; $i >= 0; $i -= 2) //i-=2  para que las iteraciones se realicen adecuadamente en intervalos de dos (2) en dos (2), hasta el valor de parada que será (0).
{
	echo $i." ";
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
//Ejemplo:
//Desarrollar un programa que permita contar cuántos números entre 1 y 1000 son múltiplos de 7, mostrar el resultado final
$multiplos = 0; // Inicializamos la variable $multiplos en 0
for ($i = 1; $i <= 1000; $i += 7) //i+=7  para que las iteraciones se realicen adecuadamente en intervalos de siete (7) en siete (7), hasta el valor de parada que será 1000.
{
	if ( $i % 7 == 0) //Dentro del bucle, utilizamos una sentencia if para verificar si $i es un múltiplo de 7.
	//La expresión $i % 7 calcula el residuo de la división de $i entre 7. Si el residuo es 0 (== 0), significa que $i es un múltiplo de 7.
		{
			$multiplos++; //Si la condición anterior es verdadera, incrementamos el valor de $multiplos en 1. Esto cuenta cuántos múltiplos de 7 hemos encontrado.
		} //Esto cierra el bucle for. La ejecución del bucle se repetirá mientras $i sea menor o igual a 1000.
}
echo "La cantidad de multiplo de 7 es: ".$multiplos."<br>"; //Finalmente, fuera del bucle, se imprime el resultado usando echo. Mostramos cuántos múltiplos de 7 se encontraron en el rango de 1 a 1000.
//----------------------------------------------------------------------------------------------------------
//Ejemplo:
//Desarrollar un problema que imprima las tablas de multiplicar del 1 al 10 con su respectivo resultado.

for ($i = 1; $i <= 10; $i++) // Iterar del 1 al 10 para las tablas de multiplicar
{
	echo "Tabla de multiplicar del " .$i."<br>"; // Imprime el encabezado de la tabla
	for ($x=1;$x<=10; $x++)
	{
		$resultado = $i*$x; // Calcular el resultado de la multiplicación
		echo $i."x".$x." = ".$resultado."<br>"; // Imprimir la operación y el resultado
	}
	echo "<br>"; // Espacio entre las tablas

}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
// Ciclo While
/*
Los ciclos while (o ciclos mientras) son una estructura de control cíclica que
permite ejecutar una o varias líneas de código de forma iterativa (o repetitiva), al
igual que el ciclo for, pero sin tener un control y conocimiento sobre las iteraciones.
En el ciclo for era necesario tener un valor inicial, una condición y valor final, en el
ciclo while únicamente se tiene control del ciclo por medio de una condicional en la
declaración que determina si el ciclo continúa o se detiene, por lo que la sintaxis es
más simple.
Es decir, un ciclo while es una estructura iterativa para ejecutar un mismo
segmento de código, con la particularidad de que en la mayoría de los casos se
desconoce la cantidad de veces deseada para iterar por el hecho de no tener un
valor de inicio y un valor de parada, puesto que si se conoce la cantidad de veces
que se desea iterar es más simple el uso del ciclo for.

while (condition is true){
	code to be excuted;
}

Estructura del ciclo while. Se componen principalmente de una condición
que tiene que tomar un valor booleano (verdadero o falso). Si este valor es
verdadero, se ejecutará la sentencia. Concluida esta acción se vuelve a evaluar la
condición. Proseguirán el ciclo hasta que la condición cambie a falso.
*/

while ($x)
{
	echo "ciclo mientras";
	$x = false;
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
$x= 1;
while ($x <=10)
{
	echo $x;
	$x++;
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
// Ciclo Do While
/*
Esta estructura de iteración cumple el mismo objetivo de la estructura while
con la variante que el ciclo do While ejecuta cuando menos una vez antes de
evaluarse la condición del ciclo, por lo que siempre se tendrá una iteración así el
ciclo nunca haya entrado en ejecución.

Estructura del ciclo do while. Cuenta con los mismos componentes del
ciclo while, en cuanto a su forma de funcionar, con la implementación del do, que
se encarga de almacenar las sentencias que se ejecutarán en todas las iteraciones
para su posterior ejecución.

A continuación un ejemplo:
*/

do
{
	echo "ciclo do while";
}
while(false);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
$x = 1;
do{
	echo $x." ";
	$x++;
}
while ($x<5);
//----------------------------------------------------------------------------------------------------------
//Desarrollar un programa que imprima los números impares entre 1 y 25.
$x = 1; //La variable $x se inicializa con el valor 1. Esta variable se usará como contador.

while ($x <=25) // El ciclo while continúa ejecutándose mientras la condición $x <= 25 sea verdadera. Esto significa que el ciclo terminará cuando $x sea mayor que 25.
{
	if($x % 2 !=0) //Dentro del ciclo, la condición if ($x % 2 != 0) verifica si $x es un número impar. Esto se hace usando el operador de módulo (%), que devuelve el resto de la división. Si el resto de $x % 2 es diferente de 0, significa que $x es impar.
	{
		echo $x." "; //Si el número es impar, se imprime con echo $x." ";.
	}
	$x++; //Después de cada iteración del ciclo, $x se incrementa en 1 con $x++;. Esto garantiza que el valor de $x se actualiza y se vuelve a comprobar la condición en el while.
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
//Desarrollar un programa que, dada una palabra, descompone todos sus caracteres

$palabra = "DIEGO VALENCIA";
$i = 0;

while ($i < strlen($palabra))
{
	echo $palabra[$i]. " ";
	$i++;
}
echo "<br>";
/*
Hay un método nuevo que se aplica para solucionar este ejercicio y una
función nueva de las cadenas y que son muy útiles, estos son:
- strlen (): devuelve el número de caracteres de la cadena.
Se debe tener en cuenta que el método reconoce el espacio como un
carácter
*/
//----------------------------------------------------------------------------------------------------------
//Desarrollar un programa que, dada una palabra, cuente todos sus caracteres

$palabra = "DIEGO VALENCIA";
echo "la palabra ".$palabra." tiene ".strlen($palabra)." caracteres";
echo "<br>";
//----------------------------------------------------------------------------------------------------------
//Desarrollar un programa que genere números aleatorios entre 1 y 50 y se detenga cuando genere un múltiplo de 10.

/*
Este es uno de los casos donde la implementación del ciclo while es más
efectiva, dado que no se conoce cuántas veces debe iterar el ciclo, pero sí se
conoce el caso de parada, un ciclo for no tendría la misma funcionabilidad que el
while, por su estructura:
*/

$parada = true; //La variable $parada se inicializa con true, lo que indica que el ciclo while seguirá ejecutándose hasta que cambie a false.
$numero = 0; //La variable $numero se inicializa con 0, pero se actualiza dentro del ciclo.

while ($parada) //El ciclo while ($parada) continuará ejecutándose hasta que la variable $parada sea false.
{
	$numero = rand(1,50); //Dentro del ciclo, la función rand(1, 50) genera un número aleatorio entre 1 y 50 y se asigna a $numero.
	echo $numero." "; //Se imprime el número generado seguido de un espacio.
	if ($numero % 10 == 0) //La condición if ($numero % 10 == 0) verifica si el número generado es múltiplo de 10. Si esto es cierto, la variable $parada se establece en false, lo que detiene el ciclo.
	{
		$parada = false;
	}
}











?>