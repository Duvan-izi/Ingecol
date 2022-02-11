<?php
$social = ControllerPlantilla::ctrEstiloPlantilla();

?>
<!--Preloader-->
<div id="preloader">
	<div id="pre-status">
		<div class="preload-placeholder"></div>
	</div>
</div>
<!--=====================================
Top
======================================-->

<!--Navigation-->
<header id="menu">
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="#menu"><img src="http://localhost/ingecol/backend/<?php echo $social["logo"]; ?>" class="img-responsive"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a class="scroll" href="#menu">HOME</a></li>
						<li><a class="scroll" href="#about">QUIENES SOMOS</a></li>
						<li><a class="scroll" href="#features">SERVICIOS</a></li>
						<li><a class="scroll" href="#portfolio">SERVICIOS</a></li>
						<li><a class="scroll" href="#pricing">PLANES</a></li>
						<li><a class="scroll" href="#contact">CONTACTO</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</div>
	</div>
</header>

<!--Slider-Start-->
<section id="slider">
	<div id="home-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=+57 3213336888&amp;text=¡Hola!&nbsp;¿Cuál&nbsp;de&nbsp;nuestros&nbsp;planes&nbsp;desea&nbsp;adquirir?;">
				<i class="fa fa-whatsapp"></i>
			</a>
			<div class="item active" style="background-image:url(http://localhost/Ingecol/backend/views/img/slide/5.jpg)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-md-7 col-sm-12 col-xs-12">
							<h2>Comunicate con nosotros</h2>
							<p>Servicios de conectividad de alta velocidad urbano y rural (Girardot, Flandes, Ricaurte, Apulo, Jerusalén, Tocaima, Agua de Dios)</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image:url(http://localhost/Ingecol/backend/views/img/slide/8.jpg)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-md-7 col-sm-12 col-xs-12">
							<h2>Personal Capacitado</h2>
							<p>Contamos con personal altamente capacitado, dispuesto a elaborar una excelente labor.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image:url(http://localhost/Ingecol/backend/views/img/slide/9.jpg)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-md-7 col-sm-12 col-xs-12">
							<h1>We Are Cosmix</h1>
							<h2>Creative Themes</h2>
							<p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple page also included in this theme with lots of CSS and JQuery animations</p>
						</div>
					</div>
				</div>
			</div>
			<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!--/#home-carousel-->
</section>

<!--About-Section-Start-->
<section id="about">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h2>QUIENES <span>SOMOS</span></h2>
				<div class="line"></div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12 ab-sec">
				<div class="col-md-6">
					<p><span><strong>S</strong></span>omos una empresa de serivicios de internet fundada desde
						desde el año 2015. Nuestro objetivo principal es interconectar
						las regiones mas remotas de Colombia. Para el año 2025
						trabajaremos fuertemente para conectar todas las familias
						colombianas a nuestra red. </p>
				</div>
				<div class="col-md-6 ab-sec-img wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><img src="http://localhost/Ingecol/backend/views/img/services/prepago.png" alt=""> </div>
			</div>
		</div>
	</div>
</section>

<!--Normatividad-Section-Start-->
<figure class="banner">
	<img src="http://localhost/Ingecol/backend/views/img/banner/libertad.png" class="img-responsive" width="100%">
	
	<div class="text_banner text_cen">
        <h1 style="color:#fff">Conoce todo acerca de la Ley 679</h1>
        <h3 style="color:#eee"><strong>¡Juntos logramos un internet mas sano!</strong></h3><br>
		<a class="btn-order"target="_blank" href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=18309"><strong>¡CONSULTA AQUÍ!</strong></a>

    </div>
</figure>
<!-- <div class="banner" style="background-image:url()">
		<div class="col-md-7 col-sm-12 col-xs-12">
			<ul>
				<li><a class="btn-order" href="">Ley 679 Pornografia Infantil</a> </li>
			</ul>
		</div>
</div> -->

<!--services-Section-Start-->

<section id="features">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h2>SERVIC<span>IOS</span></h2>
				<div class="line"></div>
				<p><span><strong>N</strong></span>uestra prioridad es la prestación de servicios de calidad a las familias colombianas</p>

			</div>
		</div>
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
			<li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-tree"></i></a></li>
			<li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-building"></i></a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active feat-sec" id="tab-1">
				<div class="col-md-5 tab">
					<h5>Conectividad Urbana</h5>
					<div class="line"></div>
					<div class="clearfix"></div>
					<p class="feat-sec">Soluciones de alta velocidad para hogares<br>
					</p>
					<ul class="carac" style="padding-left: 0px; padding-bottom:80px;">
						<li><i class="fa fa-asterisk"></i>Sin cláusulas de permanencia</li>
						<li><i class="fa fa-asterisk"></i>Servicio ilimitado</li>
						<li><i class="fa fa-asterisk"></i>Instalacion con facilidades de pago</li>
						<li><i class="fa fa-asterisk"></i>Soporte y asesoria permanente 7x8(domingo a domingo)</li>
						<li><i class="fa fa-asterisk"></i>Router wifi personalizable</li><br>
						<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">MAS INFORMACIÓN</a> </li>
					</ul>


				</div>
				<div class="col-md-7 tab-img"><img src="http://localhost/Ingecol/backend/views/img/services/conectividad-urbana.png" class="img-responsive" alt=""></div>
			</div>
			<div role="tabpanel" class="tab-pane fade feat-sec" id="tab-2">
				<div class="col-md-5 tab">
					<h5>Conectividad Rural</h5>
					<div class="line"></div>
					<div class="clearfix"></div>
					<p class="feat-sec">Soluciones de alta velocidad para zonas rurales<br>
					</p>
					<ul class="carac" style="padding-left: 0px;">
						<li><i class="fa fa-asterisk"></i>Sin cláusulas de permanencia</li>
						<li><i class="fa fa-asterisk"></i>Servicio ilimitado</li>
						<li><i class="fa fa-asterisk"></i>Instalacion con facilidades de pago</li>
						<li><i class="fa fa-asterisk"></i>Soporte y asesoria permanente 7x8(domingo a domingo)</li>
						<li><i class="fa fa-asterisk"></i>Equipos wifi personalizable</li>
						<li><i class="fa fa-asterisk"></i>Equipos en comodato</li><br>
						<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">MAS INFORMACIÓN</a> </li>
					</ul>
				</div>
				<div class="col-md-7 tab-img"><img src="http://localhost/Ingecol/backend/views/img/services/rural.png" class="img-responsive" alt=""></div>
			</div>
			<div role="tabpanel" class="tab-pane fade feat-sec" id="tab-3">
				<div class="col-md-5 tab">
					<h5>Conectividad Prepago</h5>
					<div class="line"></div>
					<div class="clearfix"></div>
					<p class="feat-sec">Conectividad de alta velocidad ilimitada por 8, 15 o 30 dias <span><strong>(APLICA SOLO PARA TORRES O EDIFICIOS)</strong></span><br>
					</p>
					<ul class="carac" style="padding-left: 0px;">
						<li><i class="fa fa-asterisk"></i>Equipo de propiedad al cliente</li>
						<li><i class="fa fa-asterisk"></i>Servicio ilimitado</li>
						<li><i class="fa fa-asterisk"></i>Canales 100% DEDICADOS</li>
						<li><i class="fa fa-asterisk"></i>Velocidad de carga superior a 4 megas en todos los planes</li>
						<li><i class="fa fa-asterisk"></i>Soporte y asesoria permanente 7x8(domingo a domingo)</li>
						<li><i class="fa fa-asterisk"></i>Cobertura wifi personalizable</li><br>
						<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">MAS INFORMACIÓN</a> </li>
					</ul>

				</div>
				<div class="col-md-7 tab-img"><img src="http://localhost/Ingecol/backend/views/img/services/prepago.png" class="img-responsive" alt=""></div>
			</div>
		</div>
	</div>
</section>

<!-- Nav tabs -->
<section id="pricing">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h2>PLAN<span>ES</span></h2>
				<div class="line"></div>
				<p class="feat-sec"><span><strong>E</strong></span>n INGECOL-PLUS pensamos en su economia y bienestar, contamos con gran variedad de planes y servicios de acuerdo a su presupuesto. <span>Aplica solo para estratos 1,2 y 3</span> </p>
				<p class="feat-sec-1"><span><strong>VALOR DE SUSCRIPCIÓN E INSTALACION $140.000</strong></span></p>
			</div>
		</div>
		<div class="col-lg-12 col-md-8 col-sm-6">
			<ul class="nav nav-tabs">
				<li class="active">
					<a class="nav-link active" href="#urbano" data-toggle="tab">
						<p><span><strong>Internet Urbano</strong></span></p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#rural" data-toggle="tab">
						<p><span><strong>Internet Rural</strong></span></p>
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane container active" id="urbano">
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $70.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> Starter </div>
								</li>
								<li>
									<h5><strong>6</strong> MEGAS</h5>
								</li>
								<li><strong>3 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $85.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> DELUXE </div>
								</li>
								<li>
									<h5><strong>8</strong> MEGAS</h5>
								</li>
								<li><strong>4 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $100.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> standar </div>
								</li>
								<li>
									<h5><strong>10</strong> MEGAS</h5>
								</li>
								<li><strong>6 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $120.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> pro </div>
								</li>
								<li>
									<h5><strong>12</strong> MEGAS</h5>
								</li>
								<li><strong>7 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $135.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> Ultra </div>
								</li>
								<li>
									<h5><strong>15</strong> MEGAS</h5>
								</li>
								<li><strong>8 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li>WIFI DE ALTA POTENCIA</li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $180.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> Ultra max </div>
								</li>
								<li>
									<h5><strong>20</strong> MEGAS</h5>
								</li>
								<li><strong>10 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li>WIFI DE ALTA POTENCIA</li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-pane container" id="rural">
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $80.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> Starter </div>
								</li>
								<li>
									<h5><strong>6</strong> MEGAS</h5>
								</li>
								<li><strong>3 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $95.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> DELUXE </div>
								</li>
								<li>
									<h5><strong>8</strong> MEGAS</h5>
								</li>
								<li><strong>4 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $110.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> standar </div>
								</li>
								<li>
									<h5><strong>10</strong> MEGAS</h5>
								</li>
								<li><strong>6 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $130.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> pro </div>
								</li>
								<li>
									<h5><strong>12</strong> MEGAS</h5>
								</li>
								<li><strong>7 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $145.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> Ultra </div>
								</li>
								<li>
									<h5><strong>15</strong> MEGAS</h5>
								</li>
								<li><strong>8 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li>WIFI DE ALTA POTENCIA</li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-4">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<div class="price"> $190.000 </div>
										<div class="duration"> por mes </div>
									</div>
									<div class="plan-name"> Ultra max </div>
								</li>
								<li>
									<h5><strong>20</strong> MEGAS</h5>
								</li>
								<li><strong>10 MEGAS </strong><i class="fa fa-arrow-circle-up"></i> CARGA</li>
								<li>SOPORTE<strong> 7X8</strong></li>
								<li>WIFI DE ALTA POTENCIA</li>
								<li><a class="btn-order" href="https://api.whatsapp.com/send?phone=+57 3213336888">Adquirir plan</a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</section>

<div class="container api_mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.5881061887953!2d-74.81227226278679!3d4.299886676115451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f28e954fd824d%3A0x8a6a1ba6ba68a2d5!2sCra.%2017%20%2317-103%2C%20Girardot%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1644458458486!5m2!1ses!2sco" width="1140" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
<?php
if (isset($_POST["submit"])) {
	$nombre = $_POST["name"];
	$celular = $_POST["cel"];
	$correo = $_POST["email"];
	$mensaje = $_POST["mensaje"];

	$to = $correo;
	$subject = $mensaje;
	$message = $mensaje;

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: dunvar241@gmail.com';

	$correo = mail($to, $subject, $message, $headers);

	if ($correo) {
		echo "<script>alert('correo enviado');</script>";
	} else {
		echo "<script>alert('correo no enviado');</script>";
	}
}
?>

<!--Contact-Section-Start-->
<section id="contact">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h2>CONTAC <span>TO</span></h2>
				<div class="line"></div>
				<p><span><strong>P</strong></span>uedes comunicarte con nosotros diligenciando el siguiente formulario o a traves de las lineas de atencion como Whatsapp, correo o via telefonica, te responderemos lo mas pronto posible.</p>
			</div>
		</div>
		<div class="text-center">
			<div class="col-md-6 col-sm-6 contact-sec-1">
				<h4>CONTÁCTA<span>NOS</span></h4>
				<ul class="contact-form">
					<li><i class="fa fa-map-marker"></i>

						<h6><strong>Dirección:</strong><a target="_blank" href="https://goo.gl/maps/PoQuucrDbaEhq6BL6"> Cra. 17 #17-103 a 17-1, Girardot, Cundinamarca</a> </h6>
					</li>
					<li><i class="fa fa-envelope"></i>
						<h6><strong>Correo:</strong><a href="mailto:ingecolplus@gmail.com?">ingecolplus@gmail.com</a>
						</h6>
					</li>
					<li><i class="fa fa-phone"></i>
						<h6><strong>Whatsapp:</strong><a target="_blank" href="https://api.whatsapp.com/send?phone=+57 3213336888">+57 3213336888 </a></h6>
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-6">
				<form id="main-contact-form" name="contact-form" method="post" action="#">
					<div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="number" name="cel" class="form-control" placeholder="Celular" required="required">
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Correo Electronico" required="required">
					</div>
					<div class="form-group">
						<textarea name="mensaje" id="message" class="form-control" rows="4" placeholder="Escriba un mensaje" required="required"></textarea>
					</div>
					<input type="submit" value="Enviar mensaje" name="submit" class="btn-send col-md-12 col-sm-12 col-xs-12">
				</form>
			</div>
		</div>
	</div>
</section>
<footer id="footer-down">
	<div class="bg-sec">
		<div class="container">
			<h2>SIGUENOS EN</h2>
			<ul class="social-icon">
				<li class="facebook hvr-pulse"><a href="https://www.facebook.com/Netlink-Internet-Rural-y-Urbano-100937038947563"><i class="fa fa-facebook-f"></i></a></li>
				<li class="instagram hvr-pulse"><a target="_blank" href=""><i class="fa fa-instagram"></i></a></li>
			</ul>
			<p> &copy; Copyright 2022 Ingecol Plus - Todos Los Derechos Reservados </p>
		</div>
	</div>
</footer>