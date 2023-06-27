<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
    <form id= "login_form" action="controlador/login.php" method="post">
        <input type="email" name="email" id="inputemail" placeholder = "Ingresa tu email" required>
        <input type="password" name="password" id="inputpasswod" placeholder = "Introduce tu password" required>
        <input type="submit" value="Ingresar" name = "login">
        <a href="#">Si no estas registrado haz click aqui</a>
    </form>
</body>
</html>