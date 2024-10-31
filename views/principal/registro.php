<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php';?>

		<!-- Start Sign Up Area -->
		<section class="user-area-all-style sign-up-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-form-action">
							<div class="form-heading text-center">
								<h3 class="form-title">Crea tu propia cuenta</h3>
							</div>
							<form id = "formulario" autocomplete="off">
								<div class="row">

									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="text" name="nombre" placeholder="Escriba su Nombre">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 ">
										<div class="form-group">
											<input class="form-control" type="text" name="apellido" placeholder="Escriba su Apellidos">
										</div>
									</div>

									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="text" name="usuario" placeholder="Escriba su Usuario">
										</div>
									</div>

									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="email" name="correo" placeholder="Escriba su Correo">
										</div>
									</div>

									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<input class="form-control" type="text" name="contraseña" placeholder="Escriba su Contraseña">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 ">
										<div class="form-group">
											<input class="form-control" type="text" name="confirmar" placeholder="Confirmar Contraseña">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 col-xs-12 form-condition">
										<div class="agree-label">
											<input type="checkbox" id="chb1">
										</div>
									</div>

									<div class="col-12">
										<button class="default-btn btn-two" type="submit">
											Registrarse
											<i class="flaticon-right"></i>
										</button>
									</div>
									
									<div class="col-12">
										<p class="account-desc">
											¿Ya tienes una cuenta?
											<a href="<?php echo RUTA_PRINCIPAL . 'login' ?>"> Login</a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->		

<?php echo include_once 'views/template/footer-principal.php' ?>

<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/registro.js'; ?>"></script>

</body>

</html>