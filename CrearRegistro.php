<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> COFFECOB | Registro </title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>

<body>
  <div class="login-container">
  <h2>Crear Registro</h2>
  <form action="unidad23registrar.php" method="post">
        <table width="200" border="0">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="user" required></td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="pw" required></td>
            </tr>
            <tr>
                <td>Confirmar contraseña:</td>
                <td><input type="password" name="pw2" required></td>
            </tr>
           
        </table>
         <tr>
                <td><input type="submit" value="REGISTRAR"></td>
                
            </tr>
    </form>
    <form action="Login.php" method="post">
            <td><input type="submit" value="INICIO SESEION"></td>
        </form>
    
    <form action="menu_sinlogeo.php" method="post">
            <td><input type="submit" value="INICIO"></td>
        </form>
</body>

</body>

</html>