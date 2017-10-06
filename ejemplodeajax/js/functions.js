jQuery(document).ready(function(){
	
	jQuery("#calc").click(function(){		
		//cogemos el valor del input
		var num = jQuery("#numero").val();
		
		if( num == "" ){
			alert("Dame un número :)");
			return;
		}

		var id = 1;
		var tabla = 'id';
		
		//creamos array de parámetros que mandaremos por POST
		var params = {
			"id" : id,
			"tabla" : tabla
		};
				
		//llamada al fichero PHP con AJAX
		$.ajax({
			data:  params,
			url:   'http://localhost/potencial/library/tablausuario/delete.php',
			dataType: 'html',
			type:  'post',
			beforeSend: function () {
				//mostramos gif "cargando"
				jQuery('#loading_spinner').show();
				//antes de enviar la petición al fichero PHP, mostramos mensaje
				jQuery("#resultado").html("Déjame pensar un jjjjpoco...");
			},
			success:  function (response) {
				//escondemos gif
				jQuery('#loading_spinner').hide();
				//mostramos salida del PHP
				jQuery("#resultado").html(response);
				
			},
			error : function() {
				alert('Disculpe, existió un problema');
			}
		});
	
		
	});
		
	
});