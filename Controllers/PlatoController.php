<?php
$ROOT_PATH =dirname(__DIR__);
include_once $ROOT_PATH . '/Models/plato.php';
function obtenerplatos()
{
    $platos = index($GLOBALS['conn']);
    return $platos;
}
function obtenerplato($id)
{
    $plato = show($GLOBALS['conn'], $id);
    return $plato;
}
function eliminarplato($id)
{
    $plato = delete($GLOBALS['conn'], $id);
    echo "Plato eliminado con éxito.";
}