<?php
include_once __DIR__ . "/crear_vendedor.php"; #Al incluir este script, podemos usar $baseDeDatos
include_once __DIR__ . "/crear_juego.php"; #Al incluir este script, podemos usar $baseDeDatosJuego

$resultadov = $baseDeDatos->query("SELECT * FROM vendedor;");
$vendedores = $resultadov->fetchAll(PDO::FETCH_OBJ);

$resultadoj = $baseDeDatosJuego->query("SELECT * FROM juego;");
$juegos = $resultadoj->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/estilos/estilosadministrador.css">
    <link rel="stylesheet" href="src/estilos/generales.css">
    <link rel="shortcut icon" href="src/img/favicon.png" type="image/x-icon">
    <title>Administración</title>
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
        <div class="menu">   
                <a class="redireccion" href="login.html">Iniciar Sesión</a>
        </div>
        <div class="menu pestaniaActiva">   
            <a class="redireccion" href="mostrar.php">Administración</a>
        </div>
    </header>
    <div class="bajarfooter">
        <Section class="container_Admin" id='admin_Juegos' onclick="esconder('dropdown','admin_Juegos');">
            <div class="div-center">
                <h1>Administración de Juegos</h1>
            </div>
            <div class="div-center one" style="display: none;" id="dropdown">
                <p id="listaJuegos">
                    <?php foreach($juegos as $juego){ /*Notar la llave que dejamos abierta*/ ?>
                    <tr>
                        <td><?php echo $juego->nombre ?></td>
                        <td><?php echo $juego->juego ?></td>
                        <td><?php echo $juego->genero ?></td>
                        <td><?php echo $juego->precio ?></td>
                    </tr>
                    <br>
                    <?php } /*Cerrar llave, fin de foreach*/ ?>
                </p>
            </div>
        </Section>
        <Section class="container_Admin" id="admin_Prov" onclick="esconder('dropdown2', 'admin_Prov');">
            <div class="div-center">
                <h1>Administración de proveedores</h1>
            </div>
            <div class="div-center one" style="display: none;" id="dropdown2">
                <p id="listaProveedores">
                    <?php foreach($vendedores as $vendedor){ /*Notar la llave que dejamos abierta*/ ?>
                    <tr>
                        <td><?php echo $vendedor->nombre ?></td>
                        <td><?php echo $vendedor->correo ?></td>
                        <td><?php echo $vendedor->contra ?></td>
                        <td><?php echo $vendedor->hashcontra ?></td>
                    </tr>
                    <br>
                    <?php } /*Cerrar llave, fin de foreach*/ ?>
                </p>
            </div>
        </Section>
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