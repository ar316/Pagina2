<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contra = $_POST["contra"];
$hashcontra = $_POST["hashcontra"];
$juego = $_POST["juego"];
$genero = $_POST["genero"];
$precio = $_POST["precio"];

if (empty($_POST["nombre"])) {
	header("Location: ./MensajeError.html");
}
if (empty($_POST["correo"])) {
	header("Location: ./MensajeError.html");
}
if (empty($_POST["contra"])) {
	header("Location: ./MensajeError.html");
}
if (empty($_POST["juego"])) {
	header("Location: ./MensajeError.html");
}
if (empty($_POST["genero"])) {
	header("Location: ./MensajeError.html");
}
if (empty($_POST["precio"])) {
	header("Location: ./MensajeError.html");
}
#Si llegamos hasta aquí es porque los datos al menos están definidos
include_once __DIR__ . "/crear_vendedor.php"; #Al incluir este script, podemos usar $baseDeDatos
include_once __DIR__ . "/crear_juego.php"; #Al incluir este script, podemos usar $baseDeDatosJuego


# creamos una variable que tendrá la sentencia para los vendedores

$sentenciav = $baseDeDatos->prepare("INSERT INTO vendedor(nombre, correo,contra,hashcontra) VALUES (:nombre, :correo,:contra,:hashcontra);");

        $sentenciav->bindParam(':nombre', $nombre);
		$sentenciav->bindParam(':correo', $correo);
		$sentenciav->bindParam(':contra', $contra);
		$sentenciav->bindParam(':hashcontra', $hashcontra);
        $resultadov = $sentenciav->execute();

# creamos una variable que tendrá la sentencia para los juegos

$sentenciaj = $baseDeDatosJuego->prepare("INSERT INTO juego(nombre, juego, genero, precio) VALUES (:nombre, :juego, :genero, :precio);");

        $sentenciaj->bindParam(':nombre', $nombre);
		$sentenciaj->bindParam(':juego', $juego);
		$sentenciaj->bindParam(':genero', $genero);
		$sentenciaj->bindParam(':precio', $precio);
        $resultadoj = $sentenciaj->execute();

# Debemos pasar a bindParam las variables, no podemos pasar el dato directamente
# debido a que la llamada es por referencia
if($resultadov and $resultadoj === true){
	header("Location: ./Mensaje.html");
}else{
	header("Location: ./MensajeError.html");
}
?>