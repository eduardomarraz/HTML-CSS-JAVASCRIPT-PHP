<?php
session_start();
include 'db_connect.php'; // Conexión a la base de datos

// Obtener datos del estudiante a editar
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM estudiantes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
}

// Actualizar datos del estudiante
if (isset($_POST['update_student'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    
    $sql = "UPDATE estudiantes SET nombre = ?, apellido = ?, edad = ?, grado = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $nombre, $apellido, $edad, $grado, $id);
    $stmt->execute();
    header("Location: estudiantes.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
</head>
<body>
    <h2>Editar Estudiante</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <input type="text" name="nombre" value="<?= $student['nombre'] ?>" required>
        <input type="text" name="apellido" value="<?= $student['apellido'] ?>" required>
        <input type="number" name="edad" value="<?= $student['edad'] ?>" required>
        <input type="text" name="grado" value="<?= $student['grado'] ?>" required>
        <button type="submit" name="update_student">Actualizar</button>
    </form>
    <a href="estudiantes.php">Volver</a>
</body>
</html>
