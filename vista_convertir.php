<!DOCTYPE html>
<head>	
	<title>Convetir</title>
<meta charset="utf-8">
</head>
<nav id="menuprincipal">
<a class="opcionmenuprincipal" href="index.html">index</a>
<a id="btnquienessomos" class="opcionmenuprincipal" href="vista_convertir.php">convertir</a>
<a id="btnquienessomos" class="opcionmenuprincipal" href="vista_factorial.php">factorial</a>
<a id="btnquienessomos" class="opcionmenuprincipal" href="vista_calculadora.php">calculadora</a>
</nav>
<body>
	<form name="conversor" type="text/multipart" method="post" action="controlador_convertir.php">
		<input type="text" name="cant" placeholder="coloca un grado"/><br/>
		<input type="radio" name="con" value="Celsius"/>Celsius</br>
		<input type="radio" name="con" value="Farenheit"/>Farenheit</br>
		<input type="radio" name="con" value="Kelvin"/>kelvin</br>
		<input type="submit" name="calcular"value="enviar">
	</form>
	<?php
	if(isset($_POST['cant'])){
		echo'<br><h1> Resultado:' .$resultado.'</h1>';
}
?>
</body>
</html>