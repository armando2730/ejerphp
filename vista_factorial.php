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
	<h1>Factorial de un numero</h1>
	<section>
	<form action="controlador_factorial.php" method="GET" enctype="multipart/form-data" name="factor" >
		<label>numero a calcular</label>
		<input type="text" name="num" required min="1" max="10"><br/>
		<input type="submit" name="calcular" value="calcular" id="calcular">
	</form>
</section>
</body>

</html>