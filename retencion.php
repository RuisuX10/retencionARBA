<?php
    // INICIO OBTENEMOS EL CUIT DEL FORMULARIO
    $cuit = $_GET['cuit'];
    $cuit = str_replace("-","",filter_var($cuit, FILTER_SANITIZE_NUMBER_INT));

    //CREAMOS LA CONEXION CON LA BASE DE DATOS
    require './include/config/conexion.php';

    //INFORME EN LA CONSOLA DE LA CONEXION
    if(mysqli_connect_errno()){
        echo "<script>console.log('error de conexion')</script>";
    } else{
        echo "<script>console.log('conexion exitosa')</script>";
    }

    $consulta = mysqli_query($conexion,"SELECT * FROM alicuotas WHERE cuit = $cuit
    ");

    $listado = mysqli_fetch_assoc($consulta);

    //obtenemos el valor de la alicuota en formato float, reemplazando la , por . del valor obtenido
    $alicuota = floatval(str_replace(",",".",$listado['alicuota']));

    $tipoAlicuota = get_debug_type($listado['alicuota']);
    var_dump($alicuota);
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
        <!-- INICIO HEADER -->
        <?php include './include/templates/header.php'; ?>
        <!-- FIN HEADER -->
        <!-- DATOS DE LA EMPRESA -->
            <?php include './include/templates/razonSocial.php' ?>
            <h3>CUIT: <?php echo $cuitGuion ?></h3>
            <span id="spanAlicuotaNoExiste"></span>
            <h3>Alicuota: <span id="alicuotaHTML"></span></h3>
        <!-- FIN DATOS DE LA EMPRESA -->
        <br>
        <div><!-- NETO DEL COMPROBANTE -->
            <h3>Neto del Comprobante</h3>
            <input type="number" class="form-control" id="neto">
        </div>
        <div class="py-3"><!-- TOTAL DEL COMPROBANTE -->
            <h3>Total del comprobante</h3>
            <input type="number" class="form-control" id="total">
        </div>
        <!-- OTRAS DEDUCCIONES -->
        <div class="py-1">
            <h3>Otras deducciones</h3>
            <input type="number" class="form-control" id="deducciones" value="0">
        </div>
        <!-- FIN OTRAS DEDUCCIONES -->
        <br>
        <div><!-- BOTON CALCULAR RETENCION -->
            <button class="w-100 btn btn-primary btn-lg" id="boton">Calcular Retencion</button>
        </div>
        <div class="py-4"><!-- RESULTADOS -->
            <p class="lead fs-3">La retención es de: <strong><span id="reten"></span></strong></p>
            <p class="lead fs-3">El importe a pagar es de: <strong><span id="aPagar"></span></strong></p>
        </div>
        <div><!-- BOTON CALCULAR RETENCION -->
            <a href="./index.php"><button class="w-100 btn btn-primary btn-lg">Nuevo Cuit</button></a>
        </div>
        <!-- INICIO FOOTER -->
        <?php include './include/templates/footer.php' ?>
        <!-- FIN FOOTER -->
        <br>
        <br>
    </div>
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        const bdark = document.querySelector('#bdark');
        const body = document.querySelector('body');
        bdark.addEventListener('click', e =>{
            body.classList.toggle('darkmode');
        })    
    </script>
    <!-- MODULO DEL SCRIP PARA LOS CALCULOS -->
    <?php include './include/config/script.php'; ?>
    </body>
</html>