<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COFFECOB | Estado</title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>

<body>
  <div class="login-container">
  <h2>Estado de cuenta</h2>
  <form action="unidad20insertarenbd.php" method="post" name="form">
  <p>¿No recuerdas tu usuario?</p>
  <p>Ingresa tu nombre y te daremos informacion de tu cuenta.</p>
  <label> Nombre de usuario:</label>    
  <input type="text" name="user" required> <br />
      <br />
      <input type="submit" value="Buscar datos" />
    </form>
        <form action="menu_sinlogeo.php" method="post">
            <td><input type="submit" value="Inicio"></td>
        </form>
    
  </div>
  

</body>

</html>