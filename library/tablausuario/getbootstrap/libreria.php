<?php
global $userid;
$userid=12;

function sumaUAD($array,$usuario){
	$suma=0;
	while ($aux = $array->fetch_assoc())
		$suma+=$aux['UAD'];
	return $suma;
	}

function mostrar_total($tabla,$userid){
$mysqli = new mysqli("localhost", "vrodriguez", "7672", "cv");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$userid=$userid;
$query = "SELECT groupid, UAD FROM $tabla WHERE groupid=$userid";

if (!$resultado = $mysqli->query($query)) {
	// ¡Oh, no! La consulta falló. 
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
	}
	return sumaUAD($resultado, $userid);
}
?>

