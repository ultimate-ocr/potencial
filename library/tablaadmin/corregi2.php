<!DOCTYPE html>
<html>
<head>
<style> 
#valido {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #00CC00;
    color: black;
}
#incompleto {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #FFFF00;
    color: black;
}
#invalido {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #FF0000;
    color: black;
}
</style>
</head>

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
   
    case "de":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();
    
    echo"
    
        <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
        
    
                           <div>
                             <label for=\"nombre\">Estado actual</label>
                             <br>";
                             switch ($lineaBD['estado']) {
                                case 0:
                                    echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                    break;
                                case 1:
                                    echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                    break;
                                case 2:
                                    echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                    break;
                                case 3:
                                    echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                    break;
                                default:
                                    echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                    break;
                            }
                            echo"
                          </div>
                  <br>
                          <div>
                             <label for=\"nombre\">Título</label>
                             <br>
                             ".$lineaBD['titulo']."
                          </div>
                  <br>
                          <div>
                            <label for=\"orgfin\">Codirectores</label>
                            <br>
                            ".$lineaBD['codirectores']."
                          </div>
                  <br>
    
                  <div>
                  <label for=\"numinv\">Tipo de Proyecto</label>
                  <br>
                  ";
                  if ($lineaBD['subtipo']=='1')
                    echo"<br>
                    <div>
                      Trabajo fin de Grado
                    </div>";
                  else
                  echo"<br>
                  <div>
                    Trabajo fin de Máster
                  </div>";
                echo"
                </div>
    
                  <div>
                      <label for=\"entcol\">Universidad</label>
                      <br>
                      ".$lineaBD['universidad']."
                    </div>
                    <br>
                    <div>
                      <label for=\"fechaini\">Año</label>
                      <br>
                      ".$lineaBD['anno']."
                      <br>
                      <label for=\"fechafin\">Calificación</label>
                      <br>
                      ".$lineaBD['calificacion']."
                    </div>
                    <div>
                      <label for=\"subtot\">Premios y Menciones de Calidad recibidos</label>
                      <br>
                      ".$lineaBD['premios']."
                    </div>
                    <div>
                    <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                    <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
                  </div>
                    <input type=\"hidden\" name=\"tabla\" value=\"de\" />
                    <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                    <div class=\"modal-footer\">
                    <div class=\"col-sm-4\">
                      <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                    <div class=\"col-sm-4\">
                      <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                    <div class=\"col-sm-4\">
                      <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                    </div>
                  </form>
    ";
    
          break;
    
    
    case "dff":
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Codirectores</label>
                        <br>
                        ".$lineaBD['codirectores']."
                      </div>
              <br>
              <div>
                  <label for=\"entcol\">Universidad</label>
                  <br>
                  ".$lineaBD['universidad']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Año</label>
                  <br>
                  ".$lineaBD['anno']."
                  <br>
                  <label for=\"fechafin\">Calificación</label>
                  <br>
                  ".$lineaBD['calificacion']."
                </div>
                <div>
                  <label for=\"subtot\">Doctorado Europeo:</label>";
                  if ($lineaBD['doctoradoeuropeo']=='1')
                    echo"Sí";
                  else
                echo"No";
                echo "</div>
                <div>
                <label for=\"subtot\">Mención de Calidad:</label>";
                if ($lineaBD['menciondecalidad']=='1')
                  echo"Sí";
                else
              echo"No";
              echo "</div>
                <input type=\"hidden\" name=\"tabla\" value=\"dff\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;
    
    case "dg":
    
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Autores</label>
                        <br>
                        ".$lineaBD['autores']."
                      </div>
              <br>
              <div>
                  <label for=\"entcol\">Tipo de publicación</label>
                  <br>
                  ".$lineaBD['tipo']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Página de inicio</label>
                  <br>
                  ".$lineaBD['pin']."
                  <br>
                  <label for=\"fechafin\">Página de finalización</label>
                  <br>
                  ".$lineaBD['pfin']."
                </div>
                <div>
                <label for=\"entcol\">Editorial</label>
                <br>
                ".$lineaBD['editorial']."
              </div>
              <br>
              <div>
                <label for=\"fechaini\">Año</label>
                <br>
                ".$lineaBD['anno']."
                <br>
                <label for=\"fechafin\">ISBN</label>
                <br>
                ".$lineaBD['isbn']."
              </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"dg\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

    
    case "dh":
    
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Participación</label>
                        <br>
                        ".$lineaBD['participacion']."
                      </div>
              <br>
              <div>
                  <label for=\"entcol\">Regional</label>
                  <br>
                  ".$lineaBD['regional']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Lugar</label>
                  <br>
                  ".$lineaBD['lugar']."
                  <br>
                  <label for=\"fechafin\">Fecha</label>
                  <br>
                  ".$lineaBD['fecha']."
                </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"dh\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;
    
    case "di":
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Autores</label>
                        <br>
                        ".$lineaBD['autores']."
                      </div>
              <br>
              <div>
              <label for=\"nombre\">Subtipo</label>
              <br>";
              switch ($lineaBD['subtipo']) {
                case 1:
                    echo "Reconocimiento de la investigación";
                    break;
                case 2:
                    echo "Publicaciones de investigación indexada";
                    break;
                case 3:
                    echo "Publicaciones de investigación no indexada";
                    break;
                default:
                    echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                    break;
            }
            echo"
              <div>
                  <label for=\"entcol\">Revista</label>
                  <br>
                  ".$lineaBD['revista']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">ISBN</label>
                  <br>
                  ".$lineaBD['isbn']."
                  <br>
                  <label for=\"fechafin\">Clave</label>
                  <br>
                  ".$lineaBD['clave']."
                </div>
                <div>
                  <label for=\"subtot\">Volumen total</label>
                  <br>
                  ".$lineaBD['volumen']."
                </div>
                <div>
                  <label for=\"investigador\">Página de inicio</label>
                  <br>
                  ".$lineaBD['pin']."
                </div>
                <div>
                  <label for=\"numinv\">Página de finalización</label>
                  <br>
                  ".$lineaBD['pfin']."
                </div>
                <div>
                <label for=\"fechaini\">Fecha</label>
                <br>
                ".$lineaBD['fecha']."
                <br>
                <label for=\"fechafin\">Impacto</label>
                <br>
                ".$lineaBD['impacto']."
              </div>
              <div>
                <label for=\"subtot\">Citas</label>
                <br>
                ".$lineaBD['citas']."
              </div>
              <div>
                <label for=\"investigador\">Acta</label>
                <br>
                ".$lineaBD['acta']."
              </div>
              <div>
                <label for=\"numinv\">Editorial</label>
                <br>
                ".$lineaBD['editorial']."
              </div>
              <div>
              <label for=\"numinv\">Lugar de publicación</label>
              <br>
              ".$lineaBD['lugar']."
            </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"di\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


    case "dk":
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Investigador</label>
                        <br>
                        ".$lineaBD['investigador']."
                      </div>
              <br>
              <div>
                  <label for=\"entcol\">Centro</label>
                  <br>
                  ".$lineaBD['centro']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">País</label>
                  <br>
                  ".$lineaBD['pais']."
                  <br>
                </div>
                <div>
                  <label for=\"subtot\">Fecha de inicio</label>
                  <br>
                  ".$lineaBD['inicio']."
                </div>
                <div>
                  <label for=\"investigador\">Fecha de finalización</label>
                  <br>
                  ".$lineaBD['fin']."
                </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"dk\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;
    
    case "ia":
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Nombre del Proyecto</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                  <div>
                    <label for=\"orgfin\">Subtipo</label>
                    <br>";
                        switch($lineaBD['subtipo']){
                          case 1:
                            echo"Proyecto de convocatoria pública y competitiva concedido a la ULPGC";
                            break;
                          case 2:
                            echo"Proyecto de convocatoria pública y competitiva concedido a otra institución científica";
                            break;

                          case 3;
                          echo"Proyecto mediante convenios";
                            break;
                        }
                  
                  
                  
                    echo"</div>
                    <br>
                  <div>
                    <label for=\"orgfin\">Organización Financiadora</label>
                    <br>
                    ".$lineaBD['orgfin']."
                  </div>
              <br>

              <div>
              <label for=\"numinv\">Es Director</label>";
              if ($lineaBD['director'])
                echo"
                <br>
                Sí";
              else
                echo"
                <br>
                No";
            echo"
            <br>
            </div>

              <div>
                  <label for=\"entcol\">Entidades Colaboradoras</label>
                  <br>
                  ".$lineaBD['entidades']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Fecha inicio</label>
                  <br>
                  ".$lineaBD['desde']."
                  <br>
                  <label for=\"fechafin\">Fecha finalización</label>
                  <br>
                  ".$lineaBD['hasta']."
                </div>
                <div>
                  <label for=\"subtot\">Subvención total</label>
                  <br>
                  ".$lineaBD['subvencion']."
                </div>
                <div>
                  <label for=\"investigador\">Investigador</label>
                  <br>
                  ".$lineaBD['invprincipal']."
                </div>
                <div>
                  <label for=\"numinv\">Número de investigadores</label>
                  <br>
                  ".$lineaBD['numinv']."
                </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"ia\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

      case "ib":
      
      $query = "SELECT * FROM $tabla WHERE id=$id";
      $resultado = $mysqli->query($query);
      $lineaBD = $resultado->fetch_assoc();
  
      echo"
  
      <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
      
  
                         <div>
                           <label for=\"nombre\">Estado actual</label>
                           <br>";
                           switch ($lineaBD['estado']) {
                              case 0:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                  break;
                              case 1:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                  break;
                              case 2:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                  break;
                              case 3:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                  break;
                              default:
                                  echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                  break;
                          }
                          echo"
                        </div>
                <br>
                        <div>
                           <label for=\"nombre\">Grupo de investigacion</label>
                           <br>";
                           $idgrupo=$lineaBD['groupid'];
                           $query = "SELECT * FROM grupoinv WHERE id=$idgrupo";
                           $resultado = $mysqli->query($query);
                           $aux = $resultado->fetch_assoc();
                           echo $aux['nombre'];                           
                        echo"</div>
                <br>
                    <div>
                      <label for=\"orgfin\">Cargo</label>
                      <br>
                      ".$lineaBD['cargo']."
                    </div>
                <br>
                  <div>
                  <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                  <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
                </div>
                  <input type=\"hidden\" name=\"tabla\" value=\"ib\" />
                  <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                  <div class=\"modal-footer\">
                  <div class=\"col-sm-4\">
                    <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                  <div class=\"col-sm-4\">
                    <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                  <div class=\"col-sm-4\">
                    <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                  </div>
                </form>
  ";
  
        break;
    

    case "ic":
     
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Subtipo</label>
                        <br>";
                        switch($lineaBD['subtipo']){
                          case 1:
                            echo"Reconocimiento de la investigación";
                            break;
                          case 2:
                            echo"Publicacion de investigación indexada";
                            break;

                          case 3;
                          echo"Publicacion de investigación no indexada";
                            break;
                        }
                      
                        echo "</div>
              <br>
              <div>
                  <label for=\"entcol\">Fecha de publicación</label>
                  <br>
                  ".$lineaBD['fecha']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Autores</label>
                  <br>
                  ".$lineaBD['autores']."
                  <br>
                  <label for=\"fechafin\">Revistas</label>
                  <br>
                  ".$lineaBD['revista']."
                </div>
                <div>
                  <label for=\"subtot\">ISBN</label>
                  <br>
                  ".$lineaBD['isbn']."
                </div>
                <div>
                  <label for=\"investigador\">Clave</label>
                  <br>
                  ".$lineaBD['clave']."
                </div>
                <div>
                  <label for=\"numinv\">Volumen</label>
                  <br>
                  ".$lineaBD['volumen']."
                </div>
                <div>
                  <label for=\"entcol\">Página de inicio</label>
                  <br>
                  ".$lineaBD['pin']."
                </div>
                <div>
                  <label for=\"fechaini\">Página de finalización</label>
                  <br>
                  ".$lineaBD['pfin']."
                  <br>
                  <label for=\"fechafin\">Impacto</label>
                  <br>
                  ".$lineaBD['impacto']."
                </div>
                <div>
                  <label for=\"subtot\">Citas</label>
                  <br>
                  ".$lineaBD['citas']."
                </div>
                <div>
                  <label for=\"investigador\">Acta</label>
                  <br>
                  ".$lineaBD['acta']."
                </div>
                <div>
                  <label for=\"numinv\">Editorial</label>
                  <br>
                  ".$lineaBD['editorial']."
                </div>
                <div>
                <label for=\"numinv\">Lugar de publicación</label>
                <br>
                ".$lineaBD['lugar']."
              </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"ic\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

    case "id":
    
       $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Nombre del Congreso</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Fecha</label>
                        <br>
                        ".$lineaBD['fecha']."
                      </div>
              <br>
              <div>
                  <label for=\"entcol\">Participación</label>
                  <br>
                  ".$lineaBD['participacion']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Regional</label>
                  <br>
                  ".$lineaBD['regional']."
                  <br>
                  <label for=\"fechafin\">Lugar de realización</label>
                  <br>
                  ".$lineaBD['lugar']."
                </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"id\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

    case "ie":
          
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
              <div>
              <label for=\"nombre\">Grupo de investigacion</label>
              <br>";
                $idred=$lineaBD['redid'];
                $query = "SELECT * FROM redinv WHERE id=$idred";
                $resultado = $mysqli->query($query);
                $aux = $resultado->fetch_assoc();
                echo $aux['nombre'];                           
           echo"</div>
             
           <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"ie\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

      case "iff":
      
         $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">TítuloProyecto</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"iff\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;
       
      case "ig":
      
      $query = "SELECT * FROM $tabla WHERE id=$id";
      $resultado = $mysqli->query($query);
      $lineaBD = $resultado->fetch_assoc();
  
      echo"
  
      <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
      
  
                         <div>
                           <label for=\"nombre\">Estado actual</label>
                           <br>";
                           switch ($lineaBD['estado']) {
                              case 0:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                  break;
                              case 1:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                  break;
                              case 2:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                  break;
                              case 3:
                                  echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                  break;
                              default:
                                  echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                  break;
                          }
                          echo"
                        </div>
                <br>
                        <div>
                           <label for=\"nombre\">Título</label>
                           <br>
                           ".$lineaBD['titulo']."
                        </div>
                <br>
                        <div>
                          <label for=\"orgfin\">Investigador principal</label>
                          <br>
                          ".$lineaBD['investigador']."
                        </div>
                <br>  
                <div>
                    <label for=\"entcol\">Editor</label>
                    <br>
                    ".$lineaBD['editor']."
                  </div>
                  <br>
                  <div>
                    <label for=\"fechaini\">Revista</label>
                    <br>
                    ".$lineaBD['revista']."
                    <br>
                    <label for=\"fechafin\">Impacto</label>
                    <br>
                    ".$lineaBD['impacto']."
                  </div>
                  <div>
                    <label for=\"subtot\">Nacional</label>
                    <br>
                    ".$lineaBD['nacional']."
                  </div>
                  <div>
                    <label for=\"investigador\">Fecha de inicio</label>
                    <br>
                    ".$lineaBD['desde']."
                  </div>
                  <div>
                    <label for=\"numinv\">Fecha de finalización</label>
                    <br>
                    ".$lineaBD['hasta']."
                  </div>
                  <div>
                  <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                  <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
                </div>
                  <input type=\"hidden\" name=\"tabla\" value=\"ig\" />
                  <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                  <div class=\"modal-footer\">
                  <div class=\"col-sm-4\">
                    <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                  <div class=\"col-sm-4\">
                    <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                  <div class=\"col-sm-4\">
                    <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                  </div>
                </form>
  ";
  
        break;
      
   case "ih":
   
   $query = "SELECT * FROM $tabla WHERE id=$id";
   $resultado = $mysqli->query($query);
   $lineaBD = $resultado->fetch_assoc();

   echo"

   <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
   

                      <div>
                        <label for=\"nombre\">Estado actual</label>
                        <br>";
                        switch ($lineaBD['estado']) {
                           case 0:
                               echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                               break;
                           case 1:
                               echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                               break;
                           case 2:
                               echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                               break;
                           case 3:
                               echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                               break;
                           default:
                               echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                               break;
                       }
                       echo"
                     </div>
             <br>
                     <div>
                        <label for=\"nombre\">Título</label>
                        <br>
                        ".$lineaBD['titulo']."
                     </div>
             <br>
                     <div>
                       <label for=\"orgfin\">Investigador principal</label>
                       <br>
                       ".$lineaBD['investigador']."
                     </div>
             <br>

             <div>
                 <label for=\"entcol\">Centro</label>
                 <br>
                 ".$lineaBD['centro']."
               </div>
               <br>
               <div>
                 <label for=\"fechaini\">País</label>
                 <br>
                 ".$lineaBD['pais']."
                 <br>
                 <label for=\"fechafin\">Fecha de inicio</label>
                 <br>
                 ".$lineaBD['desde']."
                 <br>
                 <label for=\"fechafin\">Fecha de finalización</label>
                 <br>
                 ".$lineaBD['hasta']."
               </div>
               <div>
               <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
               <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
             </div>
               <input type=\"hidden\" name=\"tabla\" value=\"ih\" />
               <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
               <div class=\"modal-footer\">
               <div class=\"col-sm-4\">
                 <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
               <div class=\"col-sm-4\">
                 <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
               <div class=\"col-sm-4\">
                 <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
               </div>
             </form>
