<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://localhost/potencial/library/tablausuario/library/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<link href="getbootstrap/bootstrap.css"	rel="stylesheet">
<link href="getbootstrap/bootstrap-responsive.css" rel="stylesheet">
</head>

<script type="text/javascript">
    $(window).load(function(){
        $('#newbb').modal('show');
    });
    </script>

<?php

//echo "<script>";
//echo "MiFuncionJS();";
//echo "</script>

//$userid=$_SESSION["id"];

$userid=8;

//$id = htmlspecialchars($_POST['id']);
//$tabla = htmlspecialchars($_POST['tabla']);

//echo $id.$tabla;
/*
$query="SELECT FROM $tabla WHERE userid='$userid' AND id='$id'";
if (!$resultado = $mysqli->query($query)) {
	// ¡Oh, no! La consulta falló. 
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $query . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
	}*/
/*$tabla='ia';

  switch ($tabla) {
    case "ia":
      

    echo"
               <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/inserta.php\" method=\"post\" class=\"form-horizontal\" autocomplete=\"on\">
    
                 <div class=\"form-group\">
                    <label for=\"nombre\">Nombre del Grupo de Investigación</label></p>
                   <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\">
                 </div>
                 <br>
                 <div class=\"form-group\">
                   <label for=\"orgfin\">Unidades Docentes</label></p>
                   <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\" value = \"cero\">
                 </div>
                 <br>
                  
                 <input type=\"hidden\" name=\"tabla\" value=\"ib\" />
                 <div class=\"modal-footer\">
                   <input type=\"submit\" name=\"insertaib\" id=\"newib\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                 </div>
               </form>
    ";

      /*break;
    case "ib":
     
    echo"
    
               <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/inserta.php\" method=\"post\" class=\"form-horizontal\" autocomplete=\"on\">
    
                 <div class=\"form-group\">
                    <label for=\"nombre\">Nombre del Grupo de Investigación</label></p>
                   <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" value = \"primero\">
                 </div>
                 <br>
                 <div class=\"form-group\">
                   <label for=\"orgfin\">Unidades Docentes</label></p>
                   <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\">
                 </div>
                 <br>
                  
                 <input type=\"hidden\" name=\"tabla\" value=\"ib\" />
                 <div class=\"modal-footer\">
                   <input type=\"submit\" name=\"insertaib\" id=\"newib\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                 </div>
               </form>
    ";

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
*/
    echo"

    <div class=\"modal fade\" id=\"newibb\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"new\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
       <div class=\"modal-content\">
          <div class=\"modal-header\">
             <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
             <h4 class=\"modal-title custom_align\" id=\"Heading\">NUEVA ENTRADA</h4>
          </div>
          <div class=\"modal-body\">
              <div class=\"panel-body\">
           <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/inserta.php\" method=\"post\" class=\"form-horizontal\" autocomplete=\"on\">

             <div class=\"form-group\">
                <label for=\"nombre\">Nombre del Grupo de Investigación</label></p>
               <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\">
             </div>
             <br>
             <div class=\"form-group\">
               <label for=\"orgfin\">Unidades Docentes</label></p>
               <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\">
             </div>
             <br>
              
             <input type=\"hidden\" name=\"tabla\" value=\"ib\" />
             <div class=\"modal-footer\">
               <input type=\"submit\" name=\"insertaib\" id=\"newib\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
             </div>
           </form>
         </div>
       </div>
       <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
 </div></div>
         </div></div>


";   
?>