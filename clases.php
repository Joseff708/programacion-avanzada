<?php
class Persona {
    private $nombre; // es un modificador de acceso
    private $apellido;
    private $edad;
    private $pasatiempos;

    function __construct($nombre, $apellido)
    {
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this-> edad  = 18; 
    }

    function mayorEdad(){
    
        return $this->edad >= 18 ? 'si': 'no';
    
    }
    function setEdad($val){
        $this -> edad = $val;
    }
    function getEdad(){
        return $this -> edad;
    }
}

$persona = new Persona('pepe', "ABC");
$persona-> setEdad(18);
echo $persona-> mayorEdad();

