<?php
interface SendInterFace{
    public function send(string $message);
}

interface SaveInterFace{
    public function save();
}

class Document implements SendInterFace, SaveInterFace{
    public function send(string $message){
        echo "Se envia la venta ". $message;
    }

    public function save(){
        echo "Se guarda la venta en la nuve";
    }
}

class BeerRepository implements SaveInterFace{
    public function save(){
        echo "Se guarda en una bd";
    }
}

class SaveProcess{
    private SaveInterface $saveManager;

    public function __construct(SaveInterFace $saveManager){
        $this->saveManager = $saveManager;
    }

    public function keep(){
        echo "hacemos algo antes <br>";
        $this->saveManager->save();
    }
}


$beerRepository = new BeerRepository();
$document = new Document();
$saveProcess = new SaveProcess($document );
$saveProcess->keep();