<?php

include ("conexion3.php");

$con = mysqli_connect($host, $user, $pw, $db) or die ("Problemas al conectar");

mysqli_select_db($con, $db) or die ("Problemas al conectar con la base de datos");

// Ejecutar la consulta
$result = mysqli_query($con, "UPDATE registro SET nombre='$_POST[nuevo]' WHERE nombre='$_POST[viejo]'");

// Verificar si se actualizó algún registro
if (mysqli_affected_rows($con) > 0) {
    header("Location: UserModExito.html");//echo "Registro modificado correctamente";
} else {
    header("Location: UserError.html");//echo "No se encontró el registro para modificar";
}

?>
