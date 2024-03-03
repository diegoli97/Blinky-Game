<?php

require_once("../modelos/ModeloRanking.php");
require_once("../vistas/convertirTiempo.php");

$ranking = new ModeloRanking();

$rankingUsuarios = $ranking->get_rankingUsuarios();

require_once("../vistas/ranking.php")

?>