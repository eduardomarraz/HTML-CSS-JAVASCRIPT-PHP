<HTML>
<BODY>
<?PHP
   session_start();
   $fruta = $_GET["producto"];
   
   // echo $fruta;
   $micesta = $_SESSION["cesta"]; // Recupero el valor de la cesta actual
   
   $micesta[] = $fruta; // Añado a ese array el producto
   
   foreach ($micesta as $elem){ // imprimo el array 
   
      echo $elem ."<br>";
   }
   // ¿??
   $_SESSION["cesta"] = $micesta;
  ?>
  
  
  <a href="lista.php"> VOLVER</a>
  </BODY>
</HTML>