<?php

$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conn) {
    die("FALLO CONEXION: " . mysqli_connect_error());
}

// Sentencia SQL para seleccionar los datos
$sql = "SELECT * FROM tabla_spa";
$result = mysqli_query($conn, $sql);

// Obtener los nombres de las columnas
$columnas = [];
if ($result) {
    $campo_info = mysqli_fetch_fields($result);
    foreach ($campo_info as $campo) {
        $columnas[] = $campo->name;
    }
}

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
            <?php
            // Generar las cabeceras de la tabla dinámicamente
            foreach ($columnas as $columna) {
                echo "<th>" . ucfirst($columna) . "</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        // Verificar si hay resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorrer los resultados dinámicamente
            while ($fila = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($columnas as $columna) {
                    echo "<td>{$fila[$columna]}</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='" . count($columnas) . "'>No hay registros en la base de datos</td></tr>";
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
