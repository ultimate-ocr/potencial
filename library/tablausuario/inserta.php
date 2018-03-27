<?php
include '../../library/libreria.php';

    $mysqli = conectar();
    $tabla = htmlspecialchars($_POST['tabla']);
    session_start();
    $userid=$_SESSION['id'];

    switch ($tabla){
        
        case 'de':
            $titulo = ($_POST['titulo']);
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $codirectores = htmlspecialchars($_POST['codirectores']);
            $universidad = htmlspecialchars($_POST['universidad']);
            $anno = htmlspecialchars($_POST['anno']);
            $calificacion = htmlspecialchars($_POST['calificacion']);
            $premios = htmlspecialchars($_POST['premios']);
            if($subtipo==1)
                $UD=0.75;
            else
                $ud=0.75;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, codirectores, universidad, anno, calificacion, premios, archivo)
                                    VALUES ($userid, $subtipo, '$ud', '$titulo', '$codirectores', '$universidad', '$anno', '$calificacion', '$premios', '$ruta')";
            }
            else

                $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, codirectores, universidad, anno, calificacion, premios)
                VALUES ($userid, $subtipo, '5', '$titulo', '$codirectores', '$universidad', '$anno', '$calificacion', '$premios')";
            break;

        case 'dff':
            $titulo = htmlspecialchars($_POST['titulo']);
            $codirectores = htmlspecialchars($_POST['codirectores']);
            $universidad = htmlspecialchars($_POST['universidad']);
            $anno = htmlspecialchars($_POST['anno']);
            $calificacion = htmlspecialchars($_POST['calificacion']);
            $doctoradoeuropeo = (isset($_POST['doctoradoeuropeo'])) ? 1 : 0;
            $menciondecalidad = (isset($_POST['menciondecalidad'])) ? 1 : 0;
            
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, codirectores, universidad, anno, calificacion, doctoradoeuropeo, menciondecalidad, archivo)
                                    VALUES ($userid, '6', '$titulo', '$codirectores', '$universidad', '$anno', '$calificacion', '$doctoradoeuropeo', '$menciondecalidad', '$ruta')";
            }
            else

            $query = "INSERT INTO $tabla (userid, UD, titulo, codirectores, universidad, anno, calificacion, doctoradoeuropeo, menciondecalidad)
                                VALUES ($userid, '6', '$titulo', '$codirectores', '$universidad', '$anno', '$calificacion', '$doctoradoeuropeo', '$menciondecalidad')";         
    
            break;

        case 'dg':
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
            $query = "INSERT INTO $tabla (userid, UD, titulo, autores, tipo, pin, pfin, editorial, anno, isbn, archivo)
                                VALUES ($userid, '1', '$titulo', '$autores', '$tipo', '$pin', '$pfin', '$editorial', '$anno', '$isbn', '$ruta')";
        }
        else

        $query = "INSERT INTO $tabla (userid, UD, titulo, autores, tipo, pin, pfin, editorial, anno, isbn)
                             VALUES ('$userid', '1', '$titulo', '$autores', '$tipo', '$pin', '$pfin', '$editorial', '$anno', '$isbn')";        
            break;

        case 'dh':
            $titulo = htmlspecialchars($_POST['titulo']);
            $participacion = htmlspecialchars($_POST['participacion']);
            $regional = htmlspecialchars($_POST['regional']);
            $lugar = htmlspecialchars($_POST['lugar']);
            $fecha = htmlspecialchars($_POST['fecha']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, participacion, regional, lugar, fecha, archivo)
                                    VALUES ($userid, '1', '$titulo', '$participacion', '$regional', '$lugar', '$fecha', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, participacion, regional, lugar, fecha)
                                 VALUES ('$userid', '1', '$titulo', '$participacion', '$regional', '$lugar', '$fecha')";        
    
            break;

        case 'di':
        
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
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

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, autores, revista, isbn, clave, volumen, pin, pfin, fecha, impacto,
                 citas, acta, editorial, lugar, archivo)
                                    VALUES ($userid, '1', '$titulo', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$pin',
                                    '$pfin', '$fecha', '$impacto', '$citas', '$acta', '$editorial','$lugar' ,'$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, autores, revista, isbn, clave, volumen, pin, pfin,
            fecha, impacto, citas, acta, editorial, lugar) VALUES ($userid,'1', '$titulo', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$pin',
            '$pfin', '$fecha', '$impacto', '$citas', '$acta', '$editorial','$lugar')";
            break;

        case 'dk':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $investigador = htmlspecialchars($_POST['investigador']);
            $centro = htmlspecialchars($_POST['centro']);
            $pais = htmlspecialchars($_POST['pais']);
            $inicio = htmlspecialchars($_POST['inicio']);
            $fin = htmlspecialchars($_POST['fin']);

            $dias	= (strtotime($inicio)-strtotime($fin))/86400;
            $dias 	= abs($dias); $dias = floor($dias);	
            $ud = $dias*0.75;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, investigador, centro, pais, inicio, fin, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$investigador', '$centro', '$pais', '$inicio', '$fin', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, investigador, centro, pais, inicio, fin) 
                                VALUES ($userid,'$ud', '$titulo', '$investigador', '$centro', '$pais', '$inicio', '$fin')";        
    
            break;

        case 'ia':
            $titulo = htmlspecialchars($_POST['titulo']);
            $director = (isset($_POST['director'])) ? 1 : 0;
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entcol = htmlspecialchars($_POST['entcol']);
            $fechaini = htmlspecialchars($_POST['fechaini']);
            $fechafin = htmlspecialchars($_POST['fechafin']);
            $subtot = htmlspecialchars($_POST['subtot']);
            $investigador = htmlspecialchars($_POST['investigador']);
            $numinv = htmlspecialchars($_POST['numinv']);
    

            switch ($subtipo){
                case '1':
                    $ud=6;
                    break;
                case '2':
                    $ud=12;
                    break;
                case '3':
                    $ud=4;
                    break;
            }

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, director, orgfin, entidades, desde, hasta, subvencion, invprincipal,
                numinv, archivo)
                                    VALUES ($userid, $subtipo, '$ud', '$titulo',  '$director', '$orgfin', '$entcol', '$fechaini',
                                            '$fechafin', '$subtot', '$investigador', '$numinv', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, director, orgfin, entidades, desde, hasta, subvencion,
            invprincipal, numinv) VALUES ($userid, $subtipo, '$ud', '$titulo', '$director', '$orgfin', '$entcol', '$fechaini',
            '$fechafin', '$subtot', '$investigador', '$numinv')";

            break;

        case 'ib':
            
            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM grupoinv WHERE id=$id";
            $resultado = $mysqli->query($query);
            $director = (isset($_POST['director'])) ? 1 : 0;
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['nombre'];
            $grupoinv = $lineaBD['id'];

            if($director)
                $ud=1;
            else
                $ud=2;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, director, groupid, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$director', '$id', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, titulo, director, UD, groupid) VALUES ('$userid', '$titulo', '$director', '$ud', '$grupoinv')";
        break;

        case 'ic':

            $titulo = htmlspecialchars($_POST['titulo']);
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
                $query = "INSERT INTO $tabla (userid, UD, titulo, subtipo, autores, revista, isbn, clave, volumen, pin, pfin,
                    fecha, impacto, citas, acta, editorial, lugar, archivo)
                    VALUES ($userid, $subtipo, '$ud', '$titulo', '$subtipo', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$pin',
                    '$pfin', '$fecha', '$impacto', '$citas', '$acta', '$editorial','$lugar', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, subtipo, autores, revista, isbn, clave, volumen, pin, pfin,
            fecha, impacto, citas, acta, editorial, lugar) VALUES ($userid,'$ud', '$titulo', '$subtipo', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$pin',
            '$pfin', '$fecha', '$impacto', '$citas', '$acta', '$editorial','$lugar')";
            break;

        case 'id':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 1;
            $fecha = htmlspecialchars($_POST['fecha']);
            $participacion = htmlspecialchars($_POST['participacion']);
            $congreso = htmlspecialchars($_POST['congreso']);
            $regional = htmlspecialchars($_POST['regional']);
            $lugar = htmlspecialchars($_POST['lugar']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, participacion, regional, lugar, fecha, archivo)
                                    VALUES ($userid, '5', '$titulo', '$participacion', '$regional', '$lugar', '$fecha', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, participacion, regional, lugar, fecha) VALUES 
                                        ($userid,'5', '$titulo', '$participacion', '$regional', '$lugar', '$fecha')";

            break;

        case 'ie':

            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM redinv WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['nombre'];
            $ud=8;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, redid, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$id', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, titulo, UD, redid) VALUES ('$userid', '$titulo', '$ud', '$id')";
            break;

        case 'iff':
            
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 1;
            
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo) VALUES ($userid,'$ud', '$titulo')";
            break;

        case 'ig':
        
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 2;
            $investigador = htmlspecialchars($_POST['investigador']);
            $editor = htmlspecialchars($_POST['editor']);
            $revista = htmlspecialchars($_POST['revista']);
            $impacto = htmlspecialchars($_POST['impacto']);
            $nacional = htmlspecialchars($_POST['nacional']);
            $desde = htmlspecialchars($_POST['desde']);
            $hasta = htmlspecialchars($_POST['hasta']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, investigador,  editor, revista, impacto, nacional, desde, hasta, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$investigador', '$editor', '$revista', '$impacto', '$nacional', '$desde', '$hasta', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, investigador,  editor, revista, impacto, nacional, desde, hasta)
                                VALUES ($userid, '$ud', '$titulo', '$investigador', '$editor', '$revista', '$impacto', '$nacional', '$desde', '$hasta')";

            break;

        case 'ih':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $investigador = htmlspecialchars($_POST['investigador']);
            $centro = htmlspecialchars($_POST['centro']);
            $pais = htmlspecialchars($_POST['pais']);
            $inicio = htmlspecialchars($_POST['inicio']);
            $fin = htmlspecialchars($_POST['fin']);

            $dias	= (strtotime($inicio)-strtotime($fin))/86400;
            $dias 	= abs($dias); $dias = floor($dias);	
            $ud = $dias/7;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, investigador, centro, pais, inicio, fin, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$investigador', '$centro', '$pais', '$inicio', '$fin', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, investigador, centro, pais, inicio, fin) 
                                VALUES ($userid, '$ud', '$titulo', '$investigador', '$centro', '$pais', '$inicio', '$fin')";
            break;

        case 'ii':

            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM tesis WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['titulo'];
            $tesisid = $lineaBD['id'];
            $ud = 15;
            
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, tesisid, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$tesisid', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, titulo, UD, tesisid) VALUES ('$userid', '$titulo', '$ud', '$tesisid')";
            break;

        case 'ij':

            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM tesis WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['titulo'];
            $tesisid = $lineaBD['id'];
            $ud = 54;
            
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, tesisid, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$tesisid', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, titulo, UD, tesisid) VALUES ('$userid', '$titulo', '$ud', '$tesisid')";
            break;
        
        case 'ik':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 6;
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entidades = htmlspecialchars($_POST['entidades']);
            $desde = htmlspecialchars($_POST['desde']);
            $hasta = htmlspecialchars($_POST['hasta']);
            $invresponsable = htmlspecialchars($_POST['invresponsable']);
            $numinv = htmlspecialchars($_POST['numinv']);
            $subvencion = htmlspecialchars($_POST['subvencion']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, orgfin, entidades, desde, hasta, invresponsable, numinv, subvencion, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$orgfin', '$entidades', '$desde', '$hasta', '$invresponsable', '$numinv', '$subvencion', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, orgfin, entidades, desde, hasta, invresponsable, numinv, subvencion)
                                VALUES ($userid,'$ud', '$titulo', '$orgfin', '$entidades', '$desde', '$hasta', '$invresponsable', '$numinv', '$subvencion')";

            break;

        
        case 'il':
            
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 15;
            $fecha = htmlspecialchars($_POST['fecha']);
            $autores = htmlspecialchars($_POST['autores']);
            $pais = htmlspecialchars($_POST['pais']);
            $patente = htmlspecialchars($_POST['patente']);
            $entidad = htmlspecialchars($_POST['entidad']);
            $empresa = htmlspecialchars($_POST['empresa']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, fecha, autores, pais, patente, entidad, empresa, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$fecha', '$autores', '$pais', '$patente', '$entidad', '$empresa', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, fecha, autores, pais, patente, entidad, empresa)
                                VALUES ($userid,'$ud', '$titulo', '$fecha', '$autores', '$pais', '$patente', '$entidad', '$empresa')";

            break;
        
        case 'im':
            
            $titulo = htmlspecialchars($_POST['razsocial']);
            $ud = 12;
            $CIF = htmlspecialchars($_POST['CIF']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, CIF, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$CIF', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, CIF) VALUES ($userid, '$ud', '$titulo', '$CIF')";
            break;

        case 'inn':
        
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 5;
            $inv = htmlspecialchars($_POST['inv']);
            $entidad = htmlspecialchars($_POST['entidad']);
            $investigadores = htmlspecialchars($_POST['investigadores']);
            $tema = htmlspecialchars($_POST['tema']);
            $fecha = htmlspecialchars($_POST['fecha']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, entidad, tema, fecha, calificacion, premios, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$entidad', '$tema', '$fecha', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, investigadores, entidad, tema, fecha) 
                                VALUES ($userid,'$ud', '$titulo', '$investigadores','$entidad', '$tema', '$fecha')";

            break;

        case 'innn':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 6;
            $gestor = (isset($_POST['gestor'])) ? 1 : 0;
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entfin = htmlspecialchars($_POST['entfin']);
            $fechaini = htmlspecialchars($_POST['fechaini']);
            $fechafin = htmlspecialchars($_POST['fechafin']);
            $subvencion = htmlspecialchars($_POST['subvencion']);
            $invprincipal = htmlspecialchars($_POST['invprincipal']);
            $numinv = htmlspecialchars($_POST['numinv']);

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, gestor, entidades, desde, hasta, subvencion, invprincipal, numinv, archivo)
                                VALUES ($userid, '$ud', '$titulo', '$gestor', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, gestor, entidades, desde, hasta, subvencion, invprincipal, numinv)
                                    VALUES ($userid, '$ud', '$titulo', '$gestor', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv')";

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
                $query = "INSERT INTO $tabla (userid, UD, titulo, organizador, participacion, congreso, regional, lugar, fecha, archivo)
                                    VALUES ($userid, '5', '$titulo', '$organizador', '$participacion', '$congreso', '$regional', '$lugar', '$fecha', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, organizador, participacion, congreso, regional, lugar, fecha)
                                VALUES ($userid,'5', '$titulo', '$organizador', '$participacion', '$congreso', '$regional', '$lugar', '$fecha')";

            break;

        case 'ga':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 8;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'$ud', '$titulo')";

            break;
        case 'gb':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 8;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'$ud', '$titulo')";

            break;
        case 'gc':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 5;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'$ud', '$titulo')";

            break;
        case 'gd':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 5;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                VALUES ($userid, '$ud', '$titulo')";

            break;
        case 'ge':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 1;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'$ud', '$titulo')";

            break;
        case 'gff':

        $titulo = htmlspecialchars($_POST['titulo']);
        $director = (isset($_POST['director'])) ? 1 : 0;
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entcol = htmlspecialchars($_POST['entcol']);
        $fechaini = htmlspecialchars($_POST['fechaini']);
        $fechafin = htmlspecialchars($_POST['fechafin']);
        $subtot = htmlspecialchars($_POST['subtot']);
        $investigador = htmlspecialchars($_POST['investigador']);
        $numinv = htmlspecialchars($_POST['numinv']);

        if($subtipo==1)
            $ud=3;
        else
            $ud=2;
            

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, director, orgfin, entidades, desde, hasta, subvencion,
            invprincipal, numinv, archivo)
                                VALUES ($userid, $subtipo, '$ud', '$titulo', '$director', '$orgfin', '$entcol', '$fechaini',
        '$fechafin', '$subtot', '$investigador', '$numinv', '$ruta')";
        }
        else
        $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, director, orgfin, entidades, desde, hasta, subvencion,
        invprincipal, numinv) VALUES ($userid, $subtipo, '$ud', '$titulo', '$director', '$orgfin', '$entcol', '$fechaini',
        '$fechafin', '$subtot', '$investigador', '$numinv')";
            break;
        case 'gg':

        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 3;
        $gestor = (isset($_POST['gestor'])) ? 1 : 0;
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entfin = htmlspecialchars($_POST['entfin']);
        $fechaini = htmlspecialchars($_POST['fechaini']);
        $fechafin = htmlspecialchars($_POST['fechafin']);
        $subvencion = htmlspecialchars($_POST['subvencion']);
        $invprincipal = htmlspecialchars($_POST['invprincipal']);
        $numinv = htmlspecialchars($_POST['numinv']);

        if(($_FILES['file']['name'])!=''){
            $ruta=subirArchivo($tabla);
            $query = "INSERT INTO $tabla (userid, UD, titulo, gestor, entidades, desde, hasta, subvencion, invprincipal, numinv, archivo)
                                VALUES ($userid, '$ud', '$titulo', '$gestor', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv', '$ruta')";
        }
        else
        $query = "INSERT INTO $tabla (userid, UD, titulo, gestor, entidades, desde, hasta, subvencion, invprincipal, numinv)
                                VALUES ($userid, '$ud', '$titulo', '$gestor', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv')";

        break;

        case 'gh':

            $titulo = htmlspecialchars($_POST['titulo']);
            $inicio = htmlspecialchars($_POST['inicio']);
            $fin = htmlspecialchars($_POST['fin']);
            $lugar = htmlspecialchars($_POST['lugar']);
            $descripcion = htmlspecialchars($_POST['descripcion']);

            $dias	= (strtotime($inicio)-strtotime($fin))/86400;
            $dias 	= abs($dias); $dias = floor($dias);	
            $ud = $dias*1.5;
            echo $dias;

            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, inicio, fin, lugar, descripcion, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$inicio', '$fin', '$lugar', '$descripcion', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, inicio, fin, lugar, descripcion)
                                VALUES ($userid,'$ud', '$titulo', '$inicio', '$fin', '$lugar', '$descripcion')";

            break;
        case 'gi':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 2;
            $descripcion = htmlspecialchars($_POST['descripcion']);
            
            if(($_FILES['file']['name'])!=''){
                $ruta=subirArchivo($tabla);
                $query = "INSERT INTO $tabla (userid, UD, titulo, descripcion, archivo)
                                    VALUES ($userid, '$ud', '$titulo', '$descripcion', '$ruta')";
            }
            else
            $query = "INSERT INTO $tabla (userid, UD, titulo, descripcion)
                                VALUES ($userid,'$ud', '$titulo', '$descripcion')";

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
    exit;
}
    $_POST = array();

    echo '<script type="text/javascript">';
    echo 'location.href ="/potencial/tablausuario12am.php";';
    echo '</script>';
?>
