<?php 
include_once './Controllers/PlatoController.php'
?>
<h2>Lista de platos</h2>
<ul>
    <?php
    $platos = obtenerplatos();
    foreach ($platos as $plato): 
    ?>
        <li>
            <?= $plato['nombre_plato']; ?>

            <div style="display: inline-block; width: 100%;" >
                <!---detalles del plato--->
                <a href="./Views/detalle_plato.php?id=<?= $plato['id']; ?>">Detalles</a>
                <!---editar plato--->
                <a href="#">Editar</a>
                <!---eliminar plato--->
                <a href="./Views/eliminar_plato.php">Eliminar</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
          
           

