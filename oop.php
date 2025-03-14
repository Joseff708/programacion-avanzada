<?php
  
  interface FigurasGeometricas{//sirve para estructurar los metodos de una clase
    function area();
    function toString();
  }  

  abstract class Model{
    abstract function prueba();

    function set($prop, $val){
       $this-> {$prop} = $val;
    }
    function get($prop){
        return $this ->{$prop} ;
    }
  }
  class Figura extends model implements FigurasGeometricas{
    function prueba()
    {
        
    }
    function area (){
        echo 'area';
    }
    function toString()
    {
        echo "to string";

        return 'figura';
    }

  }

  class Cuadrado extends Figura{
    protected $arista;

    function area()
    {
        return pow($this-> arista, 2);
    }

    function toString()
    {
        $area = $this-> area();

        return "cuadrado con area $area";
    }

    function prueba()
    {
        parent::prueba();
        $area = pow($this -> arista, 2);
        return "cuadrado prueba con area $area";
    }
  }

  $cuadrado = new Cuadrado;
  $cuadrado -> set('arista', 5);
  echo '<br>' . $cuadrado->prueba();

  class Triangulo extends Figura{
    protected $base;
    protected $altura;

    function area(){
        return ($this->base * $this->altura)/2;
        
    }

    function prueba()
    {
        $area = ($this->base * $this->altura)/2;
        return "cuadrado prueba con area $area";
    }

    function toString()
    {
        $area = $this ->area();
        return "cuadrado prueba con area $area";
    }

    static function nombreFigura(){
        return "triangulo";
    }
  }

  $triangulo = new Triangulo;
  $triangulo -> set('base', 5);
  $triangulo -> set('altura', 2);

  echo '<br>'.$triangulo->toString();