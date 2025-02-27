<HTML>
<BODY>
<?PHP
session_start();
   $login = $_GET["login"];
   $password2 = $_GET["password2"];

if( $login == $_SESSION["login"] && $password2 == $_SESSION["password"])
{
  echo "EXito en logearse";  
}

  echo "</h3> <a href=\"Registro.php\"> Registro</a> <br> <a href=\"Login.php\"> Login</a>";
  ?>
  </BODY>
</HTML>