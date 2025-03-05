<?php

$servername = "localhost";
$database = "test";
$username = "root";  // Asegúrate de que este usuario exista en MySQL
$password = "";

try {
    // Intenta conectar
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        throw new Exception("FALLO CONEXION: " . mysqli_connect_error());
        
    }

    echo "Connected OK";
} catch (Exception $e) {
    echo $e->getMessage();
    echo "<br>" . "error personalizado";
}

?>
