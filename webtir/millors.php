<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['NIF'])) {
    echo'<script type="text/javascript">alert("no esta logejat");
         window.location.href="index.html";
         </script>';
}
    
?>

<html>
<head>
    <title>millors </title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <script src="assets/js/plotly-latest.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    
</head>
<body>
    		<!-- Header -->
			<header id="header">
				<a class="logo" href="usuari.php">tornar</a>
				
			</header>

			

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>WebTir</h1>
                                        <p>millors puntuacions</p>
                                </div>
                        </section>
                <?php 
                                        include "/php/conexion.php";
                                        $sql = mysql_query("SELECT modalitat, punts, data, nom, cognom FROM punts INNER JOIN clients WHERE punts.nif = clients.nif ORDER BY punts DESC");
                                        echo "<table border = ’1’ align = 'center'>";
                                        echo "<tr>";
                                        echo "<td>nom</td>";
                                        echo "<td>cognom</td>";
                                        echo "<td>modalitat</td>";
                                        echo "<td>data</td>";
                                        echo "<td>punts</td>";
                                        echo "</tr>";
                                        while ($fila = mysql_fetch_array($sql)) {
                                            echo "<tr>";
                                            echo "<td>" . $fila['nom'] . "</td>";
                                            echo "<td>" . $fila['cognom'] . "</td>";
                                            echo "<td>" . $fila['modalitat'] . "</td>";
                                            echo "<td>" . $fila['data'] . "</td>";
                                            echo "<td>" . $fila['punts'] . "</td>";
                                            echo "</tr>";
                                            
                                        }
                                        echo "</table>";
                                        ?>



</body>
</html>

    