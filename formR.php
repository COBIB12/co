<?php

session_start();
if ($_SESSION['user']) {
    echo "Bienvenido " . $_SESSION['user'];
    echo "<br><a href='restringir.php'> Cerrar sesion </a>";
} else {

    echo "Debes iniciar sesión";

}