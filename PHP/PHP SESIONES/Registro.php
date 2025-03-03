<!DOCTYPE html>
<html>

<head>
  <title>Registro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Registro</h2>
    <?PHP
    session_start();
    echo "<h3><form action=\"Login.php\" method=\"GET\">";
    echo " Registro<input type= \"text\" name=\"registro\"></input>";
    echo "<br>";
    echo "Contraseña<input type= \"password\" name=\"password1\"></input>";
    echo "<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>";
    echo "</form>";

    echo "</h3>";
    ?>
    </form>
  </div>
</body>

</html>