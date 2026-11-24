<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos, edades y pasatiempos</title>
</head>
<body>
    <h2>Alumnos, Edades, Pasatiempos</h2>
    <form method="POST">
        Nombre del alumno: <input type="text" name="nombre" required>
        <br><br>
        Edad: <input type="number" name="edad" required>
        <br><br>
        Pasatiempo: <input type="text" name="pasatiempo" required>
        <br><br>
        <button type="submit" name="guardar">Guardar</button>
    </form>

    <br>

    <form method="POST">
        Número de registro a eliminar: <input type="number" name="linea" min="1" required>
        <button type="submit" name="eliminar_uno">Eliminar registro</button>
    </form>

    <br>

    <form method="POST">
        <button type="submit" name="eliminar_todo">Eliminar toda la información</button>
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

    if (isset($_POST["eliminar_uno"])) {
        $indice = $_POST["linea"] - 1;
        $archivos = ["alumnos.txt", "edad.txt", "pasatiempos.txt"];

        foreach ($archivos as $archivo) {
            if (file_exists($archivo)) {
                $lineas = file($archivo);
                if (isset($lineas[$indice])) {
                    unset($lineas[$indice]);
                    file_put_contents($archivo, implode("", $lineas));
                }
            }
        }
        echo "<p>Registro eliminado correctamente.</p>";
    }

    if (isset($_POST["eliminar_todo"])) {
        $archivos = ["alumnos.txt", "edad.txt", "pasatiempos.txt"];
        foreach ($archivos as $archivo) {
            if (file_exists($archivo)) {
                unlink($archivo);
            }
        }
        echo "<p>Toda la información ha sido eliminada.</p>";
    }
    ?>

    <h3>Alumnos</h3>
    <?php
    if (file_exists("alumnos.txt") && filesize("alumnos.txt") > 0) {
        $contenido = file_get_contents("alumnos.txt");
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>

    <h3>Edades</h3>
    <?php
    if (file_exists("edad.txt") && filesize("edad.txt") > 0) {
        $contenido = file_get_contents("edad.txt");
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>

    <h3>Pasatiempos</h3>
    <?php
    if (file_exists("pasatiempos.txt") && filesize("pasatiempos.txt") > 0) {
        $contenido = file_get_contents("pasatiempos.txt");
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>
</body>
</html>
