<head>
<script src="http://localhost/potencial/library/tablausuario/library/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


</head>

<?php


//$userid=$_SESSION["id"];

$userid=8;

$id = htmlspecialchars($_POST['id']);
$tabla = htmlspecialchars($_POST['tabla']);
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
//$tabla='ib';

  switch ($tabla) {
    case "ia":
      

    echo"

    <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#newibb\">Open Modal</button>
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

      break;
    case "ic":
     
    echo"
    <script>
    $(document).ready(function()
    {
       $(\"#myModal\").modal(\"show\");
    });
 </script>
    
<div class=\"container\">
<h2>Modal Example</h2>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
  <div class=\"modal-dialog\">
  
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modal Header</h4>
      </div>
      <div class=\"modal-body\">
        <p>Some text in the modal.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
    
  </div>
</div>

</div>

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
  ?>