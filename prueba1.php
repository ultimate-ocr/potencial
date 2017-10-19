<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="getbootstrap/bootstrap.css"	rel="stylesheet">
<link href="getbootstrap/bootstrap-responsive.css" rel="stylesheet">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<script src="http://localhost/potencial/library/tablausuario/library/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
</head>

<button style="color:blue; background-color: #ffffff;border: #ffffff" data-toggle="modal" data-target="#newibb"> <i class="material-icons">add</i></button>
                        </button>


<div class="modal fade" id="newibb" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
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
