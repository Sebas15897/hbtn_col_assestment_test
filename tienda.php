<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="img/carrito.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/8446c158db.js" crossorigin="anonymous"></script>
    <title>Tienda</title>
</head>

<body>
    <header>
        <div class="menuContainer"></div>
    </header>

    <div class="banner">
            <div class="banner-text ">
                <div class="items"> 
                    <div class="buscar">
                        <h2>Busca los mejores productos aquí</h2>
                        <input class="busq" type="search" id="#" placeholder="Buscar">
                    </div>
                </div> 
            </div>
    </div>
    <?php include_once "encabezado.php" ?>
    <?php
        include_once "funciones.php";
        $productos = obtenerProductos();
    ?>

<div class="navbar-start">
                <a class="navbar-iteml" href="productos.php">Productos</a>
                <a class="navbar-iteml" href="tienda.php">Tienda</a>
            </div>
    <div class="columns">
        <div class="column">
            <h2 class="tienda">Tienda</h2>
        </div>
    </div>

    <?php foreach ($productos as $producto) { ?>
        <div class="contenedor-g">
                <div class="cards">
                    <div class="card-header">
                        <p class="card-header-title is-size-4">
                            <?php echo $producto->nombre ?>
                        </p>
                    </div>

                    <div class="card-contentt">
                        <div class="content">
                            <?php echo $producto->descripcion ?>
                        </div>
                            <h1 class="is-size-3">Precio $<?php echo number_format($producto->precio, 2) ?></h1>

                        <?php if (productoYaEstaEnCarrito($producto->id)) { ?>

                        <form action="eliminar_del_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="buttonc">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="buttonq">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>

                        <?php } else { ?>
                            <form action="agregar_al_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="buttona">
                                    <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                                </button>
                            </form>
                        <?php } ?>
                    </div>
            </div>
        </div>
<?php } ?>
<div class="footerContainer"></div>
    <script>
        $(document).ready(function () {
            $('.menuContainer').load('nav.php');
        });

        $(document).ready(function () {
            $('.footerContainer').load('footer.php');
        });
    </script>
</body>
</html>
