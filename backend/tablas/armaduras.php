<?php

require __DIR__ . '/../config/conexion.php';

$sql = "
CREATE TABLE IF NOT EXISTS armaduras (
    id
    parte
    rareza
    nombre
    nivel
    defensa
    resFuego
    resAgua
    resRayo
    resHielo
    resDraco
);
";