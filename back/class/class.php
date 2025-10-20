<?php
class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar(){
        return "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

$persona1 = new Persona("Adrián", 20);
$persona1->saludar();
?>