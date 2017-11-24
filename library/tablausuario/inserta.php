<?php
    $mysqli = new mysqli("localhost", "vrodriguez", "7672", "potencial");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die("Error: No se pudo conectar");
    }
    $tabla = htmlspecialchars($_POST['tabla']);
    $userid=8;

    switch ($tabla){
        case 'ia':
            $nombre = htmlspecialchars($_POST['nombre']);
            $subtipo = htmlspecialchars($_POST['subtipo']);
            $orgfin = htmlspecialchars($_POST['orgfin']);
            $entcol = htmlspecialchars($_POST['entcol']);
            $fechaini = htmlspecialchars($_POST['fechaini']);
            $fechafin = htmlspecialchars($_POST['fechafin']);
            $subtot = htmlspecialchars($_POST['subtot']);
            $investigador = htmlspecialchars($_POST['investigador']);
            $numinv = htmlspecialchars($_POST['numinv']);
    
            $query = "INSERT INTO $tabla (userid, subtipo, UD, titulo, orgfin, entidades, desde, hasta, subvencion,
            invprincipal, numinv) VALUES ($userid, $subtipo, '5', '$nombre', '$orgfin', '$entcol', '$fechaini',
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
        $revista = htmlspecialchars($_POST['revista']);
        $isbn = htmlspecialchars($_POST['isbn']);
        $clave = htmlspecialchars($_POST['clave']);
        $volumen = htmlspecialchars($_POST['volumen']);
        $impacto = htmlspecialchars($_POST['impacto']);
        $pini = htmlspecialchars($_POST['pini']);
        $pfin = htmlspecialchars($_POST['pfin']);
        $citas = htmlspecialchars($_POST['citas']);
        $acta = htmlspecialchars($_POST['acta']);
        $editorial = htmlspecialchars($_POST['editorial']);
        $lugar = htmlspecialchars($_POST['lugar']);

        $query = "INSERT INTO $tabla (userid, UD, titulo, fecha, autores, revista, isbn, clave, volumen, impacto, pin, pfin, citas, acta, editorial, lugar)
                              VALUES ($userid,'5', '$titulo', '$fechapub', '$autores', '$revista', '$isbn', '$clave', '$volumen', '$impacto', '$pini', '$pfin', '$citas', '$acta', '$editorial', '$lugar')";

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
        $orgfin = htmlspecialchars($_POST['orgfin']);
        $entfin = htmlspecialchars($_POST['entfin']);
        $fechaini = htmlspecialchars($_POST['fechaini']);
        $fechafin = htmlspecialchars($_POST['fechafin']);
        $subvencion = htmlspecialchars($_POST['subvencion']);
        $invprincipal = htmlspecialchars($_POST['invprincipal']);
        $numinv = htmlspecialchars($_POST['numinv']);

        $query = "INSERT INTO $tabla (userid, UD, titulo, entidades, desde, hasta, subvencion, invprincipal, numinv)
        VALUES ($userid, '5', '$titulo', '$entfin', '$fechaini', '$fechafin', '$subvencion', '$invprincipal', '$numinv')";

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
    header('location:/potencial/tablausuario12.php');
?>
