<?php
echo 'hola mundo';
$nombre = 'pepe';
echo "Hola " . $nombre . "<br>" ;
echo "hola $nombre <br>";

$edad = 30;
$altura = 1.75;
$estudia = true; //false

$numeros = [1,2,3,4,5,6,7,8,9,10];

$ejemplo = [1, 'texto', 15.6, true];

echo $numeros[1]. '<br>';

$persona =[
    "nombre" => 'samuel',
    "apellido"=> "gomez",
    "edad"=> 35
];

$jobs = null; 
define("cien", 100);//constante

echo $persona['apellido'];
echo cien.'<br>';

/**
 * && and
 * || or
 * ! negacion
 * == igual a 
 * != diferente
 * <
 * >
 * >=
 * <=
 */

 $edad = 24;
 if($edad>0 && $edad<= 12){

 }elseif($edad> 12 && $edad<=17){

 }else if($edad> 18 && $edad<= 28){

 }else{

 }

 $categoria = 'a';
 switch($categoria){
     case 'a';
         /////
         break;
     case 'b';
         /////
         break;
     default:
         /////
         break;
 }

 $esMayorEdad = $edad >=18 ? 'si': 'no';

 $pares =[];
 $impares =[];

 for($i=0; $i<10;$i++){
    $numero=$numeros[$i];
    if(($numero % 2)==1){
        array_push($impares,$numero);
    }else {
        array_push($pares,$numero);
    }

 }

 var_dump($impares);
 echo '<br>';
 var_dump($pares);

 $pares =[];
 $impares =[];
 $i=0;
 while($i<10){
    $numero=$numeros[$i];
    if(($numero % 2)==1){
        array_push($impares,$numero);
    }else {
        array_push($pares,$numero);
    }
    $i++;
 }

 var_dump($impares);
 echo '<br>';
 var_dump($pares);

 $pares =[];
 $impares =[];
 $i=0;
 do{
    $numero=$numeros[$i];
    if(($numero % 2)==1){
        array_push($impares,$numero);
    }else {
        array_push($pares,$numero);
    }
    $i++;
 } while($i<10);

 var_dump($impares);
 echo '<br>';
 var_dump($pares);

foreach($numeros as $numero){
    if(($numero % 2)==1){
        array_push($impares,$numero);
    }else {
        array_push($pares,$numero);
    }
}
var_dump($impares);
echo '<br>';
var_dump($pares);

foreach($numeros as $index => $numero){//por si ahyy qu tomar la poss del elemento
    if(($numero % 2)==1){
        array_push($impares,$numero);
    }else {
        array_push($pares,$numero);
    }
}
?>
