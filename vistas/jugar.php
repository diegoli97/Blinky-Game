
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blinky Game</title>
        <link rel="stylesheet" href="css/jugar.css">
        <!-- Link para los iconos de font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="js/jugar.js"></script>
    </head>
    <body>

        <div class="divTitulo"> 
            <h1> 01:22</h1>
        </div>

        <div class="divBoton" id="divBotonJugar">
            <button class="botonPlay" onclick="ocultarBotonJuego()"><i class="fas fa-play play-icon"></i></button>
        </div>
        <div class="zonaJuego" id="divZonaJuego">
            <button class="botonInteractuable"></button>
        </div>    

        <div class="divBotones">
            <a href="/index.php"><button class="botonesFinal"><i class="fas fa-door-open puertaSalida"></i>Inicio</button></a>
            <button class="botonesFinal" onclick="window.location.reload()"><i class="fas fa-redo"></i></button>
        </div>
    </body>
</html>