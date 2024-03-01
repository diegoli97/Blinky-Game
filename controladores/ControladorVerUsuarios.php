<?php

require_once("../modelos/ModeloRanking.php");

$usuario = new ModeloRanking();

$allUsuarios = $usuario->get_allUsuarios();



?>