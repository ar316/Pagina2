<?php
$baseDeDatosJuego = new PDO("sqlite:" . __DIR__ . "/juego.db");
$baseDeDatosJuego->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$create = '
        CREATE TABLE IF NOT EXISTS juego (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre VARCHAR(100) NOT NULL,
            juego VARCHAR(100) NOT NULL,
            genero VARCHAR(100) NOT NULL,
            precio INTEGER NOT NULL
        )';
$baseDeDatosJuego->exec($create);
?>