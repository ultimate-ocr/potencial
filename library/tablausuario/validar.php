<?php

include '../../library/libreria.php';


$mysqli = conectar();
$tabla = htmlspecialchars($_POST['tabla']);
$id = htmlspecialchars($_POST['id']);

$query = "UPDATE $tabla SET lastid='0' WHERE id='$id'";
  
if ($mysqli->query($query)) {
    echo "Record deleted successfully";
    
}
else {
    echo "Error deleting recorde: " . $mysqli->error;
}

?>