<?php

require_once("../modelos/ModeloRanking.php");

$ranking = new ModeloRanking();

$rankingUsuarios = $ranking->get_rankingUsuarios();



?>