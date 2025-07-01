<?php
include("conexion3.php");
session_start();

$key = hash('sha256', '123', true); // genera una clave de 32 bytes binarios


function encrypt($plaintext, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $encrypted = openssl_encrypt($plaintext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode($iv . $encrypted);
}


function decrypt($ciphertext, $key) {
    $data = base64_decode($ciphertext);
    $iv_length = openssl_cipher_iv_length('AES-256-CBC');
    $iv = substr($data, 0, $iv_length);
    $encrypted = substr($data, $iv_length);
return openssl_decrypt($encrypted, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}

if (
    isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pw']) && !empty($_POST['pw']) &&
    isset($_POST['pw2']) && !empty($_POST['pw2']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    $_POST['pw'] === $_POST['pw2'] 
) {
    $con = new mysqli($host, $user, $pw, $db);

    if ($con->connect_error) {
        die("Problemas al conectar al servidor: " . $con->connect_error);
    }

    $nombre = $con->real_escape_string($_POST['nombre']);
    $user = $con->real_escape_string($_POST['user']);
    $email = $con->real_escape_string($_POST['email']);
    $pw_original = $_POST['pw'];
    $pw_encriptada = encrypt($pw_original, $key);

    $checkQuery = "SELECT * FROM registro WHERE user = '$user'";
    $result = $con->query($checkQuery);

    if ($result && $result->num_rows > 0) {
        // Mostrar alerta si el usuario ya existe
          
        echo "<script>
            alert('⚠️ El nombre de usuario ya existe. Por favor intenta con otro.');
            window.history.back();
        </script>";
        
        exit();
    }

    $query = "INSERT INTO registro (nombre, user, pw, email) VALUES ('$nombre', '$user', '$pw_encriptada', '$email')";
    if ($con->query($query) === TRUE) {
        header("Location: menu.php");
    } else {
        echo "<script>
            alert('❌ Hubo un problema al insertar los datos. Intenta de nuevo.');
            window.history.back();
        </script>";
    }

    $con->close();
} else {
    echo "<script>
        alert('⚠️ Debes llenar todos los campos y las contraseñas deben coincidir.');
        window.history.back();
    </script>";
}
?>




  








