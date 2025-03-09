<?PHP
/*
Desarrolla un programa que permita invertir la palabra “Programación”.
El resultado debe ser “nóicamargorP”
*/

// Definir la palabra
$palabra = "Programacion";

// Invertir la palabra usando strrev()
$palabraInvertida = strrev($palabra);

// Mostrar el resultado
echo "La palabra invertida es: " . $palabraInvertida."<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un programa que determine si una palabra establecida
previamente es o no palíndroma.
*/
$palabra = "anilina";
$palabraInvertida = strrev($palabra);

if ($palabra === $palabraInvertida)
{
	echo "Es una palabra palindroma"."<br>";
}
else
{
	echo "No es una palabra palindroma"."<br>";
}
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un programa que continúe con la serie sumatoria de 11 –
22 – 33 – 44. Debe mostrar únicamente los primeros 25 valores de la
serie.
*/
// Definir el número de términos a mostrar
$terminos = 25;

// Generar y mostrar la serie
for ($i = 1; $i <= $terminos; $i++) {
    $valor = $i * 11; // Calcular el valor actual
    echo $valor; // Mostrar el valor
    if ($i < $terminos) {
        echo " - "; // Agregar un separador solo si no es el último valor
    }
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrolla un programa que permita mostrar el factorial de un número
definido previamente. 
*/
// Definir el número
$numero = 5; // Cambia este valor para calcular el factorial de otro número

// Inicializar la variable para el factorial
$factorial = 1;

// Calcular el factorial
for ($i = 1; $i <= $numero; $i++) { //La condición $i <= $numero en el bucle for se utiliza para asegurarse de que el bucle se ejecute desde 1 hasta el valor del número definido (incluyéndolo).
    $factorial *= $i; // Multiplicar el valor actual
}

// Mostrar el resultado
echo "El factorial de $numero es: $factorial";
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un programa que determine los divisores de un número
definido previamente.
*/
// Definir el número
$numero = 36; // Cambia este valor para probar con otros números

// Inicializar un array para almacenar los divisores
$divisores = [];

// Calcular los divisores
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) { // Verificar si $i es un divisor de $numero
        $divisores[] = $i; // Agregar el divisor al array
    }
}

// Mostrar los divisores
echo "Los divisores de $numero son: " . implode(", ", $divisores);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Desarrollar un programa que permita definir si un número entero ya
establecido es un número perfecto o no.
*/
// Definir el número
$numero = 28; // Cambia este valor para probar con otros números

// Inicializar una variable para la suma de los divisores
$sumaDivisores = 0;

// Calcular los divisores y sumarlos
for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) { // Verificar si $i es un divisor de $numero
        $sumaDivisores += $i; // Sumar el divisor a la suma total
    }
}

// Verificar si el número es perfecto
if ($sumaDivisores == $numero) {
    echo "$numero es un número perfecto.";
} else {
    echo "$numero no es un número perfecto.";
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Muestre los números de pisos y oficinas de un bloque. Por ejemplo:
- Piso 1 – Oficina 1
- Piso 2 – Oficina 2
Así hasta llegar al piso 5 – Oficina 6
*/

// Definir el número de pisos
$numeroDePisos = 5;

// Definir el número de oficinas
$numeroDeOficinas = 6;

// Mostrar los pisos y oficinas
for ($piso = 1; $piso <= $numeroDePisos; $piso++) {
    // Calcular el número de oficina correspondiente
    $oficina = $piso; // La oficina es igual que el piso

    // Mostrar el resultado
    echo "Piso $piso – Oficina $oficina<br>";
}
































?>