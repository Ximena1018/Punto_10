<?php
$numeroSecreto = rand(1, 20); // Genera un número aleatorio entre 1 y 10
$intento = 0; // Inicializamos el intento en 0

echo "Adivina el número secreto entre 1 y 20.\n";

do {
    $intento++;
    $adivinanza = (int)readline("Intento $intento: Ingresa tu adivinanza: "); // Pedimos al usuario que ingrese un número
    echo "Has adivinado el número $adivinanza\n";


    if ($adivinanza == $numeroSecreto) {
        echo "¡Felicidades! Adivinaste el número secreto $numeroSecreto en $intento intentos.\n";
    } else {
        echo "Número incorrecto, intenta de nuevo.\n";
    }

} while ($adivinanza != $numeroSecreto);