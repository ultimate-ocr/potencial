<script>

function msjerror(msj){
    alert(msj);
}

</script>

<?php

function goback($url){
    echo '<script type="text/javascript"> 
            window.location="'.$url.'"; 
          </script>';
    session_start();
    session_destroy();
          return 0;
  }

function conectar(){
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die("Error: No se pudo conectar");
    }
return $mysqli;

}

function lanzar($query, $mysqli){
    if (!$resultado = mysqli_query($mysqli,$query)) {
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
    return $resultado;
}

function subirArchivo($tabla){
    $ruta="archivos/";
    $ruta = $ruta . $tabla . $_SESSION['id'] . basename( $_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], $ruta)){
        echo "El archivo ". basename( $_FILES['file']['name']). " ha sido subido";
        }
    else{
        echo '<script type="text/javascript">';
        echo 'msjerror("No se ha podido subir el archivo. (Recuerde, máximo 2MB)")';
        echo '</script>';
        $ruta="";
    }
    return $ruta;
}

function buscarUsuario($dni){
    $mysqli=conectar();
    $query = "SELECT id FROM user_profile WHERE dni='$dni'";
    $resultado=lanzar($query,$mysqli);
    $aux=$resultado->fetch_assoc();
    return $aux['id'];



}
function sumaUAD($array){

	}

function mostrar_total($tabla,$estado){
    $mysqli = conectar();
    $userid=$_SESSION["id"];
    if($estado==4){
        $query = "SELECT ud FROM $tabla WHERE userid=$userid AND estado=1";
    } 
    else{
        $query = "SELECT ud FROM $tabla WHERE estado= $estado AND userid=$userid";
    }
    $resultado = lanzar($query,$mysqli);

	$suma=0;
	while ($aux = $resultado->fetch_assoc())
        $suma+=$aux['ud'];
    switch($tabla){
        case 'da':
            $_SESSION['da']=$suma;
            $_SESSION['totalDocencia']+=$suma;
            break;
        case 'db':
            $_SESSION['db']=$suma;
            $_SESSION['totalDocencia']+=$suma;
            break;
        case 'dc':
            $_SESSION['dc']=$suma;
            $_SESSION['totalDocencia']+=$suma;
            break;
        default:
            if(($tabla=='dd')||($tabla=='de')||($tabla=='dff')||($tabla=='dg')||($tabla=='dh')||($tabla=='di')||($tabla=='dj')||($tabla=='dk')||($tabla=='dl'))
                $_SESSION['totalDocencia']+=$suma;
            elseif (($tabla=='ga')||($tabla=='gb')||($tabla=='gc')||($tabla=='gd')||($tabla=='ge')||($tabla=='gff')||($tabla=='gg')||($tabla=='gh')||($tabla=='gi'))
                $_SESSION['totalGestion']+=$suma;
            else
                $_SESSION['totalInv']+=$suma;
            break;
    }
	return $suma;
}

function getmerito($tabla,$subtipo,$estado){
$mysqli = conectar();
$userid=$_SESSION["id"];
if($estado==4){
    $query = "SELECT titulo, subtipo, estado, infoestado, id, lastid FROM $tabla WHERE userid=$userid";
} 
else{
    $query = "SELECT titulo, subtipo, estado, infoestado, id, lastid FROM $tabla WHERE estado= $estado AND userid=$userid";
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
return $resultado;
}

function getmerito_admin($tabla,$subtipo,$estado){
    $mysqli = conectar();
    $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla";
    
    if($estado==4){
        $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla";
    } 
    else{
        $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla WHERE estado= $estado";
    }


    $resultado = lanzar($query,$mysqli);
    return $resultado;
    }

    function getmerito_busqueda($tabla,$subtipo){
        $mysqli = conectar();
        $userid=$_SESSION["idbusqueda"];
        $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla WHERE userid='$userid'";
        
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
        return $resultado;
        }

    function actualizado($tabla, $userid){
        $mysqli=conectar();
        $query="SELECT lastid FROM $tabla where userid='$userid' AND lastid!=1 AND lastid!=0";
        $resultado=lanzar($query, $mysqli);
        if ($resultado->fetch_assoc())
            return 1;
        else
            return 0;



    }

?>

