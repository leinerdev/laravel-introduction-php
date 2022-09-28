<?php
include 'includes/header.php';

// Tipado
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo) {
        $this->nombre       = $nombre;
        $this->apellido     = $apellido;
        $this->departamento = $departamento;
        $this->email        = $email;
        $this->codigo       = $codigo;
    }
}

$empleado = new Empleado('Leiner', 'Barrios', 'TI', 'leiner@gmail.com', 007);

$empleado->nombre = "Leiner";

echo "<pre>";
var_dump($empleado);
echo "</pre>";