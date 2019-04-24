<!DOCTYPE HTML>

<html>

	<head>
	
		<title>webtir_admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
	

		<!-- Header -->
			<header id="header">
				<a class="logo" href="empleat.php">tornar</a>
			</header>

		

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Llistat usuaris</h2>
					</header>
					<div class="highlights">
                                            
                                            <?php
                                            include './php/conexio_admin.php';
                                            $consulta = "SELECT * FROM clients";
                                            $resultat = mysql_query($consulta, $conexion);
                                            if (mysql_num_rows($resultat) > 0) {
                                                echo "<table border = ’1’>";
                                                echo "<tr>";
                                                echo "<td>nom</td>";
                                                echo "<td>cognom</td>";
                                                echo "<td>cognom 2</td>";
                                                echo "<td>NIF</td>";
                                                echo "<td>direccio</td>";
                                                echo "<td>CP</td>";
                                                echo "<td>poblacio</td>";
                                                echo "<td>telefon</td>";
                                                echo "<td>email</td>";
                                                echo "</tr>";
                                                while ($fila = mysql_fetch_array($resultat)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $fila['nom'] . "</td>";
                                                    echo "<td>" . $fila['cognom'] . "</td>";
                                                    echo "<td>" . $fila['cognom_2'] . "</td>";
                                                    echo "<td>" . $fila['nif'] . "</td>";
                                                    echo "<td>" . $fila['direccio'] . "</td>";       
                                                    echo "<td>" . $fila['CP'] . "</td>";
                                                    echo "<td>" . $fila['poblacio'] . "</td>";
                                                    echo "<td>" . $fila['telefon'] . "</td>";
                                                    echo "<td>" . $fila['email'] . "</td>";


                                                    
                                                    echo "</tr>";
                                                    }
                                                    echo "</table>";
                                                    
                                                } else {
                                                    echo "no s'ha trobat resultats";
                                                    
                                                }
                                            ?>
						
					</div>
				</div>
			</section>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>