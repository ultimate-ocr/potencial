

<?php


//$userid=$_SESSION["id"];

$userid=8;

$id = htmlspecialchars($_POST['id']);
$tabla = htmlspecialchars($_POST['tabla']);


$mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die("Error: No se pudo conectar");
}
  switch ($tabla) {
    case "ia":
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"



    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/update.php\" method='post'>
    
                      <div>
                         <label for=\"nombre\">Nombre del Proyecto</label>
                        <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" value = \"".$lineaBD['titulo']."\">
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Organización Financiadora</label>
                        <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\" value = \"".$lineaBD['orgfin']."\">
                      </div>
              <br>
              <div>
                        <label for=\"entcol\">Entidades Colaboradoras</label>
                        <input type=\"text\" class=\"form-control\" id=\"entcol\" name=\"entcol\" value = \"".$lineaBD['entidades']."\">
                      </div>
                      <br>
                      <div>
                        <label for=\"fechaini\">Fecha inicio</label>
                        <input class=\"form-control\" id=\"fechaini\" name=\"fechaini\" type=\"date\"\ value = \"".$lineaBD['desde']."\">
                        <label for=\"fechafin\">Fecha finalización</label>
                        <input class=\"form-control\" id=\"fechafin\" name=\"fechafin\"type=\"date\"\ value = \"".$lineaBD['hasta']."\">
                      </div>
                      <div>
                        <p class=\"subtitulo\"><label for=\"subtot\">Subvención total</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"subtot\" name=\"subtot\" value = \"".$lineaBD['subvencion']."\">
                      </div>
                      <div>
                        <p class=\"subtitulo\"><label for=\"investigador\">Investigador</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"investigador\" name=\"investigador\" value = \"".$lineaBD['invprincipal']."\">
                      </div>
                      <div>
                        <p class=\"subtitulo\"><label for=\"numinv\">Número de investigadores</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" value = \"".$lineaBD['numinv']."\">
                      </div>
                      <input type=\"hidden\" name=\"tabla\" value=\"ia\" />
                      <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                      <div class=\"modal-footer\">
                        <input type=\"submit\" name=\"insertaia\" id=\"newia\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                      </div>
                    </form>
";

      break;

      case "ib":
      $query = "SELECT * FROM $tabla WHERE id=$id ";
      $resultado = $mysqli->query($query);
      $lineaBD = $resultado->fetch_assoc();

      
     echo"    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/update.php\" method='post'>
     
                       <div>
                          <label for=\"nombre\">Nombre del Grupo</label>
                         <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" value = \"".$lineaBD['titulo']."\">
                       </div>
               <br>
                       <div>
                         <label for=\"orgfin\">Cargo</label>
                         <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"cargo\" value = \"".$lineaBD['cargo']."\">
                       </div>
               <br>
                       <input type=\"hidden\" name=\"tabla\" value=\"ib\" />
                       <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                       <div class=\"modal-footer\">
                         <input type=\"submit\" name=\"updateib\" id=\"updateib\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                       </div>
                     </form>
     ";
 
       break;
    

    case "ic":
     
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/update.php\" method='post'>
    
                      <div>
                         <label for=\"nombre\">Nombre del Proyecto</label>
                        <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" value = \"".$lineaBD['titulo']."\">
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Autores</label>
                        <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\" value = \"".$lineaBD['autores']."\">
                      </div>
              <br>
              <div>
                        <label for=\"entcol\">Medio de publicación</label>
                        <input type=\"text\" class=\"form-control\" id=\"entcol\" name=\"entcol\" value = \"".$lineaBD['revista']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"subtot\">ISBN </label></p>
                        <input type=\"text\" class=\"form-control\" id=\"subtot\" name=\"subtot\" value = \"".$lineaBD['isbn'].":".$lineaBD['clave'].":".$lineaBD['pin']."-".$lineaBD['pfin']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"investigador\">Fecha publicacion</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"investigador\" name=\"investigador\" value = \"".$lineaBD['fecha']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"numinv\">Impacto</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" value = \"".$lineaBD['impacto']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"numinv\">Citas</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" value = \"".$lineaBD['citas']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"numinv\">Acta</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" value = \"".$lineaBD['acta']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"numinv\">Editorial</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" value = \"".$lineaBD['editorial']."\">
                      </div>
                      <br>
                      <div>
                        <p class=\"subtitulo\"><label for=\"numinv\">Lugar de publicación</label></p>
                        <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" value = \"".$lineaBD['lugar']."\">
                      </div>
                      <input type=\"hidden\" name=\"tabla\" value=\"ic\" />
                      <div class=\"modal-footer\">
                        <input type=\"submit\" name=\"updateic\" id=\"updateic\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                      </div>
                    </form>
    ";
    break;

    case "id":
    
   $query = "SELECT * FROM $tabla WHERE id=$id";
   $resultado = $mysqli->query($query);
   $lineaBD = $resultado->fetch_assoc();

   echo"    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/update.php\" method='post'>
   
                     <div>
                        <label for=\"nombre\">Nombre Congreso</label>
                       <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" value = \"".$lineaBD['titulo']."\">
                     </div>
             <br>
                     <div>
                       <label for=\"orgfin\">Participacion</label>
                       <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\" value = \"".$lineaBD['participacion']."\">
                     </div>
             <br>
             <div>
                       <label for=\"entcol\">Ámbito</label>
                       <input type=\"text\" class=\"form-control\" id=\"entcol\" name=\"entcol\" value = \"".$lineaBD['regional']."\">
                     </div>
                     <br>
                     <div>
                       <p class=\"subtitulo\"><label for=\"subtot\">Lugar de realización </label></p>
                       <input type=\"text\" class=\"form-control\" id=\"subtot\" name=\"subtot\" value = \"".$lineaBD['lugar']."\">
                     </div>
                     <br>
                     <div>
                       <p class=\"subtitulo\"><label for=\"investigador\">Fecha realizacion</label></p>
                       <input type=\"text\" class=\"form-control\" id=\"investigador\" name=\"investigador\" value = \"".$lineaBD['fecha']."\">
                     </div>
                     <input type=\"hidden\" name=\"tabla\" value=\"id\" />
                     <div class=\"modal-footer\">
                       <input type=\"submit\" name=\"updateid\" id=\"updateid\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                     </div>
                   </form>
   ";


      break;
    case ie:
          
   $query = "SELECT * FROM $tabla WHERE id=$id";
   $resultado = $mysqli->query($query);
   $lineaBD = $resultado->fetch_assoc();

   echo"    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/update.php\" method='post'>
   
                     <div>
                        <label for=\"nombre\">Nombre Red de Investigación</label>
                       <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" value = \"".$lineaBD['red']."\">
                     </div>
             <br>
                     <div>
                       <label for=\"orgfin\">Unidades Docentes</label>
                       <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\" value = \"".$lineaBD['UD']."\">
                     </div>
             <br>
                     <input type=\"hidden\" name=\"tabla\" value=\"ie\" />
                     <div class=\"modal-footer\">
                       <input type=\"submit\" name=\"updateie\" id=\"updateie\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
                     </div>
                   </form>
   ";

      break;
    case 3:
      echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>";
      break;
    default:
      echo 'Su usuario es incorrecto, intente nuevamente.';
      break;
  }
  ?>