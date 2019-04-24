<?php
include "conexio_admin.php";
$nom = $_POST["nom"];
$cognom = $_POST["cognom"];
$cognom_2 = $_POST["cognom_2"];
$nif = $_POST["nif"];
$direccio = $_POST["direccio"];
$CP = $_POST["CP"];
$poblacio = $_POST["poblacio"];
$telefon = $_POST["telefon"];
$email = $_POST["email"];

$alta = "UPDATE clients SET nom='$nom', cognom='$cognom', cognom_2='$cognom_2', cp='$CP', poblacio='$poblacio', telefon='$telefon', email='$email', CP='$CP' ";
$resultat = mysql_query($alta, $conexion);
if (!$resultat) {
    echo'<script type="text/javascript">alert("error al modificar les dades");
         window.location.href="../empleat.php";
         </script>';
}else{
    echo'<script type="text/javascript">alert("dades modificades correctament");
         window.location.href="../empleat.php";
         </script>';
}     
?>