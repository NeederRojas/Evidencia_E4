<?php

// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "alumnos");

// Verificar la conexión
if (!$con) {
    die('No se estableció la conexión con el servidor: ' . mysqli_connect_error());
}

// Construir la consulta SQL
$sql = "INSERT INTO datos (id_matricula, nombre, apellidos, edad) 
        VALUES ('" . $_POST['id_matricula'] . "', 
                '" . $_POST['nombre'] . "', 
                '" . $_POST['apellidos'] . "', 
                '" . $_POST['edad'] . "')";

// Ejecutar la consulta
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

// Mensaje de éxito
echo "<center>";
echo "1 registro agregado<br>";
echo "<a href='consulta_alumnos.php'>Ver registros</a>";

// Cerrar la conexión
mysqli_close($con);

?>