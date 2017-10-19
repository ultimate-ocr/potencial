<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
 
	<script>
	function enviar()
	{
		// Esta es la variable que vamos a pasar
		var miVariableJS=$("#texto").val();
 
		// Enviamos la variable de javascript a archivo.php
		$.post("archivo.php",{"texto":miVariableJS},function(respuesta){
			alert(respuesta);
		});
	}
	</script>
</head>
 
<body>
	<form>
		<input type="text" id="texto">
		<input type="button" value="Enviar variable a PHP" onclick="enviar()">
	</form>
</body>
</html>
