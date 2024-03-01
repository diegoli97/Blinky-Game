<?php 

require_once("../modelos/ModeloBuscarUsuarios.php");
require_once("convertirTiempo.php");

if (isset($_GET['buscar'])){

    $nombreBuscado = $_GET['buscarUsuario'];

    $usuario = new ModeloBuscarUsuarios($nombreBuscado);

    $usuariosEncontrados = $usuario->get_usuariosEncontrados();

}

if (isset($_GET['buscarDentro'])){

    $nombreBuscado = $_GET['buscarUsuarioDentro'];
    $usuario = new ModeloBuscarUsuarios($nombreBuscado);

    $usuariosEncontrados = $usuario->get_usuariosEncontrados();


}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Búsqueda de usuario</title>
        <link rel="stylesheet" href="css/buscarUsuarios.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>

       
            <div class="search-container">
                <form action="buscarUsuarios.php" method="get">
                    <input type="text" placeholder="<?= $nombreBuscado?>" name="buscarUsuarioDentro">
                    <button type="submit" name='buscarDentro'><i class="fa fa-search"></i></button>
                </form>
            </div>
    
    
        <div class="divTabla">
            <table>
                <thead>
                <tr>
                    <th>Nombre de usuario</th>
                    <th>Puntuación</th>
                </tr>
                </thead>
                <tbody>

                <?php 

                    //Imprime los usuarios encontrados
                    foreach($usuariosEncontrados as $usuario){
                        echo "<tr>";
                        echo "<td>".$usuario['NombreUsuario']."</td>";
                        echo "<td>".parsearMilisegundos($usuario['Puntuacion'])."</td>";
                        echo "</tr>";
                    }

                ?>
                </tbody>
            </table>
        </div>
        
        <a href="/index.php"><button class="botonSalida"><i class="fas fa-door-open puertaSalida"></i>Inicio</button></a>
    </body>
</html>