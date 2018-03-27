<?php
  include '../../library/libreria.php';

  $mysqli = conectar();
  $id = htmlspecialchars($_POST['id']);
  $tabla = htmlspecialchars($_POST['tabla']);
  $query="DELETE FROM $tabla WHERE id='$id'";
  
  if ($mysqli->query($query)) {
      echo "Record deleted successfully";
      
  }
  else {
      echo "Error deleting recorde: " . $mysqli->error;
  }
?>  