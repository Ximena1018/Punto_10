<?php
$bool = true ;   //tipo de dato booleano verdadero o falso
$int = 18;       //tipo de dato int numero entero
$float = 6.5;    ///tipo de dato flotante ejemplo 3.6
$string = "Bonjour!";    //tipo de dato string textos
$nan = NAN;              //tipo de dato nan valor not number ningun numero
$nulo  = null;           //variable nula
$objeto = (object) ["propiedad" => "valor"]; // Declara un objeto con una propiedad llamada "propiedad" y valor "valor"

// Muestra el tipo y valor de cada una de las variables anteriores
var_dump($bool , $int, $float, $string, $nan, $nulo, $objeto);


//Arrays
$array = [1, 2, 3];
var_dump($array);