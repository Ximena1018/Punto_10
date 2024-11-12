<?php
//Clases, Atributos, Métodos, Instancias y Uso de Objetos
class Carro{
    public $color; //Atributo publico
    private $placa, $marca;  //Atributo privado

    public function setMarca($marca){  //metodo publico
        $this->marca = $marca;
    }
    public function setPlaca($placa){
        $this->placa = $placa;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getPlaca(){
        return $this->placa;
    }
}

$miCarro = new Carro();   //instancias de la clase
$miCarro -> setMarca("Toyota");
$miCarro -> setPlaca("VSL569");

print "Mi carro es marca ". $miCarro->getMarca() . " de placa ". $miCarro->getPlaca();



