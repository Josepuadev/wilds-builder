<?php 

require __DIR__ . '/../config/conexion.php';

$sql = "
CREATE TABLE IF NOT EXISTS lagarto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

$pdo->exec($sql);

echo "Tabla creada correctamente";