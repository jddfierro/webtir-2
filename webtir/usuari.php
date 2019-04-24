<!DOCTYPE HTML>
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
		<title>webtir_usuari</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
        
	<body class="is-preload">
          

		<!-- Header -->
			<header id="header">
				<a class="logo" href="./php/exit.php">sortir</a>
				<nav>
					<a href="#menu">menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
                                    <li><a href="password.php">cambiar contraseña</a></li>
                                    <li><a href="bustia.html">bustia de sugeriments</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>WebTir</h1>
					
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>
                                                    <?php 
                                                    include "/php/conexion.php";
                                                    $sql = mysql_query("SELECT nom, cognom, cognom_2 FROM clients WHERE nif = '{$_SESSION['NIF']}'");
                                                    while ($fila = mysql_fetch_array($sql)) {
                                                        echo $fila['nom'], " ", $fila['cognom'], " ",$fila['cognom_2'];
                                                    }
                                                    ?>
                                                </h2>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
                                                                    <a class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>entrada de dades</h3>
                                                                        <FORM ACTION="./php/dades.php" METHOD="GET">
									<table>
									<tr><td>data:</td>
									<td><INPUT TYPE="date" NAME="data" required/> </td></tr>
                                                                        <h4>modalitat</>
                                                                        <select name="mod">
                                                                            <option value="P.sport C22">Pistola sport Calibre 22</option>
                                                                            <option value="P.grueso C32">Pistola grueso Calibre 32</option>
                                                                            <option value="P.estandar C22">Pistola estandar Calibre 22</option>
                                                                            <option value="P.aire comprimido">pistola aire comprimido</option>
                                                                            <option value="carabina ">carabina</option>
                                                                        </select>
                                                                    
                                                                        <tr><td>punts:</td>
									<td><INPUT TYPE="number" NAME="punts" min="0" max="150" required/> </td></tr>
                                                                        <td><INPUT TYPE="submit" VALUE="enviar"/> </td></tr>
                                                                        
                                                                        </td></tr>
                                                                        </table>
                                                                        </FORM>
                                                                        
								</header>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="estadistica.php" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>estadistica</h3>
									
                                                                       
								</header>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="millors.php" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>millors puntiacions generals</h3>
                                                                        
								</header>
							</div>
						</section>
						
					</div>
				</div>
			</section>
                
              
                      <?php 
                      
                      include "/php/conexion.php";
                      $dades = mysql_query("SELECT data, punts, modalitat FROM punts WHERE nif = '{$_SESSION['NIF']}' ORDER BY data DESC");
                      echo "<table border = ’1’ align = 'center'>";
                      echo "<tr>";
                      echo "<td>data</td>";
                      echo "<td>punts</td>";
                      echo "<td>modalitat</td>";
                      echo "</tr>";
                      while ($fila = mysql_fetch_array($dades)) {
                          echo "<tr>";
                          echo "<td>" . $fila['data'] . "</td>";
                          echo "<td>" . $fila['punts'] . "</td>";
                          echo "<td>" . $fila['modalitat'] . "</td>";
                          echo "</tr>";
                          
                      }
                      echo "</table>";
                      ?>
              



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>