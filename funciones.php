<?php

//función simple
function saludar() {
    echo "Bonjour le monde";
}

//esta funcion hace que se muestre el bonjour le monde
saludar();

//parametros por valor (se usa toda)
function incrementar($numero){
    $numero++;
    echo "<br> <br> Valor dentro de la función: $numero\n";
    return $numero;
}

$valor = 3;
incrementar($valor);
echo "<br> Valor fuera de la función: $valor\n";

//parametro por referencia

function incrementoporreferencia(&$numero){     // El símbolo & indica que es por referencia
    $numero++;
    echo "<br> <br> Valor dentro de la función (por referencia): $numero\n";
}

$valor = 8;
incrementoporreferencia($valor);
echo "<br> Valor despues de la función (por referencia): $valor\n <br>";


//parametros con valores por defecto

function saludarUsuario($nombre = "usuario"){
  echo "<br> Bonjour, $nombre\n";
}

saludarUsuario();  //da el resultado utilizando la variabloe usuario
saludarUsuario("pepito <br> <br>");    //da como resultado utilizando la bariable nombre y buscando en las registradas

//argumentos variaboles

function sumarTodo(...$numeros){
    return array_sum($numeros);
}

echo sumarTodo(1,5,8,25,4);    // la suma muestra 43

//return

function tenerMensaje($nombre){
    return "<br> <br> Hola, $nombre!";
}

echo tenerMensaje("Fulanito");