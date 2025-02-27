<HTML>
<BODY>
<?PHP
session_start();

if(isset($_GET["registro"]))
{
  $registro = $_GET["registro"];
  $_SESSION["login"] = $registro;
}
if(isset($_GET["password1"]))
{
  $password1 = $_GET["password1"];
  $_SESSION["password"] = $password1;
}

echo "<h1> Login</h1>";
echo "<h3><form action=\"iniciar.php\" method=\"GET\">";
 echo " Login<input type= \"text\" name=\"login\"></input>";
   echo "<br>";
   echo "Contraseña<input type= \"text\" name=\"password2\"></input>";
   echo "<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>";
echo "</form>";

echo "</h3>";
  ?>
   
  <a href="Registro.php"> VOLVER</a>
  </BODY>
</HTML>