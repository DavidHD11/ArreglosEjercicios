<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 12</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Tarea 12 <a href="index.php"><img class="Icon" src="img/inicio.png" alt="texto" title="Inicio"></a></h1>
	
	<?php
	//Creo un arreglo asociativo llamado v en donde guardare los diferentes datos solicitados 
		$v=array(1=>90,30=>7,'e'=>99,'hola'=>43);
		//Ahora usare foreach para recorrer el arrglo y despues imprimir los datos de mi arreglo ya introducidos
		foreach($v as $valor=>$total){
			echo "El valor ".$valor. " es ".$total."<br>";
		}
	?>
</body>
</html>