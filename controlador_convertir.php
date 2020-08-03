<?php
require_once 'modelo_convertir.php';
extract($_POST);
extract($_GET);

$objconvertir = new Convertir($cant);
switch($con){
	case 'Celsius':
		$objconvertir->convcaf();
		$resultado=$objconvertir->resultado();
		break;
		case 'Farenheit':
			$objconvertir->convfac();
		$resultado=$objconvertir->resultado();
			break;
			case 'Kelvin':
			$objconvertir->convcak();
		$resultado=$objconvertir->resultado();
			break;
	default:
		echo 'no hay nada';
		break;
}
require_once 'vista_convertir.php';
?>