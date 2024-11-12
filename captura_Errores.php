<?php
//thorw

function dividir($a, $b){
    if ($b == 0){
        throw new ("No se puede dividir en 0 (cero).");
    }
    return $a / $b;
}

// try

try{
    echo dividir(4, 9);
    echo dividir(15,2);
    echo dividir(3, 0);
    echo dividir(0, 6);
}catch (Exception $e){  //catch captura la excepción y muestra mensaje de error
    echo "Error: ".$e->getMessage();
}finally{
    echo "\nEjecución finalizada"; //se ejecuta hasta el final aun si hay error
}
