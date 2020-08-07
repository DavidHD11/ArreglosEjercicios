<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 11</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Tarea 11 <a href="index.php"><img class="Icon" src="img/inicio.png" alt="texto" title="Inicio"></a></h1>
	
	<?php
		//estoy usando un arreglo indexado guardando los numeros
		$numPar=array(2,4,6,8,10,12,14,16,18,20);
		//Contar el numero de elementos de un arreglo para eso se usa la palabra count
		$tamano= count($numPar);
		//Mostrar un mensaje en pantalla
		echo("<br> <b>Los primeros 10 numeros pares son:</b> ");
		//Ahora recorrer el arreglo evaluando la variable tamano que es el numero de elementos del arreglo
		for($i=0; $i<$tamano; $i++){
			//Imprimir datos del elemento
			echo "<br>";
			echo $numPar[$i];
		}
	?>
</body>
</html>