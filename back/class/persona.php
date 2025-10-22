<?php

abstract class Persona{

    public $nombre;
    public $apellido1;
    public $apellido2;
    protected $edad;

    public function __construct($nombre, $apellido1, $edad, $apellido2)
    {
        $this->nombre= $nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->edad=$edad;
}

    abstract public function saludar();
}

class Alumno extends Persona{
    public $numeroCarnet;

    public function __construct($nombre, $apellido1, $edad, $apellido2, $numeroCarnet)
    {
        parent::__construct($nombre, $apellido1, $edad, $apellido2);
        $this->numeroCarnet = $numeroCarnet;
    }

    public function saludar()
    {
         echo "Hola, me llamo " . $this->nombre . " y mis apellidos son " . $this->apellido1 . " " . $this->apellido2 . " y tengo " . $this->edad . " años y mi carnet es " . $this->numeroCarnet;
    }
}
$oPersona = new Persona("Adrián", "Álvarez", 20, "Cotta");
$oPersona->saludar();
$oEstudiante = new Alumno("Adrián", "Álvarez", 20, "Cotta", 12345);
echo $oPersona->nombre; //Acceso permitido
echo $oPersona->apellido1; //Acceso permitido
echo $oPersona->apellido2; //Acceso permitido
echo $oEstudiante->numeroCarnet; //Acceso permitido
//echo $oPersona->edad; //Acceso denegado
