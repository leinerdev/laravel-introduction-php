<?php
include 'includes/header.php';

// Constructor property promotion

class Empleado {
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {}
}

$empleado = new Empleado('Leiner', 'Barrios', 'TI', 'leiner@gmail.com', 007);

$empleado->nombre = "Leiner";

echo "<pre>";
var_dump($empleado);
echo "</pre>";