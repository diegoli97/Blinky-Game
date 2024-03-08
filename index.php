<!-- La página principal, desde dónde se accede al resto de funciones: Jugar, Ver Usuarios, 
Buscar Usuarios, Ver Ranking y Borrar Usuario-->

<?php

$usuarioIniciado = false;
$nombreUsuario="Registrarse";

session_start();

//Si el inicio de sesión ha sido exitoso el botón jugar ya no pedirá Login y además se mostrará un botón de cierre de sesión
if(isset($_SESSION['nombre'])){
    
    $usuarioIniciado =true;
    $nombreUsuario= $_SESSION['nombre'];

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script type="text/javascript" defer>
             var botonDesplegado = "<?php echo $usuarioIniciado; ?>";
        </script>
        <script src="vistas/js/principal.js" defer></script>
    </head>
    <body>
        <div class="topnav">

            <div><a href="../controladores/ControladorRanking.php"><button class="botonesMenu"> Ranking </button></a></div>

            <div><a href="../controladores/ControladorVerPuntuacion.php"><button class="botonesMenu"> Ver puntuación </button></a></div>

            <div class="search-container">
                <form action="controladores/ControladorBuscarUsuarios.php" method="get">
                    <input type="text" placeholder="Buscar Usuario" name="buscarUsuario">
                    <button type="submit" name='buscar'><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div>
                <button id="nombreUsuario" onclick="irRegistro(<?=$usuarioIniciado?>)"><?=$nombreUsuario?></button>
            </div>
            <div>
                <button id="loginLogout" class="botonesMenu" onclick="displayBoton(<?=$usuarioIniciado?>)"> Iniciar Sesión </button>
            </div>
            
            <?php
                //Muestra el botón de eliminar usuario en función de si hay sesión iniciada o no
                if($usuarioIniciado){
                    echo "<div>
                    <button id='botonBorrarUsuario' onclick=\"location.href='vistas/borrarUsuario.php';\">Borrar Usuario</button>
                    </div>";
                }
            ?>
            

        </div>


        <div class="divBoton" id="botonJugar">
            <!--Comprueba que el usuario esté iniciado: Si lo está ofrece las opciones para jugar, si no lo está lleva a login.php-->
                <button class="botonJugar" onclick="cambiarDisplay(<?=$usuarioIniciado?>)"> Jugar </button>
        </div>

        <!-- Div para la selección de dificultad -->
        <div class="divDificultad" id="selectorDificultad">
        <a href="/vistas/jugarFacil.php"><button class="botonFacil">Fácil </button></a>
        <a href="/vistas/jugarNormal.php"><button class="botonNormal">Normal</button></a>
        <button class="botonNormal" onclick="displayNone()">Volver</button>
        </div>

    </body>
</html>
