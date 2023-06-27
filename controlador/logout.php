<?php
    // Iniciar la sesión
session_start();

// Eliminar la variable de sesión del usuario
unset($_SESSION['usuario']);

// Destruir la sesión
session_destroy();

// Eliminar la cookie del usuario
setcookie("usuario", "", time() - 3600, "/"); // Establecer una fecha de expiración pasada para eliminar la cookie

// Redireccionar al usuario a la página de inicio de sesión o a otra página
header("Location: ../index.php");
exit(); // Asegurar que no se ejecute más código después de la redirección
?>