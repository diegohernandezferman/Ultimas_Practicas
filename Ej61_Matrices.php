<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Matrices</title>
</head>
<body>
<h2>Calculo de Matrices</h2>
<?php
$matrizA = array();
$matrizB = array();
$matrizC = array();

for ($i = 0; $i < 9; $i++) {
    $matrizA[$i] = 100 + ($i * 10);
    $matrizB[$i] = 500 + ($i * 20);
    $matrizC[$i] = $matrizA[$i] + $matrizB[$i];
}

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Matriz A</th><th>Matriz B</th><th>Matriz C</th></tr>";

for ($i = 0; $i < 9; $i++) {
    echo "<tr>";
    echo "<td>" . $matrizA[$i] . "</td>";
    echo "<td>" . $matrizB[$i] . "</td>";
    echo "<td>" . $matrizC[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>
