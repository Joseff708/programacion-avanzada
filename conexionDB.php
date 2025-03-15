<?php
$host = "localhost";
$userDB = "root";
$pwdDb = "";
$nameDb ="progamacion_avanzada_db1";
//$portDB = "3306";

$conexDB = new mysqli($host, $userDB, $pwdDb, $nameDb);
if($conexDB -> connect_error){
    echo $conexDB -> connect_error;
    die();
}

echo "conexion exitosa <br>";

$sql= "select * from estudiantes";
$resultadosSQL = $conexDB -> query($sql);
if($resultadosSQL -> num_rows > 0){
    while($row= $resultadosSQL -> fetch_row()){
        $id = $row ['id'];
        $nombre = $row['nombre'];
        $cod = $row ['codigo'];
        $email = $row ['email'];
        echo "$id $cod $nombre $email <br>";
    }
}else{
    echo'no hay registros';
}

$sql = "insert into estudiantes (codigos, nombre, email) values";




$conexDB -> close();
