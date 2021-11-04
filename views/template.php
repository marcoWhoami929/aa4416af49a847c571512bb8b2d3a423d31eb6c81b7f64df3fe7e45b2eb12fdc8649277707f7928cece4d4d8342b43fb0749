<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>EL GRAN CAFE | Libera Tus Sentidos</title>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="views/images/icons/icon.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/slick/slick.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="views/css/util.css">
		<link rel="stylesheet" type="text/css" href="views/css/main.css">
	<!--===============================================================================================-->
	

</head>
<body>
	<?php 

		echo '<div class="wrapper">';

		include "moduls/header.php";

		if (isset($_GET["ruta"])) {
			if ($_GET["ruta"] == 'inicio') {
				include "moduls/slide.php";
			}

			$carpeta = "views/moduls/";
			$class = $carpeta . $_GET["ruta"] . '.php';

			if (!file_exists($class)) {
				
				include "moduls/404.php";

			}else{

				include $class;

			}
			
		}else{

			include "moduls/slide.php";
			include "moduls/inicio.php";

		}

		echo '</div>';
    	include "moduls/footer.php";

	 ?>
	 <!--===============================================================================================-->
	<script type="text/javascript" src="views/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/bootstrap/js/popper.js"></script>
		<script type="text/javascript" src="views/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="views/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/slick/slick.min.js"></script>
		<script type="text/javascript" src="views/js/slick-custom.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/parallax100/parallax100.js"></script>
		<script type="text/javascript">
	        $('.parallax100').parallax100();
		</script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="views/vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="views/vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7Ow27ztKwFY0_CyX5FXXfK6PV87gJsPQ"></script>
	<script src="views/js/map-custom.js"></script>
	<!--===============================================================================================-->
	<script src="views/js/main.js"></script>
</body>
</html>