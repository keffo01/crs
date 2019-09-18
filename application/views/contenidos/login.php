<div class="main-body">
	<!-- Page-header end -->
	<!-- Page-body start -->
	<div class="page-body" style="margin-top: 0px !important;">
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-sm-12 col-md-4">
				<a href="tel:50322225155">
					<img class="llamada-img" style="max-width: 410px !important"
						src="<?=base_url();?>files\assets\images\emergencias-y-cs.png" alt="emergencias">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-sm-12 col-md-4 ">
				<section class="login-block llamada-img">
					<!-- Container-fluid starts -->

					<!-- Authentication card start -->

					<form class="md-float-material form-material" action="<?=base_url();?>login/valida_login"
						method="POST" autocomplete="off">
						<?php 
								if($this->session->flashdata('usuario_incorrecto'))
								{
									?>
						<?=$this->session->flashdata('usuario_incorrecto')?>
						<?php
								}
								?>
						<div class="text-center">
							<img widht="150px" src="<?=base_url();?>files\assets\images\auth\logo-b.png"
								alt="logo-cruz-roja-salvadorena.png">
						</div>
						<div class="auth-box card">
							<div class="card-block">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-center" style="font-size:20px">Iniciar Sesión</h3>
									</div>
								</div>
								<div class="row m-b-20">
									<div class="col-md-6">
										<button class="btn btn-facebook m-b-20 btn-block"><i
												class="icofont icofont-social-facebook"></i>Facebook</button>
									</div>
									<div class="col-md-6">
										<button class="btn btn-google-plus m-b-20 btn-block"><i class="fa fa-google"></i>Google</button>
									</div>
								</div>
								<div class="form-group form-primary">
									<input type="text" name="nombre_usuari" id="nombre_usuari" class="form-control"
										required="" placeholder="Nombre de usuario">
									<span class="form-bar"></span>
								</div>
								<div class="form-group form-primary">
									<input type="password" name="clave" id="clave" class="form-control" required=""
										placeholder="Contraseña">
									<span class="form-bar"></span>
								</div>
								<div class="row m-t-25 text-left">
									<div class="col-12">

										<div class="forgot-phone text-right f-right">
											<a href="<?=base_url();?>login/recuperacion"
												class="text-right f-w-600">¿Olvido su contraseña?</a>
										</div>
									</div>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit"
											class="btn btn-danger btn-md btn-block text-center m-b-20">Ingresar
										</button>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<p class="text-inverse text-left m-b-0" style="font-size:11px">
											¿Quiere formar parte de Cruz Roja Salvadoreña y no está registrado? <br>
											<a href="#registrar" data-toggle="modal" data-target="#registrar">
												<b class="f-w-600" style="font-size:14px">Registrarme</b>
											</a>
										</p>
									</div>
								</div>
							</div>


					</form>
					<!-- Modal--->
					<div id="registrar" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="login-card card-block login-card-modal">
								<form class="md-float-material" id="guardarUser"
									action="<?=base_url();?>login/nuevo_usuario" method="POST">
									<div class="text-center">
										<img src="<?=base_url();?>\files\assets\images\auth\logo-b.png" alt="logo.png">
									</div>
									<div class="card m-t-15">
										<div class="auth-box card-block">
											<div class="row m-b-20">
												<div class="col-md-12">
													<h3 class="text-center txt-primary">Registro de usuario</h3>
												</div>
											</div>
											<hr>
											<div class="input-group">
												<input type="text" name="Nombre_usuario" id="Nombre_usuario"
													class="form-control " placeholder="Nombre de usuario">
												<span class="md-line"></span>
											</div>
											<div class="input-group">
												<input type="email" name="Email" id="Email" class="form-control "
													placeholder="Correo electrónico">
												<span class="md-line"></span>
											</div>
											<div class="input-group">
												<input type="password" name="Pass" id="Pass" class="form-control "
													placeholder="Contraseña">
												<span class="md-line"></span>
											</div>
											<div class="input-group">
												<input type="password" class="form-control " name="cfmPassword"
													id="cfmPassword" placeholder="Confirmar contraseña">
												<span class="md-line"></span>
											</div>

											<div class="row m-t-25 text-left">
												<div class="col-md-12">
													<div class="checkbox-fade fade-in-primary">
														<label>
															<input type="checkbox" id="acepto" name="acepto">

															<span class="text-inverse">He leído y acepto los <a
																	href="#">Terminos &amp; Condiciones</a></span>
														</label>
													</div>
												</div>

											</div>
											<div class="row m-t-15">
												<div class="col-md-12">

													<input type="submit"
														class="btn btn-danger btn-md btn-block waves-effect text-center"
														value="Registrarme">
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-md-12">
													<p class="text-inverse text-left m-b-0">Gracias por ser parte del
														equipo.</p>
													<p class="text-inverse text-left"><b>Cruz Roja de El Salvador</b>
													</p>
												</div>

											</div>
										</div>
									</div>
								</form>
								<!-- end of form -->
							</div>
						</div>
					</div>
					<!-- end of form -->


					<!-- end of container-fluid -->
				</section>
			</div>
		</div>
		<!-- Warning Section Ends -->
	</div>
</div>
