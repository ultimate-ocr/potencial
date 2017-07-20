<?php
    $fichero = file('titulos.txt');
    $fichero[0] = substr($fichero[0], 3);
    $linea=$fichero[0];
    echo $linea;
?>