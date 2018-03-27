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
//funcion para comprobar par usuario/contraseña
function login($usuario, $pass){
	//conecta con la base de datos
    $mysqli = conectar();
		
	$query = "SELECT * FROM user_profile WHERE dni='$usuario'";
	if (!$resultado = $mysqli->query($query)) {
		// ¡Oh, no! La consulta falló. 
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		exit;
	}

	$row = $resultado->fetch_assoc();
//funcion interna PHP para comprobación de contraseña
    if(password_verify($pass, $row['pass'])) {
	
		session_start();
		$_SESSION['id']=$row['id'];
		$_SESSION['nombre']=$row['nombre'];
		$_SESSION['rol']=$row['id_rol'];
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
	<input type="text" id="usuario" name="usuario" required>
		<br><br>
		
		<label>Contaseña:</label><br>
		<input name="password" type="password" id="password">
		<br><br>

	<input type="submit" name="Submit" value="Entrar">
	</form>
</div>

<?php
    if(isset($_POST['usuario']))
    {
		$rol = login($_POST['usuario'],$_POST['password']);
		//redirige en función de qué usuario se halla logueado
		switch ($rol) {
			case 1:
				header("Location: tablausuario12am.php");
				break;
			case 2:
				header("Location: tablaadmin.php");
				break;
			default:
				echo '<div id="errorLogin">Su usuario o contraseña es incorrecto, intente nuevamente.<div>';
				break;
    	}
	}
?>