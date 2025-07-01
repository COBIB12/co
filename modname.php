<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COFFECOB | Modicar Nombre</title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>

<body>
  <div class="login-container">
  <h2>COFFECOB</h2>
  <form action="unidadmodificacion.php" method="post">
        <label for="viejo">Nombre actual:</label>
        <input type="text" id="viejo" name="viejo" required> <br><br>
        
        <label for="nuevo">Nombre nuevo:</label>
        <input type="text" id="nuevo" name="nuevo" required> <br><br>
        
        <input type="submit" value="MODIFICAR">
    </form>
          <form action="mod_reg.php" method="post">
            <td><input type="submit" value="ATRAS"></td>
        </form>
  </div>

</body>

</html>