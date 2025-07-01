<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COFFECOB | Modicar Usuario</title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>
<body>
  <div class="login-container">
  <h2>COFFECOB | Modificar</h2>
  <form action="unidadmodificacion_3.php" method="post">
        <label for="viejo">Usuario Antiguo:</label>
        <input type="text" id="viejo" name="viejo" required> <br><br>
        
        <label for="nuevo">Usuario Nuevo:</label>
        <input type="text" id="nuevo" name="nuevo" required> <br><br>
        
        <input type="submit" value="Modificar">
    </form>
              <form action="mod_reg.php" method="post">
            <td><input type="submit" value="ATRAS"></td>
        </form>
    
  </div>

</body>

</html>