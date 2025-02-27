<!DOCTYPE html>
<html lang="es">
<head>
</head>

<h2><?php
   $precio = $_GET["precio"];
   $tipo = $_GET["tipo"];

if($precio < 19)
{
    if($tipo == "mascota")
    {
        echo  "No se puede realizar el envío";
    }
    else
    {
        echo "Los gastos de envío son 9 euros";
    }
}
else if($precio >= 19 && $precio <= 40)
{
    echo "Los gastos de envío son 9 euros";
}
else if($precio> 40)
{
    echo "Los importes de envio son gratis =D";
}
else if($precio> 200)
{
    echo "codigo de descuento= CODIGODESC33";
}
echo "<br>";


   echo $precio . "<br>";
   echo $tipo . "<br>";
?>
</h2>
<body>
</body>
</html>
