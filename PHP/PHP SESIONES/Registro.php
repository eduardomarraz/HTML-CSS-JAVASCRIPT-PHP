<HTML>
<BODY>
<?PHP
session_start();
echo "<h1> Crear Cuenta</h1>";
echo "<h3><form action=\"Login.php\" method=\"GET\">";
 echo " Registro<input type= \"text\" name=\"registro\"></input>";
   echo "<br>";
   echo "Contraseña<input type= \"text\" name=\"password1\"></input>";
   echo "<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>";
echo "</form>";

echo "</h3>";
  ?>
  </BODY>
</HTML>