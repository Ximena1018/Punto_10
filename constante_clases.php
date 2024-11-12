<?php
//Constantes de Clase y Autocarga de Clases

//Definir constantes de clase
class Coche {
    const NUM_RUEDAS = 4;
}
echo Coche::NUM_RUEDAS;

//Autocarga de clase

spl_autoload_register(function ($clase) {
    include "clases/" . $clase . ".php";
});
