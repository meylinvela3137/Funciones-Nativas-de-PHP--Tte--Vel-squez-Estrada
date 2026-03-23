<?php

//----FUNCIONES DE TIPO STRING

// strlen()
//retorna la cantidad de caracteres de un string

// Longitud de cadena cuantos espacios hay en la funcion $texto
$texto = "Hola mundo";
echo strlen($texto);
// resultado: 10

//strtoupper()
//Convierte todos los caracteres de un string a mayúsculas.

// Convertir a mayúsculas
$nombre = "meylin";
echo strtoupper($nombre);
// resultado: MEYLIN

//strtolower()
//Convierte todos los caracteres de un string a minúsculas.

// Convertir a minúsculas
$texto = "HOLA MUNDO";
echo strtolower($texto);
// resultado: hola mundo