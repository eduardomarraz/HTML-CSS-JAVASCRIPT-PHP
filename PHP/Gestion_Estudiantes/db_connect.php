
<?php

$servername = "localhost";
$database = "escuela";
$username = "root";  // Asegúrate de que este usuario exista en MySQL
$password = "";

try {
    // Intenta conectar
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        throw new Exception("FALLO CONEXION: " . mysqli_connect_error());
        
    }
} catch (Exception $e) {
}

?>