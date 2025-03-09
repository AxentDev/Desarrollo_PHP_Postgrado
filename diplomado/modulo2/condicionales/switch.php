<?PHP

//Switch case:
/*
La sentencia switch case se utiliza para realizar diferentes acciones en
función de distintas condiciones.
La sentencia switch es similar a una serie de sentencias if en la misma
expresión. En muchas ocasiones, es posible que se quiera comparar la misma
variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código
distinta dependiendo de a qué valor es igual. Para esto es exactamente la expresión
switch (The PHP Group, s.f. [b]).
Los dos ejemplos siguientes son dos formas diferentes de escribir lo mismo,
uno con una serie de sentencias if y else if, y el otro usando la sentencia switch
case:
A continuación un ejemplo de switch case:
*/
$x = 1;
switch ($x)
{
	case 0: //OJO LOS CASE TERMINAN CON DOS PUNTOS
		echo ("X es igual a 0")."<br>";
		break; //OJO CON ESTE CIERRO EL CICLO IMPORTANTE JAMÁS OLVIDARLO
	case 1:
		echo ("X es igual a 1")."<br>";
		break;
	case 2:
		echo ("X es igual a 2")."<br>";
		break;

}
//----------------------------------------------------------------------------------------------------------
$fruta = "Mango";
switch ($fruta)
{
	case "Manzana": //OJO LOS CASE TERMINAN CON DOS PUNTOS
		echo ("La fruta es una Manzana")."<br>";
		break; //OJO CON ESTE CIERRO EL CICLO IMPORTANTE JAMÁS OLVIDARLO
	case "Mango":
		echo ("La fruta es un Mango")."<br>";
		break;
	case "Pera":
		echo ("La fruta es una Pera")."<br>";
		break;
}
//----------------------------------------------------------------------------------------------------------
$diasemana = "Lunes";
$mensaje = "Error";
switch ($diasemana)
{
	case "Lunes":
	case "Martes":
	case "Miercoles":
	case "Jueves":
	case "Viernes":
		$mensaje = "día laborable"; //SE PUEDE REEMPLAZAR MENSAJE POR EL ECHO
		break;
	case "Sabado":
	case "Domingo":
		$mensaje = "día no laborable";
		break;
	default:
		$mensaje = "dia invalido";
}

echo ($diasemana. " es un ".$mensaje)."<br>";
//----------------------------------------------------------------------------------------------------------
$x = 8;
$y = 4;
$mensaje = "El resultado es: ";
$operacion = "/";

switch ($operacion)
{
	case "+":
	$suma= $x + $y;
	$mensaje = $suma;
		break;
	case "-":
	$resta= $x - $y;
	$mensaje = $resta;
		break;
	case "*":
	$multiplicacion= $x * $y;
	$mensaje = $multiplicacion;
		break;
	case "/":
        if ($y != 0) {
            $division = $x / $y;
            $mensaje .= $division; // Concatenamos el resultado al mensaje
        } else {
            $mensaje = "No se puede dividir entre cero"; // Mensaje en caso de división por cero
        }
        break; // Agregamos un break para el caso de división
    default:
        $mensaje = "Operación errónea"; // Mensaje para operaciones no válidas
}

echo $mensaje . "<br>"; // Mostramos el resultado o el mensaje de error
//----------------------------------------------------------------------------------------------------------
//Switch case anidados
/*
Se puede usar un switch como parte de la secuencia de la declaración de un
switch externo. Esto se llama un switch anidado.
A continuación un ejemplo:
*/
$notaParcial = 5;
$notaFinal = 5;

switch ($notaFinal)
{
	case 1:
	case 2:
	case 3:
	echo "Perdiste la materia";
	break;
	case 4:
	case 5:
		echo "Aprobaste la materia";
		switch ($notaParcial) 
		{
			case 1:
			case 2:
			case 3:
				echo " y perdiste el parcial";
				break;
			case 4:
			case 5:
				echo " y aprobaste el parcial";
				break;
			default:
				echo "Error";
				break;
		}
		break;
	default:
		echo "Error";
		break;

}
echo "<br>";














?>
