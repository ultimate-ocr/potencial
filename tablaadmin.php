  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión de los CV’s de los Grupos de Investigación de la ULPGC</title>
    <link rel="stylesheet" href="CSS/group.css">
    <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.2/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.2/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link href="CSS/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="JS/bootstrap.min.js"></script>
    </head>


<!--FORM CON ACCORDION-->
          <div id="accordion" class="text-center">
            <h3>Participación en Proyectos de I+D financiados en Convocatorias públicas</h3>
            <!--FORMULARIO PARTE 1-->
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
                        <!--th style="text-align:center;"><input type="checkbox" id="checkall" /></th-->
                        <th style="text-align:center;">Título del proyecto</th>
                        <th style="text-align:center;">Organismo financiador</th>
                        <!--th>Cuantía de la subvención</th-->
                        <!--th>Investigador principal</th-->
                        <!--th>Investigadores Participantes</th-->
                        <th style="text-align:center;">Editar</th>
                        <th style="text-align:center;">Eliminar</th>
                        <th style="text-align:center;">Duplicar</th>
                     </thead>
                     <tbody>
                       
                        <?php $cont=0;
           if($resultp1!=NULL){ 
            foreach ($resultp1 as $itemp1){
              if($cont==0){
                echo'<tr class="active">';
                $cont=1;
              }
                else {
                    echo' <tr>';
                    $cont=0;
                }
                         echo'<!--td><input type="checkbox" class="checkthis" /></td-->
                           <td>'.$itemp1['titulo'].'</td>
                           <td>'.$itemp1['orgfin'].'</td>
                           <!--td>'.$itemp1['subvencion'].'</td-->
                           <!--td>'.$itemp1['invprincipal'].'</td-->
                           <!--td>'.$itemp1['numinv'].'</td-->
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit'.$itemp1['id'].'" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                           </td>
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete'.$itemp1['id'].'" ><span class="glyphicon glyphicon-trash"></span></button></p>
                           </td> 
                           <td>
                              <p data-placement="top" data-toggle="tooltip" title="Duplicate"><button class="btn btn-info btn-xs" data-title="Duplicate" data-toggle="modal" data-target="#dupli'.$itemp1['id'].'" ><span class="glyphicon glyphicon-copy"></span></button></p>
                           </td></tr>
                          ';
               
                       
                 echo'    
                  <!--
                     <div class="clearfix"></div>
                     <ul class="pagination pull-right">
                       <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                     </ul><!-->

      <!-- /.EDITAR --> ';
 
        echo'<div class="modal fade" id="edit'.$itemp1['id'].'" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Editar</h4>
               </div>
               <div class="modal-body">
                   <div class="panel-body">
                <form id="form_Cv_1_edit" name="form_Cv_1_edit" action="Model/cv1edit.php" method="post" class="form-horizontal" autocomplete="on">
                <input type="hidden" name="idp1" value="' . $itemp1['id'] . '">
                  <div class="form-group">
                    <p class="subtitulo"><label for="pname">Título del proyecto</label></p>';
                 echo' <input type="text" class="form-control" id="pname" name="pname" value="'.$itemp1['titulo'].'">
                  </div>
                  <div class="form-group">
                     <p class="subtitulo"><label for="orgfina">Organismo financiador</label></p>
                    <input type="text" class="form-control" id="orgfina" name="orgfina" value="'.$itemp1['orgfin'].'">
                  </div>
                  <div class="form-group">
                    <p class="subtitulo"><label for="entidades">Entidades participantes</label></p>
                    <input type="text" class="form-control" id="entidadese" name="entidadese" value="'.$itemp1['entidades'].'">
                  </div>
                  <div class="form-group">
                    <p class="subtitulo"><label>Duración</label></p>
                    <div class="col-xs-6">
                      <div class="input-group input-append date" id="datetimepickerp1e">
                        <input type="date" class="form-control" name="date11e" value="'.$itemp1['desde'].'"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                   </div>
                  <div class="col-xs-6">
                      <div class="input-group input-append date" id="datetimepickerp11e">
                        <input type="date" class="form-control" name="date12e" value="'.$itemp1['hasta'].'"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                  </div>
                 </div>
                  <div class="form-group">
                      <label for="subvencion">Cuantía de la subvención</label></p>
                    <input type="text" class="form-control" id="subvencion" name="subvencion" value="'.$itemp1['subvencion'].'">
                  </div>
                 <div class="form-group"> 
                   <div class="col-xs-6">
                    <p class="subtitulo"><label for="investigadorp">Investigador Principal</label></p>
                    <select name="investigadorp" class="form-control" id="investigadorp">
                    <option default>'.$itemp1['invprincipal'].'</option>';
                      foreach ($grmembers as $resultmemb){
                      echo'<option>'.$resultmemb['name'].' '.$resultmemb['surname'].'</option>';}
                    echo'<input type="text" class="form-control" id="investigadorpr" name="investigadorpr" placeholder="Añadir aquí si no está en la lista" >';
                    echo'</select>
                     </div>
                     <div class="col-xs-6">
                      <p class="subtitulo"><label for="numeroinved">Investigadores Participantes</label></p>
                      <input id="numeroinved" type="text" class="form-control" value="'.$itemp1['numinv'].'" name="numeroinved"><hr>
                   </div></div>
                  <div class="modal-footer"> 
                    <input type="submit" name="CVparte1_edit" id="CVparte1_edit" class="btn btn-success" style="width:100%;" value="Editar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
         </div>
         <!-- /.modal-dialog --> 
      </div></div>
      
      <!--DUPLICAR-->
      <div class="modal fade" id="dupli'.$itemp1['id'].'" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Duplicar</h4>
               </div>
               <div class="modal-body">
                   <div class="panel-body">
                <form id="form_Cv_1_dup" name="form_Cv_1_dup" action="Model/cv1.php" method="post" class="form-horizontal" autocomplete="on">
                <input type="hidden" name="idp1" value="' . $itemp1['id'] . '">
                  
                 <input type="hidden" class="form-control" id="pname" name="pname" value="'.$itemp1['titulo'].'">
                 
                    <input type="hidden" class="form-control" id="orgfina" name="orgfina" value="'.$itemp1['orgfin'].'">
                 
                    <input type="hidden" class="form-control" id="entidadesd" name="entidadesd" value="'.$itemp1['entidades'].'">
                  
                        <input type="hidden" class="form-control" name="date11e" value="'.$itemp1['desde'].'"/>
                       
                        <input type="hidden" class="form-control" name="date12e" value="'.$itemp1['hasta'].'"/>
                        
                    <input type="hidden" class="form-control" id="subvencion" name="subvencion" value="'.$itemp1['subvencion'].'">
                    
                      <input type="hidden" class="form-control" id="investigadorp" name="investigadorp" value="'.$itemp1['invprincipal'].'">
                 
                      <input id="numeroinved" type="hidden" class="form-control" value="'.$itemp1['numinv'].'" name="numeroinved"><hr>
                  
                  <div class="modal-footer">
                    <input type="submit" name="CVparte1_dupli" id="CVparte1_dupli" class="btn btn-success" style="width:100%;" value="Duplicar"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
         </div>
         <!-- /.modal-dialog --> 
      </div></div>
      
      
      <!--ELIMINAR-->
      <div class="modal fade" id="delete'.$itemp1['id'].'" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Eliminar Fila</h4>
               </div>
               <div class="modal-body">
                  <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>¿Estás seguro?</div>
               </div>
               <div class="modal-footer ">
                <form id="form_Cv_1_delete" name="form_Cv_1_delete" action="Model/cv1delete.php" method="post">
                <input type="hidden" name="idp1d" value="' . $itemp1['id'] . '">
                  <input type="submit" class="btn btn-success" name="Cv_1_delete" id="Cv_1_delete" value="Si"/> 
                </form>
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
               </div>
            </div>
            <!-- /.modal-content --> 
         </div>
         <!-- /.modal-dialog --> 
      </div>';
                  }}; 
               ?>        
                  </tbody>
                  </table>
               </div>
            </div>
      </div>
            <!-- /.CREAR --> 
      <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">NUEVA ENTRADA</h4>
               </div>
               <div class="modal-body">
                   <div class="panel-body">
                <form id="form_Cv_1" name="form_Cv_1" action="Model/cv1.php" method="post" class="form-horizontal" autocomplete="on">
                  <div class="form-group">
                    <p class="subtitulo"><label for="pname">Título del proyecto</label></p>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="" >
                  </div>
                  <div class="form-group">
                     <p class="subtitulo"><label for="orgfin">Organismo financiador</label></p>
                    <input type="text" class="form-control" id="orgfin" name="orgfin" placeholder="" >
                  </div>
                  <div class="form-group">
                    <p class="subtitulo"><label for="entidades1">Entidades participantes</label></p>
                    <input type="text" class="form-control" id="entidades1" name="entidades1" placeholder="" >
                  </div>
                  <div class="form-group">
                    <p class="subtitulo"><label>Duración</label></p>
                    <div class="col-xs-6">
                      <div class="input-group input-append date" id="datetimepickerp31">
                        <input type="date" class="form-control" name="date1" placeholder="Desde"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                   </div>
                  <div class="col-xs-6">
                      <div class="input-group input-append date" id="datetimepickerp32">
                        <input type="date" class="form-control" name="date2" placeholder="Hasta" />
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                  </div>
                 </div>
                  <div class="form-group">
                      <label for="subvencion">Cuantía de la subvención</label></p>
                    <input type="text" class="form-control" id="subvencion" name="subvencion" value="€" >
                  </div>
                 <div class="form-group"> 
                   <div class="col-xs-6">
                    <p class="subtitulo"><label for="investigadorp">Investigador Principal</label></p>
                    <select name="investigadorp" class="form-control" id="investigadorp">
                      <?php foreach ($grmembers as $resultmemb){
                      echo'<option>'.$resultmemb['name'].' '.$resultmemb['surname'].'</option>';}
                     echo'<input type="text" class="form-control" id="investigadorpr" name="investigadorpr" placeholder="Añadir aquí si no está en la lista" >';
                      ?>
                    </select>
                    </div>
                     <div class="col-xs-6">
                      <p class="subtitulo"><label for="numeroinv">Investigadores Participantes</label></p>
                      <input id="numeroinv" type="text" value="2" name="numeroinv">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" name="CVparte1" id="CVparte1" class="btn btn-success" style="width:100%;" value="Crear"/>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content --> 
         </div>
         <!-- /.modal-dialog --> 
      </div></div>
              </div></p></div></div>