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
		<title>webtir</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
 
		<!-- Header -->
			<header id="header">
				<a class="logo" href="./php/exit.php">sortir
			</header>

	

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
				<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>client</h3>
                                                                        
                                                                        
									<FORM NAME="alta" ACTION="./php/altas.php" METHOD="POST">
									<table>
									<tr><td>nom:</td>
									<td><INPUT TYPE="text" NAME="nom" required/> </td></tr>
									<tr><td>cognom:</td>
									<td><INPUT TYPE="text" NAME="cognom" required/> </td></tr>
                                                                        <tr><td>cognom_2:</td>
									<td><INPUT TYPE="text" NAME="cognom_2" required/> </td></tr>
									<tr><td>nif:</td>
									<td><INPUT TYPE="text" NAME="nif" required pattern="[0-9]{8}[A-Z a-z]{1}" title="8 numeros y una 1 lletra"/> </td></tr>
									<tr><td>direccio:</td>
									<td><INPUT TYPE="text" NAME="direccio"/> </td></tr>
                                                                        <tr><td>CP</td>
									<td><INPUT TYPE="text" NAME="CP" required pattern="[0-9]{5}" title="5 numeros "/> </td></tr>
                                                                        <tr><td>poblacio</td>
									<td><INPUT TYPE="text" NAME="poblacio" required/> </td></tr>
                                                                        <tr><td>telefon</td>
									<td><INPUT TYPE="num" NAME="telefon"/> </td></tr>
									<tr><td>email</td>
									<td><INPUT TYPE="mail" NAME="email"/> </td></tr>
                                                                        </table>
                                                                            <td><INPUT TYPE="submit" onclick="alerta()" VALUE="enviar"/> </td></tr>
                                                                        <script language="JavaScript"> 
                                                                            function alerta(){ 
                                                                                confirmar=confirm("quieres dar de alta estos datos?");
                                                                                if (confirmar){ 
                                                                                    document.alta.submit() 
                                                                                }else { 
                                                                                    alert("Seleccionaste cancelar") 
                                                                                    location.href="alta_client.php";
                                                                                    
                                                                                }
                                                                            } 
                                                                                                                                                    
                                                                        </script>
									</FORM>   
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