";

     break;
      
  case "ii":
  
  $query = "SELECT * FROM $tabla WHERE id=$id";
  $resultado = $mysqli->query($query);
  $lineaBD = $resultado->fetch_assoc();

  echo"

  <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
  

                     <div>
                       <label for=\"nombre\">Estado actual</label>
                       <br>";
                       switch ($lineaBD['estado']) {
                          case 0:
                              echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                              break;
                          case 1:
                              echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                              break;
                          case 2:
                              echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                              break;
                          case 3:
                              echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                              break;
                          default:
                              echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                              break;
                      }
                      echo"
                    </div>
            <br>
                    <div>
                       <label for=\"nombre\">Título de la tesis</label>
                       <br>
                       ".$lineaBD['titulo']."
                    </div>
            <br>
              <div>
              <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
              <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
            </div>
              <input type=\"hidden\" name=\"tabla\" value=\"ii\" />
              <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
              <div class=\"modal-footer\">
              <div class=\"col-sm-4\">
                <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
              <div class=\"col-sm-4\">
                <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
              <div class=\"col-sm-4\">
                <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
              </div>
            </form>
";

    break;

 case "ij":
 
    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título de la Tesis</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
                      <br>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"ij\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;
      
case "ik":

$query = "SELECT * FROM $tabla WHERE id=$id";
$resultado = $mysqli->query($query);
$lineaBD = $resultado->fetch_assoc();

