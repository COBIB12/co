<?php
include("conexion3.php");

// Clave ultra secreta no cambiar >:(
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

// Verificar campos enviados
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['viejo']) && !empty($_POST['viejo']) &&
    isset($_POST['nuevo']) && !empty($_POST['nuevo'])
) {
    $userr = $_POST['user'];
    $viejo = $_POST['viejo'];
    $nuevo = $_POST['nuevo'];

    // Conexión
    $con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");
    mysqli_select_db($con, $db) or die("Problemas al seleccionar la base de datos");

    // Buscar usuario
    $query = "SELECT pw FROM registro WHERE user = '$userr'";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $pw_desencriptada = decrypt($row['pw'], $key);

        if ($pw_desencriptada === $viejo) {
            // Coincide, encriptamos nueva y actualizamos
            $nuevo_encriptado = encrypt($nuevo, $key);
            $update = mysqli_query($con, "UPDATE registro SET pw = '$nuevo_encriptado' WHERE user = '$userr'");

            if ($update) {
                header("Location: UserModExito.html"); //aqui hay que poner una re direccion a una pagina de confirmacion
            } else {
                header("Location: UserError.html"); mysqli_error($con); //echo " Error al actualizar la contraseña.";
            }
        } else {
            header("Location: UserError.html"); //echo " La contraseña antigua no coincide.";
        }
    } else {
        header("Location: UserNoFound.html");//echo " Usuario no encontrado.";
    }

    mysqli_close($con);
} else {
    header("Location: UserCamposObligatorios.html"); //echo " Todos los campos son obligatorios.";
}
?>

