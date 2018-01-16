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
include 'library/libreria.php';

function login($usuario, $pass){
    $mysqli = conectar();
		

	$query = "SELECT * FROM user_profile WHERE dni='$usuario'";
	if (!$resultado = $mysqli->query($query)) {
    	// ¡Oh, no! La consulta falló. 
    	echo "Lo sentimos, este sitio web está experimentando problemas.";
	}

	$row = $resultado->fetch_assoc();

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
<div class="col-lg-4">
  <IMG SRC="images\logoULPGC.jpg"  width="300px">
</div>
<br><br><br>
<div class="col-lg-6" id="titulotabla">   
Planificacion Académica
</div>

<br><br><br><br>

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
				echo '<div id="errorLogin">Su usuario o contraseña es incorrecto, intente nuevamente.<div>';
				break;
    	}
	}
?>