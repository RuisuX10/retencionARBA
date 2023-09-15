<?php


//OBTENEMOS DATOS DE LA EMPRESA SEGUN EL CUIT
$empresaData = json_decode(file_get_contents("https://afip.tangofactura.com/Rest/GetContribuyenteFull?cuit=$cuit"));

//GUARDAMOS LA RAZON SOCIAL EN UNA VARIABLE
$razonSocial = $empresaData->Contribuyente->nombre;

?>

<!-- IMPRIMIMOS EN EL DOCUMENTO  -->
<h3>
    RAZON SOCIAL:  <?php echo $razonSocial ?>
</h3>