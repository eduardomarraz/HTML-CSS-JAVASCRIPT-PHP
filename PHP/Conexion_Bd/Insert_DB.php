<?php

$servername = "localhost";
$database = "test";  // Asegúrate de que la BD exista
$username = "root";  // Cambia si usas otro usuario
$password = "";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conn) {
    die("FALLO CONEXION: " . mysqli_connect_error());
}

// Sentencia SQL para insertar un nuevo usuario
$sql = "INSERT INTO tabla_spa (id, nombre, apellidos, personas, dias, servicio) VALUES (NULL, 'juan', 'martin', '1', '2', 'Jacuzii')";

// Ejecutar el INSERT
if (mysqli_query($conn, $sql)) {
    echo "OK";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);

?>
