<!DOCTYPE html>
<head>	
	<title>Calculadora</title>
<meta charset="utf-8">
</head>
<nav id="menuprincipal">
<a class="opcionmenuprincipal" href="index.html">index</a>
<a id="btnquienessomos" class="opcionmenuprincipal" href="vista_convertir.php">convertir</a>
<a id="btnquienessomos" class="opcionmenuprincipal" href="vista_factorial.php">factorial</a>
<a id="btnquienessomos" class="opcionmenuprincipal" href="vista_calculadora.php">calculadora</a>
</nav>
<body>

	<section>

	<h1>Calculadora</h1>
	<form name="calculadora" action="controlador_calcu.php" method="GET" enctype="multipart/form-data">

	
		<td>Numero 1:</td><input type="text" name="n1"  /><br>
		<select name="op">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
		<br>Numero 2:<input type="text" name="n2" />

	
	<br><input type="submit" name="calcular" value="calcular" id="calcular">
	</form>
	<?php
if(isset($_GET['calcular']))
{
	echo '<h1> El resultado de la operación es: ' . $calcular.'<h1>';
}
?>

	
	
	</section>


	

</body>
</html>