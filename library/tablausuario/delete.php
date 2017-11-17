<?php
/*
$id = htmlspecialchars($_POST['id']);
$tabla = htmlspecialchars($_POST['tabla']);
echo $tabla.$id;
*/
//echo"llegué";
//return;


  $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
  session_start();
  $userid=$_SESSION["id"];
  $userid=8;
  //echo $_POST['id'];
  $id = htmlspecialchars($_POST['id']);
  $tabla = htmlspecialchars($_POST['tabla']);
  $query="DELETE FROM $tabla WHERE userid='$userid' AND id='$id'";
  echo $query;
  
  if ($mysqli->query($query) === TRUE) {
      echo "Recorde deleted successfully";
      
  }
  else {
      echo "Error deleting recorde: " . $mysqli->error;
  }

  header('location:/potencial/tablausuario9a.php');
?>  