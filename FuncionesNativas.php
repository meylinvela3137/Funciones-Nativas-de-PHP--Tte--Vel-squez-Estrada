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

//10. str_repeat()
// Repite un string un número determinado de veces.

// Repetir 3 veces
echo str_repeat("ha", 3);
// resultado: hahaha

//----FUNCIONES DE TIPO ARRAY

//11. count()
// Cuenta el número de elementos en un array.

// Cuenta los elementos dentro del array
$frutas = ["mango", "pera", "uva"];
echo count($frutas);
// resultado: 3

//12. array_push()
//Agrega uno o más elementos al final de un array.

// Agregar al final los numeros 3, 4
$nums = [1, 2];
array_push($nums, 3, 4);
// resultado: [1, 2, 3, 4]

//13. array_pop()
// Elimina y retorna el último elemento de un array.

// Sacar último elemento
$nums = [10, 20, 30];
$ultimo = array_pop($nums);
// $ultimo: 30 | $nums: [10, 20]

//14. array_merge()
// Combina dos o más arrays en uno solo.

// Unir dos arrays
$a = [1, 2];
$b = [3, 4];
$c = array_merge($a, $b);
// resultado: [1, 2, 3, 4]

//15. in_array()
// Verifica si un valor existe dentro de un array. Retorna true o false.

// ¿Existe "pera" en el array?
$frutas = ["mango", "pera"];
echo in_array("pera", $frutas);
// resultado: true (1)

//16. sort() 
//ordena un array de menor a mayor (modificando el original)

//ordenar de menor a mayor
$nums = [3, 1, 4, 2,];
sort($nums);
// resultado: [1, 2, 3, 4]

//17. array_reverse()
//invierte el orden de los elementos de un array.

// Invertir orden
$arr = [1, 2, 3];
$inv = array_reverse($arr);
// resultado: [3, 2, 1]

