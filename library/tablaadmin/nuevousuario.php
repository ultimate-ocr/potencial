<?php
    include '../libreria.php';
    $mysqli=conectar();
   
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $correo = htmlspecialchars($_POST['correo']);
    $dni = htmlspecialchars($_POST['dni']);
    $pass = htmlspecialchars($_POST['pass']);
    $rol = htmlspecialchars($_POST['rol']);
    $fechaNacimiento = htmlspecialchars($_POST['fechaNacimiento']);
    $categoria = htmlspecialchars($_POST['categoria']);

    $hash=password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO user_profile (nombre, apellido, phone, email, dni, pass, id_rol, categoria birthdate)
                                VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$dni', '$hash', '$rol', '$categoria', '$fechaNacimiento')"; 

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
    else
        echo"hecho";
        header('location:/potencial/tablaadmin.php');



?>