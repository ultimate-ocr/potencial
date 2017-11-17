<?php
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die("Error: No se pudo conectar");
    }
    $tabla = htmlspecialchars($_POST['tabla']);
    $userid=8;

    switch ($tabla){
        case 'ia':
            $nombre = htmlspecialchars($_POST['nombre']);
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entcol = htmlspecialchars($_POST['entcol']);
            $fechaini = htmlspecialchars($_POST['fechaini']);
            $fechafin = htmlspecialchars($_POST['fechafin']);
            $subtot = htmlspecialchars($_POST['subtot']);
            $investigador = htmlspecialchars($_POST['investigador']);
            $numinv = htmlspecialchars($_POST['numinv']);
    
            $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, orgfin, entidades, desde, hasta, subvencion,
            invprincipal, numinv) VALUES ($userid, $subtipo, '5', '$nombre', '$orgfin', '$entcol', '$fechaini',
            '$fechafin', '$subtot', '$investigador', '$numinv')";

            break;

        case 'ib':

        $nombre = htmlspecialchars($_POST['nombre']);
        $cargo = htmlspecialchars($_POST['cargo']);

        $query = "INSERT INTO $tabla (userid, UD, titulo, cargo) VALUES ($userid,'5', '$nombre', '$cargo')";

        break;

        case 'ic':

        $nombre = htmlspecialchars($_POST['nombre']);
        $ud = 4;
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $fechapub = htmlspecialchars($_POST['fechapub']);
        $autores = htmlspecialchars($_POST['autores']);
        $revista = htmlspecialchars($_POST['revista']);
        $ISBN = htmlspecialchars($_POST['ISBN']);
        $clave = htmlspecialchars($_POST['clave']);
        $volumen = htmlspecialchars($_POST['volumen']);
        $impacto = htmlspecialchars($_POST['impacto']);
        $citas = htmlspecialchars($_POST['citas']);
        $acta = htmlspecialchars($_POST['editorial']);
        $lugar = htmlspecialchars($_POST['lugar']);

        $query = "INSERT INTO $tabla (userid, UD, titulo, cargo) VALUES ($userid,'5', '$nombre', '$cargo')";
        break;

        case 'id':

        case 'ie':

        case 'iff':

        case 'ig':

        case 'ih':

        case 'ii':

        case 'ij':

        case 'ik':

        case 'im':

        case 'inn':

        case 'innn':

        case 'io':

        default:
            echo "ha fallado la inserción, pruebe de nuevo";
    //fin del switch.
        }

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
    header('location:/potencial/tablausuario9a.php');





?>
