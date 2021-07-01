<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="img/carrito.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Login</title>
</head>
<body>
    <header>
        <div class="menuContainer"></div>
    </header>
    <section class="login">
        <form action="#" method="post">
            <div class="text">
                <img src="img/carrito.png" alt="">
            <p>Bienvenido.</p>
            </div>
            <input class="flex-item" type="email" placeholder="Ingrese su correo electronico">
            <input class="flex-item" type="password" placeholder="Ingrese su contraseña">
            <input class="item" type="button" value="Inicio">
            <a class="item-a" href="register.php">¿No tienes cuenta?, registrate</a>
        </form>
    </section>
    <script>
        $(document).ready(function () {
            $('.menuContainer').load('nav.php');
        });
    </script>
</body>
</html>