<?PHP
/*
Desarrolla un programa donde por medio del tipo de un motor,
determinar qué tipo de fluido puede trasportar éste según las siguientes
condiciones:
- Si el tipo de motor es 0, mostrar un mensaje por consola indicando “No
hay establecido un valor definido para el tipo”.
- Si el tipo de motor es 1, mostrar un mensaje por consola indicando
“Agua”.
- Si el tipo de motor es 2, mostrar un mensaje por consola indicando
“Gasolina”.
- Si el tipo de motor es 3, mostrar un mensaje por consola indicando
“Hormigón”.
- Si no se cumple ninguno de los valores anteriores mostrar el mensaje
“No existe un valor válido”.
*/
$tipoDeMotor = 3;

switch($tipoDeMotor)
{
	case 1:
	echo "El fluido que puede transportar es Agua";
	break;
	case 2:
	echo "El fluido que puede transportar es Gasolina";
	break;
	case 3:
	echo "El fluido que puede transportar es Hormigón";
	break;
	default:
		echo "Error";
		break;
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar una calculadora, la cual, en base a un operador, realice una
operación con dos números enteros ya definidos y mostrar el resultado,
los operadores a tener en cuenta son los vistos en la tabla de
operadores aritméticos, sí deseas agregar más operadores, siéntete en
libertad de hacerlo.

Operador	Descripción			Ejemplo en Valores	Resultado
- 			Cambio de Signo 		-(-5) 				5
+ 			Suma 					5 + 8 				13
- 			Resta 					3 - 7 				-4
* 			Multiplicación 			5 * 4 				20
/ 			División 				18 / 3 				6
% 			Módulo 					50 % 2 				0
** 			Exponenciación 			6 ** 4 				1296
*/

$numeroUno = 0.25;
$numeroDos = 0.75;
$operador = "/";

switch ($operador) {
	case "+":
	$resultadosuma = $numeroUno+$numeroDos;
	echo "El resultado de la suma es: ".$resultadosuma."<br>";
		break;
	case "-":
	$resultadoresta = $numeroUno-$numeroDos;
	echo "El resultado de la resta es: ".$resultadoresta."<br>";
		break;
	case "*":
	$resultadomultiplicacion = $numeroUno*$numeroDos;
	echo "El resultado de la multiplicación es: ".$resultadomultiplicacion."<br>";
		break;
	case "/":
	$resultadodivision = $numeroUno/$numeroDos;
	echo "El resultado de la división es: ".$resultadodivision."<br>";
		break;
	case "%":
	$resultadomodulo = $numeroUno%$numeroDos;
	echo "El resultado del modulo es: ".$resultadomodulo."<br>";
		break;
	case "**":
	$resultadoexponenciacion = $numeroUno**$numeroDos;
	echo "El resultado de la exponeciación es: ".$resultadoexponenciacion."<br>";
		break;
	default:
		echo "Error"."<br>";
		break;
}
//----------------------------------------------------------------------------------------------------------
/*
Se desea saber la nacionalidad de una persona (Colombiano, Italiano,
Argentino y Alemán), mostrar la nacionalidad de la persona, en caso
contrario de que no se encuentre, se debe mostrar el siguiente
mensaje: “Nacionalidad no especificada en la lista”.
*/
$nacionalidad = "Italiano";

switch ($nacionalidad) {
	case 'Colombiano':
		echo "La persona tiene nacionalidad: ".$nacionalidad.".<br>";
		break;
	case 'Italiano':
		echo "La persona tiene nacionalidad: ".$nacionalidad.".<br>";
		break;
	case 'Argentino':
		echo "La persona tiene nacionalidad: ".$nacionalidad.".<br>";
		break;
	case 'Aleman':
		echo "La persona tiene nacionalidad: ".$nacionalidad.".<br>";
		break;
	default:
		echo "Nacionalidad no especificada en la lista"."<br>";
		break;
}



























?>