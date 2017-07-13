<html>
<head>
<link href="getbootstrap/bootstrap.css"
	rel="stylesheet">
<link
	href="getbootstrap/bootstrap-responsive.css"
	rel="stylesheet">
</head>
<body>

<?php
session_start();
$userid=$_SESSION["id"];
/////////////////////////////////////////
//EMPIEZA EL FORM
?>
<h1>Planificaci&oacuten Acad&eacutemica</h1>
	<div class="accordion" class="text-center" data-target="#collapseA">
        <h3>Direccion y ejecucion de proyectos de investigacion</h3>
        <div><p>
		<div class="panel-body">
			<div class="container-fluid">
            <p class="text-right"><button class="btn btn-success btn-xs" data-title="Nuevo" data-toggle="modal" data-target="#new" >
            <span class="glyphicon glyphicon-plus"></span></button></p>
            </div>
            <div class="container-fluid">
        <div>
			<div class="table-responsive">
                <table id="mytable" class="table table-bordred table-stripedt">
                    <thead class="bg-info">
                        <th style="text-align:center;">Título del proyecto</th>
                        <th style="text-align:center;">Organismo financiador</th>
                        <th style="text-align:center;">Cuantía de la subvención</th>
                        <th style="text-align:center;">Editar</th>
                        <th style="text-align:center;">Eliminar</th>
                     </thead>
                     <tbody>
                     <tr class="active" id="#collapseA">
                     <tr>
                           <td>proyecyo</td>
                           <td>cabildo</td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit'.$itemp1['id'].'" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                           </td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete'.$itemp1['id'].'" ><span class="glyphicon glyphicon-trash"></span></button></p>
                           </td> 
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Duplicate"><button class="btn btn-info btn-xs" data-title="Duplicate" data-toggle="modal" data-target="#dupli'.$itemp1['id'].'" ><span class="glyphicon glyphicon-copy"></span></button></p>
                           </td></tr>


<?php
/*
				<div class="accordion-toggle" data-toggle="collapse"
					data-target="#collapseA">
					<div class="span8">A.Dirección y ejecución de pryectos de ingestigación</div>
					<div class="span1"><?php include 'library/libreria.php'; echo mostrar_total('ia',$userid);?></div>
					<div class="offset10"><button class="btn btn-success btn-xs" data-title="Nuevo" data-toggle="modal" data-target="#newia" >
                      <span class="glyphicon glyphicon-plus"></span>
                      </button>
                </div>
			</div>


			<div id="collapseA" class="row-fluid collapse out">
				<div class="span5 offset1">A.1 Proyectos de convocatoria pública y competitiva concedidos a la ULPGC</div>
				<div class="offset10"><button onclick="myFunction()">Modificar</button>
										   <button onclick="myFunction()">Eliminar</button></div>
			<div id="collapseA" class="row-fluid collapse in">
                <div class="span5 offset1">A.2 Proyectos de convocatoria pública y competitiva concedidos a otra institución científica</div> 
				<div class="offset10"><button onclick="myFunction()">Modificar</button>
										   <button onclick="myFunction()">Eliminar</button></div>
			</div>

			<div id="collapseA" class="row-fluid collapse in">
                <div class="span5 offset1">A.3 Proyectos mediante convenios</div> 
				<div class="offset10"><button onclick="myFunction()">Modificar</button>
										   <button onclick="myFunction()">Eliminar</button></div>
			</div>	
		</div>
*/
?>
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
                <form id="form_Cv_2" name="form_Cv_2" action="model/ia.php" method="post" class="form-horizontal" autocomplete="on">

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

	

<dialog id="myDialog">
<button onclick="closeDialog()">X</button>
<form method="post">
Nombre del Proyecto:
<input type="text" name="nombre"><br>
Organización financiadora:<br>
<input type="text" name="organizacion"><br>
Entidades colaboradoras:
<input type="text" name="entidad"><br>
FECHA INICIO
<input type="date" name="fechaini"><br>
FECHA FINALIZACIÓN
<input type="date" name="fechafin"><br>
Subvención total:
<input type="text" name="subvencion"><br>
Investigador principal:
<input type="text" name="investigador"><br>
Número de investigadores:
<input type="text" name="numinverstigadores"><br>

<button onclick="inserta()">Guardar cambios</button>
</form> 
</dialog>

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
