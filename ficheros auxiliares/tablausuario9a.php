<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap-responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>



<script>


function modificar(tabla,id){
             $.ajax({  
                  url:"library/tablausuario/modifica2.php",  
                  method:"POST",  
                  data : { "id" : id, "tabla": tabla }, 
                  success:function(data){  
		                $('#modal_comming').html(data);
		                $('#dataModal').modal('show');
                  }  
             });  
  } 

    function ddelete(tabla,id){

      if(confirm('¿Borrar registro seleccionado?'))
      {

        var parametros = {
                "tabla" : tabla,
                "id" : id
        };

$.ajax({
    // la URL para la petición
    url : 'library/tablausuario/delete.php',
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : { "id" : id, "tabla": tabla },
 
    // especifica si será una petición POST o GET
    type : 'POST',
 
    // el tipo de información que se espera de respuesta
    dataType : 'html',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function() {
      alert('Exito:' + $id);
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function() {
        alert('Disculpe, existió un problema');
    },
 
    // código a ejecutar sin importar si la petición falló o no
    complete : function() {
        alert('Petición realizada');
    }
}); 

      }
      else
      {
        return false;
      }
 
    }




</script>
 
<?php

function mostrar($tabla){
    $primera=1;
    global $contador, $pre, $tabla_total;
    $letra=$pre[$contador];
    $resultado=getmerito($tabla,'0');
    while ($lineaBD = $resultado->fetch_assoc()) {
        if ($primera==1){
 echo"
    <div id=\"collapse".$letra."\" class=\"row-fluid collapse out\">
			<div>
               <div class=\"table\">
                  <table id=\"tablenosub\" class=\"table table-bordred table-stripedt\">
                  <thead>
                    <th style=\"text-align:left;\">Titulo</th>
                    <th style=\"text-align:left;\">Estado</th>
                  </thead>";
        $primera=0;
        }
        echo "
        <tbody>
            <tr>
							<td style=\"text-align:left;\">
								 " . $lineaBD['titulo']."
							</td>
							<td style=\"text-align:left;\">";
							switch ($lineaBD['estado']) {
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
							
							

							echo 	$lineaBD['infoestado']."</td>
              <td style=\"text-align:right;\">
                <button onclick=\"modificar('$tabla_total','$lineaBD[id]')\" style=\"color:blue; background-color: #ffffff; border: #ffffff;\"data-toggle=\"modal\" name='id'; value=\"".$tabla_total."\"> <i class=\"material-icons\">create</i></button>
  
                <button onclick=\"ddelete('$tabla_total','$lineaBD[id]')\" style=\"color:blue; background-color: #ffffff;border: #ffffff\"data-toggle=\"modal\" ><i class=\"material-icons\"; >delete_sweep</i></button>
              </form>
                            </td>						 
						</tr>
                        ";
        }
    echo'</tbody>
    </table>
    </div>
    </div>
    </div>';
    }
?>


<?php

  function mostrar_sub($fichero, $num_linea){
        global $contador, $pre, $tabla, $tabla_total;
        $letra=$pre[$contador];
        $linea=$fichero[++$num_linea];
        $primera=1;
        
        while ($linea[0]=="."){
            if ($primera!=1)
                echo"<div id=\"collapse".$letra."\" class=\"row-fluid collapse in\">";  
            if ($primera=1){
                echo"<div id=\"collapse".$letra."\" class=\"row-fluid collapse out\">"; 
                $primera=0;}    
			echo"
			<div>
               <div class=\"table\">
                  <table id=\"tablesub\" class=\"table table-bordred table-stripedt\">";
                     for ($subtipo = 1,$linea=$fichero[$num_linea]; $linea[0]=='.'; $subtipo++,$linea=$fichero[++$num_linea] ){
                        $resultado=getmerito($tabla_total,$subtipo);
                        
                        echo"<thead>
                        <th style=\"text-align:left;\">".$letra.$subtipo.$linea."</th>
                        <th style=\"text-align:left;\">Estado</th>
                     </thead>";
                        echo "<tbody>";
                            while ($lineaBD = $resultado->fetch_assoc()) {
                                if ($lineaBD['subtipo']==$subtipo) {
                                    echo"
					 	<tr>
							<td style=\"text-align:left;\">
								 " . $lineaBD['titulo']."
							</td>
							<td style=\"text-align:left;\">";
							switch ($lineaBD['estado']) {
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
							
							
							
							echo 	$lineaBD['infoestado']
    						."</td>
							<td style=\"text-align:right;\">
                                <button onclick=\"modificar('$tabla_total','$lineaBD[id]')\" style=\"color:blue; background-color: #ffffff; border: #ffffff;\"data-toggle=\"modal\" name='id'; value=\"".$tabla_total."\"> <i class=\"material-icons\">create</i></button>
                                <button onclick=\"ddelete('$tabla_total','$lineaBD[id]')\" style=\"color:blue; background-color: #ffffff;border: #ffffff\"data-toggle=\"modal\" ><i class=\"material-icons\"; >delete_sweep</i></button>
							</td>
						 
						</tr>
                        ";
                                }
                            }
                            echo "
                            </tbody>
                            ";
                        }
                        
                  echo"
                  </table>       
                  </div>
			      </div>";
                    }
            echo"</div>
			      </div>";
            return ($num_linea);
            }
//esto hay que quitarlo, es solo para pruebas.
$_SESSION["id"]=8;
////////////////////////////////////////
include 'library/libreria.php';
$pre=["a","b","c","d","e","ff","g","h","i","j","k","l","m","nn","nnn","o","p","q","r","s"];
$pret=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S"];
$num_linea=0;
$contador=0;
$apartado='i';
$fichero = file('txt/titulos3.txt');
if($fichero!=NULL){
    $fichero[0] = substr($fichero[0], 3);
    echo"
    <div id=\"resultadooo\"></div>
    <div class=\"container-fluid\" >
		<h1 id=titulo>Planificaci&oacuten Acad&eacutemica</h1>
		<div class=\"col-sm-10\" align=\"center\">CONCEPTO</div>
        <div class=\"col-sm-1\">UAD</div>
        </div>";
    for ($linea=$fichero[$num_linea];$linea[0]!='/';$linea=$fichero[$num_linea]){
        $tabla_total=$apartado.$pre[$contador];
        switch ($linea['0']) {
            case '-':
            $total=mostrar_total($tabla_total);
            $linea = substr($linea, 1);
            echo "<div class=\"row-fluid\"cursor: hand; cursor: pointer;>
                    <div class=\"accordion-toggle\" data-toggle=\"collapse\"
                        data-target=\"#collapse".$pre[$contador]."\">
                        <div class=\"col-sm-10\"  id=\"titulotabla\" >".$pret[$contador]."-".$linea."</div>
                        <div class=\"col-sm-1\">".$total."</div> </div>
                        <div class=\"col-sm-1\">
                        <button style=\"color:blue; background-color: #ffffff;border: #ffffff\" data-toggle=\"modal\" data-target=\"#new".$tabla_total."\"> <i class=\"material-icons\">add</i></button>
                    </div>
                </div>";
            $num_linea=mostrar_sub($fichero, $num_linea);
            $contador++;
            break;
            case '#':
               $contador++;
            break 2;
            
            default;
                $total=mostrar_total($tabla_total);
                $linea = '-'.$linea;
                echo   "<div class=\"row-fluid\">
                        <div class=\"accordion-toggle\" data-toggle=\"collapse\"data-target=\"#collapse".$pre[$contador]."\">
                            <div class=\"col-sm-10\"  id=\"titulotabla\">".$pret[$contador].$linea."</div>
                            <div class=\"col-sm-1\">".$total."</div> </div>
                            <div class=\"col-sm-1\">
                            <button style=\"color:blue; background-color: #ffffff;border: #ffffff\" data-toggle=\"modal\" data-target=\"#new".$apartado.$pre[$contador]."\"> <i class=\"material-icons\">add</i></button>
                            </button>
                        </div>
                    </div>";
                mostrar($tabla_total);
                $num_linea++;
                $contador++;
                break;
        }
    }
}
?>
</div>
</html>

<div id="dataModal" class="modal fade" data-backdrop="static">  
  <div class="modal-dialog">  
    <div class="modal-content">  
      <div class="modal-header">    
        <h4 class="modal-title">Employee Details <button type="button" class="btn btn-default" data-dismiss="modal" style="Position:relative; left:60%">Close</button></h4>  
        
      </div>  
      <div class="modal-body" id="modal_comming">  
      </div>  
      <div class="modal-footer">  
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
      </div>  
    </div>  
  </div>  
</div>  

<?php 

//MODALES DE AQUI EN ADELANTE

    //AÑADIR
?>




  <div class="modal fade" id="newia" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="form_Cv_2" name="form_Cv_2" action="library/tablausuario/inserta.php" method='post'>
 
                   <div class="form-group">
                      <label for="nombre">Nombre del Proyecto</label></p>
                     <input type="text" class="form-control" id="nombre" name="nombre">
                   </div>
 				  <br>

                 <label for="subtipo">Subtipo</label></p>
                    <select name="subtipo">    
                      <option value="1" selected="selected">Proyectos de convocatoria pública y competitiva concedidos a la ULPGC</option>
                      <option value="2">Proyectos de convocatoria pública y competitiva concedidos a otra institución científica</option>
                      <option value="3">.Proyectos mediante convenios</option>
                    </select>
          <br>
          <br>

                   <div class="form-group">
                     <label for="orgfin">Organización Financiadora</label></p>
                     <input type="text" class="form-control" id="orgfin" name="orgfin">
                   </div>
 				  <br>
 				  <div class="form-group">
                     <label for="entcol">Entidades Colaboradoras</label></p>
                     <input type="text" class="form-control" id="entcol" name="entcol">
                   </div>
                   <br>
                   <div class="form-group">
                     <label for="fechaini">Fecha inicio</label>
                     <input class="form-control" id="fechaini" name="fechaini" type="date" >
                   </div>
                     <label for="fechafin">Fecha finalización</label>
                     <input class="form-control" id="fechafin" name="fechafin"type="date" >
                   </div>
                   <div class="form-group">
                     <p class="subtitulo"><label for="subtot">Subvención total</label></p>
                     <input type="text" class="form-control" id="subtot" name="subtot">
                   </div>
                   <div class="form-group">
                     <p class="subtitulo"><label for="investigador">Investigador</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador" >
                   </div>
                   <div class="form-group">
                     <p class="subtitulo"><label for="numinv">Número de investigadores</label></p>
                     <input type="text" class="form-control" id="numinv" name="numinv" >
                   </div>
                   <input type="hidden" name="tabla" value="ia" />
                   <div class="modal-footer">
                     <input type="submit" name="insertaia" id="newia" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


<div class="modal fade" id="newib" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="form_Cv_2" name="form_Cv_2" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                   <div class="form-group">
                      <label for="nombre">Nombre del Grupo de Investigación</label></p>
                     <input type="text" class="form-control" id="nombre" name="nombre">
                   </div>
 				  <br>
                  <div class="form-group">
                     <label for="orgfin">Cargo</label></p>
                     <input type="text" class="form-control" id="cargo" name="cargo">
                   </div>
          <br>
                   <div class="form-group">
                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="orgfin" name="orgfin">
                   </div>
 				  <br>
                    
                   <input type="hidden" name="tabla" value="ib" />
                   <div class="modal-footer">
                     <input type="submit" name="insertaib" id="newib" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>







      <div class="modal fade" id="newic" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="form_Cv_2" name="form_Cv_2" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 

                      <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">
 				           <br>
                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="orgfin">
 				          <br>
                  <label for="subtipo">Subtipo</label></p>
                    <select name="subtipo">    
                      <option value="1" selected="selected">Reconocimiento de la investigación</option>
                      <option value="2">Publicaciones de investigación indexada</option>
                      <option value="3">Publicaciones de investigación no indexada</option>
                    </select>
                   <br>

                     <label for="fechapub">Fecha de publicación</label>
                     <input class="form-control" id="fechapub" name="fechapub" type="date" >

                     <label for="autores">Autores</label>
                     <input class="form-control" id="autores" name="autores"type="text" >

                     <label for="revista">Revista</label>
                     <input class="form-control" id="revista" name="revista" type="text" >

                     <label for="ISBN">ISBN</label>
                     <input class="form-control" id="ISBN" name="ISBN"type="text" >

                     <label for="clave">Clave</label>
                     <input class="form-control" id="clave" name="clave" type="text" >

                     <label for="volumen">Volumen</label>
                     <input class="form-control" id="volumen" name="volumen"type="text" >

                     <label for="impacto">Impacto</label>
                     <input class="form-control" id="impacto" name="impacto" type="text" >

                     <label for="citas">Citas</label>
                     <input class="form-control" id="citas" name="citas"type="text" >

                     <label for="acta">Acta</label>
                     <input class="form-control" id="acta" name="acta" type="text" >

                     <label for="editorial">Editorial</label>
                     <input class="form-control" id="editorial" name="editorial"type="text" >

                     <label for="lugar">Lugar</label>
                     <input class="form-control" id="lugar" name="lugar"type="text" >

                     <input type="hidden" name="tabla" value="ic" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaic" id="newic" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


        <div class="modal fade" id="newid" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="orgfin">

                     <label for="fechapub">Fecha</label>
                     <input class="form-control" id="fecha" name="fecha" type="date" >

                     <label for="autores">Autores</label>
                     <input class="form-control" id="autores" name="autores"type="text" >

                     <label for="participacion">Participación</label>
                     <input class="form-control" id="participacion" name="participacion" type="text" >

                     <label for="congreso">Congreso</label>
                     <input class="form-control" id="congreso" name="congreso"type="text" >

                     <label for="regional">Regional</label>
                     <input class="form-control" id="regional" name="regional" type="text" >

                     <label for="lugar">Lugar</label>
                     <input class="form-control" id="lugar" name="lugar"type="text" >

                     <input type="hidden" name="tabla" value="id" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaid" id="newid" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>



               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>



        <div class="modal fade" id="newiff" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">


                     <input type="hidden" name="tabla" value="iff" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaid" id="newid" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>




        <div class="modal fade" id="newig" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaid" name="newig" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label>Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Investigador Principal</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador">

                     <label>Editor</label>
                     <input class="form-control" id="editor" name="editor">

                     <label>Revista</label>
                     <input class="form-control" id="revista" name="revista">

                     <label>Impacto</label>
                     <input class="form-control" id="impacto" name="impacto">

                     <label>Congreso</label>
                     <input class="form-control" id="congreso" name="congreso"type="text" >

                     <label>Nacional</label>
                     <input class="form-control" id="nacional" name="nacional" type="text" >

                     <label>Desde</label>
                     <input class="form-control" id="desde" name="desde"type="text" >

                     <label>Hasta</label>
                     <input class="form-control" id="hasta" name="hasta" type="text" >

                     <input type="hidden" name="tabla" value="ig" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaig" id="newig" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


               <div class="modal fade" id="newih" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaid" name="newih" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label for="orgfin">Investigador Principal</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador">

                     <label for="fechapub">Centro</label>
                     <input class="form-control" id="centro" name="centro" >

                     <label for="autores">Pais</label>
                     <input class="form-control" id="pais" name="pais">

                     <label for="lugar">Fecha de inicio</label>
                     <input class="form-control" id="inicio" name="inicio"type="date" >

                     <label for="regional">Fecha de finalización</label>
                     <input class="form-control" id="fin" name="fin" type="date" >

                     <input type="hidden" name="tabla" value="ih" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaih" id="newih" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>

               <div class="modal fade" id="newii" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaid" name="newii" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">  

                     <input type="hidden" name="tabla" value="ii" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaii" id="newii" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


               <div class="modal fade" id="newij" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaid" name="newij" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <input type="hidden" name="tabla" value="ij" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaij" id="newij" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


        <div class="modal fade" id="newik" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaik" name="newik" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label>Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Organización Financiadora</label></p>
                     <input type="text" class="form-control" id="orgfin" name="orgfin">

                     <label>Entidades Colaboradoras</label>
                     <input class="form-control" id="entidades" name="entidades">

                     <label>Fecha de inicio</label>
                     <input class="form-control" id="desde" name="desde"  type="date">

                     <label>Fecha de finalización</label>
                     <input class="form-control" id="hasta" name="hasta" type="date">

                     <label>Investigador responsable</label>
                     <input class="form-control" id="invresponsable" name="invresponsable"type="text" >

                     <label>Número de Investigadores</label>
                     <input class="form-control" id="numinv" name="numinv" type="text" >

                     <label>Subvención</label>
                     <input class="form-control" id="subvencion" name="subvencion"type="text" >

                     <input type="hidden" name="tabla" value="ik" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaik" id="newik" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


               <div class="modal fade" id="newil" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                      <form id="insertail" name="newil" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
                           <label for="nombre">Título</label></p>
                          <input type="text" class="form-control" id="tiitulo" name="titulo">
                         <br>
                          <label for="orgfin">Unidades Docentes</label></p>
                          <input type="text" class="form-control" id="UD" name="orgfin">
                        <br>
                          <label for="fechapub">Fecha de publicación</label>
                          <input class="form-control" id="fechapub" name="fechapub" type="date" >
     
                          <label for="autores">Autores</label>
                          <input class="form-control" id="autores" name="autores"type="text" >
     
                          <label for="revista">Revista</label>
                          <input class="form-control" id="revista" name="revista" type="text" >
     
                          <label for="ISBN">ISBN</label>
                          <input class="form-control" id="ISBN" name="ISBN"type="text" >
     
                          <label for="clave">Clave</label>
                          <input class="form-control" id="clave" name="clave" type="text" >
     
                          <label for="volumen">Volumen</label>
                          <input class="form-control" id="volumen" name="volumen"type="text" >
     
                          <label for="impacto">Impacto</label>
                          <input class="form-control" id="impacto" name="impacto" type="text" >
     
                          <label for="citas">Citas</label>
                          <input class="form-control" id="citas" name="citas"type="text" >
     
                          <label for="acta">Acta</label>
                          <input class="form-control" id="acta" name="acta" type="text" >
     
                          <label for="editorial">Editorial</label>
                          <input class="form-control" id="editorial" name="editorial"type="text" >
     
                          <label for="lugar">Lugar</label>
                          <input class="form-control" id="lugar" name="lugar"type="text" >
     
                          <input type="hidden" name="tabla" value="il" />                     
     
                        <div class="modal-footer">
                          <input type="submit" name="insertail" id="newil" class="btn btn-success" style="width:100%;" value="Guardar"/>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- /.modal-content --> 
               </div>
               <!-- /.modal-dialog --> 
            </div></div>
                    </div></div>
     

        <div class="modal fade" id="newim" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaim" name="newim" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Nombre de la empresa</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label>CIF</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Razón social</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador">
                     <input type="hidden" name="tabla" value="im" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaim" id="newim" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>

        <div class="modal fade" id="newinn" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertainn" name="newinn" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label>Investigadores</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Entidades</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador">

                     <label>Tema</label>
                     <input class="form-control" id="fecha" name="fecha">

                     <label>Fecha </label>
                     <input class="form-control" id="fecha" name="fecha"  type="date">

                     <input type="hidden" name="tabla" value="inn" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertainn" id="newinn" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
        
        <div class="modal fade" id="newinnn" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertainnn" name="newinnn" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label>Organización financiadora</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Entidades financiadoras</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador">

                     <label>Fecha de inicio</label>
                     <input class="form-control" id="editor" name="editor" type="date">

                     <label>Fecha de finalización</label>
                     <input class="form-control" id="revista" name="revista" type="date">

                     <label>Subvención</label>
                     <input class="form-control" id="impacto" name="impacto">

                     <label>Investigador principal</label>
                     <input class="form-control" id="congreso" name="congreso"type="text" >

                     <label>Numero de investigadores</label>
                     <input class="form-control" id="nacional" name="nacional" type="text" >

                     <input type="hidden" name="tabla" value="ig" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertainnn" id="newinnn" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
               <div class="modal fade" id="newio" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="insertaio" name="newio" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="tiitulo" name="titulo">

                     <label>Autores</label></p>
                     <input type="text" class="form-control" id="autores" name="UD">

                     <label>Participación</label></p>
                     <input type="text" class="form-control" id="investigador" name="investigador">

                     <label>Congreso</label>
                     <input class="form-control" id="editor" name="editor">

                     <label>Regional</label>
                     <input class="form-control" id="revista" name="revista">

                     <label>Lugar</label>
                     <input class="form-control" id="impacto" name="impacto">

                     <label>Fecha</label>
                     <input class="form-control" id="congreso" name="congreso"type="date" >

                     <input type="hidden" name="tabla" value="io" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaio" id="newio" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


<?php 

//MODALES DE AQUI EN ADELANTE

    //ELIMINAR 
    
?>

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>

	<script src="http://getbootstrap.com/2.3.2/assets/js/holder/holder.js"></script>
	<script src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
	<script src="http://getbootstrap.com/2.3.2/assets/js/application.js"></script>
  
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>