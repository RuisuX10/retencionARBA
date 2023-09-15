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
            <!-- INICIO DEL HEADER -->
            <?php include './include/templates/header.php' ?>
            <!-- FIN DEL HEADER -->
            <form action="retencion.php" method="GET">
                <h3>CUIT</h3>
                <input type="number" class="form-control" id="neto" name="cuit">
                <p>sin guiones ni puntos</p>
                <div><!-- BOTON OBTENER ALICUOTA -->
                <button type="submit" class="w-100 btn btn-primary btn-lg" id="boton">Obtener alicuota</button>
                </div>
            </form>
            <br>
            <!-- INICIO DEL FOOTER -->
            <?php include './include/templates/footer.php' ?>
            <!-- FIN FOOTER -->
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