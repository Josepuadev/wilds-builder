<?php

require __DIR__ . '/../config/conexion.php';

$sql = "
CREATE TABLE IF NOT EXISTS armaduras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    parte_id INT,
    rareza INT,
    nombre VARCHAR(100),
    defensa SMALLINT,
    res_fuego TINYINT,
    res_agua TINYINT,
    res_rayo TINYINT,
    res_hielo TINYINT,
    res_draco TINYINT,

    FOREIGN KEY (parte_id) REFERENCES parte_armadura(id)
);
";

try  {
    $pdo->exec($sql);
    echo "Tabla armaduras creada correctamente";
} catch (PDOException $e) {
    die("Tabla armaduras ha fallado " . $e );
}