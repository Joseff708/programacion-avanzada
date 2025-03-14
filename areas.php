<?php
include 'oop.php';
//require 'oop.php';

$arista = $_POST['arista'];
$cuadrado = new Cuadrado();
$cuadrado -> set('arista', $arista);

$base = $_GET['base'];
$altura = $_GET['altura'];
$triangulo= new Triangulo;
$triangulo -> set('base',$base);
$triangulo -> set ('altura', $altura)

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>areas</title>
</head>
<body>
    <h1>Area del cuadrado</h1>
    <p>
        <?php

     

            echo $cuadrado->toString();
        ?>
    </p>
    <a href="index.html">volver</a>
    <h1>Area del triangulo</h1>
    <p>
        <?php

            echo $triangulo->toString();

        ?>
    </p>
    <a href="index.html">volver</a>
</body>
</html>