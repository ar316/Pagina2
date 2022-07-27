<?php
$baseDeDatos = new PDO("sqlite:" . __DIR__ . "/vendedor.db");
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$orden = '
        CREATE TABLE IF NOT EXISTS vendedor (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre VARCHAR(100) NOT NULL,
            correo VARCHAR(100) NOT NULL,
            contra VARCHAR(100) NOT NULL,
            hashcontra VARCHAR(100) NOT NULL
        )';
$baseDeDatos->exec($orden);
?>