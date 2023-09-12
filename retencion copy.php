<?php

var_dump($_GET);
$cuit = $_GET['cuit'];
var_dump($cuit);

$conexion = mysqli_connect("localhost", "root","","arba"); 

if(mysqli_connect_errno()){
    echo "error de conexion";
} else{
    echo "Conexion exitosa";
}

$consulta = mysqli_query($conexion,"SELECT * FROM alicuotas WHERE cuit = $cuit
");

echo "<pre>";
var_dump($consulta);
echo "</pre>";

$listado = mysqli_fetch_assoc($consulta);

//obtenemos el valor de la alicuota en formato float, reemplazando la , por . del valor obtenido
$alicuota = floatval(str_replace(",",".",$listado['alicuota']));

echo "<pre>";
var_dump($listado['alicuota']);
var_dump($alicuota);
echo $alicuota;
echo "</pre>";


?>