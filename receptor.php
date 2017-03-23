<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<?php

$nombre = $_POST['dato1'];
$apellido = $_POST['dato2'];

if ($nombre=="Sergio" && $apellido=="Martin") {
	echo "Ya está! El profe pesao";
} else {
	echo "Hola " .$nombre." ".$apellido;
} 	

?>

</body>
</html>