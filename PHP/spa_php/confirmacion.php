<!DOCTYPE html>
<html lang="es">
<head>
</head>

<h2><?php
   $nombre = $_GET["nombre"];
   $dias = $_GET["dias"];
   $tipo = $_GET["tipo"];
   $personas = $_GET["personas"];


   if($tipo == "final triste")
   {
    $tipo_precio = 5;
   }
   else
   {
    $tipo_precio = 300;
   }
   $total = $dias*$personas*$tipo_precio;

echo "Precio total= " . $total . "€<br>" . "Tipo de servicio= " . $tipo;

echo "<br>";

echo "<a href= 'index.html'> Volver pagina principal </a>";
?>
</h2>
<body>
</body>
</html>
