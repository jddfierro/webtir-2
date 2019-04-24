<?php
include "conexio_admin.php";
$psswd = substr( md5(microtime()), 1, 8);
$nom = $_POST["nom"];
$cognom = $_POST["cognom"];
$cognom_2 = $_POST["cognom_2"];
$nif = $_POST["nif"];
$direccio = $_POST["direccio"];
$CP = $_POST["CP"];
$poblacio = $_POST["poblacio"];
$telefon = $_POST["telefon"];
$email = $_POST["email"];

$sql = mysql_query("SELECT * FROM clients WHERE nif = '$nif'");
if (mysql_num_rows($sql) > 0) {
    echo "el nif $nif ja existeix a la base de dades";
    
    echo "<br><a href=../alta_client.php>Tornar a menu.</a>";

}else
{
    $alta = "INSERT INTO clients (nom, cognom, cognom_2, nif, direccio, CP, poblacio, telefon, email, password) VALUES ('$nom', '$cognom', '$cognom_2', '$nif', '$direccio', '$CP', '$poblacio', '$telefon', '$email', '$psswd')";
    $resultat = mysql_query($alta, $conexion);
    if (!$resultat) {
        echo'<script type="text/javascript">alert("error al donar alta");
         window.location.href="../alta_client.php";
         </script>';
        
    }else{
        echo'<script type="text/javascript">alert("password de usuari: '.$psswd.'");
            window.location.href="../alta_client.php";
            </script>';
        
    }     
 
}
?>

