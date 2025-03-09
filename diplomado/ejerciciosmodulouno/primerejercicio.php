<?php
//Primer ejercicio
/*
Dada la siguiente cadena “Diego-Palacio.5;28;41;08” remplace los
caracteres “-.;” de forma que la cadena termine de la siguiente forma:
“Diego Palacio 5284108”.
*/
$idpersona = "Diego-Palacio.5;28;41;08";

// Reemplaza el guion '-' con un espacio
$idpersona = str_replace(array(";"),"", $idpersona);
$idpersona = str_replace(array(".")," ", $idpersona);
$idpersona = str_replace(array("-")," ", $idpersona);

// Imprime el resultado
echo $idpersona;
//----------------------------------------------------------------------------------------------------------
/*
A partir de la contraseña: “dapv0102”, cifrar la misma con sha1 y md5,
mostrar ambos resultados.
*/
// Contraseña original
$contraseña = "dapv0102";

// Cifrar con SHA-1
$sha1_result = sha1($contraseña);

// Cifrar con MD5
$md5_result = md5($contraseña);

// Mostrar resultados
echo "Contraseña original: " . $contraseña . "<br>";
echo "Resultado SHA-1: " . $sha1_result . "<br>";
echo "Resultado MD5: " . $md5_result . "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Determinar la longitud del siguiente mensaje: “Buenos días estimados
estudiantes. Hoy vamos aprender PHP”.
*/
$texto = "Buenos días estimados estudiantes. Hoy vamos aprender PHP";
var_dump($texto);
echo "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Almacena todo tu nombre en un variable, por ejemplo: “diego alejandro
palacio valencia” y este mismo conviértelo a mayúscula por medio de una
función de cadenas.
*/
$nombre = "Diego Alejandro Valencia";
$nombre_mayusculas = strtoupper($nombre);
echo $nombre_mayusculas, "<br>";
//----------------------------------------------------------------------------------------------------------
/*
Almacena todo tu nombre en un variable, por ejemplo: “DIEGO
ALEJANDRO PALACIO VALENCIA” y este mismo conviértelo a minúsculas
por medio de una función de cadenas.
*/
$nombre2 = "DIEGO ALEJANDRO PALACIO VALENCIA";
$nombre_minusculas = strtolower($nombre2);
echo $nombre_minusculas, "<br>";

















?>