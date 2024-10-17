<?php
include_once 'conexion.php';
//mostrar todos los platos
function index($conn)
{
    try {
        $sql = 'SELECT id, nombre_plato FROM platos';
        $statement = $conn->query($sql);
        $platos = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $platos;
    } catch (PDOException $e){
        echo 'Error:' . $e->getmessage();
    }
}
// mostrar  un plato
function show($conn, $id)
{
    try{
        $sql = 'SELECT nombre_plato, preparacion, imagen 
        FROM platos WHERE id = :id';
        $statement = $conn->prepare($sql);
        $statement->execute([':id' => $id]);
        $plato = $statement->fetch(PDO::FETCH_ASSOC);
        return $plato;
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
    }
}
//eliminar  un plato
function delete($conn, $id)
{
    try{
        $sql = 'DELETE nombre_plato, preparacion, imagen 
        FROM platos WHERE id = id';
        $statement = $conn->prepare($sql);
        $statement->execute(['id' => $id]);
        $plato = $statement->fetch(PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
    }
}
