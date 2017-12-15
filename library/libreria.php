<script>

function msjerror(msj){
    alert(msj);
}

</script>

<?php

function conectar(){
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
return $mysqli;

}

function lanzar($query, $mysqli){
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
	$suma=0;
	while ($aux = $array->fetch_assoc())
		$suma+=$aux['ud'];
	return $suma;
	}

function mostrar_total($tabla,$estado){
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $userid=$_SESSION["id"];
    if($estado==4){
        $query = "SELECT ud FROM $tabla WHERE userid=$userid";
    } 
    else{
        $query = "SELECT ud FROM $tabla WHERE estado= $estado AND userid=$userid";
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


return sumaUAD($resultado);
}

function getmerito($tabla,$subtipo,$estado){
$mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$userid=$_SESSION["id"];
if($estado==4){
    $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla WHERE userid=$userid";
} 
else{
    $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla WHERE estado= $estado AND userid=$userid";
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

function getmerito_pendiente($tabla,$subtipo){
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $query = "SELECT titulo, subtipo, estado, infoestado, id FROM $tabla";
    
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

    function getmerito_busqueda($tabla,$subtipo){
        $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $userid=$_SESSION["id"];
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
        $query="SELECT * FROM $tabla where userid='$userid' AND lastid!=1";
        $resultado=lanzar($query, $mysqli);
        if ($resultado->fetch_assoc())
            return 1;
        else
            return 0;



    }

?>

