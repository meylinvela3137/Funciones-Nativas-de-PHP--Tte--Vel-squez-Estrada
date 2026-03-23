<?php

//----FUNCIONES DE TIPO STRING

// 1. strlen()
//retorna la cantidad de caracteres de un string

// Longitud de cadena cuantos espacios hay en la funcion $texto
$texto = "Hola mundo";
echo strlen($texto);
// resultado: 10

//2. strtoupper()
//Convierte todos los caracteres de un string a mayúsculas.

// Convertir a mayúsculas
$nombre = "meylin";
echo strtoupper($nombre);
// resultado: MEYLIN

//3. strtolower()
//Convierte todos los caracteres de un string a minúsculas.

// Convertir a minúsculas
$texto = "HOLA MUNDO";
echo strtolower($texto);
// resultado: hola mundo

//4. str_repace()
//reemplaza todas las palabras o lo que deseamos modificar de un texto por otro dentro de un string.

// Reemplazar texto
$frase = "Me gusta el café";
echo str_replace("café", "té", $frase);
// resultado: Me gusta el té

//5. substr()
//Extrae una parte de un string desde una posición dada, se puede seleccionar segun los numeros que coloquemos que cantidad o el numero de letras salga de nuestro texto

// Subcadena desde posición 0, 4 chars
$texto = "Guatemala";
echo substr($texto, 0, 4);
// resultado: Guat

//6. trim()
// Elimina espacios (u otros caracteres) al inicio y final de un string.

