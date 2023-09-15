<script>
    //VERIFICAMOS SI EXISTE EL CUIT INGRESADO EN LA DB VERIFICANDO EL TIPO DE ALICUOTA
    let tipoAlicuota = "<?php echo $tipoAlicuota ?>";
    let alicuota;
    //FUNCION SI EL TIPO DE ALICUOTA NO EXISTE
    function alicuotaNoExiste(){
        alicuota = 3;
        const spanAlicuotaNoExiste =document.getElementById("spanAlicuotaNoExiste");
        spanAlicuotaNoExiste.innerHTML = "El cuit ingresado no figura en la base de datos, se procede con la alicuota gral.";
    };
    //FUNCION SI LA ALICUOTA EXISTE
    function alicuotaExiste(){
        alicuota = "<?php echo $alicuota ?>";
    };
    //CASOS SI EXISTE O NO LA ALICUOTA
    tipoAlicuota == "null" ? alicuotaNoExiste() : alicuotaExiste();
    alicuota = parseFloat(alicuota);
    const alicuotaHTML = document.getElementById('alicuotaHTML');

    alicuotaHTML.innerHTML =alicuota;
    
    //AL PRECIONAR EL BOTON
    boton.addEventListener('click', () => {
        //OBTENEMOS LOS VALORES DEL FORM
        const neto = parseFloat(document.getElementById('neto').value);
        const total = parseFloat(document.getElementById('total').value);
        const deduccion = parseFloat(document.getElementById('deducciones').value);
        if (typeof(deduccion) == NaN){
            deduccion = 0;
        };
        /* Define variables para almacenar el resultado de la retención y el monto final a pagar. */
        let retencion = neto * (alicuota/100);
        let aPagarse = total - retencion - deduccion;
        console.log(total);
        /* Muestra los resultados de la retención y el monto final a pagar formateados como una cadena de caracteres con el símbolo de moneda y separadores de miles en formato de Argentina. */
        
        reten.innerHTML = "$ " + (new Intl.NumberFormat('es-VE').format(retencion));
        aPagar.innerHTML = "$ " + (new Intl.NumberFormat('es-VE').format(aPagarse));
        /* Actualiza los elementos HTML para mostrar los resultados de la retención y el monto final a pagar cuando se hace clic en el botón. */
    })
    
    if(tipoAlicuota=="null"){
        console.log("el cuit ingresado no se encuentra en la base de datos");
    }else{
        console.log("si se encuentra en la base de datos")
    }
    //DECLARAMOS LAS VARIABLES QUE USAREMOS EN JS DESDE PHP
</script>
