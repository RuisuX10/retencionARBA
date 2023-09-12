<?php
    

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
        <form action="retencion.php" method="GET">
            <h3>CUIT</h3>
            <input type="number" class="form-control" id="neto" name="cuit">
            <p>sin guiones ni puntos</p>
            <div><!-- BOTON OBTENER ALICUOTA -->
            <button type="submit" class="w-100 btn btn-primary btn-lg" id="boton">Obtener alicuota</button>
            </div>
        </form>

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