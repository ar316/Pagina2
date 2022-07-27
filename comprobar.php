<?php
include_once __DIR__ . "/crear_vendedor.php"; #Al incluir este script, podemos usar $baseDeDatos

$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

$resultado = $baseDeDatos->query("SELECT nombre FROM vendedor WHERE correo = '$usuario' AND contra = '$pass'");

$vendedor = $resultado->fetchAll(PDO::FETCH_OBJ);

if($vendedor){
    foreach ($vendedor as $obj)
{
    $nombre = $obj->nombre;
}
}else{
    header("Location: ./MensajeError.html");
}
?>
<!DOCTYPE html>
<html lang= 'es'>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuario validado</title>
        <link rel="shortcut icon" href="src/img/favicon.png">
        <link rel="stylesheet" href="src/estilos/generales.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="src/estilos/estilosmensaje.css">
    </head>
    <body>
    <script src="src/js/index.js"></script>
    <div class="lds-roller loader" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <header class="cabecera">
          <img class="logo" src="src/img/Logo.png" alt="logo">
            <div class="menu">   
                <a class="redireccion" href="Comprador.html">Quiero Comprar</a>
            </div>
            <div class="menu">   
                <a class="redireccion" href="Vendedor.html">Quiero Vender</a>
            </div>
        </header>
        <div id="contenedor">
            <div id="mensaje"> 
                <h1>¡Hola <?php echo $nombre ?>!</h1>
            </div>  
            <a id="redireccion" style="text-decoration: none;" href="./Comprador.html">Ya puedes disfrutar de nuestros servicios</a>              
        </div>
        <footer class="pieDePagina">
            <div class="textoFooter">
                <p>Universidad Distrital Francisco José de Caldas</p>
                <p>Laboratorio 3 - Programación Avanzada</p>
            </div>
            <a href="https://www.udistrital.edu.co/inicio"><img class="iconosFooter" src="src/img/redes.png" alt="pagina Universidad"></a>
        </footer>
    </body>
</html>