<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/8446c158db.js" crossorigin="anonymous"></script>
    <title>dash</title>
</head>
<body>
    <header>
        <div class="menuContainer"></div>
    </header>
    <div class="er">
    <h1>Bienvenido $user puedes agregar nuevos productos y visualizarlos en la tienda :)</h1>
    </div>
            <div class="buttons">
                <a class="navbar-iteml" href="productos.php">Productos</a>
                <a class="navbar-iteml" href="tienda.php">Tienda</a>
            </div>

    <script>
        $(document).ready(function () {
            $('.menuContainer').load('nav2.php');
        });
    </script>
</body>
</html>