<?php 

if (isset($_GET['submit'])){

    $nombreBuscado = $_GET['buscarUsuario'];

    if($nombreBuscado == "diegoli"){
        header('Location:buscarUsuarios.php');
        exit();
    }
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
                    <input type="text" placeholder="Buscar Usuario" name="buscarUsuario">
                    <button type="submit" name='submit'><i class="fa fa-search"></i></button>
                </form>
            </div>
    
    
        <div class="divTabla">
            <table>
                <thead>
                <tr>
                    <th>Nombre de usuario</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>diegoli</td>
                    <td><button class="follow">Seguir</button><button class="unfollow">Dejar de seguir</button></td>
                </tr>
                <tr>
                    <td>diegoli34</td>
                    <td><button class="follow">Seguir</button><button class="unfollow">Dejar de seguir</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        
        <a href="/index.php"><button class="botonSalida"><i class="fas fa-door-open puertaSalida"></i>Inicio</button></a>
    </body>
</html>