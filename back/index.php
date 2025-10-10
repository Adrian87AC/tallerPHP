<?php
    class Persona(){
        public $nombre;
        public $edad;
        public $apellido1;
        public $apellido2;
    }

    $persona1 = new Persona();

    $persona1->nombre = "Adrián";
    $persona1->edad = 20;
    $persona1->apellido1 = "Álvarez";
    $persona1->apellido2 = "Cotta";

    echo $persona1->nombre;
    if(is_null($persona1)){
        echo "Es nulo";
        }   
    
        if(is_null($persona1->nombre)){
            echo "Es nulo";
        }

        echo "Hola, mi nombre es " . $persona1->nombre . " y mis apellidos son " . $persona1->apellido1 . " " . $persona1->apellido2;

    ?>

    <?php if($persona1->edad >= 18): ?>
        <p>Eres mayor de edad</p>
    <?php else: ?>
        <p>Eres menor de edad</p>
    <?php endif; ?> 

    <?php
    $array = ["Carlos","Mercedes", "Currito", "Dorado"];

    echo $array[0];

    $arrayAsociativo=array("Juan"=> 25, "Pepe" => 65);
        foreach ($arrayAsociativo as $clave => $valor) {
            echo "$clave tiene $valor";        }
    echo $arrayAsociativo["Juan"];
    echo $arrayAsociativo["Pepe"];

    $matriz = [
        ["Juan", 25],
        ["Ana", 30],
        ["Pedro", 35]
];