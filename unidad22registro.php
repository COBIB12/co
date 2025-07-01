<?php
//Borrar registro

include("conexion3.php");
 
// Establecer conexión con la base de datos
$con = mysqli_connect($host, $user, $pw) or die("Problemas al conectar con el servidor");

// Seleccionar la base de datos
mysqli_select_db($con, $db) or die("Problemas al seleccionar la base de datos");

// Realizar la consulta para verificar si el registro existe
$reg = mysqli_query($con, "SELECT id FROM registro WHERE user = '$_POST[user]'") or die("Problemas en la consulta SELECT");

if ($re = mysqli_fetch_array($reg)) {


//guardar los usuarios guardados 

    include("conexion3.php");

if( isset($_POST['user']) && !empty($_POST['user'])){

    $con = new mysqli($host, $user, $pw, $db);
    if ($con->connect_error) {
        die("problemas al conectar con la bd: " . $con->connect_error);
    }
    $user = $_POST['user'];
  
    
    $checkQuery = "SELECT * FROM borrar WHERE user = '$user'";
    $result = $con->query($checkQuery);

    $query = "INSERT INTO borrar (user) VALUES ('$user')";
    
    if($con->query($query) === TRUE) {
        echo "Location: menu.php";
    } 
}



    // Eliminar el registro si existe
    mysqli_query($con, "DELETE FROM registro WHERE user = '$_POST[user]'") or die("Problemas al eliminar el registro");
    header("Location: UserBorrado.html");//echo "Registro eliminado";
} else {
    header("Location: UserNoRegistrado.html ");//echo "El nombre no existe";
}
?>
