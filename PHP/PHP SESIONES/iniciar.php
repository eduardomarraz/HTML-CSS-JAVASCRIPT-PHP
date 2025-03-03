<HTML>
<BODY>
<?PHP
session_start();
$login = $_GET["login"];
$password2 = $_GET["password2"];

if( $login == $_SESSION["login"] && $password2 == $_SESSION["password"])
{
  echo "<script>alert('Exito en logearse. Redirigiendo a index.php...');</script>";
  echo "<meta http-equiv='refresh' content='3;url=index.php'>";
  echo "<h3> Exito en logearse. Redirigiendo a index.php... </h3>";
}
else
{
  echo "<script>alert('Error al intentar logearse. Redirigiendo a login.php...');</script>";
  echo "<meta http-equiv='refresh' content=3 ;url=login.php'>";
  echo "<h3> Error al intentar logearse. Redirigiendo a login.php... </h3>";
}
?>
</BODY>
</HTML>