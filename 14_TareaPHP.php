<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 14</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Tarea 14 <a href="index.php"><img class="Icon" src="img/inicio.png" alt="texto" title="Inicio"></a></h1>
	
	<?php
	//Podemos usar comillas 
		$datos=array ("Juan","Maria",33,1);
		//Lo que hace es mostrar la posicion del elemento comenzando en 0 y el dato de cada elemento
		print_r ($datos);
	?>
</body>
</html>