<!DOCTYPE HTML>
 <?php
 include './php/conexio_admin.php';
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
 <?php
 $nif = $_POST["nif"];
 $sql = "SELECT * FROM clients WHERE nif = '$nif'";
 $result = mysql_query($sql, $conexion);
 if (mysql_num_rows($result) == 0) {
     echo'<script type="text/javascript">alert("Nif no trobat a la base de dades");
         window.location.href="empleat.php";
         </script>';
     
 }else
     {
     while ($data = mysql_fetch_row($result)) {
         $nom=$data[0];
         $cognom=$data[1];
         $cognom_2=$data[2];
         $nif=$data[3];
         $direccio=$data[4];
         $CP=$data[5];
         $poblacio=$data[6];
         $telefon=$data[7];
         $email=$data[8];
         
     }
     
     }
     ?>
        
     
	<body class="is-preload">
          

		<!-- Header -->
			<header id="header">
				<a class="logo" href="admin.html">inici
			</header>

	

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>WEBTIR</h1>
					<p>alta client</p>
				</div>
				<image src="images/cta05.jpg"></image>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
				<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
								
                                                                        <form method="post" action="./php/modificacio.php" METHOD="POST">
                                                                        <table>
									<tr><td>nom:</td>
									<td><INPUT TYPE="text" NAME="nom" required value="<?php echo $nom;?>"/> </td></tr>
									<tr><td>cognom:</td>
									<td><INPUT TYPE="text" NAME="cognom" required value="<?php echo $cognom;?>"/> </td></tr>
                                                                        <tr><td>cognom_2:</td>
									<td><INPUT TYPE="text" NAME="cognom_2" required value="<?php echo $cognom_2;?>"/> </td></tr>
									<tr><td>nif:</td>
									<td><INPUT TYPE="text" NAME="nif" required pattern="[0-9]{8}[A-Z a-z]{1}" title="8 numeros y una 1 lletra" value="<?php echo $nif;?>"/> </td></tr>
									<tr><td>direccio:</td>
									<td><INPUT TYPE="text" NAME="direccio" value="<?php echo $direccio;?>"/> </td></tr>  
                                                                        <tr><td>CP</td>
									<td><INPUT TYPE="num" NAME="CP" required pattern="[0-9]{5}" title="5 numeros " value="<?php echo $CP;?>"/> </td></tr>
                                                                        <tr><td>poblacio</td>
									<td><INPUT TYPE="text" NAME="poblacio" required value="<?php echo $poblacio;?>"/> </td></tr>
                                                                        <tr><td>telefon</td>
									<td><INPUT TYPE="num" NAME="telefon" value="<?php echo $telefon;?>"/> </td></tr>
									<tr><td>email</td>
									<td><INPUT TYPE="mail" NAME="email" value="<?php echo $email;?>"/> </td></tr>
									</table> 
                                                                        <td><INPUT TYPE="submit" name="modificar" VALUE="submit"/> </td></tr>  
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