<?php
include 'includes/header.php';

// Getters and Setters

class Empleado {
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

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

$empleado = new Empleado('Leiner', 'Barrios', 'TI', 'leiner@gmail.com', 007);
$empleado->setNombre('Jose');
echo $empleado->getNombre();

echo "<pre>";
var_dump($empleado);
echo "</pre>";