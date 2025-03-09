<?PHP
/*
Almacene el un array los 10 primeros números pares. Imprímelos cada
uno en una línea.
*/
$arrayUno = array(2,4,6,8,10,12,14,16,18,20);

// Imprimir todo el array usando print_r()
echo "Contenido del array : "."<br>";
foreach ($arrayUno as $numero) {
    echo $numero; // Imprime cada número en una línea nueva
}
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Imprime el siguiente array usando la estructura cíclica foreach:
$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";
*/

// Definir el array con las claves y valores especificados
$arrayName = array();
$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";

// Imprimir el array usando foreach
echo "Contenido del array:<br>";
foreach ($arrayName as $clave => $valor) 
{
    echo "Clave: $clave - Valor: $valor<br>";
}


























?>