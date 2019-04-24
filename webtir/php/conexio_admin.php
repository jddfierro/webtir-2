<?php 
session_start();
$servidor = "localhost:3300";
$db = "webtir";
if (!isset($_SESSION['id'])) {
    
    $id = $_POST["id"];
    $password = $_POST["password"];
    $conexion = mysql_connect($servidor, $id, $password) or die("error al conectar a base de dades"); 
    mysql_select_db("$db") or die("error al conectar a base de dades");
    header("location:../empleat.php");
    $_SESSION['id'] = $id;  
    $_SESSION['pass'] = $password;
}
else {
    $id= $_SESSION['id'];
    $password = $_SESSION['pass'];
    $conexion = mysql_connect($servidor, $id, $password) or die("error al conectar a base de dades"); 
    mysql_select_db("$db") or die("error al conectar a base de dades");
   
}

    


?>