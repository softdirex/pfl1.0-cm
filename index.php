<?PHP
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];
    require_once($rootDir . "/private/dao/PublicacionDao.php");
    $datos=PublicacionDao::sqlTodo();
    $ruta_imagen="/private/img/";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Cimenta SyS</title>

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/ionicons-2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<?php include("complements/head.php") ?>
	

	<section class="header_slide">
		<div class="container-fluid">
			<div class="row">
				<div class="">
					<div class="owl-carousel" id="header_slide">
						<div class="slide1 bg">
							<div class="overlay"></div>
							<div class="head-text">
								<div class="col-md-6 col-md-offset-3">
									<h1>CONSTRUYE TUS SUEÑOS CON NOSOTROS</h1>
								</div>
								<div class="col-md-6 col-md-offset-3">
									<a href="construccion.php">CONSTRUCCIÓN</a>
								</div>
							</div>
						</div>

						<div class="slide2 bg">
							<div class="overlay"></div>
							<div class="head-text">
								<div class="col-md-6 col-md-offset-3">
									<h1>DALE ENERGÍA A TU HOGAR</h1>
								</div>
								<div class="col-md-6 col-md-offset-3">
									<a href="electricidad.php">ELECTRICIDAD</a>
								</div>
							</div>
						</div>

						<div class="slide3 bg">
							<div class="overlay"></div>
							<div class="head-text">
								<div class="col-md-6 col-md-offset-3">
									<h1>REDES SANITARIAS Y GAS</h1>
								</div>
								<div class="col-md-6 col-md-offset-3">
									<a href="gasfiteria.php">GASFITERÍA</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- popup section -->

	<section id="galleryFull" class="galleryFull">
		<div class="container-fluid">
			<div class="grid">
				<div class="row">
					<div class="gallery-pad no-gutter">
						<?php
						foreach($datos as $fila) 
    						{
    					?>
								<div class="col-sm-4">
									<div class="row p0">
										<div class="img-box grid-item">
											<div class="home_text">
												<p><?php echo $fila['pu_titulo']; ?></p>
											</div>
											<a href="<?php echo '#'.$fila['pu_id']; ?>" class="inline-popup">
												<img src="<?php echo $ruta_imagen.$fila['pu_imagen']; ?>" class="img-responsive" alt="Responsive image">
											</a>
										</div>
									</div>
								</div>

								<div id="<?php echo $fila['pu_id']; ?>" class="white-popup mfp-hide">
								  	<div class="container-fluid">
										<div class="row">
											<div class="pop-up-color">
												<div class="col-md-7 p-l-0 p-r-0">
													<img src="<?php echo $ruta_imagen.$fila['pu_imagen']; ?>" class="img-responsive" alt="Responsive image">
												</div>
												<div class="col-md-5">
													<div>
														<h4 class="popup-head"><?php echo $fila['pu_titulo']; ?></h4>
													</div>
													<div>
														<p class="popup-parapraph"><?php echo $fila['pu_contenido']; ?></p>

														<p class="popup-parapraph"><a><?php echo $fila['pu_autor']; ?></a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php
							}
						?>
						
						
					</div>
				</div>

				
			</div>
		</div>
	</section>

	<!-- Testimonial 

	<section class="testimonial">
		<div class="container">
			<div class="owl-carousel owl-theme" id="testimonial">
			    <div class="carousel-item">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
					    	<div class="text-center">
					    		<p>“ I've been using Medium Rare templates for a couple of years now - they're always highly polished and backed up by amazing support.”</p>
					    		<p>— Sam Prichard, Interface Designer</p>
					    	</div>
					    </div>
					</div>
			    </div>
			    <div class="carousel-item">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
					    	<div class="text-center">
					    		<p>“ I've been using Medium Rare templates for a couple of years now - they're always highly polished and backed up by amazing support.”</p>
					    		<p>— Sam Prichard, Interface Designer</p>
					    	</div>
					    </div>
					</div>
			    </div>
			    <div class="carousel-item">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
					    	<div class="text-center">
					    		<p>“ I've been using Medium Rare templates for a couple of years now - they're always highly polished and backed up by amazing support.”</p>
					    		<p>— Sam Prichard, Interface Designer</p>
					    	</div>
					    </div>
					</div>
			    </div>
			</div>
		</div>
	</section>
	section -->

	<section class="">
		<div class="container">
			<div class="col-md-12 contact-field">
				<div class="col-md-6">
				<form action="private/fn/fnSendos.php" role="form" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<p>NOMBRE <span class="star">*</span></p>
									<input type="text" class="form-control" name="nombre" id="nombre"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<p>EMAIL <span class="star">*</span></p>
									<input type="email" class="form-control" name="email" id="email"/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="from-group">
									<p>MENSAJE</p>
									<textarea class="form-control message" rows="2" name="mensaje" id="mensaje"></textarea>
								</div>
								<p>
								<button type="submit" class="btn btn-tobais btn-send">ENVIAR MENSAJE</button>
								</p>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<!-- contact info part -->
					<div class="contact-info">
						<div class="contact-info-content">
							<h4 class="">DIRECCIÓN</h4>
							<div class="img-wrapper">
								<img class="img-responsive" src="assets/images/icons/address.png" alt="" />
							</div>
							<p>Calle Uno Norte #130, Colonia Kennedy <br> Paine | Chile</p>
						</div>
						<hr>
						<div class="contact-info-content">
							<h4 class="">TELEFONO</h4>
							<div class="img-wrapper">
								<img class="img-responsive" src="assets/images/icons/call.png" alt="" />
							</div>
							<p>+569 552 986 94
							</p>
						</div>
						<hr>
						<div class="contact-info-content">
							<h4 class="">EMAIL</h4>
							<div class="img-wrapper">
								<img class="img-responsive" src="assets/images/icons/email.png" alt="" />
							</div>
							<p>info@cimentasys.cl <br>jsilva@cimentasys.cl</p>
						</div>
					</div> <!-- /.contact-info -->
				</div>
			</div>			
		</div>
	</section>
	<hr>
	<?php include("complements/footer.php") ?>
	


	<script src="assets/js/jquery-3.1.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	
	<script src="assets/js/script.js"></script>
	
</body>
</html>