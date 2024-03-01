<?php
//Convierte a formato legible la puntuación de milisegundos
function parsearMilisegundos($puntuacionObtenida){
    $puntuacionImpresa ="";

    $milisegundos = strval($puntuacionObtenida % 1000);
    $puntuacionObtenida = floor($puntuacionObtenida / 1000);

    $segundos = strval($puntuacionObtenida % 60);
    $puntuacionObtenida = floor($puntuacionObtenida / 60);

    $minutos = strval($puntuacionObtenida % 60);

    $puntuacionImpresa = str_pad($minutos,2,"0",STR_PAD_LEFT).":".str_pad($segundos,2,"0",STR_PAD_LEFT).".".str_pad($milisegundos,3,"0",STR_PAD_LEFT);
    return $puntuacionImpresa;
}

?>