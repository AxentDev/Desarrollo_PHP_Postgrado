<?PHP
/*
Desarrollar un algoritmo que genere un número aleatorio de 1 a 100 y
por medio de una condicional determinar sí el número es menor a 50 o
mayor. 
*/

$numeroaleatorio = rand(1,100);
echo "El numero aleatorio es: ".$numeroaleatorio."<br>";
if ($numeroaleatorio < 50)
{
	echo "El numero es menor a 50";
}
else
{
	echo "El numero es mayor a 50";
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un algoritmo que a partir de la cantidad de horas trabajadas
de una persona y las horas de trabajo normal, determinar si tuvo horas
extras, y si las tuvo, cuantas fueron.
*/
$horastrabajadas = 10;
$horastrabajonormal = 8;


if ($horastrabajadas<$horastrabajonormal)
{
	echo "No hubo horas extras";
}
else 
{
	$horasextras= $horastrabajadas-$horastrabajonormal;
	echo "Si hubo horas extras y su total fue de: ".$horasextras."<br>";
}
//----------------------------------------------------------------------------------------------------------
/*
Dados dos números enteros, determinar cuál es el mayor por medio de
una condicional y realizar una potencia con el número menor como
exponente.
*/
$x = 5;
$y = 7;

if ($x>$y)
{
	echo "El numero mayor es: ".$x."<br>";
	$potencia1 = pow($x, $y);
	echo "El numero menor es: ".$y." y su potencia es: ".$potencia1."<br>";
}
else
{
	echo "El numero mayor es: ".$y."<br>";
	$potencia2 = pow($y, $x);
	echo "El numero menor es: ".$x." y su potencia es: ".$potencia2."<br>";
}
//----------------------------------------------------------------------------------------------------------
/*
Realizar el punto número 3 con el operador ternario.
*/

$numero1 = 5;
$numero2 = 7;

// Determinar cuál es el mayor y cuál es el menor usando el operador ternario
$mayor = ($numero1 > $numero2) ? $numero1 : $numero2;
$menor = ($numero1 < $numero2) ? $numero1 : $numero2;

// Realizar la potencia con el número menor como exponente
$potencia = $mayor ** $menor;

echo "El número mayor es: $mayor<br>";
echo "El número menor es: $menor<br>";
echo "El resultado de elevar $mayor a la potencia de $menor es: $potencia"."<br>";
//----------------------------------------------------------------------------------------------------------
$entero = 5;

if($entero<0)
{
	echo "El numero: ".$entero.", es negativo"."<br>";
}
else
{
	echo "El numero: ".$entero.", es positivo"."<br>";
}
//----------------------------------------------------------------------------------------------------------
/*
Dados dos números enteros, determinar si uno es múltiplo del otro (Por
medio del módulo).
*/
$numeroA = 30;
$numeroB = 10;
if ($numeroA % $numeroB == 0) {
    echo "$numeroA es múltiplo de $numeroB";
} elseif ($numeroB % $numeroA == 0) {
    echo "$numeroB es múltiplo de $numeroA";
} else {
    echo "Ninguno es múltiplo del otro";
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Por medio de una nota, determinar sí el estudiante aprobó o no la clase
(0 – 6 = Perdió y 7 – 10 = Aprobó).
*/
$nota = 11;
if ($nota >= 0 && $nota <=6)
{
	echo "El estudiante perdió la clase"."<br>";
}
elseif ($nota >= 7 && $nota <=10)
{
	echo "El estudiante aprobó la clase"."<br>";
}
else
{
	echo "El valor ingresado no es valido"."<br>";
}






















?>