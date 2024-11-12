<?php
//ejemplo de abstraccion
$beer = new Beer("Delirium", 15);
echo $beer -> getnombre();
showInfo($beer);
function showInfo(Producto $producto){
    echo "$ " . $producto->calcularPrecio();
}
abstract class Producto{
    protected string $nombre;
    protected float $precio;

    abstract public function calcularPrecio(): float;

    public function getnombre():string{
        return $this->nombre;
    }
}

class Beer extends Producto{
    const tax = 1.1;
    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function calcularPrecio(): float{
        return $this->precio * self::tax;
    }
}