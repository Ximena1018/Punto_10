<?php
//herencia
class Animal {
    public function hacerSonido() {
        return "Algún sonido";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        return "Ladrar";
    }
}

$miPerro = new Perro(); //perro hereda de animal
echo "a mi perro le gusta: " . $miPerro->hacerSonido();
