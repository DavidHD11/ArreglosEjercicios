<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 15</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Tarea 15 <a href="index.php"><img class="Icon" src="img/inicio.png" alt="texto" title="Inicio"></a></h1>
	
	<?php
	//Creo las variables con datos ya proporcionados
		$nombre="Pedro Torres";
		$direccion="Calle ancha num.3";
		$telefono=1234567;
		//Ahora en el arrglo asociativo le asigno el nombre y mando llamar las variables las cuales ya contienen informacion
		$datosG=array("Nombre"=>$nombre,"Direccion"=>$direccion,"Telefono"=>$telefono);
		//Mando recorrer con foreach mi arreglo para imprimir la informacion completa del arreglo asociativo
		foreach($datosG as $info=>$datos){
			echo "Su ".$info. " es ".$datos."<br>";
		}
	?>
</body>
</html>