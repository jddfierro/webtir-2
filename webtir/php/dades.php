<?php

session_start();
include "conexion.php";
$data=$_GET['data'];
$mod=$_GET['mod'];
$punts=$_GET['punts'];
$nif=$_SESSION['NIF'];


$dades = "INSERT punts VALUES ('$data', '$punts', '$nif', '$mod') ON DUPLICATE KEY UPDATE punts='$punts', modalitat='$mod'";
$resultat = mysql_query($dades, $conexion);

if (!$resultat) {
    echo'<script type="text/javascript">alert("error al introduir les dades");
         window.location.href="../usuari.php";
         </script>';
}else{
    echo'<script type="text/javascript">alert("dades introduides correctament");
         window.location.href="../usuari.php";
         </script>';
}     
?>