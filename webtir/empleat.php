<!DOCTYPE HTML>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo'<script type="text/javascript">alert("no esta logejat");
            window.location.href="index.html";
            </script>';
        
    }
    ?>
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
				<a class="logo" href="./php/exit.php">sortir</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>WebTir</h1>
					<p>Administracio de club de tir<br /></p>
				</div>
				<image src="images/cta03.jpg"></image>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>pagina empleat</h2>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
                                                                    <a href="llistausuaris.php" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>Llistar usuaris</h3>
								</header>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a class="icon fa-files-o"><span class="label">Icon</span></a>
                                                                        <h3>MODIFICAR CLIENT</h3>
									<FORM NAME="modificar" ACTION="modificar.php" METHOD="POST">
                                                                            <table>
                                                                                <td>NIF:</td>
                                                                                <td><INPUT TYPE="text" NAME="nif" required pattern="[0-9]{8}[A-Z a-z]{1}" title="8 numeros y una 1 lletra"/> </td></tr>
                                                                            </table>
                                                                            <td><INPUT TYPE="submit" VALUE="enviar" align="center"/></td>
									</FORM>
								</header>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="alta_client.php" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>donar d'alta client</h3>
								</header>
							</div>
						</section>
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