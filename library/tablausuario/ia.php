<?php

    $nombre = htmlspecialchars($_POST['nombre']);
    $orgfin = htmlspecialchars($_POST['orgfin']);
    $entcol = htmlspecialchars($_POST['entcol']);
    $fechaini = htmlspecialchars($_POST['fechaini']);
    $fechafin = htmlspecialchars($_POST['fechafin']);
    $subtot = htmlspecialchars($_POST['subtot']);
    $investigador = htmlspecialchars($_POST['investigador']);
    $numinv = htmlspecialchars($_POST['numinv']);
    $grupoId='0';

    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die("Error: No se pudo conectar");
}
        session_start();
        $userid=$_SESSION["id"];
        $query = "INSERT INTO ia (userid, UID, titulo, orgfin, entidades, desde, hasta, subvencion,
         invprincipal, numinv) VALUES ($userid,'5', '$nombre', '$orgfin', '$entcol', '$fechaini',
         '$fechafin', '$subtot', '$investigador', '$numinv')";



if (!$resultado = $mysqli->query($query)) {
	// ¡Oh, no! La consulta falló. 
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $query . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
	}
    header('location:/potencial/tablausuario.php');
?>
