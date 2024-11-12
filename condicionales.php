<?php

//if-else-elseif
$edad = 25;

if ($edad >= 18) {
    echo "Eres mayor de edad.\n <br>";
} else {
    echo "Eres menor de edad.\n <br>";
}

$nota = 1.5;

if ($nota >= 4.0){
    echo "<br> Tienes una muy buena nota sigue esforzandote.\n <br>";
} elseif ($nota >= 3.0){
    echo "<br> Sigue esforzandote.\n <br>";
} else {
    echo "<br> Necesitas mejorar continua esforzandote.\n <br>";
}

//switch

$diaSemana = "miercoles";

switch($diaSemana){
    case "lunes":
        echo "<br> Hoy es Lunes.\n";
        break;   //necesario para evitar que se ejecuten los demas
    case "martes":
        echo "<br> Hoy es Martes.\n";
        break;
    case "miercoles":
         echo "<br> Hoy es Miercoles.\n";
         break;
    case "jueves":
         echo "<br> Hoy es Jueves.\n";
         break;
    case "viernes":
         echo "<br> Hoy es Viernes.\n";
         break;
    case "sabado":
         echo "<br> Hoy es Sabado.\n";
         break;
    case "domingo":
         echo "<br> Hoy es Domingo.\n";
         break;
    default:
         echo "<br> Este no es un día valido.\n <br>";
         break;
}


/*operario ternario es una forma abreviada de escribir
una condición if...else. La sintaxis es: condicion ?
valor_si_true : valor_si_false.*/

//$edad = 17;
//echo ($edad >=.  18) ? "<br> Eres mayor de edad.\n " : "<br> Eres menor de edad.\n <br>";

//operador null

$nombre = null;
echo $nombre ?? "nombre no proporcionado <br> <br> ";   //el operador ?? devuelve "Nombre no proporcionado". Es útil para valores opcionales.

//operador spaceship <=>

$a = 10;
$b = 15;

$resultado = $a <=> $b;
echo "Reultado a menor que b: ". $resultado;  //el resultado es -1 por que a es menor que b

$resultado = $b <=> $a;
echo "<br> Resultado a mayor que b: ".  $resultado; //El resultado es 1 por que b es mayor que a

$resultado = $a <=> $a;
echo "<br>Resultado de a iguales: ". $resultado;  //El resultado es 0 por que son iguales



