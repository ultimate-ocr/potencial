<?php

    $usuario = htmlspecialchars($_POST['usuario']);
    $pass = htmlspecialchars($_POST['password']);




    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            die("Error: No se pudo conectar");
        }
    $query = "SELECT pass,id_rol FROM user_profile WHERE id='7'";
    $resultado = $mysqli->query($query);
    $row = $resultado->fetch_assoc();
    if($row['pass']==$pass && $row['id_rol']=='0') header('location:../tablausuario.php');
?>