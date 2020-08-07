<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 13</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Tarea 13 <a href="index.php"><img class="Icon" src="img/inicio.png" alt="texto" title="Inicio"></a></h1>
	
	<?php
	//Creo un arreglo asociatuvo con los datos solicitados
		$mes=array("Enero"=>2,"Febrero"=>5,"Marzo"=>1,"Abril"=>2,"Mayo"=>7,"Junio"=>0,"Julio"=>0,"Agosto"=>0,"Septiembre"=>0,"Octubre"=>0,"Noviembre"=>0,"Diciembre"=>0);
		//Recorro e imprimo los datos de mi arreglo
		foreach($mes as $peliculas=>$total){
			echo "En ".$peliculas. " se vieron ".$total." peliculas"."<br>";
		}
	?>
</body>
</html>

