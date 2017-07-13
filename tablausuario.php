<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="getbootstrap/bootstrap.css"	rel="stylesheet">
<link href="getbootstrap/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>

<?php
session_start();
$userid=$_SESSION["id"];
/////////////////////////////////////////
?>

	<div class="container-fluid">
		

		<h1 id=titulo>Planificaci&oacuten Acad&eacutemica</h1>
		<div id="table-responsive">
			<div class="row-fluid">
				<div class="span8">CONCEPTO</div>
				<div class="span1">UAD</div>
			</div>
			<div class="row-fluid">
				<div class="accordion-toggle" data-toggle="collapse"
					data-target="#collapseA">
					<div class="span8">A.Dirección y ejecución de pryectos de ingestigación</div>
					<div class="span1"><?php include 'library/libreria.php'; echo mostrar_total('ia');?></div> </div>
					<div class="offset10">
					<button style="color:blue; background-color: #ffffff;border: #ffffff" data-toggle="modal" data-target="#newia"> <i class="material-icons">add</i></button>
                      </button>
                </div>
			</div>


			<div id="collapseA" class="row-fluid collapse out">
				<div class="span5 offset1">A.1 Proyectos de convocatoria pública y competitiva concedidos a la ULPGC</div>
				
			<?php
			//desde aqui
			$resultado=getmerito("ia");
			if ($resultado->num_rows != 0) {
				echo"

			<div>
               <div class=\"table\">
                  <table id=\"mytable\" class=\"table table-bordred table-stripedt\">
                     <thead>
                        <th style=\"text-align:center;\">Título del proyecto</th>
                        <th style=\"text-align:left;\">Estado</th>
                     </thead>";
					 while ($linea = $resultado->fetch_assoc()) {
						if ($linea['subtipo']==1) {
							break;
						}
						echo"
					 <tbody>
					 	<tr>
							<td style=\"text-align:center;\">
								 " . $linea['titulo']."
							</td>
							<td>";
							switch ($linea['estado']) {
								case 0:
									echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>";
									break;
								case 1:
									echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>";
									break;
								case 2:
									echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>";
									break;
								case 3:
									echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>";
									break;
								default:
									echo 'Su usuario es incorrecto, intente nuevamente.';
									break;
							}
							
							
							
							echo 	$linea['infoestado']
							
							
							
							
							."</td>
							<td style=\"text-align:right;\">
								<button style=\"color:blue; background-color: #ffffff;border: #ffffff\" data-toggle=\"modal\" data-target=\"#newia\"> <i class=\"material-icons\">create</i></button>
								<button style=\"color:blue; background-color: #ffffff;border: #ffffff\"data-toggle=\"modal\" data-target=\"#newia\"><i class=\"material-icons\">delete_sweep</i></button>
							</td>
						 
						</tr>";
					 }
			}
				  echo"       
                  </tbody>
                  </table>
               </div>
			</div>";
			//hasta aqui
			?>



			<div id="collapseA" class="row-fluid collapse in">
                <div class="span5 offset1">A.2 Proyectos de convocatoria pública y competitiva concedidos a otra institución científica</div> 
				<div class="offset10"><button style="color:blue; background-color: #ffffff;border: #ffffff" data-toggle="modal" data-target="#newia"> <i class="material-icons">create</i></button>
									<button style="color:blue; background-color: #ffffff;border: #ffffff"data-toggle="modal" data-target="#newia"><i class="material-icons">delete_sweep</i></button>
				</div>
			</div>

			<div id="collapseA" class="row-fluid collapse in">
                <div class="span5 offset1">A.3 Proyectos mediante convenios</div> 
				<div class="offset10"><button style="color:blue; background-color: #ffffff;border: #ffffff" data-toggle="modal" data-target="#newia"> <i class="material-icons">create</i></button>
									<button style="color:blue; background-color: #ffffff;border: #ffffff"data-toggle="modal" data-target="#newia"><i class="material-icons">delete_sweep</i></button>
				</div>
			</div>	
		</div>

			<div class="row-fluid">
				<div class="NOaccordion-toggle">
					<div class="span8">B.Dirección de los grupos de investigación de la ULPGC, así como participación en ellos</div>
					<div class="span1"><?php echo mostrar_total('ig',$userid);?></div>
					<div class="offset9">
						<button onclick="myFunction()">A&ntilde;adir</button>
						<button onclick="myFunction()">Modificar</button>
				     	<button onclick="myFunction()">Eliminar</button>
					</div>
	            </div>
			</div>

			<div class="row-fluid">
				<div class="accordion-toggle" data-toggle="collapse"
					data-target="#collapseC">
					<div class="span8">C.Publicaciones, libros, informes, u otros medios establecidos en cada disciplina académica</div>
					<div class="span1"><?php echo mostrar_total('ic',$userid);?></div>
					<div class="offset10"><button onclick="myFunction()">A&ntilde;adir</button></div>
                </div>
			</div>


			<div id="collapseC" class="row-fluid collapse out">
				<div class="span5 offset1">C.1 Proyectos de convocatoria pública y competitiva concedidos a la ULPGC</div>
				<div class="offset10"><button onclick="myFunction()">Modificar</button>
										   <button onclick="myFunction()">Eliminar</button></div>
			<div id="collapseC" class="row-fluid collapse in">
                <div class="span5 offset1">C.2 Proyectos de convocatoria pública y competitiva concedidos a otra institución científica</div> 
				<div class="offset10"><button onclick="myFunction()">Modificar</button>
										   <button onclick="myFunction()">Eliminar</button></div>
			</div>

			<div id="collapseC" class="row-fluid collapse in">
                <div class="span5 offset1">C.3 Proyectos mediante convenios</div> 
				<div class="offset10"><button onclick="myFunction()">Modificar</button>
										   <button onclick="myFunction()">Eliminar</button></div>
			</div>	
					
		</div>

			<div class="row-fluid">
				<div class="NOaccordion-toggle" data-toggle="collapse"
					data-target="#collapseD">
					<div class="span8">D.Preparaci&oacuten de clases</div>
						<div class="span1"><?php echo mostrar_total('id',$userid);?></div>
					<div class="offset10">
						<button onclick="myFunction()">A&ntilde;adir</button>
					</div>
			</div>

			<div class="row-fluid">
				<div class="accordion-toggle" data-toggle="collapse"
					data-target="#collapseE">
					<div class="span8">E.Direcci&oacuten de trabajos de fin de Grado o Master</div>
					<div class="span1"><?php echo mostrar_total('ig',$userid);?></div>
					<div class="offset10"><button onclick="myFunction()">A&ntilde;adir</button></div>
	            </div>
				<div id="collapseE" class="row-fluid collapse out">
					<div class="span5 offset1">E.1 Trabajo fin de Grado</div>
					<div class="offset10"><button onclick="myFunction()">Modificar</button>
				     					       <button onclick="myFunction()">Eliminar</button></div>
				<div id="collapseE" class="row-fluid collapse in">
					<div class="span5 offset1">E.2 Trabajo fin de Master</div>
					<div class="offset10"><button onclick="myFunction()">Modificar</button>
				     					       <button onclick="myFunction()">Eliminar</button></div>
				</div>
			</div>
	</div>



	<div class="modal fade" id="newia" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
               </div>
               <div class="modal-body">
                   <div class="panel-body">
                <form id="form_Cv_2" name="form_Cv_2" action="library/tablausuario/ia.php" method="post" class="form-horizontal" autocomplete="on">

                  <div class="form-group">
                     <label for="nombre">Nombre del Proyecto</label></p>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
				  <br>
                  <div class="form-group">
                    <label for="orgfin">Organización Financiadora</label></p>
                    <input type="text" class="form-control" id="orgfin" name="orgfin">
                  </div>
				  <br>
				  <div class="form-group">
                    <label for="entcol">Entidades Colaboradoras</label></p>
                    <input type="text" class="form-control" id="entcol" name="entcol"  placeholder="Separados por comas">
                  </div>
                  <br>
                  <div class="form-group">
                  <div class="col-xs-4">
                    <label for="fechaini">Fecha inicio</label>
                    <input class="form-control" id="fechaini" name="fechaini" type="date" >
                  </div>
                <div class="col-xs-4">
                    <label for="fechafin">Fecha finalizaión</label>
                    <input class="form-control" id="fechafin" name="fechafin"type="date" >
                  </div>
                 </div>	
                  <div class="form-group">
                    <p class="subtitulo"><label for="subtot">Subvención total</label></p>
                    <input type="text" class="form-control" id="subtot" name="subtot" placeholder="€">
                  </div>
                  <div class="form-group">
                    <p class="subtitulo"><label for="investigador">Investigador</label></p>
                    <input type="text" class="form-control" id="investigador" name="investigador" >
                  </div>
                  <div class="form-group">
                    <p class="subtitulo"><label for="numinv">Número de investigadores</label></p>
                    <input type="text" class="form-control" id="numinv" name="numinv" >
                  </div>

                  <div class="modal-footer">
                    <input type="submit" name="CVparte2" id="CVparte2" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
         </div>
         <!-- /.modal-dialog --> 
      </div></div>
              </div></div>


	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="getbootstrap/jquery.js"></script>
	<script src="getbootstrap/bootstrap.js"></script>
	<script src="getbootstrap/holder.js"></script>
	<script src="getbootstrap/prettify.js"></script>
	<script src="getbootstrap/application.js"></script>

<script>
   function myFunction() { 
      document.getElementById("myDialog").showModal(); 
   }

</script>
</body>
</html>