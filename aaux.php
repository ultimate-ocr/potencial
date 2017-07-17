<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="getbootstrap/bootstrap.css"	rel="stylesheet">
<link href="getbootstrap/bootstrap-responsive.css" rel="stylesheet">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<?php
//estoy hay que quitarlo, es solo para pruebas.
$_SESSION["id"]=8;
include 'library/libreria.php';
$pre=["A","B","C","D","E","F","G","H","I","J","K","L","M","Ñ","O","P","Q","R","S"];
header("Content-Type: text/html;charset=utf-8");
// Escribir un fichero en un array. En este ejemplo iremos a través de HTTP para
// obtener el código fuente HTML de un URL.
$fichero = file('txt/titulos.txt');
if($fichero!=NULL){
    $linea=htmlspecialchars($fichero[0]);
    $total=mostrar_total('ia');
    echo"<div class=\"container-fluid\">
        <h1 id=titulo>Planificaci&oacuten Acad&eacutemica</h1>
        <div id=\"table-responsive\">
            <div class=\"row-fluid\">
                <div class=\"span8\">CONCEPTO</div>
                <div class=\"span1\">UAD</div>
            </div>";
    if ($linea[3]="-")
        echo"
                <div class=\"row-fluid\">
                    <div class=\"accordion-toggle\" data-toggle=\"collapse\"
                        data-target=\"#collapseA\">
                        <div class=\"span8\">".$pre[0].$linea ."</div>
                        <div class=\"span1\">" .$total ."</div> </div>
                        <div class=\"offset10\">
                        <button style=\"color:blue; background-color: #ffffff;border: #ffffff\" data-toggle=\"modal\" data-target=\"#newia\"> <i class=\"material-icons\">add</i></button>
                        </button>
                    </div>
                </div>";
    
}
?>