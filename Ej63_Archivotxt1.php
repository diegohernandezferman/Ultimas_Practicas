<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Guardar informacion</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php
	$nombre = "Luis Soto";
	file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "Informacion guardada correctamente.";
	echo "<br><br>";
?>
<?php
	echo "<br><br>";
	$nombre = "Laila Cossio";
	file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "Alumna agregada correctamente.";
?>

<?php
	echo "<br><br>";
	$contenido = file_get_contents("alumnos.txt");
	//echo $contenido;
	echo nl2br($contenido);
?>
</body>
<html>