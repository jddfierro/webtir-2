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
    <title>estadistica </title>
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
                                        <p>Estadistica</p>
					
				</div>
			</section>
    <div id="cargalineal" style="width: 100%; height: 500 px;">

    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#cargalineal').load('./php/calcul_estadistica.php');
    });
</script>
    