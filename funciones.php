<?php

function saludar(){
    echo'hola<br>';

}

saludar();
function getSaludo(){
    return 'hola';
}
getSaludo();

function saludarDos($nombre){
    echo "hola $nombre <br>";
}

saludarDos('pepillo');

function  saludarTres($nombre, $apellido){
    echo "hola  $nombre $apellido <br>";
}

saludarTres('pepe','perez');

function  saludarCuatro($nombre, $apellido = null){
    if(empty($apellido)){
    echo "hola  $nombre  <br>";

    }else{
    echo "hola  $nombre $apellido <br>";

    }
}

saludarCuatro('pepe','vad');
saludarCuatro('ana');

function saludarCinco(...$params){
    $nombre = $params[0];
    $apellido = $params[1];
    $edad = $params[2];
    echo "hola $nombre $apellido <br>";
}
saludarCinco("pedro", 'LKj', 25, "si", 1.80, false);

function saludarSeis(string $nombre, int $edad){
    echo "hola $nombre <br>";

}

