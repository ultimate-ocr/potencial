<?php
include '../libreria.php';

$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$phone = htmlspecialchars($_POST['phone']);
$birthdate = htmlspecialchars($_POST['birthdate']);
$email = htmlspecialchars($_POST['email']);
$id = htmlspecialchars($_POST['usuario']);

$query = "UPDATE user_profile SET nombre='$nombre', apellido='$apellido', phone='$phone', birthdate='$birthdate', email='$email' WHERE id='$id'";
$mysqli=conectar();
lanzar($query, $mysqli);

header('location:/potencial/tablaadmin.php');

?>