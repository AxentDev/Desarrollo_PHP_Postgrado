<?PHP

//Cuarto ejercicio
/*
En un nuevo archivo. Realizar los siguientes pasos en su respectivo
orden:
- Crear una variable de nombre “numeroUno” con el valor de 8.
- Crear una variable de nombre “numeroDos” con el valor de 2.
- Intercambiar los valores de ambas variables, de modo que
“numeroUno” valga 2, y “numeroDos” valga 8. (Utiliza una variable
auxiliar).
- Mostrar los resultados de ambas variables.
*/

$numeroUno = 8;
$numeroDos = 2;
$variableauxiliar = $numeroUno;
$numeroUno = $numeroDos;
$numeroDos = $variableauxiliar;

echo ("El numero uno queda: ".$numeroUno. "<br>");
echo ("El numero dos queda: ".$numeroDos);
echo "<br>";




















?>