<?php
//constructor

$sale = new Sale(10.5, date("Y-m-d"));
$sale -> createInvoice();
class Sale
{
    public $total;
    public $date;

    public function __construct($total, $date)
    {
        $this->total = $total;
        $this->date = $date;
    }

    //destructores
    public function __destruct()
    {
        echo "<br>Se ha eliminado el objeto";
    }

    //constructor
    public function createInvoice(){
        echo "Se crea la factura";
    }
}

