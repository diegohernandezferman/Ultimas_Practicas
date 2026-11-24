<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Guardar informacion</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php
	$nombre = "Ana Lopez";
	file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "Informacion guardada correctamente.";
	echo "<br><br>";
?>
</body>
<html>
Ej63_Archivotxt1.php