echo"

<form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>


                   <div>
                     <label for=\"nombre\">Estado actual</label>
                     <br>";
                     switch ($lineaBD['estado']) {
                        case 0:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 1:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 2:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        case 3:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        default:
                            echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                            break;
                    }
                    echo"
                  </div>
          <br>
                  <div>
                     <label for=\"nombre\">Título</label>
                     <br>
                     ".$lineaBD['titulo']."
                  </div>
          <br>
                  <div>
                    <label for=\"orgfin\">Organización Financiadora</label>
                    <br>
                    ".$lineaBD['orgfin']."
                  </div>
          <br>
          <div>
              <label for=\"entcol\">Entidades Colaboradoras</label>
              <br>
              ".$lineaBD['entidades']."
            </div>
            <br>
            <div>
              <label for=\"fechaini\">Fecha inicio</label>
              <br>
              ".$lineaBD['desde']."
              <br>
              <label for=\"fechafin\">Fecha finalización</label>
              <br>
              ".$lineaBD['hasta']."
            </div>
            <div>
              <label for=\"subtot\">Subvención total</label>
              <br>
              ".$lineaBD['subvencion']."
            </div>
            <div>
              <label for=\"investigador\">Investigador principal</label>
              <br>
              ".$lineaBD['invresponsable']."
            </div>
            <div>
              <label for=\"numinv\">Número de investigadores</label>
              <br>
              ".$lineaBD['numinv']."
            </div>
            <div>
            <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
            <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
          </div>
            <input type=\"hidden\" name=\"tabla\" value=\"ik\" />
            <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
            <div class=\"modal-footer\">
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
            </div>
          </form>
