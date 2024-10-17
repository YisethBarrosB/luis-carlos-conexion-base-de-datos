<?php
require_once 'Controllers/PlatoController.php';
require_once 'Models/Plato.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante MVC</title>
</head>

<body>
    <h1 style="text-align: center;">Restaurante MVC</h1>
    <div style="text-align: center;">
        <h2>Menú</h2>
        <?php include 'Views/menu.php';?>
    </div>

</body>

</html>