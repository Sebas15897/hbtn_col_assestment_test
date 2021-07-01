<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="img/carrito.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Registro</title>
</head>
<body>
    <header>
        <div class="menuContainer"></div>
    </header>
    <section class="login">
        <form action="#" method="post">
            <div class="text">
                <img src="img/carrito.png" alt="">
            <p>Registrate.</p>
            </div>
            <input class="flex-item" type="text" name="" id="" placeholder="Ingrese su nombre">
            <input class="flex-item" type="text" name="" id="" placeholder="Ingrese su apellido">
            <input class="flex-item" type="email" name="" id="" placeholder="Ingrese su correo electronico">
            <input class="flex-item" type="password" name="" id="" placeholder="Ingrese su contraseña">
            <input class="item" type="button" value="Registro">
        <a class="item-a" href="login.php">¿Ya tienes una cuenta?, Inicie sesión</a>
        </form>
    </section>
    <script>
        $(document).ready(function () {
            $('.menuContainer').load('nav.php');
        });
    </script>
</body>
</html>