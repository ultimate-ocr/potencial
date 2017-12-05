<?php
print_r($_REQUEST);



//$userid=$_SESSION["id"];

$userid=8;


$mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die("Error: No se pudo conectar");
}
$tabla = htmlspecialchars($_POST['tabla']);
$id = htmlspecialchars($_POST['id']);
  switch ($tabla) {

    case "de":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;
    
    case "df":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;

    case "dg":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;
    
    case "dh":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;

    case "di":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;

    case "dk":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;

    case "dl":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
    break;

    case "ia":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }

        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' WHERE id='$id'";
        break;
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
        //exit;
        }
        header('location:/potencial/tablaadmin.php');
?>