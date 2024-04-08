<html>
<head>
</head>
<body>
<?php

	$fechayhora = $_POST["fecha"] . " " . $_POST["hora"];
	$fechayhora_convertida = strtotime($fechayhora);
	$diferencia = time() - $fechayhora_convertida;
	echo $diferencia;
	
?>
</body>
</html>

