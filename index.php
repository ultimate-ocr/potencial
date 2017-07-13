<?php
function login($usuario, $pass){
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            die("Error: No se pudo conectar");
        }
	$query = "SELECT id, pass, id_rol FROM user_profile WHERE id=$usuario and pass='$pass'";
	if (!$resultado = $mysqli->query($query)) {
    	// ¡Oh, no! La consulta falló. 
    	echo "Lo sentimos, este sitio web está experimentando problemas.";
	}
	$row = $resultado->fetch_assoc();
    if($row['pass']==$pass) {
		echo 'buuh';
		$_SESSION['id']=$row['id'];
		return $row['id_rol'];
	}
	else 
		return 0;
}
?>

<form id="login" name="login" method="post" class="form-horizontal" autocomplete="on">
	<label>Nombre Usuario:</label><br>
 <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
	<br><br>
	 
	<label>Contaseña:</label><br>
	<input name="password" type="password" id="password" required placeholder="contraseña">
	<br><br>

<input type="submit" name="Submit" value="LOGIN">
</form>


<?php
    if(isset($_POST['usuario']))
    {
		$rol = login($_POST['usuario'],$_POST['password']);
				
		switch ($rol) {
			case 1:
				session_start();
				$_SESSION['id'] = $_POST['usuario'];
				header("location:tablausuario.php");
				break;
			case 2:
				session_start();
				$_SESSION['id'] = $_POST['usuario'];
				header("location:tablaadmin.php");
				break;
			case 3:
				session_start();
				$_SESSION['id'] = $_POST['usuario'];
				header("location:tablaoperador.php");
				break;
			default:
				echo 'Su usuario es incorrecto, intente nuevamente.';
				break;
    	}
	}
?>