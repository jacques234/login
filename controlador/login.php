<?php
    include_once ('conn.php');
    session_start();
    if (isset($_POST['login'])) {
        

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM usuario WHERE email = :email and contrasenia = :pass";

        $statement = $conn->prepare($query);
        $statement -> bindparam(':email', $email);
        $statement -> bindparam(':pass', $pass);
        $statement -> execute();

        $numrows = $statement -> rowCount();

        
        if($numrows > 0){
            
            //establecer sesion al usuario
            $_SESSION['usuario'] = $email;
            //establecer cookie
            setcookie("usuario", $email,time()+(86400*2),"/");//la cookie expira en 2 dias

            header("Location: ../vista/inicio.php");
            exit();
        }else{
            
            header("Location: ../login.php");
        }


    }
    $conn = null;
?>