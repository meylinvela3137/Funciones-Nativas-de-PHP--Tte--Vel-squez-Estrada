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

// Quitar espacios alrededor
$texto = "  hola  ";
echo trim($texto);
// resultado: "hola"

//7.  strpos()
// Busca la primera posición de un substring dentro de un string. Retorna false si no existe, si existe coloca en que numero esta la posiciion de la primera letra.

// Posición de "mundo" en el texto
$texto = "Hola mundo";
echo strpos($texto, "mundo");
// resultado: 5

//8. explode()
// Divide un string en un array usando un separador que uno seleccione puede ser entre comillas y comas. 

// Separar por coma
$lista = "pan,leche,huevo";
$arr = explode(",", $lista);
// resultado: ["pan","leche","huevo"]

//9. implode()
// Une los elementos de un array en un string con un separador.

// Unir array con guión
$arr = ["a", "b", "c"];
echo implode("-", $arr);
// resultado: a-b-c