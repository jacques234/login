<?php
  session_start();

  $usuarioSesion = $_SESSION['usuario'];
  $usuarioCookie = $_COOKIE['usuario'];


  echo "Bienvenido, $usuarioSesion";

// También puedes utilizar la información de la cookie si lo deseas
  echo "Bienvenido, $usuarioCookie";
?>
<a href="../controlador/logout.php">Cerrar Sesion</a>