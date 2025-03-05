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

// Sentencia SQL para seleccionar los datos
$sql = "SELECT id, nombre, apellidos, personas, dias, servicio FROM tabla_spa";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reservas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Reservas</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Personas</th>
            <th>Días</th>
            <th>Servicio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Verificar si hay resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorrer los resultados con un bucle foreach
            foreach ($result as $fila) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['apellidos']}</td>
                        <td>{$fila['personas']}</td>
                        <td>{$fila['dias']}</td>
                        <td>{$fila['servicio']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay registros en la base de datos</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php
// Cerrar conexión
mysqli_close($conn);
?>

</body>
</html>
