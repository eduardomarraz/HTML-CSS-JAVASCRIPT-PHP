<?php
 
$servername = "127.0.0.1" ;
$database = "prueba";
$username= "root";
$password = "";
// Cadena de conexion a BBDD
$conn = mysqli_connect ($servername , $username , $password, $database);
 
if (!$conn){
	echo "CONEXION NO OK";	
}
 
echo "CONEXION OK";	
$id_local = $_GET["producto"];
// Creo la sentencia sql
 
$consulta = "SELECT * from tabla1 where id=".$id_local;
$resultado = mysqli_query($conn, $consulta); // Ejecuto
 
 
 
// METODO2
echo "<br>";
echo "<hr>";
print ("<form name='edit' method='GET' action='modificar.php'>");
$resultado = mysqli_query($conn, $consulta); // Ejecuto 
$i =0; 
while ($fila = mysqli_fetch_array ($resultado)){
	$i++;
	echo "Id:<input type='text' name='id' value='". $fila["id"] ."'><br>".
			"Nombre: <input type='text' name='nombre' value='". $fila["nombre"] ."'>";	
}	
print ("<input type='submit'>");
print ("</form>");
echo "<hr>";

?>
 
UPDATE (modificar.php
 
<?php
 
$servername = "127.0.0.1" ;
$database = "prueba";
$username= "root";
$password = "";
// Cadena de conexion a BBDD
$conn = mysqli_connect ($servername , $username , $password, $database);
 
if (!$conn){
	echo "CONEXION NO OK";	
}
 
echo "CONEXION OK";	
 
echo "<hr>";
$id_local = $_GET["id"];
$nombre_local = $_GET["nombre"];
// Creo el SQL	
$sentencia = "update tabla1 set nombre = '".$nombre_local."' WHERE id = ".$id_local.";"; 
echo $sentencia;
// EJECUTO SENTENCIA
mysqli_query($conn, $sentencia);
?>