<?php include_once 'views/template/header-principal.php' ?>

<!-- Start Ecorik Slider Area -->
<section class="eorik-slider-area">
	<div class="eorik-slider owl-carousel owl-theme">
		<?php foreach ($data['sliders'] as $slider) { ?>

			<div class="eorik-slider-item" style="background-image: url(<?php echo RUTA_PRINCIPAL . 'assets/img/sliders/' . $slider['foto'] ?>);" ;>
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
								<h1><?php echo $slider['titulo'] ?></h1>
								<span><?php echo $slider['subtitulo'] ?></span>
								<div class="slider-btn">
									<a class="default-btn" href="<?php echo $slider['url']; ?>">Más información</a>

									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php } ?>

	</div>
	<div class="white-shape">
		<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/home-one/slider/white-shape.png" alt="Image">
	</div>
</section>
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area mb-minus-70">
	<div class="container">
		<form class="check-form" id="formulario" action="<?php echo RUTA_PRINCIPAL . 'reserva/verify'; ?>">
			<div class="row align-items-center">
				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Fecha de Reserva</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-1">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" name="f_reserva" id="f_reserva" value="<?php echo date('Y-m-d'); ?>">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="check-content">
						<div class="form-group">
							<label for="lugares" class="form-label">LUGARES</label>
							<select
								name="lugares"
								class="select-auto"
								id="lugares"
								style="width: 100%;">
								<option value="">seleccionar</option>
								<?php foreach ($data['lugares'] as $lugar) { ?>
									<option value="<?php echo $lugar['id'] ?>"><?php echo $lugar['nombre'] ?></option>
								<?Php } ?>

							</select>
						</div>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="check-btn check-content mb-0">
						<button class="default-btn" type="submit">
							Verificar
							<i class="flaticon-right"></i>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Check Section -->

<!-- Start Explore Area -->
<section class="explore-area pt-170 pb-100">
	<div class="container">
		<div class="section-title">
			<span>QUIENES SOMOS?</span>
			<h2>Conocenos</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="explore-img">
					<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/lugares/img5.jpg" alt="Image">
				</div>
			</div>
			<div class="col-lg-6">
				<section class="city-view-area ptb-100">
					<div class="container">
						<div class="city-wrap">
							<div class="single-city-item owl-carousel owl-theme">
								<div class="city-view-single-item">
									<div class="city-content">
										<span>EventSpace</span>
										<h3>EventSpace</h3>
										<p>Evenspace es una empresa especializada en el
											alquiler de locales versátiles y modernos, ideales para la
											realización de eventos corporativos, sociales y culturales.
											Nos enfocamos en ofrecer espacios bien equipados y adaptables a
											las necesidades de nuestros clientes, garantizando comodidad y
											éxito en cada ocasión. Con ubicaciones estratégicas y un equipo
											comprometido con la excelencia en el servicio, en Evenspace
											transformamos cualquier idea en una experiencia memorable.</p>
										</p>
									</div>
								</div>
								<div class="city-view-single-item">
									<div class="city-content">
										<span>EventSpace</span>
										<h3>Mision</h3>
										<P>En nuestra empresa, soñamos con ser el
											puente que conecta momentos inolvidables con los espacios perfectos para
											cada celebración. Nuestra misión es ofrecer una plataforma intuitiva y
											accesible, donde cada cliente pueda encontrar y reservar el lugar
											ideal para su evento, transformando cada ocasión especial en un recuerdo
											preciado. Nos dedicamos a facilitar la planificación de eventos,
											aportando soluciones que reflejan el amor y la pasión que ponemos en
											cada detalle.</p>
									</div>
								</div>
								<div class="city-view-single-item">
									<div class="city-content">
										<span>Quienes somos?</span>
										<h3>Vision</h3>
										<P>En nuestra empresa, soñamos con ser el puente que conecta momentos inolvidables con los espacios
											perfectos para cada celebración. Nuestra misión es ofrecer una plataforma intuitiva y accesible,
											donde cada cliente pueda encontrar y reservar el lugar ideal para su evento, transformando cada
											ocasión especial en un recuerdo preciado. Nos dedicamos a facilitar la planificación de eventos,
											aportando soluciones que reflejan el amor y la pasión que ponemos en cada detalle.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
</section>
<!-- End Explore Area -->

		<!-- Start Our Rooms Area -->
		<section class="our-rooms-area pb-70"> 
			<div class="container">
				<div class="section-title">
					<span>Lugares</span>
					<h2>Lugares fantasticos </h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/finca/finca1.jpg" alt="Image">
								<div class="single-rooms-three-content">
									<h3>Finca el Carmen</h3>
									<ul class="rating">
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
									</ul>
									<span class="price">Precio $50.6 la noche</span>
									<a href="<?php echo RUTA_PRINCIPAL . 'finca'; ?>" class="default-btn">
										Ver
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/hotel/hotel1.jpg" alt="Image">>
								<div class="single-rooms-three-content">
									<h3>Holtel sahara</h3>
									<ul class="rating">
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
									</ul>
									<span class="price">Detalles</span>
									<a href="<?php echo RUTA_PRINCIPAL . 'sahara'; ?>" class="default-btn">
										Ver
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/terraza/terraza3.jpg" alt="Image">
								<div class="single-rooms-three-content">
									<h3>Terraza Valencia</h3>
									<ul class="rating">
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
									</ul>
									<span class="price">Detalle</span>
									<a href="<?php echo RUTA_PRINCIPAL . 'Terraza'; ?>" class="default-btn">
										ver
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/rancho/rancho1.jpg" alt="Image">
								<div class="single-rooms-three-content">
									<h3>Rancho Canto de Mar</h3>
									<ul class="rating">
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
									</ul>
									<span class="price">Detalles</span>
									<a href="<?php echo RUTA_PRINCIPAL . 'RCanto'; ?>" class="default-btn">
										Ver
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/lugares/img5.jpg" alt="Image">
								<div class="single-rooms-three-content">
									<h3>Jardín Romántico</h3>
									<ul class="rating">
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
									</ul>
									<span class="price">Detalle</span>
									<a href="<?php echo RUTA_PRINCIPAL . 'jardin'; ?>" class="default-btn">
										Ver
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/hmedi/medi1.jpg" alt="Image">
								<div class="single-rooms-three-content">
									<h3>Hotel Mediterraneo</h3>
									<ul class="rating">
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
										<li>
											<i class="bx bxs-star"></i>
										</li>
									</ul>
									<span class="price">Detalle</span>
									<a href="<?php echo RUTA_PRINCIPAL . 'hotel'; ?>" class="default-btn">
										Ver
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Rooms Area -->
<?php echo include_once 'views/template/footer-principal.php';
if (!empty($_GET['respuesta']) && $_GET['respuesta'] == 'warning') { ?>

	<script>
		alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning');
	</script>

<?php } ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/index.js'; ?>

	

	