";

  break;

case "il":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Nombre del Proyecto</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Fecha de conseción</label>
                        <br>
                        ".$lineaBD['fecha']."
                      </div>
              <br>

              <div>
                  <label for=\"entcol\">Autores</label>
                  <br>
                  ".$lineaBD['autores']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">País</label>
                  <br>
                  ".$lineaBD['pais']."
                  <br>
                  <label for=\"fechafin\">Número de patente</label>
                  <br>
                  ".$lineaBD['patente']."
                </div>
                <div>
                  <label for=\"subtot\">Entidad titular</label>
                  <br>
                  ".$lineaBD['entidad']."
                </div>
                <div>
                  <label for=\"investigador\">Empresa explotadora</label>
                  <br>
                  ".$lineaBD['empresa']."
                </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"il\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;
      
case "im":

$query = "SELECT * FROM $tabla WHERE id=$id";
$resultado = $mysqli->query($query);
$lineaBD = $resultado->fetch_assoc();

echo"

<form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>


                   <div>
                     <label for=\"nombre\">Estado actual</label>
                     <br>";
                     switch ($lineaBD['estado']) {
                        case 0:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 1:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 2:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        case 3:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        default:
                            echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                            break;
                    }
                    echo"
                  </div>
          <br>
                  <div>
                     <label for=\"nombre\">Razón social</label>
                     <br>
                     ".$lineaBD['titulo']."
                  </div>
          <br>
                  <div>
                    <label for=\"orgfin\">CIF</label>
                    <br>
                    ".$lineaBD['CIF']."
                  </div>
          <br>
            <div>
            <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
            <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
          </div>
            <input type=\"hidden\" name=\"tabla\" value=\"im\" />
            <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
            <div class=\"modal-footer\">
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
            </div>
          </form>
