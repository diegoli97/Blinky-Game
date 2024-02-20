<!-- La página principal, desde dónde se accede al resto de funciones: Jugar, Ver Usuarios, 
Buscar Usuarios, Ver Ranking y Borrar Usuario-->

<?php

if (isset($_GET['submit'])){

    $nombreBuscado = $_GET['buscarUsuario'];

    if($nombreBuscado == "diegoli"){
        header('Location:/vistas/buscarUsuarios.php');
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blinky Game</title>
        <link rel="stylesheet" href="/vistas/css/principal.css">
        <!-- Link para el icono de font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="vistas/js/principal.js"></script>
    </head>
    <body>
        <div class="topnav">


            <div style="flex-grow: 1"><a href="/vistas/ranking.php"><button class="botonRanking"> Ranking </button></a></div>

            <div style="flex-grow: 1"><a href="/vistas/verUsuarios.php"><button class="botonVerUsuarios"> Ver Usuarios </button></a></div>

            <div class="search-container" style="flex-grow: 8">
                <form action="index.php" method="get">
                    <input type="text" placeholder="Buscar Usuario" name="buscarUsuario">
                    <button type="submit" name='submit'><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>


        <div class="divBoton" id="botonJugar" onclick="cambiarDisplay()">
                <button class="botonJugar"> Jugar </button>
        </div>

        <!-- Div para la selección de dificultad -->
        <div class="divDificultad" id="selectorDificultad">
        <a href="/vistas/jugar.php"><button class="botonFacil">Fácil </button></a>
        <a href="/vistas/jugar.php"><button class="botonNormal">Normal</button></a>
        <button class="botonNormal" onclick="displayNone()">Volver</button>
        </div>

    </body>
</html>
