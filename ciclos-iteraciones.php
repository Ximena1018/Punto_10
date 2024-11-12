<?php
//for

for ($i = 1; $i <= 10; $i++) {
    echo "Número $i<br>";
}

$numero = 8;
echo "<br> <br> Tabla de multiplicar del numero $numero <br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero * $i = $resultado\n <br> ";
}
//foreach

$colores = ["Amarillo", "Azul", "Morado", "Blonde", "Violet", "Vert"];

foreach($colores as $color){
    echo "<br> ". "Color: $color <br>";
}

//foreach con clave y valor

$frutas = ["a" => "Manzana", "b" => "Pera", "c"=> "Naranja", "d" =>"Mango"];
foreach ($frutas as $clave => $valor) {
    echo "<br> ". "Clave $clave: $valor <br>";
}
//while

$contador = 1;

while ($contador <= 10) {
    echo "Contador: $contador <br>";
    $contador++;
}

$suma = 0;
$numero = 2;

while ($suma <= 20){
    $suma += $numero;
    echo "Suma actual: $suma <br>";
    $numero++;
}
//do while

$contador = 1;

do{
    echo "Contador: $contador <br>";
    $contador++;
}while ($contador <= 10);

$numeroSecreto = rand(1,20); //genera un numero aleatorio dentro de ese rango
$intento = 0;  //se inicializa en 0

do {
    $intento++;
    $adivinanza = rand(1,20);   //se simula que ek jugador adivina el número generando otro aleatoriamente
    echo "Ha adivinado el numero $adivinanza en $intento inentos <br>";

    if ($adivinanza == $numeroSecreto){
        echo "Felicidades adivinaste el numero secreto $numeroSecreto en $intento intentos <br> ";
    }else {
        echo "Numero incorrecto, intenta nuevamente. <br>";
    }
}while($adivinanza != $numeroSecreto);

//break

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5){
        break;  //salir del ciclo cuando $i es igual a 5
    }
    echo "numero: $i <br>";
}
//continue

for ($i = 1; $i <= 10; $i++) {
    if ($i == 8){
        continue; //Saltar iteración cuando $i es igual a 8
    }
    echo "numero: $i <br>";
}

