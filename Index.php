<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COFFECOB | Iniciar Sesión</title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>

<body>
  <div class="login-container">
  <h2>Iniciar Sesión</h2>
    <form action="unidad25ingreso.php" method="post">
      <label> Usuario :</label>
      <input
        type="user" id="user" name="user" placeholder="Ingrese su usuario"required >

      <label for="pw">Contraseña:</label>
      <input type="password" id="pw" name="pw" placeholder="Ingrese su contraseña" required>

      <input name="btningresar" class="btn" type="submit" value="INICIAR SESIÓN" />
    </form>

    <form action="CrearRegistro.php" method="post">
      <input name="btregistro" class="btn" type="submit" value="CREAR REGISTRO" />
    </form>
    
      <form action="menu_sinlogeo.php" method="post">
            <td><input type="submit" value="INICIO"></td>
        </form>
    
  </div>

</body>

</html>