";

  break;
      
case "inn":

$query = "SELECT * FROM $tabla WHERE id=$id";
$resultado = $mysqli->query($query);
$lineaBD = $resultado->fetch_assoc();

echo"

<form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>


                   <div>
                     <label for=\"nombre\">Estado actual</label>
                     <br>";
                     switch ($lineaBD['estado']) {
                        case 0:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 1:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 2:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        case 3:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        default:
                            echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                            break;
                    }
                    echo"
                  </div>
          <br>
                  <div>
                     <label for=\"nombre\">Título</label>
                     <br>
                     ".$lineaBD['titulo']."
                  </div>
          <br>
                  <div>
                    <label for=\"orgfin\">Investigadores</label>
                    <br>
                    ".$lineaBD['investigadores']."
                  </div>
          <br>
          <div>
              <label for=\"entcol\">Entidades Colaboradoras</label>
              <br>
              ".$lineaBD['entidad']."
            </div>
            <br>
            <div>
              <label for=\"fechaini\">Tema</label>
              <br>
              ".$lineaBD['tema']."
              <br>
              <label for=\"fechafin\">Fecha de colabración</label>
              <br>
              ".$lineaBD['fecha']."
            </div>
            <div>
            <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
            <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
          </div>
            <input type=\"hidden\" name=\"tabla\" value=\"inn\" />
            <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
            <div class=\"modal-footer\">
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
            </div>
          </form>
