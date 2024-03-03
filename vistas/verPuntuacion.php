
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Puntuación</title>
        <link rel="stylesheet" href="../vistas/css/verPuntuacion.css">
        <!-- Link para los iconos de font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>

        <div class="divTitulo"> 
            <h1> Puntuación y posición </h1>
        </div>
        

        <div class="divTabla">

            <table>
                <thead>
                <tr>
                    <th>Posición</th>
                    <th>Nombre de usuario</th>
                    <th>Puntuación</th>
                </tr>
                </thead>
                <tbody>
                <?php 

                    $posicion=0;
                    //Imprime el usuario conseguidos a través del query de ModeloRanking
                    foreach($allUsuarios as $usuario){
                        $posicion++;
                        
                        if($usuario['NombreUsuario']==$_SESSION['nombre']){
                            if($usuario['Puntuacion']==0){$posicion="No registrada";}
                        
                        echo "<tr>";
                        echo "<td>".$posicion.".</td>";
                        echo "<td>".$usuario['NombreUsuario']."</td>";
                        echo "<td>".parsearMilisegundos($usuario['Puntuacion'])."</td>";
                        echo "</tr>";
                        break;
                    }
                    }

                ?>
                </tbody>
            </table>

        </div>
        
        <a href="/index.php"><button class="botonSalida"><i class="fas fa-door-open puertaSalida"></i>Inicio</button></a>
    </body>
</html>