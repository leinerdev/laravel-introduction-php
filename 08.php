<?php
include 'includes/header.php';

// Modificadores de acceso

class Empleado {

    // public, acceso global
    // private, acceso solo en la clase, al usar herencia no se tiene acceso
    // protected, acceso solo en la clase

    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
        $this->nombre       = $nombre;
        $this->apellido     = $apellido;
        $this->departamento = $departamento;
        $this->email        = $email;
        $this->codigo       = $codigo;
    }

    public function nombreEmpleado() {
        echo $this->nombre . " " . $this->apellido;
    }
}

$empleado = new Empleado('Leiner', 'Barrios', 'TI', 'leiner@gmail.com', 007);
$empleado->nombreEmpleado();

echo "<pre>";
var_dump($empleado);
echo "</pre>";