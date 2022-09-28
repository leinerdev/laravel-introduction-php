<?php
include 'includes/header.php';
include 'DB.php';

// Comunicar dos o más clases

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
$nombre = $empleado->getNombre();
$db = new DB($nombre);
$db->guardar();