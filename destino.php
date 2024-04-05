<html>
<head>
</head>
<body>
<?php


	$la_fecha_1 = $_POST["fecha1"];
	$la_fecha_2 = $_POST["fecha2"];

	$la_fecha_timestamp_1 = strtotime($la_fecha_1);
	$la_fecha_timestamp_2 = strtotime($la_fecha_2);

	$diferencia_de_fechas = $la_fecha_timestamp_2 - $la_fecha_timestamp_1;

	$resultado_en_dias = $diferencia_de_fechas/86400;

	echo round($resultado_en_dias);

	
?>
</body>
</html>

