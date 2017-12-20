<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap-responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>


<?php
function login($usuario, $pass){
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            die("Error: No se pudo conectar");
		}
		

	$query = "SELECT * FROM user_profile WHERE dni='$usuario'";
	if (!$resultado = $mysqli->query($query)) {
    	// ¡Oh, no! La consulta falló. 
    	echo "Lo sentimos, este sitio web está experimentando problemas.";
	}

	$row = $resultado->fetch_assoc();
	echo $row['pass'];
	echo "<br>";
	echo $pass;

    if(password_verify($pass, $row['pass'])) {
	
		session_start();
		$_SESSION['id']=$row['id'];
		$_SESSION['nombre']=$row['nombre'];
		return $row['id_rol'];
	}
	else 
		return 0;
}
?>

<header id="main-header">
<div class="row-fluid">
<div class="col-lg-5">
<IMG SRC="/potencial/images/logoULPGC.jpg"  width="300px">
</div>
<br><br><br><br><br>
<div class="col-lg-6">   
</div>
<br><br>
</div>
</div>
</div>

</header>
<body>
<div id="container">
	<form id="login" name="login" method="post" class="form-horizontal" autocomplete="on">
		<label>ID de Usuario:</label><br>
	<input type="text" id="usuario" name="usuario">
		<br><br>
		
		<label>Contaseña:</label><br>
		<input name="password" type="password" id="password" required>
		<br><br>

	<input type="submit" name="Submit" value="Entrar">
	</form>
</div>

<?php
    if(isset($_POST['usuario']))
    {
		$rol = login($_POST['usuario'],$_POST['password']);
		switch ($rol) {
			case 1:
				header("location:tablausuario12am.php");
				break;
			case 2:
				header("location:tablaadmin.php");
				break;
			default:
				echo 'Su usuario es incorrecto, intente nuevamente.';
				break;
    	}
	}
?>