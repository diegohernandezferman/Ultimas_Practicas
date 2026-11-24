<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos, edades y pasatiempos</title>
</head>
<body>
    <h2>Alumnos, Edades, Pasatiempos</h2>
    <form method="POST">
        Nombre del alumno: 
        <input type="text" name="nombre" required> <br><br>
        Edad: 
        <input type="number" name="edad" required> <br><br>
        Pasatiempo: 
        <input type="text" name="pasatiempo" required> <br><br>
        <button type="submit" name="guardar">Guardar</button>
    </form>

    <?php
    if (isset($_POST["guardar"])) {
        $alumnos = $_POST["nombre"];
        $edad = $_POST["edad"];
        $pasatiempos = $_POST["pasatiempo"];

        file_put_contents("alumnos.txt", $alumnos . PHP_EOL, FILE_APPEND);
        echo "<p>Nombre guardado correctamente.</p>";

        file_put_contents("edad.txt", $edad . PHP_EOL, FILE_APPEND);
        echo "<p>Edad guardada correctamente.</p>";

        file_put_contents("pasatiempos.txt", $pasatiempos . PHP_EOL, FILE_APPEND);
        echo "<p>Pasatiempo guardado correctamente.</p>";
    }
    ?>

    <h3>Alumnos</h3>
    <?php
    if (file_exists("alumnos.txt")) {
        $contenido = file_get_contents("alumnos.txt");
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>

    <h3>Edades</h3>
    <?php
    if (file_exists("edad.txt")) {
        $contenido = file_get_contents("edad.txt");
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>

    <h3>Pasatiempos</h3>
    <?php
    if (file_exists("pasatiempos.txt")) {
        $contenido = file_get_contents("pasatiempos.txt");
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>
</body>
</html>
