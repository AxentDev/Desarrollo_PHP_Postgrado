<?php
//Segundo ejercicio
/*En un nuevo archivo. Realizar los siguientes pasos en su respectivo orden:
- Crear una variable para almacenar el nombre de un estudiante.
- Crear 5 variables para almacenar 5 diferentes notas decimales.
- Calcular el promedio final del estudiante a partir de las 5 notas
decimales. (Recuerda que un promedio se calcula sumando todos los
valores y dividiendo el resultado por el número de valores).
- Mostrar el resultado y el nombre del estudiante.
*/
$nombre = "Alejandro De Mendoza";
$nota1 = 9.5;
$nota2 = 9.4;
$nota3 = 9.3;
$nota4 = 9.5;
$nota5 = 9.7;

$promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5;
echo ("El nombre es: ". $nombre. " y el promedio es: ".$promedio);
?>
