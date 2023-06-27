<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
 
    try {
            $conn = new PDO("mysql:host=$servidor;dbname=login", $usuario, $password);      
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión realizada Satisfactoriamente";
        }
    
    catch(PDOException $e)
        {
        echo "La conexión ha fallado: " . $e->getMessage();
        }
    
    $conexion = null;

?>