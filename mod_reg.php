<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COFFECOB | Modificar</title>
  <link rel="stylesheet" href="StyleLogin.css" />
</head>

<body>
  <div class="login-container">
  <h2>COFFECOB</h2>
  <form action="modname.php" method="post">
  <input type="submit" value="MODIFICAR NOMBRE">
    </form>

    <form action="moduser.php" method="post">
      <input
        name="btregistro"
        class="btn"
        type="submit"
        value="MODIFICAR USUARIO" />
    </form>

  <form action="modpw.php" method="post">
      <input
        name="btregistro"
        class="btn"
        type="submit"
        value="MODIFICAR CONTRASEÑA" />
    </form>
        <form action="menu.php" method="post">
            <td><input type="submit" value="INICIO"></td>
        </form>
 
  </div>

</body>

</html>