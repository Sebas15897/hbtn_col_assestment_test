<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/product.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/8446c158db.js" crossorigin="anonymous"></script>
    <title>Productos</title>
</head>
<body>
    <header>
        <div class="menuContainer"></div>
    </header>

<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos existentes</h2>
        <a class="button is-success" href="agregar_producto.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto->nombre ?></td>
                        <td><?php echo $producto->descripcion ?></td>
                        <td>$<?php echo number_format($producto->precio, 2) ?></td>
                        <td>
                            <form action="eliminar_producto.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="button is-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
        $(document).ready(function () {
            $('.menuContainer').load('nav2.php');
        });
    </script>
</body>
</html>