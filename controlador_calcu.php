<?php
require_once 'modelo_calculadora.php';
$op=$_GET['op'];
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$calcular=0;

switch($op){
	case '+': $calcular = suma($n1,$n2); 
	    break;
	case '-': $calcular = resta($n1,$n2); 
	    break;
	case '*': $calcular = multiplicacion($n1,$n2); 
	    break;
	case '/': $calcular = division($n1,$n2);
	    break;

}

require_once 'vista_calculadora.php';

?>