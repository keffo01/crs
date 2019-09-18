<div class="main-body" style="margin-top:5px ">
	<div class="page-wrapper" style="padding: 2px">
		<div class="page-header" style="margin-bottom: 2px">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<div class="d-inline">
							<h4>Capacitaciones</h4>
							<span>Ingrese los datos que solicitan a continuación:</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">

							<li class="breadcrumb-item"><a class="btn btn-danger text-white"
								href="<?=base_url();?>login/logout_ci">Salir</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body">
		<div class="card-block">
			<div class="row">
				<div class="col-md-12">
					<div id="wizard">
						<section>
							<form class="wizard-form" id="example-advanced-form" autocomplete="off">
								<h3>Informacion de la capacitación </h3>
								<fieldset>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de la capacitacion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input type="text" class="form-control" name="Nombre_capacitacion" id="Nombre_capacitacion">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Fecha de la capacitación</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input type="text" class="form-control" name="Fecha_capacitacion" id="Fecha_capacitacion">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Capacitador</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Capacitador" id="Capacitador" type="text" class="form-control  ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">N° de horas</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="No_horas" id="No_horas" type="text" class="form-control  ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Voluntario</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Voluntario_id" id="Voluntario_id" type="text" class=" form-control ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Observaciones</label>
										</div>
										<input type="text" class="form-control" name="Observacion_capacitaciones" id="Observacion_capacitaciones">
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											
										</div>
										<div class="col-md-8 col-lg-10">
											
										</div>
									</div>
								</fieldset>
							</form>		
				</section>
				<div class="modal fade" id="small-Modal" tabindex="-1" role="dialog"
							style="z-index: 1050; display: none;" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title"> <b>Finalizar registro de capacitaciones</b> </h4>
										<button type="button" class="close" data-dismiss="modal"
										aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									<h5> Acuerdos </h5>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-10">
											<ul>
												<li style="  padding-top: 10px; padding-bottom: 10px">Me comprometo que en ningun caso haré responsable a Cruz
													Roja Salvadoreña de las actuaciones personales de mi
												hijo/a.</li>
												<li style=" padding-bottom: 10px">Eximo de toda responsabilidad a Cruz Roja Salvadoreña y
													todo personal de cualquier accidente que pudiera ocasionarle
												la muerte, lesiones fisicas o mentales.</li>
												<li style=" padding-bottom: 20px">Actuaré siempre conforme a los principíos fundamentales de
													la Cruz Roja Salvadoreña que son:<br><b><i>Humanidad, Imparcialidad, Neutralibilidad, Independencia, Voluntariado, Unidad y Universabilidad</i> </b>
												</li>
											</ul>
										</div>
									</div>
									<div class="modal-footer">

										<div class="modal-footer">
											<button type="button" onclick="guardarCapacitacion();" class="btn btn-danger">Guardar y continuar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>										
		</div>
	</div>
</div>								
</div>




