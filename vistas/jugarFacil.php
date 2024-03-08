<?php

session_start();
require_once("../controladores/ControladorJugar.php");


//Si el usuario tiene iniciada la sesión al darle al botón de enviar puntuación esta pasará al setter de ModeloJugar
if (isset($_POST['submitOculto'])){

    $puntuacionMilisegundos = $_POST['puntuacionOculta'];
    $puntuacionImpresa = $_POST['puntuacionOcultaImpresa'];

    $juego->set_puntuacion($puntuacionMilisegundos);

}else{

        $puntuacionImpresa = "00:05.000";
    
    
}


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juego fácil</title>
        <link rel="stylesheet" href="css/jugar.css">
        <!-- Link para los iconos de font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Link para el archivo de Javascript, defer para cargarlo después de que cargue la página-->
        <script src="js/jugarFacil.js" defer></script>
    </head>
    <body>

        <div class="divTitulo"> 
            <h1 id="timer"> <?php echo "$puntuacionImpresa" ?></h1>
        </div>

        <div class="divBoton" id="divBotonJugar">
            <button class="botonPlay" onclick="iniciarJuego()"><i class="fas fa-play play-icon"></i></button>
        </div>
        <div class="zonaJuego" id="divZonaJuego">
            <button class="neutra" id="boton0" onclick="botonPresionado(this.id)"></button>
            <button class="neutra" id="boton1" onclick="botonPresionado(this.id)"></button>
        </div>    

        <div class="divBotones">
            <a href="/index.php"><button class="botonesFinal"><i class="fas fa-door-open puertaSalida"></i>Inicio</button></a>
            <button class="botonesFinal" onclick="window.location.reload()"><i class="fas fa-redo"></i></button>
        </div>
        <!-- formulario oculto que aparece al terminar la partida al que javascript mandará la puntuación para que php pueda recogerla -->
        <div id="formularioOculto">
            <form action="jugarFacil.php" method="post">
                <input type="hidden" name="puntuacionOculta" id="puntuacionOculta" value=""></input>
                <input type="hidden" name="puntuacionOcultaImpresa" id="puntuacionOcultaImpresa" value=""></input>
                <button type="submit" name="submitOculto" id="submitOculto">Enviar puntuación</input>
            </form>
        </div>
    </body>
</html>