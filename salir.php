<?php
session_start();
if (isset($_GET["accion"]) && $_GET["accion"] == "Salir") {
    session_unset();
    setcookie("logged_in", false, time() - 3600, "/");
    header('Location: login.php');  // Redirigir al usuario a la página de inicio de sesión
    exit();
}
?>
