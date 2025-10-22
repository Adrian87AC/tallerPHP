<?php
// Definición de la clase Persona
class Persona {
// Atributos públicos y protegidos
public $nombre; // Nombre de la persona
public $apellido1; // Primer apellido de la persona
public $apellido2; // Segundo apellido de la persona
protected $edad; // Edad de la persona (protegido)
// Constructor de la clase Persona
public function __construct($minombre, $miapellido, $edad, $apellido2) {
// Inicialización de atributos mediante el constructor
$this->nombre = $minombre;
$this->apellido1 = $miapellido;
$this->apellido2 = $apellido2;
$this->edad = $edad;
}
// Método para saludar
public function saludar() {
// Muestra un mensaje con los datos de la persona
echo "Hola me llamo " . $this->nombre . ", " . $this->apellido1 . " " . $this->apellido2 . " y tengo " . $this->edad . " años";
}
}
// Definición de la clase Alumno, que extiende de Persona
class Alumno extends Persona {
// Atributo adicional para el número de carnet
public $numeroCarnet;
// Constructor de la clase Alumno
public function __construct($minombre, $miapellido, $edad, $apellido2, $numeroCarnet) {
// Llamada al constructor de la clase padre (Persona) para inicializar los atributos comunes
parent::__construct($minombre, $miapellido, $edad, $apellido2);
// Inicialización del atributo número de carnet
$this->numeroCarnet = $numeroCarnet;
}
// Sobrescritura del método saludar para incluir el número de carnet
public function saludar() {
// Muestra un mensaje con los datos del alumno y su número de carnet
echo "Hola me llamo " . $this->nombre . ", " . $this->apellido1 . " " . $this->apellido2 . " y tengo " . $this->edad . " años y mi carnet es " . $this->numeroCarnet;
}
}
// Crear un objeto de la clase Persona
$oPersona = new Persona("Adrián", "Álvarez", 20, "Cotta");
// Llamar al método saludar de la clase Persona (comentado por ahora)
//$oPersona->saludar();
// Crear un objeto de la clase Alumno
$oEstudiantes = new Alumno("Adrián", "Álvarez", 20, "Cotta", 4575325678654);
// Llamar al método saludar de la clase Alumno
$oEstudiantes->saludar();
// Nota: Se comenta una llamada a un método que no se utiliza directamente.
// echo $oPersona->edad; // Esto intentaría acceder a un atributo protegido, lo cual generaría un error si no se define un getter.