";

  break;
      
case "innn":

$query = "SELECT * FROM $tabla WHERE id=$id";
$resultado = $mysqli->query($query);
$lineaBD = $resultado->fetch_assoc();

echo"

<form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>


                   <div>
                     <label for=\"nombre\">Estado actual</label>
                     <br>";
                     switch ($lineaBD['estado']) {
                        case 0:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 1:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                            break;
                        case 2:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        case 3:
                            echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                            break;
                        default:
                            echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                            break;
                    }
                    echo"
                  </div>
          <br>
                  <div>
                     <label for=\"nombre\">Título</label>
                     <br>
                     ".$lineaBD['titulo']."
                  </div>
          <br>
                  <div>
                    <label for=\"orgfin\">Organización Financiadora</label>
                    <br>
                    ".$lineaBD['orgfin']."
                  </div>
          <br>

          <div>
          <p class=\"subtitulo\"><label for=\"numinv\">Es Gestor</label></p>";
          if ($lineaBD['gestor'])
            echo"Sí";
          else
            echo"No";
        echo"
        </div>

          <div>
              <label for=\"entcol\">Entidades financiadoras</label>
              <br>
              ".$lineaBD['entidades']."
            </div>
            <br>
            <div>
              <label for=\"fechaini\">Subvencion</label>
              <br>
              ".$lineaBD['subvencion']."
              <br>
              <label for=\"fechafin\">Fecha de inicion</label>
              <br>
              ".$lineaBD['desde']."
            </div>
            <div>
              <label for=\"subtot\">Fecha de finalización</label>
              <br>
              ".$lineaBD['hasta']."
            </div>
            <div>
              <label for=\"investigador\">Investigador principal</label>
              <br>
              ".$lineaBD['invprincipal']."
            </div>
            <div>
              <label for=\"numinv\">Número de investigadores</label>
              <br>
              ".$lineaBD['numinv']."
            </div>
            <div>
            <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
            <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
          </div>
            <input type=\"hidden\" name=\"tabla\" value=\"innn\" />
            <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
            <div class=\"modal-footer\">
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
            <div class=\"col-sm-4\">
              <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
            </div>
          </form>
