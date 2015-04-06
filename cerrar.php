<?php
session_start();
session_unset(); 
session_destroy();
$valor_sesion = $_SESSION["var_sesion"]; 
echo $valor_sesion; 

header('location:index1.php');

?>

