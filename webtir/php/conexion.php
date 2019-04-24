<?php 
$servidor = "localhost:3300";
$db = "webtir";
$usuari = "user";
$password = "user";
$conexion = mysql_connect($servidor, $usuari, $password); 
mysql_select_db($db, $conexion) or die("error al conectar a base de dades");
?>