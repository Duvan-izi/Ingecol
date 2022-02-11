<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Ingecol-Plus">
	<meta name="description" content="Empresa prestadora de servicios de internet para regiones rurales y urbanas, tambien contamos con planes para empresas.">
	<meta name="keyword" content="Internet, Telecomunicación, Servicios, Girardot, Tocaima">
	<title>Ingecol-Plus</title>

	<!--=====================================
	Icono
	======================================-->

	<?php
	$icono = ControllerPlantilla::ctrEstiloPlantilla();
	echo '<link rel="icon" href="http://localhost/Ingecol/backend/' . $icono["icono"] . '" >';

	/*=============================================
	Ruta fija del proyecto(estatica)
	=============================================*/

	$url = Ruta::ctrRuta();
	/* var_dump($url); */

	?>

	<!--=====================================
	Plugins de css
	======================================-->
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/bootstrap.css">

	<!--=====================================
	Estilos personalizadas  
	======================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/style.css">
	<!--Responsive-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/responsive.css">
	<!--Animation-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/animate.css">
	<!--Prettyphoto-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/prettyPhoto.css">
	<!--Font-Awesome-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/font-awesome.css">
	<!--Owl-Slider-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/owl.transitions.css">




</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

	<?php

	/*======================================
	Pagina principal
	======================================*/
	include "modulos/home.php";
	/* include "modulos/contactanos.php"; */
	?>
	

	<!--=====================================
	Plugins Javascript
	======================================-->

	<!--Jquery-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/jquery.min.js"></script>
	<!--Boostrap-Jquery-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/bootstrap.js"></script>
	<!--Preetyphoto-Jquery-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/jquery.prettyPhoto.js"></script>
	<!--NiceScroll-Jquery-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/jquery.nicescroll.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>views/js/waypoints.min.js"></script>
	<!--Isotopes-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/jquery.isotope.js"></script>
	<!--Wow-Jquery-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/wow.js"></script>
	<!--Count-Jquey-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/jquery.countTo.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>views/js/jquery.inview.min.js"></script>
	<!--Owl-Crousels-Jqury-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/owl.carousel.js"></script>
	<!--Main-Scripts-->
	<script type="text/javascript" src="<?php echo $url; ?>views/js/script.js"></script>

</body>

</html>
