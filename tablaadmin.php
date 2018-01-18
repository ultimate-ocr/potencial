<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap-responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Planificación Académica</title>
</head>



<script>

function cerrarSesion(){

      if(confirm('¿Desea cerrar la sesion?'))
      {

        $.ajax({
            // la URL para la petición
            url : 'library/cerrarsesion.php',
      
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success : function() {
              location.href="index.php";
            }
        });

      }
      else
      {
        return false;
      }
 
    }



function corregir(tabla,id){
    $.ajax({ 
         url:"library/tablaadmin/corregi2.php",  
         method:"POST",  
         data : { "id" : id, "tabla": tabla }, 
         success:function(data){  
               $('#modal_comming').html(data);
               $('#dataModal').modal('show');
         }  
    });  
} 

</script>
 
<?php


function mostrar_pendientes($tabla){
    $primera=1;
    global $contador, $pre, $tabla_total, $apartado;
    $letra=$pre[$contador];
    
    if(isset($_POST['submit']))
      $resultado=getmerito_admin($tabla,'0', $_POST['estado']);
    else
      $resultado=getmerito_admin($tabla,'0','4');

    while ($lineaBD = $resultado->fetch_assoc()) {
        if ($primera==1){
 echo"
    <div id=\"collapse".$apartado.$letra."\" class=\"row-fluid collapse out\">
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
							
							

              echo 	$lineaBD['infoestado']
              ."</td>";
              if(($tabla_total!="da")&&($tabla_total!="db")&&($tabla_total!="dc")&&($tabla_total!="dd")&&($tabla_total!="dj")&&($tabla_total!="dl"))
              echo"
            <td style=\"text-align:right;\">
                              <button onclick=\"corregir('$tabla_total','$lineaBD[id]')\" style=\"color:blue; background-color: #ffffff; border: #ffffff;\"data-toggle=\"modal\" name='id'; value=\"".$tabla_total."\"> <i class=\"material-icons\">arrow_forward</i></button>
            </td>";

                echo"
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
  function mostrar_sub_pendientes($fichero, $num_linea){

        global $contador, $pre, $pret, $tabla, $tabla_total, $apartado;
        
        $letra=$pre[$contador];
        $letrat=$pret[$contador];
        $linea=$fichero[++$num_linea];
        $primera=1;
        
        while ($linea[0]=="."){
            if ($primera!=1)
                echo"<div id=\"collapse".$apartado.$letra."\" class=\"row-fluid collapse in\">";  
            if ($primera=1){
                echo"<div id=\"collapse".$apartado.$letra."\" class=\"row-fluid collapse out\">"; 
                $primera=0;}    
			echo"
			<div>
               <div class=\"table\">
                  <table id=\"tablesub\" class=\"table table-bordred table-stripedt\">";   
                  for ($subtipo = 1,$linea=$fichero[$num_linea]; $linea[0]=='.'; $subtipo++,$linea=$fichero[++$num_linea] ){
                    if(isset($_POST['submit'])){
                      $estado=$_POST['estado'];
                      $resultado=getmerito_admin($tabla_total,'0',$estado);
                    }
                    else
                      $resultado=getmerito_admin($tabla_total,'0','4');
                        
                        echo"<thead>
                        <th style=\"text-align:left;\">".$letrat.$subtipo.$linea."</th>
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
              ."</td>";
              if(($tabla_total!="da")&&($tabla_total!="db")&&($tabla_total!="dc")&&($tabla_total!="dd")&&($tabla_total!="dj")&&($tabla_total!="dl"))
              echo"
            <td style=\"text-align:right;\">
                              <button onclick=\"corregir('$tabla_total','$lineaBD[id]')\" style=\"color:blue; background-color: #ffffff; border: #ffffff;\"data-toggle=\"modal\" name='id'; value=\"".$tabla_total."\"> <i class=\"material-icons\">arrow_forward</i></button>
            </td>";
            
           echo"
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
?>


<header id="main-header">
<div class="row-fluid">
<div class="col-lg-3">
  <IMG SRC="/potencial/images/logoULPGC.jpg"  width="300px">
</div>
<br><br><br><br>

<div class="col-lg-3">   
<form id="buscausuario" name="buscausuario" action="tablaadminbusqueda.php" method="post" class="form-horizontal" autocomplete="on">
  <input type="text" name="dni" id ="dni" placeholder="Introduzca dni de usuario">
  <input type="submit" value="Buscar">
</form>
</div>
<div class="col-lg-4" id="titulousuario">
   <button id="nuevousuario" style="background-color: #013068" data-toggle="modal" data-target="#usuarionuevo"> <i class="material-icons">person_add</i> Añadir Usuario
</div>
<div class="col-lg-2" id="titulousuario">
    ¡Hola<a href="/potencial/library/usuario.php">
    <?php
      session_start();
      if(!isset($_SESSION['id']))
        header('Location: index.php');
      else
        echo " ".$_SESSION['nombre']."!";
    ?>
    </a>
    <br>
    <a href="#" onclick="cerrarSesion();">Cerrar sesión</a>
</div>

 

</div>
<br><br><br>
</div>
</div>
</div>
</header>

Ver mérito según estado:
<form action="/Potencial/tablaadmin.php" method="post">
    <select name='estado'>
      <option value="0"<?php if(isset($_POST['estado'])&&$_POST['estado']==0) echo" selected";?>    >Pendientes de evaluación</option>
      <option value="1"<?php if(isset($_POST['estado'])&&$_POST['estado']==1) echo "selected";?>   >Aceptados</option>
      <option value="2"<?php if(isset($_POST['estado'])&&$_POST['estado']==2) echo "selected";?>    >Pendientes de subsanación por el usuario</option>
      <option value="3"<?php if(isset($_POST['estado'])&&$_POST['estado']==3) echo "selected";?>    >Rechazados</option>
      <option value="4"<?php if(isset($_POST['estado'])&&$_POST['estado']==4) echo "selected"; else echo "selected";?>    >Todos</option>
    </select>
    <button type="submit" name="submit" value="1" style="color:blue; background-color: #ffffff;border: #ffffff"><i class="material-icons">&#xE8B6;</i></button>
  </form>
  <?php

////////////////////////////////////////
include 'library/libreria.php';
$pre=["a","b","c","d","e","ff","g","h","i","j","k","l","m","nn","nnn","o","p","q","r","s"];
$pret=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S"];
$num_linea=0;
$contador=0;
$apartado="d";

$fichero = file('txt/titulos.txt');
if($fichero!=NULL){
    $fichero[0] = substr($fichero[0], 3);
    echo"
    <div id=\"resultadooo\"></div>
    <div class=\"container-fluid\" >
    <h1 id=\"titulo\">Planificaci&oacuten Acad&eacutemica</h1>";
    
    



    echo"
    <div class=\"col-sm-12\" align=\"center\" id=\"apartado\">DOCENCIA</div>
    <br><br>
		<div class=\"col-sm-12\" align=\"center\" id=\"concepto\">CONCEPTO</div>
    </div>";
    for ($linea=$fichero[$num_linea];$linea[0]!='/';$linea=$fichero[$num_linea]){
        $tabla_total=$apartado.$pre[$contador];
        switch ($linea['0']) {
            case '-':
            $linea = substr($linea, 1);
            echo "<div class=\"row-fluid\"cursor: hand; cursor: pointer; id=\"concepto\">
                    <div class=\"accordion-toggle\" data-toggle=\"collapse\"
                        data-target=\"#collapse".$apartado.$pre[$contador]."\">
                        <div class=\"col-sm-12\"  id=\"aux\" >".$pret[$contador]."-".$linea."</div>";
                    echo"
                    </div>
                </div>";
            $num_linea=mostrar_sub_pendientes($fichero, $num_linea);
            $contador++;
            break;

            case '<':
                
                if ($apartado=="i"){
                    $apartado="g";
                    echo"
                    <br><br>
                    <div class=\"col-sm-12\" align=\"center\" id=\"apartado\">GESTIÓN</div>
                    <br><br><br><br><br><br><br>
                    <div class=\"col-sm-12\" align=\"center\" id=\"concepto\">CONCEPTO</div>
                    </div>";
                }
                if ($apartado=="d"){
                    $apartado="i";
                    echo"
                    <br><br>
                    <div class=\"col-sm-12\" align=\"center\" id=\"apartado\">INVESTIGACIÓN</div>
                    <br><br><br>
                    <div class=\"col-sm-12\" align=\"center\" id=\"concepto\">CONCEPTO</div>
                </div>";
                }
                $num_linea++;
                $contador=0;
              break;

            case '#':

            $num_linea++;
            break;

            
            default;
                $linea = '-'.$linea;
                echo   "<div class=\"row-fluid\" id=\"concepto\">
                        <div class=\"accordion-toggle\" data-toggle=\"collapse\"data-target=\"#collapse".$apartado.$pre[$contador]."\">
                            <div class=\"col-sm-12\"  id=\"aux\">".$pret[$contador].$linea."</div>";
                        echo"
                        </div>
                    </div>";
                mostrar_pendientes($tabla_total);
                $num_linea++;
                $contador++;
                break;
        }
    }
}
?>
</div>
</html>

<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true"> 
  <div class="modal-dialog">  
    <div class="modal-content">  
      <div class="modal-header">    
      <button id="cerrar" type="button" class="btn btn-default" data-dismiss="modal">X</button>
        <h4 class="modal-title">CORREGIR MÉRITO </h4>  
        
      </div>  
      <div class="modal-body" id="modal_comming">  
      </div>  
    </div>  
  </div>  
</div>  

<?php 

//MODALES DE AQUI EN ADELANTE

    //AÑADIR
?>



<div class="modal fade" id="usuarionuevo" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                <button id="cerrar" type="button" class="btn btn-default" data-dismiss="modal">X</button>
                   <h4 class="modal-title custom_align" id="Heading">NUEVO USUARIO</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
               <form id="insertaid" name="newid" action="library/tablaadmin/nuevousuario.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Nombre</label></p>
                     <input type="text" class="form-control" id="nombre" name="nombre" required>

                     <label for="orgfin">Apellidos</label></p>
                     <input type="text" class="form-control" id="apellidos" name="apellidos" required>

                     <label for="fechapub">Teléfono</label>
                     <input class="form-control" id="telefono" name="telefono" type="text" required>

                     <label for="participacion">DNI</label>
                     <input class="form-control" id="dni" name="dni" type="text" required>

                     <label for="participacion">Correo electrónico</label>
                     <input class="form-control" id="correo" name="correo" type="text" required>

                     <label for="regional">Fecha de nacimiento</label>
                     <input class="form-control" id="fechaNacimiento" name="fechaNacimiento" type="date" required>

                     <label for="lugar">Contraseña</label>
                     <input class="form-control" id="pass" name="pass"type="text" required>
                      <br>
                     <label for="rol">Cargo del usuario</label></p>
                     <select name="rol">    
                       <option value="1" selected="selected">Profesor</option>
                       <option value="2">Evaluador</option>
                     </select>
                    <br>
                    <br>
                     <label for="rol">Categoria Profesional</label></p>
                     <select name="categoria">    
                       <option value="1" selected="selected">Profesor</option>
                       <option value="2">Evaluador</option>
                       <option value="3">Evaluador</option>
                       <option value="4">Evaluador</option>
                       <option value="5">Evaluador</option>
                       <option value="6">Evaluador</option>
                       <option value="7">Evaluador</option>
                       <option value="8">Evaluador</option>
                       <option value="9">Evaluador</option>
                     </select>
                     <br>

                     <div class="modal-footer">
                     <input type="submit" name="nuevousuario" id="nuevousuario" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>

<div class="modal fade" id="newde" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label for="subtipo">Subtipo</label></p>
                    <select name="subtipo">    
                      <option value="1" selected="selected">Trabajo fin de Grado</option>
                      <option value="2">Trabajo fin de Máster</option>
                    </select>
                    <br>

                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label for="fechapub">Codirectores</label>
                     <input class="form-control" id="codirectores" name="codirectores" type="text" >

                     <label for="participacion">Universidad</label>
                     <input class="form-control" id="universidad" name="universidad" type="text" >

                     <label for="regional">Año</label>
                     <input class="form-control" id="anno" name="anno" type="text" >

                     <label for="lugar">Calificacion</label>
                     <input class="form-control" id="calificacion" name="calificacion"type="text" >

                     <label for="lugar">Premios y Menciones de Calidad recibidos</label>
                     <input class="form-control" id="premios" name="premios"type="text" >

                     <input type="hidden" name="tabla" value="de" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertade" id="newde" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
               
          <div class="modal fade" id="newdff" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
    
                    <label for="nombre">Título</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <label for="orgfin">Unidades Docentes</label></p>
                    <input type="text" class="form-control" id="UD" name="UD">

                    <label for="fechapub">Codirectores</label>
                    <input class="form-control" id="codirectores" name="codirectores" type="text" >

                    <label for="participacion">Universidad</label>
                    <input class="form-control" id="universidad" name="universidad" type="text" >

                    <label for="regional">Año</label>
                    <input class="form-control" id="anno" name="anno" type="text" >

                    <label for="lugar">Calificacion</label>
                    <input class="form-control" id="calificacion" name="calificacion"type="text" >

                    <label for="lugar">Doctorado Europeo</label>
                    <input id="doctoradoeuropeo" name="doctoradoeuropeo"type="checkbox" value="1">
                    <br>
                    <label for="lugar">Mención de Calidad</label>
                    <input id="menciondecalidad" name="menciondecalidad"type="checkbox" value="1">

                     <input type="hidden" name="tabla" value="dff" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertadff" id="newdff" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
               
        
        <div class="modal fade" id="newdg" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label for="fechapub">Fecha</label>
                     <input class="form-control" id="fecha" name="fecha" type="date" >

                     <label for="participacion">Participación</label>
                     <input class="form-control" id="participacion" name="participacion" type="text" >

                     <label for="regional">Regional</label>
                     <input class="form-control" id="regional" name="regional" type="text" >

                     <label for="lugar">Lugar</label>
                     <input class="form-control" id="lugar" name="lugar"type="text" >

                     <input type="hidden" name="tabla" value="dg" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertadg" id="newdg" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
               
               
          <div class="modal fade" id="newdh" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label for="fechapub">Fecha</label>
                     <input class="form-control" id="fecha" name="fecha" type="date" >

                     <label for="participacion">Participación</label>
                     <input class="form-control" id="participacion" name="participacion" type="text" >

                     <label for="regional">Regional</label>
                     <input class="form-control" id="regional" name="regional" type="text" >

                     <label for="lugar">Lugar</label>
                     <input class="form-control" id="lugar" name="lugar"type="text" >

                     <input type="hidden" name="tabla" value="dh" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertadh" id="newdh" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
               
               
        <div class="modal fade" id="newdi" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                 <label for="nombre">Título</label></p>
                 <input type="text" class="form-control" id="titulo" name="titulo">
                <br>
                 <label for="orgfin">Unidades Docentes</label></p>
                 <input type="text" class="form-control" id="UD" name="UD">
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

                 <label for="isbn">ISBN</label>
                 <input class="form-control" id="isbn" name="isbn"type="text" >

                 <label for="clave">Clave</label>
                 <input class="form-control" id="clave" name="clave" type="text" >

                 <label for="volumen">Volumen</label>
                 <input class="form-control" id="volumen" name="volumen"type="text" >

                 <label for="pin">pin</label>
                 <input class="form-control" id="pin" name="pin"type="text" >

                 <label for="pfin">pfin</label>
                 <input class="form-control" id="pfin" name="pfin"type="text" >

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
                     <input type="hidden" name="tabla" value="di" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertadi" id="newdi" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>
               
        <div class="modal fade" id="newdk" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                 <label for="nombre">Título</label></p>
                 <input type="text" class="form-control" id="titulo" name="titulo">

                 <label for="orgfin">Investigador</label></p>
                 <input type="text" class="form-control" id="investigador" name="investigador">

                 <label for="fechapub">Centro</label>
                 <input class="form-control" id="centro" name="centro" type="text" >

                 <label for="participacion">País</label>
                 <input class="form-control" id="pais" name="pais" type="text" >

                 <label for="regional">Fecha de inicio</label>
                 <input class="form-control" id="inicio" name="inicio" type="date" >

                 <label for="lugar">Fecha de finalización</label>
                 <input class="form-control" id="fin" name="fin"type="date" >

                     <input type="hidden" name="tabla" value="dk" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertadk" id="newdk" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>


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
                     <input type="text" class="form-control" id="titulo" name="titulo">
                   </div>
 				  <br>

                 <label for="subtipo">Subtipo</label></p>
                    <select name="subtipo">    
                      <option value="1" selected="selected">Proyectos de convocatoria pública y competitiva concedidos a la ULPGC</option>
                      <option value="2">Proyectos de convocatoria pública y competitiva concedidos a otra institución científica</option>
                      <option value="3">Proyectos mediante convenios</option>
                    </select>
          <br>
          <br>
                     <label>Es Director</label></p>
                     <input id="director" name="director"type="checkbox" value="1">
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

                   <label for="id">Grupo de Investigación</label></p>
                    <select name="id">
                    <?php
                       $mysqli = conectar();
                          $query = "SELECT * FROM grupoinv";
                          $resultado = $mysqli->query($query);
                          while ($lineaBD = $resultado->fetch_assoc())
                      echo"
                      <option value=".$lineaBD['id'].">".$lineaBD['nombre']."</option>
                      ";
                    ?>
                    </select>
           
          <br>
                  <div class="form-group">
                     <label for="cargo">Cargo</label></p>
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
                 <form id="insertaic" name="newic" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                      <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">
 				           <br>
                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">
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

                     <label for="isbn">ISBN</label>
                     <input class="form-control" id="isbn" name="isbn"type="text" >

                     <label for="clave">Clave</label>
                     <input class="form-control" id="clave" name="clave" type="text" >

                     <label for="volumen">Volumen</label>
                     <input class="form-control" id="volumen" name="volumen"type="text" >

                     <label for="pin">pin</label>
                     <input class="form-control" id="pin" name="pin"type="text" >

                     <label for="pfin">pfin</label>
                     <input class="form-control" id="pfin" name="pfin"type="text" >

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
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">
                 <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label for="fechapub">Fecha</label>
                     <input class="form-control" id="fecha" name="fecha" type="date" >

                     <label for="participacion">Participación</label>
                     <input class="form-control" id="participacion" name="participacion" type="text" >

                     <label for="regional">Regional</label>
                     <input class="form-control" id="regional" name="regional" type="text" >

                     <label for="lugar">Lugar</label>
                     <input class="form-control" id="lugar" name="lugar"type="text" >

                     <input type="hidden" name="tabla" value="id" >                     


                     <div class="modal-footer">
                     <input type="submit" name="insertaid" id="newid" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>

               <div class="modal fade" id="newie" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                   <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                 <form id="form_Cv_2" name="form_Cv_2" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
 				  
           
                   <label for="id">Red de Investigación</label></p>
                    <select name="id">
                    <?php
                       $mysqli = conectar();
                          $query = "SELECT * FROM redinv";
                          $resultado = $mysqli->query($query);
                          while ($lineaBD = $resultado->fetch_assoc())
                      echo"<option value=".$lineaBD['id'].">".$lineaBD['nombre']."</option>";
                    ?>
                    </select>
           
          <br>
                   <div class="form-group">
                     <label for="orgfin">Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="orgfin" name="orgfin">
                   </div>
 				  <br>
                   <input type="hidden" name="tabla" value="ie" />
                   <div class="modal-footer">
                     <input type="submit" name="insertaie" id="newie" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
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
                 <form id="insertaid" name="newiff" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label for="nombre">Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">


                     <input type="hidden" name="tabla" value="iff" />                     

                     <div class="modal-footer">
                     <input type="submit" name="insertaiff" id="newiff" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>
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
                     <input type="text" class="form-control" id="titulo" name="titulo">

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

                     <label>Nacional</label>
                     <input class="form-control" id="nacional" name="nacional" type="text" >

                     <label>Desde</label>
                     <input class="form-control" id="desde" name="desde"type="date" >

                     <label>Hasta</label>
                     <input class="form-control" id="hasta" name="hasta" type="date" >

                     <input type="hidden" name="tabla" value="ig" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaig" id="newig" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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
                 <input type="text" class="form-control" id="titulo" name="titulo">

                 <label for="orgfin">Unidades Docentes</label></p>
                 <input type="text" class="form-control" id="UD" name="UD">

                 <label for="fechapub">Fecha</label>
                 <input class="form-control" id="fecha" name="fecha" type="date" >

                 <label for="participacion">Participación</label>
                 <input class="form-control" id="participacion" name="participacion" type="text" >

                 <label for="regional">Regional</label>
                 <input class="form-control" id="regional" name="regional" type="text" >

                 <label for="lugar">Lugar</label>
                 <input class="form-control" id="lugar" name="lugar"type="text" >

                     <input type="hidden" name="tabla" value="ih" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaih" id="newih" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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


                     <label for="id">Titulo de la tesis</label></p>
                    <select name="id">
                     <?php
                       $mysqli = conectar();
                          $query = "SELECT * FROM tesis";
                          $resultado = $mysqli->query($query);
                          while ($lineaBD = $resultado->fetch_assoc())
                      echo"
                      <option value=".$lineaBD['id'].">".$lineaBD['titulo']."</option>
                      ";
                    ?>
                    </select>



                     <input type="hidden" name="tabla" value="ii" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaii" id="newii" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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
 
                 <label for="id">Titulo de la tesis</label></p>
                 <select name="id">
                  <?php
                    $mysqli = conectar();
                       $query = "SELECT * FROM tesis";
                       $resultado = $mysqli->query($query);
                       while ($lineaBD = $resultado->fetch_assoc())
                   echo"
                   <option value=".$lineaBD['id'].">".$lineaBD['titulo']."</option>
                   ";
                 ?>
                 </select>

                     <input type="hidden" name="tabla" value="ij" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaij" id="newij" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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
                     <input type="text" class="form-control" id="titulo" name="titulo">

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
                   </form>
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
                          <input type="text" class="form-control" id="titulo" name="titulo">
                         <br>
                          <label for="orgfin">Unidades Docentes</label></p>
                          <input type="text" class="form-control" id="UD" name="orgfin">
                        <br>
                          <label for="fechapub">Fecha de concesión</label>
                          <input class="form-control" id="fecha" name="fecha" type="date" >

                          <label for="autores">Autores</label>
                          <input class="form-control" id="autores" name="autores"type="text" >
     
                          <label for="revista">Pais</label>
                          <input class="form-control" id="pais" name="pais" type="text" >
     
                          <label for="ISBN">Numero de patente</label>
                          <input class="form-control" id="patente" name="patente"type="text" >
     
                          <label for="clave">Entidad titular</label>
                          <input class="form-control" id="entidad" name="entidad" type="text" >
     
                          <label for="volumen">Empresa explotadora</label>
                          <input class="form-control" id="empresa" name="empresa"type="text" >
     
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
 
                    <label>Razón social</label></p>
                    <input type="text" class="form-control" id="razsocial" name="razsocial">
                    <input type="hidden" name="tabla" value="im" /> 

                     <label>CIF</label></p>
                     <input type="text" class="form-control" id="CIF" name="CIF">                    

                   <div class="modal-footer">
                     <input type="submit" name="insertaim" id="newim" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label>Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Investigadores</label></p>
                     <input type="text" class="form-control" id="investigadores" name="investigadores">

                     <label>Entidades</label></p>
                     <input type="text" class="form-control" id="entidad" name="entidad">

                     <label>Tema</label>
                     <input class="form-control" id="tema" name="tema">

                     <label>Fecha </label>
                     <input class="form-control" id="fecha" name="fecha"  type="date">

                     <input type="hidden" name="tabla" value="inn" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertainn" id="newinn" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label>Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Organizacion Financiadora</label></p>
                     <input type="text" class="form-control" id="orgfin" name="orgfin">
                     <br>
                     <label>Es Gestor</label></p>
                     <input id="gestor" name="gestor"type="checkbox" value="1">
                     <br>
                     <label>Entidades financiadoras</label></p>
                     <input type="text" class="form-control" id="entfin" name="entfin">

                     <label>Fecha de inicio</label>
                     <input class="form-control" id="fechaini" name="fechaini" type="date">

                     <label>Fecha de finalización</label>
                     <input class="form-control" id="fechafin" name="fechafin" type="date">

                     <label>Subvención</label>
                     <input class="form-control" id="subvencion" name="subvencion">

                     <label>Investigador principal</label>
                     <input class="form-control" id="invprincipal" name="invprincipal"type="text" >

                     <label>Numero de investigadores</label>
                     <input class="form-control" id="numinv" name="numinv" type="text" >

                     <input type="hidden" name="tabla" value="innn" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertainnn" id="newinnn" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
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
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label>Autores</label></p>
                     <input type="text" class="form-control" id="autores" name="UD">

                     <label>Participación</label></p>
                     <input type="text" class="form-control" id="participacion" name="participacion">

                     <label>Congreso</label>
                     <input class="form-control" id="congreso" name="congreso">

                     <label>Regional</label>
                     <input class="form-control" id="regional" name="regional">

                     <label>Lugar de celebración</label>
                     <input class="form-control" id="lugar" name="lugar">

                     <label>Fecha de celebración</label>
                     <input class="form-control" id="fecha" name="fecha"type="date" >

                     <input type="hidden" name="tabla" value="io" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertaio" id="newio" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>
               </div>
             </div>
             <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
       </div></div>
               </div></div>

          <div class="modal fade" id="newga" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Cargo</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <input type="hidden" name="tabla" value="ga" >                     

                    <div class="modal-footer">
                    <input type="submit" name="insertaga" id="newga" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>
               

              <div class="modal fade" id="newgb" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Cargo sindical</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <input type="hidden" name="tabla" value="gb" >                     

                    <div class="modal-footer">
                    <input type="submit" name="insertagb" id="newgb" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>
              
              
              <div class="modal fade" id="newgc" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Nombre del órgano</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <input type="hidden" name="tabla" value="gc" >                     

                    <div class="modal-footer">
                    <input type="submit" name="insertagc" id="newgc" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>
              
              <div class="modal fade" id="newgd" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Nombre del comité/comisión</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <input type="hidden" name="tabla" value="gd" >                     

                    <div class="modal-footer">
                    <input type="submit" name="insertagd" id="newgd" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>
              
              <div class="modal fade" id="newge" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Nombre del tribunal/comisión de evaluación del PDI</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <input type="hidden" name="tabla" value="ge" >                     

                    <div class="modal-footer">
                    <input type="submit" name="insertage" id="newge" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>
              
              
              
              <div class="modal fade" id="newgff" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                 <form id="form_Cv_2" name="form_Cv_2" action="library/tablausuario/inserta.php" method='post'>
 
                   <div class="form-group">
                      <label for="nombre">Nombre del Proyecto</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">
                   </div>
 				  <br>

                 <label for="subtipo">Subtipo</label></p>
                    <select name="subtipo">    
                      <option value="1" selected="selected">Proyectos de convocatoria pública y competitiva concedidos a la ULPGC</option>
                      <option value="2">Proyectos de convocatoria pública y competitiva concedidos a otra institución científica</option>
                      <option value="3">Proyectos mediante convenios</option>
                    </select>
          <br>
          <br>
                     <label>Es Director</label></p>
                     <input id="director" name="director"type="checkbox" value="1">
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
                   <input type="hidden" name="tabla" value="gff" />
                   <div class="modal-footer">
                     <input type="submit" name="insertaia" id="newia" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                 </form>              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>


              <div class="modal fade" id="newgg" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                                 <form id="insertainnn" name="newinnn" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">
 
                     <label>Título</label></p>
                     <input type="text" class="form-control" id="titulo" name="titulo">

                     <label>Unidades Docentes</label></p>
                     <input type="text" class="form-control" id="UD" name="UD">

                     <label>Organizacion Financiadora</label></p>
                     <input type="text" class="form-control" id="orgfin" name="orgfin">
                     <br>
                     <label>Es Gestor</label></p>
                     <input id="gestor" name="gestor"type="checkbox" value="1">
                     <br>
                     <label>Entidades financiadoras</label></p>
                     <input type="text" class="form-control" id="entfin" name="entfin">

                     <label>Fecha de inicio</label>
                     <input class="form-control" id="fechaini" name="fechaini" type="date">

                     <label>Fecha de finalización</label>
                     <input class="form-control" id="fechafin" name="fechafin" type="date">

                     <label>Subvención</label>
                     <input class="form-control" id="subvencion" name="subvencion">

                     <label>Investigador principal</label>
                     <input class="form-control" id="invprincipal" name="invprincipal"type="text" >

                     <label>Numero de investigadores</label>
                     <input class="form-control" id="numinv" name="numinv" type="text" >

                     <input type="hidden" name="tabla" value="gg" />                     

                   <div class="modal-footer">
                     <input type="submit" name="insertagg" id="newgg" class="btn btn-success" style="width:100%;" value="Guardar"/>
                   </div>
                   </form>

              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>


              <div class="modal fade" id="newgh" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Título</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <label for="orgfin">Fecha</label></p>
                    <input type="date" class="form-control" id="fecha" name="fecha">

                    <label for="fechapub">Lugar</label>
                    <input class="form-control" id="lugar" name="lugar" type="text" >

                    <label for="participacion">Descripcion</label>
                    <input class="form-control" id="descripcion" name="descripcion" type="text" >

                    <input type="hidden" name="tabla" value="gh" >                     


                    <div class="modal-footer">
                    <input type="submit" name="insertagh" id="newgh" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div></div>
              </div></div>


              <div class="modal fade" id="newgi" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                <form id="insertaid" name="newid" action="library/tablausuario/inserta.php" method="post" class="form-horizontal" autocomplete="on">

                    <label for="nombre">Título</label></p>
                    <input type="text" class="form-control" id="titulo" name="titulo">

                    <label for="orgfin">Descripcion</label></p>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">

                    <input type="hidden" name="tabla" value="gi" >                     

                    <div class="modal-footer">
                    <input type="submit" name="insertagi" id="newgi" class="btn btn-success" style="width:100%;" value="Guardar"/>
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
	<script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>

	<script src="http://getbootstrap.com/2.3.2/assets/js/holder/holder.js"></script>
	<script src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
	<script src="http://getbootstrap.com/2.3.2/assets/js/application.js"></script>
  
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>