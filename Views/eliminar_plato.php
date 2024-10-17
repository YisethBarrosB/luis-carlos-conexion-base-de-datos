<?php
$ROOT_PATH =dirname(__DIR__);
include_once $ROOT_PATH . 'Models/conexion.php'
include_once $ROOT_PATH . 'Controllers/PlatoController.php';
$plato = delete($_GET['id']);
?>
<a href="<?= $ROOT_PATH .'/Views/menu.php' ?>">Ir al menú</a>
<?php
if ($statement->execute(['id' => $id])) {
    echo "Plato eliminado con éxito.";
} else {
    echo "Error al eliminar el plato: " . $stmt->error;
} 




