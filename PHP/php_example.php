<!DOCTYPE html>
<html lang="es">
<head>
</head>
<h2><?php
$num1 = 5;
$num2 = 7;
$suma = $num1 +$num2;
$contador = 0;
$contador2 = 0;
$contador3 = 0;
echo "Solucion = " . $suma . "<br>";

for($i = 0; $i < 10; $i++)
{    
    echo "Contador= " . $contador++ . "<br>";
}

for($i = 0; $i < 10; $i++)
{    
echo "<table border=1>";
echo "<td>";
echo  "<li>"; 
    echo "Contador= " . $contador2++ . "<br>";
    echo  "</li>";
    echo "</td>";
echo  "</table>";
}
?>
</h2>
<?php
for($i = 0; $i < 10; $i++)
{
echo "<select>";
echo  "<option>";
echo "Contador= " . $contador3++ . "<br>";
echo "</option>";
echo "</select>";
}
?>
<?php
echo "<h2>"; echo "Tabla de multiplicar";
echo "</h2>";
for($i = 1; $i <= 10; $i++)
{
    echo "<table border=1>";
    echo "num= " . $i;
    echo "<br>";
    for($j = 1; $j <= 10; $j++)
    {

        echo "<td>";
        echo  "<li>"; 
        echo "num * = " . $j * $i;
        echo "<br>";
        echo  "</li>";
        echo "</td>";
    }
    
    echo  "</table>";
    $color = ['rojo'=>101, 'verde'=>51, 'azul'=>255];
    echo $micolor = $color['verde'];
}
?>
<body>
</body>
</html>
