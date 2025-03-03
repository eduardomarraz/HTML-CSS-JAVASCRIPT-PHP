<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
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

    .volver {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      font-size: 14px;
      border: none;
      border-radius: 4px;
      text-decoration: none;
      cursor: pointer;
      margin-top: 10px;
    }

    .volver:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
    session_start();

    if (isset($_GET["registro"])) {
      $registro = $_GET["registro"];
      $_SESSION["login"] = $registro;
    }
    if (isset($_GET["password1"])) {
      $password1 = $_GET["password1"];
      $_SESSION["password"] = $password1;
    }

    echo "<h2>Login</h2>";
    echo "<form action=\"iniciar.php\" method=\"GET\">";
    echo "<label for=\"login\">Login:</label>";
    echo "<input type=\"text\" id=\"login\" name=\"login\" required>";
    echo "<label for=\"password2\">Password:</label>";
    echo "<input type=\"password\" id=\"password2\" name=\"password2\" required>";
    echo "<input type=\"submit\" value=\"Iniciar Sesión\">";
    echo "<br>";
    echo "<a href=\"Registro.php\" class=\"volver\">Volver a Registro</a>";
    echo "</form>";
    ?>
  </div>

</body>

</html>