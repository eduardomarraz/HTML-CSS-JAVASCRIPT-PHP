<html>
 
<body>
<br>
<?php
// Declarar
$colores = ["Rojo","Verde","Azul"];
// Añadir elementos
$colores[] = "Amarillo";
$colores[] = "Mostaza";
// Eliminar
 unset($colores[2]);
// $colores[2] = "Rosa"; 
// Acceder y mostrar
// $micolor = $colores[2];
// Recorrer
for ($i = 0;$i <= 4; $i++){
  echo $i ."-". $colores[$i] . "<br>";
}
echo "<br>";
echo "ANTES DE BORRAR: " .count($colores)."<br>";
unset($colores[2]);
// Ejemplo2
echo "<br>";
echo "DESPUES DE BORRAR: " .count($colores)."<br>";
echo "<br>";
$colores[2] = "Azul2";
for ($i = 0;$i < count($colores); $i++){
  echo $i ."-". $colores[$i] . "<br>";
}
$ini = 0;
echo "<br>FOREACH <br>";
foreach ($colores as $micolor){
	echo $ini . "-" . $micolor . "<br>";
	$ini++;
}	
 
?>
 
</body>
 
</html>