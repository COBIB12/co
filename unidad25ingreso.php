<?php
session_start();
include("conexion3.php");

// Clave ultra secreta no cambiar >:(
$key = hash('sha256', '123', true); // genera una clave de 32 bytes binarios


// Desencriptars contraseña guardada en la base de datos
function decrypt($ciphertext, $key) {
    $data = base64_decode($ciphertext);
    $iv_length = openssl_cipher_iv_length('AES-256-CBC');
    $iv = substr($data, 0, $iv_length);
    $encrypted = substr($data, $iv_length);
return openssl_decrypt($encrypted, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}

// Verificar campos
if (isset($_POST['user']) && isset($_POST['pw']) && !empty($_POST['user']) && !empty($_POST['pw'])) {
    $con = new mysqli($host, $user, $pw, $db);
    if ($con->connect_error) {
        die("Error de conexión: " . $con->connect_error);
    }

    // Consulta preparada para evitar inyecciones SQL
    $stmt = $con->prepare("SELECT user, pw FROM registro WHERE user = ?");
    $stmt->bind_param("s", $_POST['user']);
    $stmt->execute();
    $result = $stmt->get_result();
    $sesion = $result->fetch_assoc();

    if ($sesion) {
        $pwIngresada = $_POST['pw'];
        $pwDesencriptada = decrypt($sesion['pw'], $key);

        if ($pwIngresada === $pwDesencriptada) {
            $_SESSION['xuser'] = $sesion['user'];
            header("Location: menu.php");
            exit();
        } else {
            header("Location: UserContraseñaIncorrecta.html");//echo " Contraseña incorrecta";
        }   
    } else {
        header("Location: UserNoFound_InicioSesion.html");//echo " Usuario no encontrado";
    }

    $stmt->close();
    $con->close();
} else {
    echo " Debes llenar los dos campos";
}


?>

