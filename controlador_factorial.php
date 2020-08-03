<?php
extract($_GET);
if(isset($_GET['num'])){
	require_once 'modelo_factorial.php';
	$valor=$_GET['num'];
	$objfactorial = new Factorial($num);
	$objfactorial->SetDatos($valor);
	$objfactorial->operacion();
	$resultado=$objfactorial->Getvalor();
}
require_once 'vista_factorial.php';
?>