";

  break;

case "io":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Autores</label>
                        <br>
                        ".$lineaBD['autores']."
                      </div>
              <br>

              <div>
                  <label for=\"entcol\">Participación</label>
                  <br>
                  ".$lineaBD['participacion']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Congreso</label>
                  <br>
                  ".$lineaBD['congreso']."
                  <br>
                  <label for=\"fechafin\">Regional</label>
                  <br>
                  ".$lineaBD['regional']."
                </div>
                <div>
                  <label for=\"subtot\">Lugar de celebración</label>
                  <br>
                  ".$lineaBD['lugar']."
                </div>
                <div>
                  <label for=\"investigador\">Fecha de celebración</label>
                  <br>
                  ".$lineaBD['fecha']."
                </div>

                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"io\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

case "ga":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"ga\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "gb":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gb\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "gc":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gc\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "gd":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gd\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "ge":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"ge\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "gff":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>";

              switch ($lineaBD['subtipo']) {
                case 1:
                    echo "Proyectos de convocatoria pública y competitiva concedidos a la ULPGC";
                    break;
                case 2:
                    echo "Proyectos mediante convenios";
                    break;
                default:
                    echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                    break;
            }
            echo"
              <br>
              <br>
              <label for=\"nombre\">Es gestor</label>
              <br>";
            if ($lineaBD['director'])
              echo"
              Sí";
            else
              echo"
              No";
            echo"
                  <br>
                      <div>
                        <label for=\"orgfin\">Organización Financiadora</label>
                        <br>
                        ".$lineaBD['orgfin']."
                      </div>
              <br>

              <div>
                  <label for=\"entcol\">Entidades</label>
                  <br>
                  ".$lineaBD['entidades']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Fecha de inicio</label>
                  <br>
                  ".$lineaBD['desde']."
                  <br>
                  <label for=\"fechafin\">Fecha de finalización</label>
                  <br>
                  ".$lineaBD['hasta']."
                </div>
                <div>
                  <label for=\"subtot\">Subvención</label>
                  <br>
                  ".$lineaBD['subvencion']."
                </div>
                <div>
                  <label for=\"investigador\">Investigador principal</label>
                  <br>
                  ".$lineaBD['invprincipal']."
                </div>
                <div>
                <label for=\"investigador\">Número de investigadores</label>
                <br>
                ".$lineaBD['numinv']."
              </div>

                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gff\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "gg":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>

                      <div>
                        <label for=\"orgfin\">Organización financiadora</label>
                        <br>
                        ".$lineaBD['orgfin']."
                      </div>
              <br>";
              echo"
              <label for=\"nombre\">Es gestor</label>
              <br>";
            if ($lineaBD['gestor'])
              echo"
              Sí";
            else
              echo"
              No";
            echo"

              <div>
                  <label for=\"entcol\">Entidades financiadoras</label>
                  <br>
                  ".$lineaBD['entidades']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Subvención</label>
                  <br>
                  ".$lineaBD['subvencion']."
                  </div>
                  <div>
                  <label for=\"fechafin\">Fecha de inicio</label>
                  <br>
                  ".$lineaBD['desde']."
                </div>
                <div>
                  <label for=\"subtot\">Fecha de finalización</label>
                  <br>
                  ".$lineaBD['hasta']."
                </div>
                <div>
                  <label for=\"investigador\">Investigador principal</label>
                  <br>
                  ".$lineaBD['invprincipal']."
                </div>
                <div>
                <label for=\"investigador\">Número de investigadores</label>
                <br>
                ".$lineaBD['numinv']."
              </div>

                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gg\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;


