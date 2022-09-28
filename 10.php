<?php
include 'includes/header.php';

class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono) {
        $this->nombre       = $nombre;
        $this->apellido     = $apellido;
        $this->email        = $email;
        $this->telefono     = $telefono;
    }

    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }
}

// Herencia

class Empleado extends Persona {
    protected $codigo; 
    protected $departamento; 

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento) {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo       = $codigo;
        $this->departamento = $departamento;
    }
}

class Proveedor extends Persona {
    protected $empresa; 

    public function __construct($nombre, $apellido, $email, $telefono, $empresa) {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa      = $empresa;
    }
}

$empleado = new Empleado('Leiner', 'Barrios', 'TI', 'leiner@gmail.com', 123456789, 007);
$proveedor = new Proveedor('Jose', 'Medina', 'jose@gmail.com', 123456789, 'Google');


echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";

$empleado->mostrarInformacion();
$proveedor->mostrarInformacion();