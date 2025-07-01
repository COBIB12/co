<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COFFECOB | Modificar Contraseña</title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>
<body>
  <div class="login-container">
    <h2>COFFECOB</h2>
    <form action="unidadmodificacion_2.php" method="post">
        <label for="user">Nombre de usuario:</label>
        <input type="text" id="user" name="user" required><br><br>

        <label for="viejo">Contraseña antigua:</label>
        <input type="password" id="viejo" name="viejo" required><br><br>

        <label for="nuevo">Contraseña nueva:</label>
        <input type="password" id="nuevo" name="nuevo" required><br><br>

        <input type="submit" value="Modificar">
    </form>
     <form action="mod_reg.php" method="post">
        <td><input type="submit" value="ATRAS"></td>
      </form>
  </div>
</body>
</html>
