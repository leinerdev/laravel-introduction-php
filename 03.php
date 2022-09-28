<?php
include 'includes/header.php';

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;
$empleado->nombre = "Leiner";

echo "<pre>";
var_dump($empleado);
echo "</pre>";