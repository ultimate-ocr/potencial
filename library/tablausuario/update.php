<?php
session_start();
$userid=$_SESSION["id"];
include '../../library/libreria.php';


$mysqli = conectar();
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

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', subtipo='$subtipo', codirectores='$codirectores', universidad='$universidad',
                                    anno='$anno', calificacion='$calificacion', premios='$premios', estado='0', archivo='$ruta', lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', subtipo='$subtipo', codirectores='$codirectores', universidad='$universidad',
            anno='$anno', calificacion='$calificacion', premios='$premios', estado='0', lastid='1' WHERE id='$id'";

        break;

    case "dff":
        $titulo = htmlspecialchars($_POST['titulo']);
        $codirectores = htmlspecialchars($_POST['codirectores']);
        $universidad = htmlspecialchars($_POST['universidad']);
        $anno = htmlspecialchars($_POST['anno']);
        $calificacion = htmlspecialchars($_POST['calificacion']);
        $doctoradoeuropeo = (isset($_POST['doctoradoeuropeo'])) ? 1 : 0;        
        $menciondecalidad = (isset($_POST['menciondecalidad'])) ? 1 : 0;
        
        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', codirectores='$codirectores', universidad='$universidad',
            anno='$anno', calificacion='$calificacion', doctoradoeuropeo='$doctoradoeuropeo', menciondecalidad='$menciondecalidad', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', codirectores='$codirectores', universidad='$universidad',
            anno='$anno', calificacion='$calificacion', doctoradoeuropeo='$doctoradoeuropeo', menciondecalidad='$menciondecalidad', estado='0'  , lastid='1' WHERE id='$id'";

        break;

    case "dg":
        $titulo = htmlspecialchars($_POST['titulo']);
        $autores = htmlspecialchars($_POST['autores']);
        $tipo = htmlspecialchars($_POST['tipo']);
        $pin = htmlspecialchars($_POST['pin']);
        $pfin = htmlspecialchars($_POST['pfin']);
        $editorial = htmlspecialchars($_POST['editorial']);
        $anno = htmlspecialchars($_POST['anno']);
        $isbn = htmlspecialchars($_POST['isbn']);

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', autores='$autores', tipo='$tipo', pin='$pin', pfin='$pfin',
            editorial='$editorial', anno='$anno', isbn='$isbn', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', autores='$autores', tipo='$tipo', pin='$pin', pfin='$pfin',
            editorial='$editorial', anno='$anno', isbn='$isbn', estado='0' , lastid='1' WHERE id='$id'";

        break;

    case "dh":
        $titulo = htmlspecialchars($_POST['titulo']);
        $participacion = htmlspecialchars($_POST['participacion']);
        $regional = htmlspecialchars($_POST['regional']);
        $lugar = htmlspecialchars($_POST['lugar']);
        $fecha = htmlspecialchars($_POST['fecha']);
        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', participacion='$participacion', regional='$regional', lugar='$lugar', fecha='$fecha', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', participacion='$participacion', regional='$regional', lugar='$lugar', fecha='$fecha', estado='0' , lastid='1' WHERE id='$id'";

        break;

    case "di":
        $titulo = htmlspecialchars($_POST['titulo']);
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

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', autores='$autores', revista='$revista', isbn='$isbn', clave='$clave',
            pin='$pin', pfin='$pfin', fecha='$fecha', volumen='$volumen', impacto='$impacto', citas='$citas', editorial='$editorial', acta='$acta', lugar='$lugar', estado='0', archivo='$ruta'
            , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', autores='$autores', revista='$revista', isbn='$isbn', clave='$clave',
            pin='$pin', pfin='$pfin', fecha='$fecha', volumen='$volumen', impacto='$impacto', citas='$citas', editorial='$editorial', acta='$acta', lugar='$lugar', estado='0'
            , lastid='1' WHERE id='$id'";
        break;

    case "dk":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $investigador = htmlspecialchars($_POST['investigador']);
        $centro = htmlspecialchars($_POST['centro']);
        $pais = htmlspecialchars($_POST['pais']);
        $inicio = htmlspecialchars($_POST['inicio']);
        $fin = htmlspecialchars($_POST['fin']);

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', centro='$centro', pais='$pais', 
            inicio='$inicio', fin='$fin', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', centro='$centro', pais='$pais', 
            inicio='$inicio', fin='$fin', estado='0' , lastid='1' WHERE id='$id'";
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
        $director = (isset($_POST['director'])) ? 1 : 0;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$nombre', orgfin='$orgfin', entidades='$entcol', desde='$fechaini', hasta='$fechafin', subvencion='$subtot',
            invprincipal='$investigador', numinv='$numinv', director='$director', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$nombre', orgfin='$orgfin', entidades='$entcol', desde='$fechaini', hasta='$fechafin', subvencion='$subtot',
            invprincipal='$investigador', numinv='$numinv', director='$director', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "ib":
 
    $idgrupo = htmlspecialchars($_POST['select']);
    $query="SELECT * FROM grupoinv  WHERE id=$idgrupo";
    $resultado = $mysqli->query($query);
    $lineaBD = $resultado->fetch_assoc();
    $nombre = $lineaBD['nombre'];
    $director = (isset($_POST['director'])) ? 1 : 0;

    if(($_FILES['file']['name'])!=''){
        $ruta=subirArchivo($tabla);
        $query = "UPDATE $tabla SET titulo='$nombre',groupid='$idgrupo', director='$director', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
    }
    else
        $query = "UPDATE $tabla SET titulo='$nombre',groupid='$idgrupo', director='$director', estado='0' , lastid='1' WHERE id='$id'";
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
    
            switch($subtipo){
                case'1':
                    $ud = 1;
                    break;
                case'2':
                    $ud = 15;
                    break;
                case'3':
                    $ud = 1;
                    break;
            }
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "UPDATE $tabla SET userid='$userid', UD='$ud', titulo='$titulo', subtipo='$subtipo', autores='$autores',
                revista='$revista', isbn='$isbn', clave='$clave', volumen='$volumen', pin='$pin',
                pfin='$pfin',fecha='$fecha', impacto='$impacto', citas='$citas', acta='$acta', editorial='$editorial', lugar='$lugar', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
            }
            else
                $query = "UPDATE $tabla SET userid='$userid', UD='$ud', titulo='$titulo', subtipo='$subtipo', autores='$autores',
                revista='$revista', isbn='$isbn', clave='$clave', volumen='$volumen', pin='$pin',
                pfin='$pfin',fecha='$fecha', impacto='$impacto', citas='$citas', acta='$acta', editorial='$editorial', lugar='$lugar', estado='0' , lastid='1' WHERE id='$id'";
            break;


            case 'id':
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $fecha = htmlspecialchars($_POST['fecha']);
                    $participacion = htmlspecialchars($_POST['participacion']);
                    $regional = htmlspecialchars($_POST['regional']);
                    $lugar = htmlspecialchars($_POST['lugar']);

                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET userid='$userid', UD='$ud', titulo='$titulo', participacion='$participacion',
                        regional='$regional', lugar='$lugar', fecha='$fecha', estado='0', archivo='$ruta' , lastid='1' WHERE id ='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET userid='$userid', UD='$ud', titulo='$titulo', participacion='$participacion',
                        regional='$regional', lugar='$lugar', fecha='$fecha', estado='0' , lastid='1' WHERE id ='$id'";
                    break;
            
            case 'ie':

            $idred = htmlspecialchars($_POST['select']);
            $query="SELECT * FROM redinv WHERE id=$idred";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $nombre = $lineaBD['nombre'];
            
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "UPDATE $tabla SET titulo='$nombre',redid='$idred', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
            }
            else
                $query = "UPDATE $tabla SET titulo='$nombre',redid='$idred', estado='0' , lastid='1' WHERE id='$id'";
            break;

                    case 'iff':
            
                        
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
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

                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', editor='$editor', revista='$revista', impacto='$impacto', nacional='$nacional', 
                        desde='$desde', hasta='$hasta', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', editor='$editor', revista='$revista', impacto='$impacto', nacional='$nacional', 
                        desde='$desde', hasta='$hasta', estado='0' , lastid='1' WHERE id='$id'";
                    break;
            
                    case 'ih':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $investigador = htmlspecialchars($_POST['investigador']);
                    $centro = htmlspecialchars($_POST['centro']);
                    $pais = htmlspecialchars($_POST['pais']);
                    $inicio = htmlspecialchars($_POST['inicio']);
                    $fin = htmlspecialchars($_POST['fin']);
            
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', centro='$centro',
                        pais='$pais', inicio='$inicio', fin='$fin', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', investigador='$investigador', centro='$centro',
                        pais='$pais', inicio='$inicio', fin='$fin', estado='0' , lastid='1' WHERE id='$id'";
                    break;
            
                    case 'ii':
             
                    $idtesis = htmlspecialchars($_POST['select']);
                    $query="SELECT * FROM tesis WHERE id=$idtesis";
                    $resultado = $mysqli->query($query);
                    $lineaBD = $resultado->fetch_assoc();
                    $titulo = $lineaBD['titulo'];

                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', tesisid='$idtesis', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', tesisid='$idtesis', estado='0' , lastid='1' WHERE id='$id'";
                    break;
            
                    case 'ij':
            
                    $idtesis = htmlspecialchars($_POST['select']);
                    $query="SELECT * FROM tesis WHERE id=$idtesis";
                    $resultado = $mysqli->query($query);
                    $lineaBD = $resultado->fetch_assoc();
                    $titulo = $lineaBD['titulo'];

                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', tesisid='$idtesis', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', tesisid='$idtesis', estado='0' , lastid='1' WHERE id='$id'";
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

                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', orgfin='$orgfin', entidades='$entidades', desde='$desde', hasta='$hasta',
                        invresponsable='$invresponsable', numinv='$numinv', subvencion='$subvencion', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', orgfin='$orgfin', entidades='$entidades', desde='$desde', hasta='$hasta',
                        invresponsable='$invresponsable', numinv='$numinv', subvencion='$subvencion', estado='0' , lastid='1' WHERE id='$id'";
                    break;
            
                    
                    case 'il':
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $fecha = htmlspecialchars($_POST['fecha']);
                    $autores = htmlspecialchars($_POST['autores']);
                    $pais = htmlspecialchars($_POST['pais']);
                    $patente = htmlspecialchars($_POST['patente']);
                    $entidad = htmlspecialchars($_POST['entidad']);
                    $empresa = htmlspecialchars($_POST['empresa']);
            
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', fecha='$fecha', autores='$autores', pais='$pais', patente='$patente',
                        entidad='$entidad', empresa='$empresa', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', fecha='$fecha', autores='$autores', pais='$pais', patente='$patente',
                        entidad='$entidad', empresa='$empresa', estado='0' , lastid='1' WHERE id='$id'";
                    break;
                    
                    case 'im':
            
                    
                    $titulo = htmlspecialchars($_POST['razsocial']);
                    $ud = 4;
                    $CIF = htmlspecialchars($_POST['CIF']);
            
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', CIF='$CIF', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', CIF='$CIF', estado='0' , lastid='1' WHERE id='$id'";
                    break;
            
                    case 'inn':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $entidad = htmlspecialchars($_POST['entidad']);
                    $investigadores = htmlspecialchars($_POST['investigadores']);
                    $tema = htmlspecialchars($_POST['tema']);
                    $fecha = htmlspecialchars($_POST['fecha']);
            
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', entidad='$entidad', investigadores='$investigadores',
                        tema='$tema', fecha='$fecha', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', entidad='$entidad', investigadores='$investigadores',
                        tema='$tema', fecha='$fecha', estado='0' , lastid='1' WHERE id='$id'";
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
            
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', orgfin='$orgfin', entidades='$entidades', desde='$desde', hasta='$hasta',
                        subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', gestor='$gestor', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', orgfin='$orgfin', entidades='$entidades', desde='$desde', hasta='$hasta',
                        subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', gestor='$gestor', estado='0' , lastid='1' WHERE id='$id'";
                    break;
            
                    case 'io':
            
                    
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $ud = 4;
                    $organizador = htmlspecialchars($_POST['organizador']);
                    $participacion = htmlspecialchars($_POST['participacion']);
                    $congreso = htmlspecialchars($_POST['congreso']);
                    $regional = htmlspecialchars($_POST['regional']);
                    $lugar = htmlspecialchars($_POST['lugar']);
                    $fecha = htmlspecialchars($_POST['fecha']);
            
                    if(($_FILES['file']['name'])!=''){
                        $ruta=subirArchivo($tabla);
                        $query = "UPDATE $tabla SET titulo='$titulo', organizador='$organizador', participacion='$participacion', congreso='$congreso',
                        regional='$regional', lugar='$lugar', fecha='$fecha', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
                    }
                    else
                        $query = "UPDATE $tabla SET titulo='$titulo', organizador='$organizador', participacion='$participacion', congreso='$congreso',
                        regional='$regional', lugar='$lugar', fecha='$fecha', estado='0' , lastid='1' WHERE id='$id'";
                    break;

    case "ga":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "gb":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "gc":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "gd":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "ge":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "gff":
        $titulo = htmlspecialchars($_POST['titulo']);
        $director = (isset($_POST['director'])) ? 1 : 0;
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entidades = htmlspecialchars($_POST['entidades']);
        $desde = htmlspecialchars($_POST['desde']);
        $hasta = htmlspecialchars($_POST['hasta']);
        $subvencion = htmlspecialchars($_POST['subvencion']);
        $invprincipal = htmlspecialchars($_POST['invprincipal']);
        $numinv = htmlspecialchars($_POST['numinv']);

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', director='$director', subtipo='$subtipo', orgfin='$orgfin', entidades='$entidades', desde='$desde',
            hasta='$hasta', subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', director='$director', subtipo='$subtipo', orgfin='$orgfin', entidades='$entidades', desde='$desde',
            hasta='$hasta', subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', estado='0' , lastid='1' WHERE id='$id'";
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

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', gestor='$gestor', orgfin='$orgfin', entidades='$entidades', desde='$desde',
            hasta='$hasta', subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id' ";
        }
        else
        $query = "UPDATE $tabla SET titulo='$titulo', gestor='$gestor', orgfin='$orgfin', entidades='$entidades', desde='$desde',
        hasta='$hasta', subvencion='$subvencion', invprincipal='$invprincipal', numinv='$numinv', estado='0' , lastid='1' WHERE id='$id' ";
        break;

    case "gh":
        $titulo = htmlspecialchars($_POST['titulo']);
        $fecha = htmlspecialchars($_POST['fecha']);
        $lugar = htmlspecialchars($_POST['lugar']);
        $descripcion = htmlspecialchars($_POST['descripcion']);

        $dias	= (strtotime($inicio)-strtotime($fin))/86400;
        $dias 	= abs($dias); $dias = floor($dias);	
        $ud = $dias*1.5;

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', fecha='$fecha', ud='$ud' lugar='$lugar', descripcion='$descripcion', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', fecha='$fecha', ud='$ud', lugar='$lugar', descripcion='$descripcion', estado='0' , lastid='1' WHERE id='$id'";
        break;

    case "gi":
        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $descripcion = htmlspecialchars($_POST['descripcion']);
        
        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "UPDATE $tabla SET titulo='$titulo', descripcion='$descripcion', estado='0', archivo='$ruta' , lastid='1' WHERE id='$id'";
        }
        else
            $query = "UPDATE $tabla SET titulo='$titulo', descripcion='$descripcion', estado='0' , lastid='1' WHERE id='$id'";
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
	}
    //header('location:/potencial/tablausuario12am.php');

    echo '<script type="text/javascript">';
    echo 'location.href ="/potencial/tablausuario12am.php";';
    echo '</script>';

  ?>