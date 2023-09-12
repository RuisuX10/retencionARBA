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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ret ARBA</title>
   <!-- <link rel="shortcut icon" href='https://www.freepik.es/vectores/calculadora-icono' type="image/x-icon"> -->
    <link rel="stylesheet" href="style.css">
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
  </head>
  <body class="darkmode">
    <div class="container border px-5 ppal">
        <div class="text-center mt-4 py-3">
            <div>
                <button type="button" class="btn btn-outline-warning" id="bdark">Dark/Light mode</button><br><br>
            </div>
            <h1>Calculadora de retención - ARBA</h1>
        </div>
            <h3>CUIT: <?php echo $cuit ?></h3>
            <h3>Alicuota: <?php echo $alicuota ?></h3>

        <div><!-- NETO DEL COMPROBANTE -->
            <h3>Neto del Comprobante</h3>
            <input type="number" class="form-control" id="neto">
        </div>
        <div class="py-3"><!-- TOTAL DEL COMPROBANTE -->
            <h3>Total del comprobante</h3>
            <input type="number" class="form-control" id="total">
        </div>
        <div><!-- BOTON CALCULAR RETENCION -->
            <button class="w-100 btn btn-primary btn-lg" id="boton">Calcular Retencion</button>
        </div>
        <div class="py-4"><!-- RESULTADOS -->
            <p class="lead fs-3">Alicuota: <strong><span id="reten"></span></strong></p>
            <p class="lead fs-3">La retención es de: <strong><span id="reten"></span></strong></p>
            <p class="lead fs-3">El importe a pagar es de: <strong><span id="aPagar"></span></strong></p>
        </div>
        <footer>
            Creado por Rolando Luis Escobar, desarrollador web.<br>
            Puedes visitar mi <a href="https://ruisudev.com" target="_blank">Sitio web</a>

        </footer>
        
        <br>
        <br>
    </div>
    <script src="index.js" type="module"></script>  
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        const bdark = document.querySelector('#bdark');
        const body = document.querySelector('body');
        bdark.addEventListener('click', e =>{
            body.classList.toggle('darkmode');
        })    
    </script>
    </body>
</html>