<?php 
$_MYSQL_HOST = "localhost"; //Direccion del servidor
$_MYSQL_DB = "c1nezumi"; // Nombre de la base de datos
$_MYSQL_USER = "root"; //Usuario de la base de datos
$_MYSQL_PASS = ""; // Password del usuario de la base de datos
 
try {
$pdo = new PDO('mysql:host=' . $_MYSQL_HOST . ';dbname=' . $_MYSQL_DB .';charset=utf8', $_MYSQL_USER, $_MYSQL_PASS);  //enviamos parametros de conexion
/*$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); */ //establecemos los atriburos para el manejador de base de datos
/*echo 'LA CONEXION A LA BASE DE DATOS SE REALIZÓ SATISFACTORIAMENTE
';*/
} catch (PDOException $e) { // se captura la excepción e caso de error
echo 'ERROR AL CONECTAR A LA BASE DE DATOS
' . $e -> getMessage(); // mensaje de error
die(); // se finaliza el script
}
 ?>