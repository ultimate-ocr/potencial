<?php
include '../libreria.php';

session_start();
$userid=$_SESSION["id"];

$userid=8;


$mysqli = conectar();
$tabla = htmlspecialchars($_POST['tabla']);
$id = htmlspecialchars($_POST['id']);
  switch ($tabla) {

    case "de":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado', lastid='$userid', lastid='$userid' WHERE id='$id'";
    break;
    
    case "df":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
    break;

    case "dg":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
    break;
    
    case "dh":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
    break;

    case "di":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
    break;

    case "dk":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
    break;

    case "dl":
    $infoestado = htmlspecialchars($_POST['infoestado']);
    $insertaia = htmlspecialchars($_POST['correccion']);
    switch ($insertaia){
        case "No Valido":
            $estado=3;
            break;
        case "Correcto":
            $estado=1;
            break;
        case "Incompleto":
            $estado=2;
            break;
        default:
            echo "mierda";
    }

    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
    break;

    case "ia":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }

        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
        case "ib":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
        
        case "ic":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
    
        case "id":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
        
        case "ie":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
    
        case "iff":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
    
        case "ig":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
    
        case "ih":
        $infoestado = htmlspecialchars($_POST['infoestado']);
        $insertaia = htmlspecialchars($_POST['correccion']);
        switch ($insertaia){
            case "No Valido":
                $estado=3;
                break;
            case "Correcto":
                $estado=1;
                break;
            case "Incompleto":
                $estado=2;
                break;
            default:
                echo "mierda";
        }
    
        $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
        break;
    
        case "ii":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
    
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;

            case "ij":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
            
            case "ik":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
        
            case "il":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
            
            case "im":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
        
            case "inn":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
        
            case "innn":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
        
            case "io":
            $infoestado = htmlspecialchars($_POST['infoestado']);
            $insertaia = htmlspecialchars($_POST['correccion']);
            switch ($insertaia){
                case "No Valido":
                    $estado=3;
                    break;
                case "Correcto":
                    $estado=1;
                    break;
                case "Incompleto":
                    $estado=2;
                    break;
                default:
                    echo "mierda";
            }
        
            $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
            break;
        
            case "ga":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
        
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;

                case "gb":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
                
                case "gc":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
            
                case "gd":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
                
                case "ge":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
            
                case "gff":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
            
                case "gg":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
            
                case "gh":
                $infoestado = htmlspecialchars($_POST['infoestado']);
                $insertaia = htmlspecialchars($_POST['correccion']);
                switch ($insertaia){
                    case "No Valido":
                        $estado=3;
                        break;
                    case "Correcto":
                        $estado=1;
                        break;
                    case "Incompleto":
                        $estado=2;
                        break;
                    default:
                        echo "mierda";
                }
            
                $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                break;
            
                case "gi":
                    $infoestado = htmlspecialchars($_POST['infoestado']);
                    $insertaia = htmlspecialchars($_POST['correccion']);
                    switch ($insertaia){
                        case "No Valido":
                            $estado=3;
                            break;
                        case "Correcto":
                            $estado=1;
                            break;
                        case "Incompleto":
                            $estado=2;
                            break;
                        default:
                            echo "mierda";
                    }
            
                    $query = "UPDATE $tabla SET infoestado='$infoestado', estado='$estado' , lastid='$userid' WHERE id='$id'";
                    break;
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
        header('location:/potencial/tablaadmin.php');
?>