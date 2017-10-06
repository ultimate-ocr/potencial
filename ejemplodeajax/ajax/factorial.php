<?php

sleep(2);

function factorial($n) { 
	if ($n < 2) { 
			return 1; 
	} else { 
			return ($n * factorial($n-1)); 
	} 
}

$num = $_POST["numFactorial"];

if ($num > 10) {
	echo "¡No me hagas pensar tanto! Prueba con un número menor que 10.";
	exit();
}

if ( !is_numeric($num) ) {
	echo "Estás intentando enredarme ¡Esto no es un número!";
	exit();
}



$factorial = factorial($num);

echo "¡Lo tengo! el factorial es... ".$factorial;

?>