case "gh":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Fecha</label>
                        <br>
                        ".$lineaBD['fecha']."
                      </div>
              <br>

              <div>
                  <label for=\"entcol\">Lugar de celebración</label>
                  <br>
                  ".$lineaBD['lugar']."
                </div>
                <br>
                <div>
                  <label for=\"fechaini\">Descripción</label>
                  <br>
                  ".$lineaBD['descripcion']."
                  <br>

                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gh\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;

      
case "gi":

    $query = "SELECT * FROM $tabla WHERE id=$id";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();

    echo"

    <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablaadmin/corregir.php\" method='post'>
    

                       <div>
                         <label for=\"nombre\">Estado actual</label>
                         <br>";
                         switch ($lineaBD['estado']) {
                            case 0:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:grey\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 1:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:green\">fiber_manual_record</i>".$lineaBD['infoestado'];
                                break;
                            case 2:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:yellow\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            case 3:
                                echo"<i class=\"material-icons\" style=\"font-size:24px;color:red\">fiber_manual_record</i>".$lineaBD['infoestado'];;
                                break;
                            default:
                                echo 'El estado no es correcto. Contacte con el administrador de la base de datos';
                                break;
                        }
                        echo"
                      </div>
              <br>
                      <div>
                         <label for=\"nombre\">Título</label>
                         <br>
                         ".$lineaBD['titulo']."
                      </div>
              <br>
                      <div>
                        <label for=\"orgfin\">Descripción</label>
                        <br>
                        ".$lineaBD['descripcion']."
                      </div>
              <br>

                <div>
                <p class=\"subtitulo\"><label for=\"numinv\">Comentarios</label></p>
                <textarea rows=\"5\" class=\"form-control\" id=\"infoestado\" name=\"infoestado\">".$lineaBD['infoestado']."</textarea>
              </div>
                <input type=\"hidden\" name=\"tabla\" value=\"gi\" />
                <input type=\"hidden\" name=\"id\" value=\"".$id."\" />
                <div class=\"modal-footer\">
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"valido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Correcto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correccion\" id=\"incompleto\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Incompleto\"/ color: red></div>
                <div class=\"col-sm-4\">
                  <input type=\"submit\" name=\"correcion\" id=\"invalido\" class=\"btn btn-success\" style=\"width:100%;\" value=\"No Valido\"/ color: red></div>
                </div>
              </form>
";

      break;




default:
echo "ha fallado la edición, pruebe de nuevo";

  }
  ?>