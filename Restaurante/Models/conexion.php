<?php
$dsn = 'mysql:host=localhost;dbname=restaurante_mvc';
$username = 'root';
$password = '';
try {
   $conn = new PDO(
        $dsn, 
        $username, 
        $password
    );
   $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    echo 'Error' . $e->getmessage();
} 