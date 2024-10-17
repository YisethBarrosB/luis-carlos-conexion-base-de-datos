<?php
$ROOT_PATH =dirname(__DIR__);
include_once $ROOT_PATH . './Controllers/PlatoController.php';
$plato = obtenerPlato($_GET['id']);
//var_dump($plato);
//die();
?>
<a href="<?= $ROOT_PATH .'/Views/menu.php' ?>">Ir al menú</a>
<h2>Detalle del plato</h2>
<?php if ($plato)?>
<!---imagen del plato--->
    <img src="<?= $plato['imagen']!= '' ? $plato['imagen'] :'../img/default.png' ?>" 
    alt="<?= $plato['imagen']!= '' ? $plato['nombre_plato'] : 'defaul.png'?>" style="width: 150px">
    <p>
        <b> Nombre del plato</b>: <?= $plato['nombre_plato']; ?>
    </p>
    <p>
        <b> Preparación del plato</b>:
        <?= $plato['preparacion'] ?>
    </p>
<?php else: ?>
    <h4>404 - Este plato  no EXISTE.</h4>
<?php endif;?>
