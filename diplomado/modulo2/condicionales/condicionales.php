<?PHP

//Condicionales

//Condicional if

/*
La instrucción if ejecuta algún código si una condición es verdadera.
La estructura condicional más simple en PHP es el if, esta se encarga de
evaluar una condición que, para el correcto funcionamiento, retornará un valor
booleano, en caso de que se cumpla (true) se ejecuta el contenido entre las llaves
«{}».
*/

$numero1 = 1;
$numero2 = 3;

if ($numero1>$numero2)
{//ojo el if no lleva $ antes
	echo ("El numero uno: ".$numero1." es mayor que el numero dos:".$numero2)."<br>";
	}else{//ojo el else no lleva $ antes
	echo ("El numero uno: ".$numero1." es menor que el numero dos: ".$numero2)."<br>";
}
//----------------------------------------------------------------------------------------------------------

/*
Antes de entrar en mayor detalle de las condicionales, es importante tener en cuenta las características que tienen en relación con los operadores lógicos.

Ejemplos:
$a and $b, and, TRUE si tanto $a como $b son TRUE.
$a or $b, or, TRUE si cualquiera de $a o $b es TRUE.
$a xor $b, xor, TRUE si $a o $b es TRUE, pero no ambos.
!$a, not, TRUE si $a es FALSE.
$a && $b, and, TRUE si tanto $a como $b son TRUE.
$a || $b, or, TRUE si cualquiera de $a o $b es TRUE.

Un ejemplo con esta tabla de operadores lógicos, y en especial el operador «&&», sería el siguiente:
*/
$nombre1 = "Diego";
$nombre2 = "Alejandro";

if($numero1<$numero2 && $nombre1==$nombre2)
{
	echo ("El numero uno: ".$numero1." es mayor que el numero dos: ".$numero2." y ".$nombre1." es el nombre correcto")."<br>";
	}elseif($numero1>$numero2 && "nombre1"=="nombre2")
	{
	echo ("El numero uno: ".$numero1." es mayor que el numero dos: ".$numero2." y ".$nombre1." es el nombre correcto")."<br>";
	}
	elseif($numero1<$numero2 && "nombre1"!="nombre2")
	{
	echo ("El numero uno: ".$numero1." es menor que el numero dos: ".$numero2." y ".$nombre1." es el nombre incorrecto")."<br>";
	}
	elseif($numero1>$numero2 && "nombre1"!="nombre2")
	{
	echo ("El numero uno: ".$numero1." es mayor que el numero dos: ".$numero2." y ".$nombre1." es el nombre incorrecto")."<br>";

}
// A continuación el cuadro resumen de condicionales:
/*
P 		Q 		P&&Q 	P||Q 	!P
True 	True 	True 	True 	False
True 	False 	False 	True 	False
False 	True 	False 	True 	True
False 	False 	False 	False 	True

A continuación ejemplos:
*/

$p = true;
$q = true;

//Condicional 1:

if ($p && $q)
{
	echo "P y Q tienen valor verdadero"."<br>";
}
//Condicional 2:
if ($p||$q)
{
	echo "P o Q tienen valor verdadero"."<br>";
}
//Condicional 3:
if (!$p)
{
	echo "P tiene valor false"."<br>";
}
//----------------------------------------------------------------------------------------------------------
// Sentencia ifelse:
/*
Condicional else:
Hasta el momento la estructura condicional if ha servido para ilustrar los
casos en los que una sentencia encerrada en la condicional al momento de retornar
un valor booleano true, permite ejecutar código aparte a raíz del mismo resultado,
pero existen casos en que se necesita un complemento al if, en caso de que no se
cumpla la condicional, ¿qué hará el programa?, ahí entra en juego la estructura
condicional else, que permite dentro del código dictaminar una secuencia de
instrucciones en caso de que el if no retorne un valor true y encerrarlas dentro de
«{}» para su posterior ejecución.
La instrucción else ejecuta algún código si una condición es falsa.
*/

$velocidad1 = 30;
$velocidad2 = 60;
$velocidad3 = 80;
$velocidad4 = 100;
$velocidadvehiculo = 70;

if ($velocidadvehiculo<=$velocidad1)
{
	echo ("la velocidad que llevas pertence a zonas escolares")."<br>";
}
elseif($velocidadvehiculo<=$velocidad2 and $velocidadvehiculo>$velocidad1)
{
	echo ("la velocidad que llevas pertence a vias urbanas")."<br>";
}
elseif($velocidadvehiculo<=$velocidad3 and $velocidadvehiculo>$velocidad2)
{
	echo ("la velocidad que llevas pertence a vias rurales")."<br>";
}
elseif($velocidadvehiculo<=$velocidad4)
{
	echo ("la velocidad que llevas pertence a rutas nacionales")."<br>";
}
//----------------------------------------------------------------------------------------------------------
// Estructuras Condicionales Anidadas:
/*
Condicional elseif:
Un paso más allá de las estructuras pasadas están las condicionales
anidadas, que permiten ejecutar una sentencia a partir de una condición en forma de
ciclo hasta encontrar el retorno esperado (cumplimiento de la condición), si esta
condición se cumple, entonces se ejecuta la sentencia en el programa, en caso de
no cumplirse dicha condición, se puede hacer otra condición en el programa para que
se cicle, marque error y vuelva a solicitar la información hasta que se cumpla la
condición, de no validarse la condición, al igual que en los casos anteriores, se puede
definir un caso base donde retornará un valor que se espera.
*/

$dolar = 2981;
if($dolar >=0)
{
	if($dolar >0 and $dolar <=1000)
	{
		echo ("El dolar tiene un valor bajo")."<br>";
	}
	elseif($dolar >1000 and $dolar <=2000)
	{
		echo ("El dolar tiene un valor medio bajo")."<br>";
	}
	elseif($dolar >2000 and $dolar <=3000)
	{
		echo ("El dolar tiene un valor alto")."<br>";
	}
	elseif($dolar >3000)
	{
		echo ("El dolar tiene un valor muy alto")."<br>";
	}

}
else
{
	echo ("El dolar no puede tener un valor negativo")."<br>";

}



























?>
