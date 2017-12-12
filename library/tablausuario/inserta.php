<?php
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die("Error: No se pudo conectar");
    }
    $tabla = htmlspecialchars($_POST['tabla']);
    $userid=8;

    switch ($tabla){
        
        case 'de':
            $titulo = htmlspecialchars($_POST['titulo']);
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $codirectores = htmlspecialchars($_POST['codirectores']);
            $universidad = htmlspecialchars($_POST['universidad']);
            $anno = htmlspecialchars($_POST['anno']);
            $calificacion = htmlspecialchars($_POST['calificacion']);
            $premios = htmlspecialchars($_POST['premios']);

            $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, codirectores, universidad, anno, calificacion, premios)
                                VALUES ($userid, $subtipo, '5', '$titulo', '$codirectores', '$universidad', '$anno', '$calificacion', '$premios')";
        
            break;

        case 'dff':
            $titulo = htmlspecialchars($_POST['titulo']);
            $codirectores = htmlspecialchars($_POST['codirectores']);
            $universidad = htmlspecialchars($_POST['universidad']);
            $anno = htmlspecialchars($_POST['anno']);
            $calificacion = htmlspecialchars($_POST['calificacion']);
            $doctoradoeuropeo = htmlspecialchars($_POST['doctoradoeuropeo']);
            $menciondecalidad = htmlspecialchars($_POST['menciondecalidad']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, codirectores, universidad, anno, calificacion, doctoradoeuropeo, menciondecalidad)
                                VALUES ($userid, '5', '$titulo', '$codirectores', '$universidad', '$anno', '$calificacion', '$doctoradoeuropeo', '$menciondecalidad')";         
    
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

        $query = "INSERT INTO $tabla (userid, UD, titulo, autores, tipo, pin, pfin, editorial, anno, isbn)
                             VALUES ('$userid', '5', '$titulo', '$autores', '$tipo', '$pin', '$pfin', '$editorial', '$anno', '$isbn')";        
            break;

        case 'dh':
            $titulo = htmlspecialchars($_POST['titulo']);
            $participacion = htmlspecialchars($_POST['participacion']);
            $regional = htmlspecialchars($_POST['regional']);
            $lugar = htmlspecialchars($_POST['lugar']);
            $fecha = htmlspecialchars($_POST['fecha']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, participacion, regional, lugar, fecha)
                                 VALUES ('$userid', '5', '$titulo', '$participacion', '$regional', '$lugar', '$fecha')";        
    
            break;

        case 'di':
        
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $subtipo = htmlspecialchars($_POST['subtipo']);
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

            $query = "INSERT INTO $tabla (userid, UD, titulo, subtipo, autores, revista, isbn, clave, volumen, pin, pfin,
            fecha, impacto, citas, acta, editorial, lugar) VALUES ($userid,'5', '$titulo', '$subtipo', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$pin',
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

            $query = "INSERT INTO $tabla (userid, UD, titulo, investigador, centro, pais, inicio, fin) 
                                VALUES ($userid,'5', '$titulo', '$investigador', '$centro', '$pais', '$inicio', '$fin')";        
    
            break;

        case 'ia':
            $titulo = htmlspecialchars($_POST['titulo']);
            $director = htmlspecialchars($_POST['director']);
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entcol = htmlspecialchars($_POST['entcol']);
            $fechaini = htmlspecialchars($_POST['fechaini']);
            $fechafin = htmlspecialchars($_POST['fechafin']);
            $subtot = htmlspecialchars($_POST['subtot']);
            $investigador = htmlspecialchars($_POST['investigador']);
            $numinv = htmlspecialchars($_POST['numinv']);
    
            $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, director, orgfin, entidades, desde, hasta, subvencion,
            invprincipal, numinv) VALUES ($userid, $subtipo, '5', '$titulo', '$director', '$orgfin', '$entcol', '$fechaini',
            '$fechafin', '$subtot', '$investigador', '$numinv')";

            break;

        case 'ib':
            
            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM grupoinv WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $cargo = htmlspecialchars($_POST['cargo']);
            $titulo = $lineaBD['nombre'];
            $grupoinv = $lineaBD['id'];

            $query = "INSERT INTO $tabla (userid, titulo, UD, groupid, cargo) VALUES ('$userid', '$titulo', '5', '$grupoinv', '$cargo')";
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

            $query = "INSERT INTO $tabla (userid, UD, titulo, subtipo, autores, revista, isbn, clave, volumen, pin, pfin,
            fecha, impacto, citas, acta, editorial, lugar) VALUES ($userid,'5', '$titulo', '$subtipo', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$pin',
            '$pfin', '$fecha', '$impacto', '$citas', '$acta', '$editorial','$lugar')";
            break;

        case 'id':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $fecha = htmlspecialchars($_POST['fecha']);
            $participacion = htmlspecialchars($_POST['participacion']);
            $congreso = htmlspecialchars($_POST['congreso']);
            $regional = htmlspecialchars($_POST['regional']);
            $lugar = htmlspecialchars($_POST['lugar']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, participacion, regional, lugar, fecha) VALUES 
                                        ($userid,'5', '$titulo', '$participacion', '$regional', '$lugar', '$fecha')";

            break;

        case 'ie':

            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM redinv WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['nombre'];

            $query = "INSERT INTO $tabla (userid, titulo, UD, redid) VALUES ('$userid', '$titulo', '5', '$id')";
            echo $query;
            break;

        case 'iff':
            
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $query = "INSERT INTO $tabla (userid, UD, titulo) VALUES ($userid,'5', '$titulo')";
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

            $query = "INSERT INTO $tabla (userid, UD, titulo, investigador,  editor, revista, impacto, nacional, desde, hasta)
                                VALUES ($userid, '5', '$titulo', '$investigador', '$editor', '$revista', '$impacto', '$nacional', '$desde', '$hasta')";

            break;

        case 'ih':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $investigador = htmlspecialchars($_POST['investigador']);
            $centro = htmlspecialchars($_POST['centro']);
            $pais = htmlspecialchars($_POST['pais']);
            $inicio = htmlspecialchars($_POST['inicio']);
            $fin = htmlspecialchars($_POST['fin']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, investigador, centro, pais, inicio, fin) 
                                VALUES ($userid,'5', '$titulo', '$investigador', '$centro', '$pais', '$inicio', '$fin')";
            break;

        case 'ii':

            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM tesis WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['titulo'];
            $tesisid = $lineaBD['id'];
            $ud = 4;
            $query = "INSERT INTO $tabla (userid, titulo, UD, tesisid) VALUES ('$userid', '$titulo', '5', '$tesisid')";
            break;

        case 'ij':

            $id = htmlspecialchars($_POST['id']);
            $query="SELECT * FROM tesis WHERE id=$id";
            $resultado = $mysqli->query($query);
            $lineaBD = $resultado->fetch_assoc();
            $titulo = $lineaBD['titulo'];
            $tesisid = $lineaBD['id'];
            $ud = 4;
            $query = "INSERT INTO $tabla (userid, titulo, UD, tesisid) VALUES ('$userid', '$titulo', '5', '$tesisid')";
            break;
        
        case 'ik':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entidades = htmlspecialchars($_POST['entidades']);
            $desde = htmlspecialchars($_POST['desde']);
            $hasta = htmlspecialchars($_POST['hasta']);
            $invresponsable = htmlspecialchars($_POST['invresponsable']);
            $numinv = htmlspecialchars($_POST['numinv']);
            $subvencion = htmlspecialchars($_POST['subvencion']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, orgfin, entidades, desde, hasta, invresponsable, numinv, subvencion)
                                VALUES ($userid,'5', '$titulo', '$orgfin', '$entidades', '$desde', '$hasta', '$invresponsable', '$numinv', '$subvencion')";

            break;

        
        case 'il':
            
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $fecha = htmlspecialchars($_POST['fecha']);
            $autores = htmlspecialchars($_POST['autores']);
            $pais = htmlspecialchars($_POST['pais']);
            $patente = htmlspecialchars($_POST['patente']);
            $entidad = htmlspecialchars($_POST['entidad']);
            $empresa = htmlspecialchars($_POST['empresa']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, fecha, autores, pais, patente, entidad, empresa)
                                VALUES ($userid,'5', '$titulo', '$fecha', '$autores', '$pais', '$patente', '$entidad', '$empresa')";

            break;
        
        case 'im':
            
            $titulo = htmlspecialchars($_POST['razsocial']);
            $ud = 4;
            $CIF = htmlspecialchars($_POST['CIF']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, CIF) VALUES ($userid,'5', '$titulo', '$CIF')";
            break;

        case 'inn':
        
            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $inv = htmlspecialchars($_POST['inv']);
            $entidad = htmlspecialchars($_POST['entidad']);
            $investigadores = htmlspecialchars($_POST['investigadores']);
            $tema = htmlspecialchars($_POST['tema']);
            $fecha = htmlspecialchars($_POST['fecha']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, investigadores, entidad, tema, fecha) 
                                VALUES ($userid,'5', '$titulo', '$investigadores','$entidad', '$tema', '$fecha')";

            break;

        case 'innn':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $gestor = htmlspecialchars($_POST['gestor']);
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entfin = htmlspecialchars($_POST['entfin']);
            $fechaini = htmlspecialchars($_POST['fechaini']);
            $fechafin = htmlspecialchars($_POST['fechafin']);
            $subvencion = htmlspecialchars($_POST['subvencion']);
            $invprincipal = htmlspecialchars($_POST['invprincipal']);
            $numinv = htmlspecialchars($_POST['numinv']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, gestor, entidades, desde, hasta, subvencion, invprincipal, numinv)
                                    VALUES ($userid, '5', '$titulo', '$gestor', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv')";

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

            $query = "INSERT INTO $tabla (userid, UD, titulo, autores, participacion, congreso, regional, lugar, fecha)
                                VALUES ($userid,'5', '$titulo', '$autores', '$participacion', '$congreso', '$regional', '$lugar', '$fecha')";

            break;

        case 'ga':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;

            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'5', '$titulo')";

            break;
        case 'gb':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;

            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'5', '$titulo')";

            break;
        case 'gc':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;

            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'5', '$titulo')";

            break;
        case 'gd':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;

            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                VALUES ($userid,'5', '$titulo')";

            break;
        case 'ge':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;

            $query = "INSERT INTO $tabla (userid, UD, titulo)
                                  VALUES ($userid,'5', '$titulo')";

            break;
        case 'gff':

        $titulo = htmlspecialchars($_POST['titulo']);
        $director = htmlspecialchars($_POST['director']);
        $subtipo = htmlspecialchars($_POST['subtipo']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entcol = htmlspecialchars($_POST['entcol']);
        $fechaini = htmlspecialchars($_POST['fechaini']);
        $fechafin = htmlspecialchars($_POST['fechafin']);
        $subtot = htmlspecialchars($_POST['subtot']);
        $investigador = htmlspecialchars($_POST['investigador']);
        $numinv = htmlspecialchars($_POST['numinv']);

        $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, director, orgfin, entidades, desde, hasta, subvencion,
        invprincipal, numinv) VALUES ($userid, $subtipo, '5', '$titulo', '$director', '$orgfin', '$entcol', '$fechaini',
        '$fechafin', '$subtot', '$investigador', '$numinv')";
            break;
        case 'gg':

        $titulo = htmlspecialchars($_POST['titulo']);
        $ud = 4;
        $gestor = htmlspecialchars($_POST['gestor']);
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entfin = htmlspecialchars($_POST['entfin']);
        $fechaini = htmlspecialchars($_POST['fechaini']);
        $fechafin = htmlspecialchars($_POST['fechafin']);
        $subvencion = htmlspecialchars($_POST['subvencion']);
        $invprincipal = htmlspecialchars($_POST['invprincipal']);
        $numinv = htmlspecialchars($_POST['numinv']);

        $query = "INSERT INTO $tabla (userid, UD, titulo, gestor, entidades, desde, hasta, subvencion, invprincipal, numinv)
                                VALUES ($userid, '5', '$titulo', '$gestor', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv')";

        break;

        case 'gh':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $fecha = htmlspecialchars($_POST['fecha']);
            $lugar = htmlspecialchars($_POST['lugar']);
            $descripcion = htmlspecialchars($_POST['descripcion']);

            $query = "INSERT INTO $tabla (userid, UD, titulo, fecha, lugar, descripcion)
                                VALUES ($userid,'5', '$titulo', '$fecha', '$lugar', '$descripcion')";

            break;
        case 'gi':

            $titulo = htmlspecialchars($_POST['titulo']);
            $ud = 4;
            $descripcion = htmlspecialchars($_POST['descripcion']);
            
            $query = "INSERT INTO $tabla (userid, UD, titulo, descripcion)
                                VALUES ($userid,'5', '$titulo', '$descripcion')";

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
    header('location:/potencial/tablausuario12am.php');
?>
