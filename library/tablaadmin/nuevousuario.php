<?php
    include '../libreria.php';
    $mysqli=conectar();
    $nombre = htmlentities($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $correo = htmlspecialchars($_POST['correo']);
    $dni = htmlspecialchars($_POST['dni']);
    $pass = htmlspecialchars($_POST['pass']);
    $rol = htmlspecialchars($_POST['rol']);
    $fechaNacimiento = htmlspecialchars($_POST['fechaNacimiento']);
    $categoria = htmlspecialchars($_POST['categoria']);

    $hash=password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO user_profile (nombre, apellido, phone, email, dni, pass, id_rol, categoria, birthdate)
                                VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$dni', '$hash', '$rol', '$categoria', '$fechaNacimiento')"; 

    if (!$resultado = $mysqli->query($query)) {
        if($mysqli->errno==1062){
        echo '<script type="text/javascript"> ';
        echo 'msjerror("DNI duplicado");';
        echo 'location.href ="/potencial/tablaadmin.php";';
        echo '</script>';
        }
        exit;
        }
    else
        echo"hecho";
        header('location:/potencial/tablaadmin.php');



?>