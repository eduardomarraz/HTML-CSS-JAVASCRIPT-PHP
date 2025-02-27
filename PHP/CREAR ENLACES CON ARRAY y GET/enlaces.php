<HTML>
<script>
</script>
<BODY>
LISTA COMPRA <br>
 

<!-- CREAR ENLACES CON ARRAY y GET -->
<?php
$frutas = ["manzana", "plátano", "naranja","tomate","solomillo"];
// SOLUCION 1
foreach ($frutas as $fruta) {
	// echo $frutas ."<br>";
    print(" $fruta : <a href=\"http://localhost/cesta1/dos.php?nombre=$fruta\">$fruta</a><br>");
 
	}
?>
</body>
<html>