<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Consultar Alumnos</title>
    <style type="text/css"></style>
</head>

<body>
    <center>
        <?php
        // Conexión a la base de datos
        $con = mysqli_connect("localhost", "root", "", "alumnos");

        if (!$con) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        // Consultar la tabla datos
        $resultado = mysqli_query($con, "SELECT * FROM datos");

        if ($resultado === FALSE) {
            echo "Falló la consulta: " . mysqli_error($con);
            die();
        }

        echo "<center><font face='Arial'>";
        echo "<a href='consulta_alumnos.php'>Actualizar tabla</a>";
        echo "<h1>Consulta de la tabla Datos</h1>";
        echo "<table border='1'>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </tr>";

        // Mostrar datos
        while ($row = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td align='center'>" . $row['id_matricula'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellidos'] . "</td>";
            echo "<td align='center'>" . $row['edad'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        // Contar registros
        $registros = mysqli_num_rows($resultado);
        echo "<br>Registros: " . $registros;

        // Cerrar conexión
        mysqli_close($con);
        ?>
    </center>
</body>

</html>