<HTML>
<BODY>
<?PHP
  session_start();
  include 'db_connect.php';
  
  echo "<h1> Gestión de Estudiantes y Calificaciones </h1>";
  
  // Agregar un estudiante
if (isset($_POST['add_student'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    
    $sql = "INSERT INTO estudiantes (nombre, apellido, edad, grado) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $nombre, $apellido, $edad, $grado);
    $stmt->execute();
    header("Location: estudiantes.php");
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
    <h2>Gestión de Estudiantes</h2>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="text" name="grado" placeholder="Grado" required>
        <button type="submit" name="add_student">Agregar</button>
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Grado</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['apellido'] ?></td>
            <td><?= $row['edad'] ?></td>
            <td><?= $row['grado'] ?></td>
            <td class="actions">
                <a href="ver_calificaciones.php?id=<?= $row['id'] ?>">Ver Calificaciones</a>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="estudiantes.php?delete=<?= $row['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar?');">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php echo "<a href=\"index.php\"> <h2> Volver a Index </h2> </a>";
    ?> 
</body>
</HTML>