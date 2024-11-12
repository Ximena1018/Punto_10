<?php
//Tipado Estricto
declare(strict_types=1);
function suma(int $a, int $b): int {
    return $a + $b;
}

echo "La suma es: " . suma(3,5);

//declaración de variables
$nombre = " Pepito";
$edad = 18;

echo "<br> Tu nombre es: $nombre y tienes $edad años <br>";


//constantes
define("PI", 3.14);
echo "el valor de PI es: " .PI . "<br>";


