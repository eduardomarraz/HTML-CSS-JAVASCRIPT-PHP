<HTML>
<BODY>
<?PHP
  session_start();
  include 'db_connect.php';
  
  echo "<h1> Calificaciones </h1>";
  
  // Agregar un estudiante
if (isset($_POST['add_cali'])) {
    $id_estudiante = $_POST['id_estudiante'];
    $materia = $_POST['materia'];
    $calificacion = $_POST['calificacion'];
    
    $sql = "INSERT INTO calificaciones (id_estudiante, materia, calificacion) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $id_estudiante, $materia, $calificacion);
    $stmt->execute();
    header("Location: calificaciones.php");
}

// Eliminar un estudiante
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM estudiantes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: estudiantes.php");
}

// Obtener lista de estudiantes
$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Estudiantes</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        .actions a { margin-right: 10px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Gestión de Calificaciones</h2>
    <form method="POST">
    <?php
    // Obtener la lista de estudiantes desde la base de datos
    $sql = "SELECT * FROM estudiantes";
    $result = $conn->query($sql);

    // Verifica si la consulta devuelve algún resultado
    if ($result->num_rows > 0):
    ?>
        <select name="id_estudiante" required>
            <option value="">Seleccione un estudiante</option>
            <?php while ($row = $result->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= $row['nombre'] . " " . $row['apellido'] ?></option>
            <?php endwhile; ?>
        </select>
    <?php else: ?>
        <p>No hay estudiantes registrados.</p>
    <?php endif; ?>

    <input type="text" name="materia" placeholder="Materia" required>
    <input type="number" name="calificacion" placeholder="Calificación" required>
    <button type="submit" name="add_cali">Agregar</button>
</form>
    
    <table>
        <tr>
            <th>id</th>
            <th>id_estudiante</th>
            <th>materia</th>
            <th>calificacion</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['materia'] ?></td>
            <td><?= $row['calificacion'] ?></td>
            <td class="actions">
                <a href="calificaciones.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="calificaciones.php?delete=<?= $row['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar?');">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php echo "<a href=\"index.php\"> <h2> Volver a Index </h2> </a>";
    ?> 
</body>
</HTML>