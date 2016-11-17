<?php
/**
 *
 *  http://casamadrugada.net/tutoriales/php/como-almacenar-archivos-imagenes-en-mysql-utilizando-php/
 *
 *  @author     Welling Guzman
 *  @copyright  (c) 2012 - Welling Guzman
 */
 
//conexion a la base de datos

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "db_rent_a_car";

mysql_connect($servidor, $usuario, $clave) or die(mysql_error()) ;
mysql_select_db($base_de_datos) or die(mysql_error()) ;

?>
