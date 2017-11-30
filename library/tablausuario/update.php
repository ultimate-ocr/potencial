<?php


//$userid=$_SESSION["id"];

$userid=8;


$mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die("Error: No se pudo conectar");
}
$tabla = htmlspecialchars($_POST['tabla']);
$id = htmlspecialchars($_POST['id']);
  switch ($tabla) {

    case "de":
        $titulo = htmlspecialchars($_POST['titulo']);
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $codirectores = htmlspecialchars($_POST['codirectores']);
        $universidad = htmlspecialchars($_POST['universidad']);
        $anno = htmlspecialchars($_POST['anno']);
        $calificacion = htmlspecialchars($_POST['calificacion']);
        $premios = htmlspecialchars($_POST['premios']);

        $query = "UPDATE $tabla SET titulo='$titulo', subtipo='$subtipo', codirectores='$codirectores', universidad='$universidad',
                                    anno='$anno', calificacion='$calificacion', premios='$premios' WHERE id='$id'";

        break;

    case "dff":
        $titulo = htmlspecialchars($_POST['titulo']);
        $codirectores = htmlspecialchars($_POST['codirectores']);
        $universidad = htmlspecialchars($_POST['universidad']);
        $anno = htmlspecialchars($_POST['anno']);
        $calificacion = htmlspecialchars($_POST['calificacion']);
        $doctoradoeuropeo = htmlspecialchars($_POST['doctoradoeuropeo']);
        $menciondecalidad = htmlspecialchars($_POST['menciondecalidad']);

        $query = "UPDATE $tabla SET titulo='$titulo', codirectores='$codirectores', universidad='$universidad',
        anno='$anno', calificacion='$calificacion', doctoradoeuropeo='$doctoradoeuropeo', menciondecalidad='$menciondecalidad' WHERE id='$id'";

        break;

    case "dg":
        $titulo = htmlspecialchars($_POST['titulo']);
        $participacion = htmlspecialchars($_POST['participacion']);
        $regional = htmlspecialchars($_POST['regional']);
        $lugar = htmlspecialchars($_POST['lugar']);
        $fecha = htmlspecialchars($_POST['fecha']);

        $query = "UPDATE $tabla SET titulo='$titulo', participacion='$participacion', regional='$regional', lugar='$lugar', fecha='$fecha' WHERE id='$id'";

        break;

    case "dh":
        $titulo = htmlspecialchars($_POST['titulo']);
        $participacion = htmlspecialchars($_POST['participacion']);
        $regional = htmlspecialchars($_POST['regional']);
        $lugar = htmlspecialchars($_POST['lugar']);
        $fecha = htmlspecialchars($_POST['fecha']);

        $query = "UPDATE $tabla SET titulo='$titulo', participacion='$participacion', regional='$regional', lugar='$lugar', fecha='$fecha' WHERE id='$id'";
        echo $query;
        break;

    case "di":
        $titulo = htmlspecialchars($_POST['titulo']);
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $autores = htmlspecialchars($_POST['autores']);
        $revista = htmlspecialchars($_POST['revista']);
        $isbn = htmlspecialchars($_POST['isbn']);
        $clave = htmlspecialchars($_POST['clave']);
        $pin = htmlspecialchars($_POST['pin']);
        $pfin = htmlspecialchars($_POST['pfin']);
        $fecha = htmlspecialchars($_POST['fecha']);
        $volumen = htmlspecialchars($_POST['volumen']);
        $impacto = htmlspecialchars($_POST['impacto']);
        $citas = htmlspecialchars($_POST['citas']);
        $editorial = htmlspecialchars($_POST['editorial']);
        $acta = htmlspecialchars($_POST['acta']);
        $lugar = htmlspecialchars($_POST['lugar']);

        $query = "UPDATE $tabla SET titulo='$titulo', subtipo ='$subtipo', autores='$autores', revista='$revista', isbn='$isbn', clave='$clave',
        pin='$pin', pfin='$pfin', fecha='$fecha', volumen='$volumen', impacto='$impacto', citas='$citas', editorial='$editorial', acta='$acta', lugar='$lugar'
         WHERE id='$id'";

        break;

    case "dk":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $investigador = htmlspecialchars($_POST['investigador']);
        $centro = htmlspecialchars($_POST['centro']);
        $pais = htmlspecialchars($_POST['pais']);
        $inicio = htmlspecialchars($_POST['inicio']);
        $fin = htmlspecialchars($_POST['fin']);

        $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', centro='$centro', pais='$pais', 
        inicio='$inicio', fin='$fin' WHERE id='$id'";

        break;

    case "ia":
        $nombre = htmlspecialchars($_POST['titulo']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entcol = htmlspecialchars($_POST['entcol']);
        $fechaini = htmlspecialchars($_POST['fechaini']);
        $fechafin = htmlspecialchars($_POST['fechafin']);
        $subtot = htmlspecialchars($_POST['subtot']);
        $investigador = htmlspecialchars($_POST['investigador']);
        $numinv = htmlspecialchars($_POST['numinv']);
        $director = htmlspecialchars($_POST['director']);

      
        $query = "UPDATE $tabla SET titulo='$nombre', orgfin='$orgfin', entidades='$entcol', desde='$fechaini', hasta='$fechafin', subvencion='$subtot',
        invprincipal='$investigador', numinv='$numinv', director='$director' WHERE id='$id'";
        
        break;

    case "ib":

    $cargo = htmlspecialchars($_POST['cargo']);  
    $idgrupo = htmlspecialchars($_POST['select']);
    $query="SELECT * FROM grupoinv WHERE id=$idgrupo";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();
    $nombre = $lineaBD['nombre'];
    
    $query = "UPDATE $tabla SET titulo='$nombre',groupid='$idgrupo', cargo='$cargo' WHERE id='$id'";
        break;


    case 'ic':
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $fechapub = htmlspecialchars($_POST['fechapub']);
            $autores = htmlspecialchars($_POST['autores']);
            $revista = htmlspecialchars($_POST['revista']);
            $isbn = htmlspecialchars($_POST['isbn']);
            $clave = htmlspecialchars($_POST['clave']);
            $pin = htmlspecialchars($_POST['pin']);
            $pfin = htmlspecialchars($_POST['pfin']);
            $fecha = htmlspecialchars($_POST['fechapub']);
            $volumen = htmlspecialchars($_POST['volumen']);
            $impacto = htmlspecialchars($_POST['impacto']);
            $citas = htmlspecialchars($_POST['citas']);
            $editorial = htmlspecialchars($_POST['editorial']);
            $acta = htmlspecialchars($_POST['acta']);
            $lugar = htmlspecialchars($_POST['lugar']);
    
            $query = "UPDATE $tabla SET userid='$userid', UD='$ud', titulo='$titulo', subtipo='$subtipo', autores='$autores',
            revista='$revista', isbn='$isbn', clave='$clave', volumen='$volumen', pin='$pin',
            pfin='$pfin',fecha='$fecha', impacto='$impacto', citas='$citas', acta='$acta', editorial='$editorial', lugar='$lugar' WHERE id='$id'";
            break;


            case 'id':
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $fecha = htmlspecialchars($_POST['fecha']);
                    $participacion = htmlspecialchars($_POST['participacion']);
                    $regional = htmlspecialchars($_POST['regional']);
                    $lugar = htmlspecialchars($_POST['lugar']);
                    $query = "UPDATE $tabla SET userid='$userid', UD='$ud', titulo='$titulo', participacion='$participacion',
                     regional='$regional', lugar='$lugar', fecha='$fecha' WHERE id ='$id'";
            
                    break;
            
            case 'ie':

            $idred = htmlspecialchars($_POST['select']);
            $query="SELECT * FROM redinv WHERE id=$idred";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $nombre = $lineaBD['nombre'];
            
            $query = "UPDATE $tabla SET titulo='$nombre',redid='$idred' WHERE id='$id'";
                break;
                    echo $query;
                    break;
            
                    case 'iff':
            
                        
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $query = "UPDATE $tabla SET titulo='$titulo' WHERE id='$id'";
                    break;
            
                    case 'ig':
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $investigador = htmlspecialchars($_POST['investigador']);
                    $editor = htmlspecialchars($_POST['editor']);
                    $revista = htmlspecialchars($_POST['revista']);
                    $impacto = htmlspecialchars($_POST['impacto']);
                    $nacional = htmlspecialchars($_POST['nacional']);
                    $desde = htmlspecialchars($_POST['desde']);
                    $hasta = htmlspecialchars($_POST['hasta']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', editor='$editor', revista='$revista', impacto='$impacto', nacional='$nacional', 
                    desde='$desde', hasta='$hasta' WHERE id='$id'";
            
                    break;
            
                    case 'ih':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $investigador = htmlspecialchars($_POST['investigador']);
                    $centro = htmlspecialchars($_POST['centro']);
                    $pais = htmlspecialchars($_POST['pais']);
                    $inicio = htmlspecialchars($_POST['inicio']);
                    $fin = htmlspecialchars($_POST['fin']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', centro='$centro',
                    pais='$pais', inicio='$inicio', fin='$fin' WHERE id='$id'";
                    break;
            
                    case 'ii':
             
                    $idtesis = htmlspecialchars($_POST['select']);
                    $query="SELECT * FROM tesis WHERE id=$idtesis";
                    $resultado = $mysqli->query($query);
                    $lineaBD = $resultado->fetch_assoc();
                    $titulo = $lineaBD['titulo'];
                    $query = "UPDATE $tabla SET titulo='$titulo', tesisid='$idtesis' WHERE id='$id'";
                    break;
            
                    case 'ij':
            
                    $idtesis = htmlspecialchars($_POST['select']);
                    $query="SELECT * FROM tesis WHERE id=$idtesis";
                    $resultado = $mysqli->query($query);
                    $lineaBD = $resultado->fetch_assoc();
                    $titulo = $lineaBD['titulo'];
                    $query = "UPDATE $tabla SET titulo='$titulo', tesisid='$idtesis' WHERE id='$id'";
                    break;
                    
                    case 'ik':
            
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $orgfin = htmlspecialchars($_POST['orgfin']);
                    $entidades = htmlspecialchars($_POST['entidades']);
                    $desde = htmlspecialchars($_POST['desde']);
                    $hasta = htmlspecialchars($_POST['hasta']);
                    $invresponsable = htmlspecialchars($_POST['invresponsable']);
                    $numinv = htmlspecialchars($_POST['numinv']);
                    $subvencion = htmlspecialchars($_POST['subvencion']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', orgfin='$orgfin', entidades='$entidades', desde='$desde', hasta='$hasta',
                    invresponsable='$invresponsable', numinv='$numinv', subvencion='$subvencion' WHERE id='$id'";
            
                    break;
            
                    
                    case 'il':
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $fecha = htmlspecialchars($_POST['fecha']);
                    $autores = htmlspecialchars($_POST['autores']);
                    $pais = htmlspecialchars($_POST['pais']);
                    $patente = htmlspecialchars($_POST['patente']);
                    $entidad = htmlspecialchars($_POST['entidad']);
                    $empresa = htmlspecialchars($_POST['empresa']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', fecha='$fecha', autores='$autores', pais='$pais', patente='$patente',
                    entidad='$entidad', empresa='$empresa' WHERE id='$id'";
            
                    break;
                    
                    case 'im':
            
                    
                    $titulo = htmlspecialchars($_POST['razsocial']);
                    $ud = 4;
                    $CIF = htmlspecialchars($_POST['CIF']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', CIF='$CIF' WHERE id='$id'";
                    break;
            
                    case 'inn':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $entidad = htmlspecialchars($_POST['entidad']);
                    $investigadores = htmlspecialchars($_POST['investigadores']);
                    $tema = htmlspecialchars($_POST['tema']);
                    $fecha = htmlspecialchars($_POST['fecha']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', entidad='$entidad', investigadores='$investigadores',
                    tema='$tema', fecha='$fecha' WHERE id='$id'";
            
                    break;
            
                    case 'innn':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $orgfin = htmlspecialchars($_POST['orgfin']);
                    $entidades = htmlspecialchars($_POST['entidades']);
                    $desde = htmlspecialchars($_POST['desde']);
                    $hasta = htmlspecialchars($_POST['hasta']);
                    $subvencion = htmlspecialchars($_POST['subvencion']);
                    $invprincipal = htmlspecialchars($_POST['invprincipal']);
                    $numinv = htmlspecialchars($_POST['numinv']);
                    $gestor = htmlspecialchars($_POST['gestor']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', orgfin='$orgfin', entidades='$entidades', desde='$desde', hasta='$hasta',
                    subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', gestor='$gestor' WHERE id='$id'";
            
                    break;
            
                    case 'io':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $autores = htmlspecialchars($_POST['autores']);
                    $participacion = htmlspecialchars($_POST['participacion']);
                    $congreso = htmlspecialchars($_POST['congreso']);
                    $regional = htmlspecialchars($_POST['regional']);
                    $lugar = htmlspecialchars($_POST['lugar']);
                    $fecha = htmlspecialchars($_POST['fecha']);
            
                    $query = "UPDATE $tabla SET titulo='$titulo', autores='$autores', participacion='$participacion', congreso='$congreso',
                    regional='$regional', lugar='$lugar', fecha='$fecha' WHERE id='$id'";
            
                    break;

    case "ga":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        $query = "UPDATE $tabla SET titulo='$titulo' WHERE id='$id'";

        break;

    case "gb":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        $query = "UPDATE $tabla SET titulo='$titulo' WHERE id='$id'";

        break;

    case "gc":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        $query = "UPDATE $tabla SET titulo='$titulo' WHERE id='$id'";

        break;

    case "gd":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        $query = "UPDATE $tabla SET titulo='$titulo' WHERE id='$id'";

        break;

    case "ge":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        $query = "UPDATE $tabla SET titulo='$titulo' WHERE id='$id'";

        break;

    case "gff":
        $titulo = htmlspecialchars($_POST['titulo']);
        $director = htmlspecialchars($_POST['director']);
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entidades = htmlspecialchars($_POST['entidades']);
        $desde = htmlspecialchars($_POST['desde']);
        $hasta = htmlspecialchars($_POST['hasta']);
        $subvencion = htmlspecialchars($_POST['subvencion']);
        $invprincipal = htmlspecialchars($_POST['invprincipal']);
        $numinv = htmlspecialchars($_POST['numinv']);

        $query = "UPDATE $tabla SET titulo='$titulo', director='$director', subtipo='$subtipo', orgfin='$orgfin', entidades='$entidades', desde='$desde',
        hasta='$hasta', subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv'WHERE id='$id'";
        echo $query;
        break;

    case "gg":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $gestor = htmlspecialchars($_POST['gestor']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entidades = htmlspecialchars($_POST['entidades']);
        $desde = htmlspecialchars($_POST['desde']);
        $hasta = htmlspecialchars($_POST['hasta']);
        $subvencion = htmlspecialchars($_POST['subvencion']);
        $invprincipal = htmlspecialchars($_POST['invprincipal']);
        $numinv = htmlspecialchars($_POST['numinv']);

        $query = "UPDATE $tabla SET titulo='$titulo', gestor='$gestor', orgfin='$orgfin', entidades='$entidades', desde='$desde',
        hasta='$hasta', subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv' WHERE id='$id' ";

        break;

    case "gh":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $fecha = htmlspecialchars($_POST['fecha']);
        $lugar = htmlspecialchars($_POST['lugar']);
        $descripcion = htmlspecialchars($_POST['descripcion']);

        $query = "UPDATE $tabla SET titulo='$titulo', fecha='$fecha', lugar='$lugar', descripcion='$descripcion' WHERE id='$id'";

        break;

    case "gi":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $descripcion = htmlspecialchars($_POST['descripcion']);
        
        $query = "UPDATE $tabla SET titulo='$titulo', descripcion='$descripcion' WHERE id='$id'";

        break;


            
    default:
        echo "ha fallado la inserción, pruebe de nuevo";
//fin del switch.
                    }


  if (!$resultado = $mysqli->query($query)) {
	// ¡Oh, no! La consulta falló. 
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $query . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    //exit;
	}
    //header('location:/potencial/tablausuario12am.php');

  ?>