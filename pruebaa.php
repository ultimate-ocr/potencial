<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>





<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus-sign"></span></button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
             <form  action="model/ia.php" method="post" class="form-horizontal" autocomplete="on">

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
        </div>
                  <div class="modal-footer">
                    <input type="submit" name="CVparte2" id="CVparte2" class="btn btn-success" style="width:100%;" value="Guardar"/>
                  </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
