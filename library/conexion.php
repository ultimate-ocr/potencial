<?php 

// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','potencial'); 
define('DB_USER','vrodriguez'); 
define('DB_PASS','7672'); 

//establezco conexion
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
?>