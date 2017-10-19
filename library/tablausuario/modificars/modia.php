

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script> $('#newia').modal('show');</script>
<?php

$tabla="ia";
if ($tabla=="ia")
echo"
<div class=\"modal fade\" id=\"newia\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"new\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
   <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h4 class=\"modal-title custom_align\" id=\"Heading\">NUEVA ENTRADA</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"panel-body\">
       <form id=\"form_Cv_2\" name=\"form_Cv_2\" action=\"library/tablausuario/inserta.php\" method='pos'>

         <div class=\"form-group\">
            <label for=\"nombre\">Nombre del Proyecto</label></p>
           <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\">
         </div>
         <br>
         <div class=\"form-group\">
           <label for=\"orgfin\">Organización Financiadora</label></p>
           <input type=\"text\" class=\"form-control\" id=\"orgfin\" name=\"orgfin\" value = \"caratortu\">
         </div>
         <br>
         <div class=\"form-group\">
           <label for=\"entcol\">Entidades Colaboradoras</label></p>
           <input type=\"text\" class=\"form-control\" id=\"entcol\" name=\"entcol\">
         </div>
         <br>
         <div class=\"form-group\">
           <label for=\"fechaini\">Fecha inicio</label>
           <input class=\"form-control\" id=\"fechaini\" name=\"fechaini\" type=\"date\" >
         </div>
           <label for=\"fechafin\">Fecha finalización</label>
           <input class=\"form-control\" id=\"fechafin\" name=\"fechafin\"type=\"date\" >
         </div>
         <div class=\"form-group\">
           <p class=\"subtitulo\"><label for=\"subtot\">Subvención total</label></p>
           <input type=\"text\" class=\"form-control\" id=\"subtot\" name=\"subtot\">
         </div>
         <div class=\"form-group\">
           <p class=\"subtitulo\"><label for=\"investigador\">Investigador</label></p>
           <input type=\"text\" class=\"form-control\" id=\"investigador\" name=\"investigador\" >
         </div>
         <div class=\"form-group\">
           <p class=\"subtitulo\"><label for=\"numinv\">Número de investigadores</label></p>
           <input type=\"text\" class=\"form-control\" id=\"numinv\" name=\"numinv\" >
         </div>
         <input type=\"hidden\" name=\"tabla\" value=\"ia\" />
         <div class=\"modal-footer\">
           <input type=\"submit\" name=\"insertaia\" id=\"newia\" class=\"btn btn-success\" style=\"width:100%;\" value=\"Guardar\"/>
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
else
echo"
<div class=\"modal fade\" id=\"newib\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"new\" aria-hidden=\"true\">
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
     </div></div>";
?>
