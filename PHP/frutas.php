<html>
 
<body>
<br>
<h3><?php
// Declarar
$frutas = ["Manzana","Pera","Platano", "Naranja", "Piña"];
echo "<br>";
echo "Numero de Frutas= " . count($frutas). "<br>";


foreach ($frutas as $elemento)
{
    echo $elemento . "<br>";
}
echo "<br>";
$frutas[] = "Granada";
echo "<br>";
unset($frutas[0]);
echo "<br>";
echo "Numero de Frutas nuevo= " . count($frutas) . "<br>";;
foreach ($frutas as $elemento)
{
    echo $elemento . "<br>";
}
 
?></h3>
 
</body>
 
</html>