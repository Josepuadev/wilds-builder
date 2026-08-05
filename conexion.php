<?php

require 'config.php';

$host = "localhost";
$dbname = "wilds";
$user = "wilds";
$pass = $dbPassword;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "COnexcion realizada correctamente";
} catch (PDOException $excepcion) {
    die("Cagada de conexion bro: " . $excepcion->getMessage());
}


