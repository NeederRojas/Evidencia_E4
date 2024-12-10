<?php

// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "alumnos"); // Asignamos a una variable el resultado de la conexión

echo "<br><center>";

// Verificar la conexión
if (!$con) {
    die('No se estableció la conexión con el servidor: ' . mysqli_connect_error()); // FALSE en caso de falla
}

// Consulta SQL para borrar el registro
$sql = "DELETE FROM datos WHERE id_matricula = '" . $_POST["id_matricula"] . "'";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con)); // Error en caso de fallo
}

echo "Registro borrado<br><br>";

echo "<a href='borrar_datos.html'>Regresar</a>"; // Regresar a la página de borrar datos

// Cerrar la conexión
mysqli_close($con);

?>