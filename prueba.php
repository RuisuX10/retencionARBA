<?php
$numero = "30.-2asd";
echo $numero;
$numero = str_replace("-","",filter_var($numero, FILTER_SANITIZE_NUMBER_INT));

echo "<br>";
echo $numero;

?>