<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Promedio</title>
</head>
<body>

    <h2>Promedio en General</h2>

    <form method="post">
        Calif 1: <input type="number" step="any" min="0" max="10" name="num1" required> <br><br>
        Calif 2: <input type="number" step="any" min="0" max="10" name="num2" required> <br><br>
        Calif 3: <input type="number" step="any" min="0" max="10" name="num3" required> <br><br>
        Calif 4: <input type="number" step="any" min="0" max="10" name="num4" required> <br><br>
        Calif 5: <input type="number" step="any" min="0" max="10" name="num5" required> <br><br>
        Calif 6: <input type="number" step="any" min="0" max="10" name="num6" required> <br><br>
        Calif 7: <input type="number" step="any" min="0" max="10" name="num7" required> <br><br>
        
        <input type="submit" value="Calcular Promedio">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c1 = $_POST['num1'];
        $c2 = $_POST['num2'];
        $c3 = $_POST['num3'];
        $c4 = $_POST['num4'];
        $c5 = $_POST['num5'];
        $c6 = $_POST['num6'];
        $c7 = $_POST['num7'];

        $suma = $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7;
        $promedio = $suma / 7;

        echo "<h3>El promedio general es: " . number_format($promedio, 2) . "</h3>";

        if ($promedio >= 6) {
            echo "<p>Estado: APROBADO</p>";
        } else {
            echo "<p>Estado: REPROBADO</p>";
        }
    }
    ?>

</body>
</html>
