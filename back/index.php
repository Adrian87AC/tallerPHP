<?php
/*
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
*/


//saludo();

function incrementar(&$numero, &$numero2, $numero3){
    $numero+=10;
    $numero2+=34;
    $numero3+=678;
}

$valor=5;
$valor2=5;
$valor3=6;
incrementar($valor, $valor2, $valor3);
//echo $valor;
//echo $valor2;
echo $valor3;

function sumar($a, $b, &$c){
    $c+=1;
    return $a + $b;
}

function restar($a, $b, &$c){
    $c+=1;
    return $a - $b;
}

$a=5;
$b=10;
$numeroOpaciones=0;

$resultadoSuma = sumar($a, $b, $c);

echo "El resultado de la suma es: $resultadoSuma";
$resultadoResta = restar($a, $b, $c);
echo "El resultado de la resta es: $resultadoResta";
echo "El número de operaciones realizadas es: $numeroOpaciones";

function saludar($nombre = "Amigo"){
    echo "Hola que tal estás $nombre";
}
saludar();
saludar("Adrián");

function adios(){
    echo "Nos vemos pronto";
}
 $miFuncion = "adios";
 $miFuncion();


 $miFuncionAnonima = function($nombre){
   return "Hola, $nombre";
 }
    echo $miFuncionAnonima("Adrian");

    ?>