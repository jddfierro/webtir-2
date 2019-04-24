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
				
			</header>

		<!-- Nav -->
			

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>WebTir</h1>
					
				</div>
				
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					
					<div class="highlights">
						<section>
							<div class="content">
								<header>
                                                                    <a class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>introdueixi el nou password</h3>
                                                                        <FORM action="" method="POST">
									<table>
                                                                            <tr><td>nou password:</td>
									<td><INPUT TYPE="text" NAME="noupass" required/> </td></tr>
                                                                        </table>
                                                                            <td><INPUT TYPE="submit" NAME="submit" value="cambiar"/></td>
                                                                        </FORM>
                                                                        
								</header>
							</div>
						</section>
					
						
					</div>
				</div>
			</section>
                
              
                      <?php
                      
                      if(isset($_POST['noupass'])) {
                          $passwd = $_POST["noupass"];
                          include "/php/conexion.php";
                          $dades = "UPDATE clients SET 'password' = '$passwd' WHERE 'nif' = '{$_SESSION['NIF']}";
                          
                          $resultat = mysql_query($dades, $conexion);
                          if (!$resultat) {
                              echo'<script type="text/javascript">alert("error al cambiar de password");
                                  window.location.href="password.php";
                                  </script>';
                              
                          }else {
                              echo'<script type="text/javascript">alert("password cambiat correctament");
                                  window.location.href="password.php";
                                  </script>'; 
                              }
                      }
                      
                      ?>
                
                
              



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>