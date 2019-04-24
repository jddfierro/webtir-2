<?php
session_start();
include "conexion.php";
$nif = $_POST["nif"];
$pass = $_POST["password"];
$sql = mysql_query("SELECT nom FROM clients WHERE nif = '$nif'");
$usupass = mysql_query("SELECT * FROM clients WHERE nif = '$nif' AND password = '$pass'");

 if (mysql_num_rows($sql) == 0) {
     echo'<script type="text/javascript">alert("Nif no trobat a la base de dades");
         window.location.href="../index.html";
         </script>';
    
 }elseif (mysql_num_rows($usupass) == 0) {
    echo'<script type="text/javascript">alert("password incorrecte");
         window.location.href="../index.html";
         </script>';        
 }
 else{
     $_SESSION['NIF'] = $nif;
     echo'<script type="text/javascript">alert("login correcte");
         window.location.href="../usuari.php";
         </script>';      
 }
?>

