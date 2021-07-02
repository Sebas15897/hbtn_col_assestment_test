<?php

require 'database.php';

$message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Successfully created new user';
    } else {
        $message = 'Sorry there must have been an issue creating your account';
    }
}
?>

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

    <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <section class="login">
        <form action="register.php" method="POST">
            <div class="text">
                <img src="img/carrito.png" alt="">
            <p>Registrate.</p>
            </div>
            <input class="flex-item" type="email" name="email" id="" placeholder="Ingrese su email">
            <input class="flex-item" type="password" name="" id="password" placeholder="Ingrese su correo contraseña">
            <input class="flex-item" type="password" name="" id="confirm_password" placeholder="Confirme su contraseña">
            <input class="item" type="submit" value="Registro">
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