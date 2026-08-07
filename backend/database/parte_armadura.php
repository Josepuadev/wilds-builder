<?php

require __DIR__ . '/../config/conexion.php';

$sql = "
CREATE TABLE IF NOT EXISTS parte_armadura (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL
);
";

try  {
    $pdo->exec($sql);
    echo "Tabla armaduras creada correctamente";
} catch (PDOException $e) {
    die("Tabla armaduras ha fallado " . $e );
}