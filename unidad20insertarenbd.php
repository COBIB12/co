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
      <h2>COFFECOB</h2>

      <div style="display: flex; justify-content: center; align-items: center;">
  <form method="post">

<?php

include("conexion3.php");
// Clave ultra secreta no cambiar >:(
$key = hash('sha256', '123', true); // genera una clave de 32 bytes binarios

// Función para desencriptar
function decrypt($ciphertext, $key) {
    $data = base64_decode($ciphertext);
    $iv_length = openssl_cipher_iv_length('AES-256-CBC');
    $iv = substr($data, 0, $iv_length);
    $encrypted = substr($data, $iv_length);
return openssl_decrypt($encrypted, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}

// Conexión
$con = new mysqli($host, $user, $pw, $db);
if ($con->connect_error) {
    die(" Error al conectar con el servidor: " . $con->connect_error);
}

$user = $con->real_escape_string($_POST['user']);

$registro = $con->query("SELECT * FROM registro WHERE user = '$user'");
if (!$registro) {
    die(" Error en la consulta: " . $con->error);
}

if ($registro->num_rows > 0) {
    while ($row = $registro->fetch_assoc()) {
        $pw_desencriptada = decrypt($row['pw'], $key);

        echo "Datos de la cuenta <br> <br>";
        echo "Nombre: " . htmlspecialchars($row['nombre']) . "<br>";
        echo "Usuario: " . htmlspecialchars($row['user']) . "<br>";
        echo "Correo: " . htmlspecialchars($row['email']) . "<br>";
        echo "Contraseña : " . htmlspecialchars($pw_desencriptada) . "<br>";
    }
} else {
    header("Location: UserStatusNoFound.html");//echo " El nombre de usuario no existe};
}

$con->close();
?>

<br>
</form>
</div>
      <form action="menu_sinlogeo.php" method="post">
        <td><input type="submit" value="Inicio" /></td>
      </form>
    </div>
  </body>
</html>



