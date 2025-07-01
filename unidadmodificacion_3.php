<?php

include("conexion3.php");

// Conexión a la base de datos
$con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");

// Seleccionar la base de datos
mysqli_select_db($con, $db) or die("Problemas al conectar con la base de datos");

// Verificar si los valores de $_POST existen y no están vacíos
if (!empty($_POST['nuevo']) && !empty($_POST['viejo'])) {
    // Sanitizar las entradas para evitar inyecciones SQL
    $nuevo = mysqli_real_escape_string($con, $_POST['nuevo']);
    $viejo = mysqli_real_escape_string($con, $_POST['viejo']);

    // Ejecutar la consulta
    $query = "UPDATE registro SET user='$nuevo' WHERE user='$viejo'";
    $result = mysqli_query($con, $query) or die("Problemas en la consulta: " . mysqli_error($con));

    // Verificar si se actualizó algún registro
    if (mysqli_affected_rows($con) > 0) {
        header("Location: UserModExito.html");//echo "Registro modificado correctamente";
    } else {
       header("Location: UserError.html"); //echo "No se encontró el registro para modificar";
    }
} else {
    header("Location: UserCamposObligatorios.html");//echo "Por favor, asegúrate de llenar los campos correctamente.";
}

// Cerrar la conexión
mysqli_close($con);

?>
