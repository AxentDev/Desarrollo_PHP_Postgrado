
<?php
/*
Crear dos variables, una para almacenar el nombre completo de una persona
y otra para almacenar el correo electrónico e imprimir las dos variables en un
echo.
*/
$nombreyapellido = "Diego Valencia". "<br>";
$correoelectronico = "diegovalencia@politecnicodecolombia.edu.co". "<br>";

echo "Nombre: ".$nombreyapellido." "."Correo Electrónico: ".$correoelectronico;

//----------------------------------------------------------------------------------------------------------
/*
Crear tres variables para tres números, de 0 a 9, cada uno diferente del otro,
es decir, sin repetir; imprimir todas las combinaciones posibles entre los números
para formar números de tres dígitos. Ejemplo:
Var1 = 8;
Var2 = 3;
Var3 = 5;
835 - 538 - 583 - 385 - 358 - 853
*/

//Desarrollo
$var1=7;
$var2=8;
$var3=9;

echo "$var1.$var2.$var3". "<br>";
echo "$var1.$var3.$var2". "<br>";
echo "$var2.$var1.$var3". "<br>";
echo "$var2.$var3.$var1". "<br>";
echo "$var3.$var1.$var2". "<br>";
echo "$var3.$var2.$var1". "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Corrija/organice todas las siguientes declaraciones a partir de lo aprendido sobre las variables en PHP, 
el uso de echo y las funciones, de manera tal que no se presenten errores en el navegador.
*/
function Prueba(){
    echo "¡¡¡Esta es la funcion de prueba!!!". "<br>";
}
prueba();
function Prueba1(){
    $altura= 1.72;
    $x = 7;
    $nombre = "Diego";
    $GLOBALS['y'] = 8;
    $pais_persona = "Colombia";
    $pais = "mi pais es ".$pais_persona;
    $valor = 13;
    echo "Hola, ".$pais. "<br>";
    echo "Tiene un total de: ".$valor." millones de habitantes". "<br>";
    $correo = "alekool83@gmail.com";
    echo "Mi correo es: ".$correo. "<br>";
    mostrarValorEstatico();
    $ciudad = "Medellin";
    echo "La ciudad es: ".$ciudad. "<br>";
}
function mostrarValorEstatico(){
static $y = 0.05;  // Correcto uso de una variable estática dentro de una función
echo "El valor estático es: ".$y. "<br>";
}
prueba1();
?>