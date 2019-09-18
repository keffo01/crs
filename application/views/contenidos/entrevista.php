<div class="main-body" style="margin-top:5px ">
	<div class="page-wrapper" style="padding: 2px">
		<div class="page-header" style="margin-bottom: 2px">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<div class="d-inline">
							<h4>Solicitud de Ingreso</h4>
							<span>Ingrese los datos que solicitan a continuación:</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a class="btn btn-danger text-white" href="<?=base_url();?>login/logout_ci">Salir</a>
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
							<form class="wizard-form" id="example-advanced-form" action="<?php echo base_url();?>Solicitud_ingreso/guardar_entrevista" method="POST" autocomplete="off">
								<h3>Datos generales</h3>
								<fieldset>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_nombre" type="text" class="form-control required ">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Edad:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_edad" type="text" class="form-control required ">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de residencia:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_direccion" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Estado civil:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_estado_civil" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">DUI:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_DUI" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">NIT:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_NIT" type="text" class="form-control required ">
										</div>
									</div>
								</fieldset>

								<h3>Formacion academica</h3>
								<fieldset>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">N°hijos:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="No_hijos" type="text" class="form-control required  ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Con quien (es) vive:</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_vive_con" type="text" class="form-control required ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Su familia esta compuesta por</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_familia" type="text" class=" form-control required">
										</div>
									</div>
								</fieldset>


								<h3>Formacion academica</h3>
								<fieldset>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Estudia actualmente?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_carrera" type="text" class="form-control required ">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Que nivel de estudio</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_nivel_estudio" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Hableme de su formacion academica
											complementaria: diplomados, capacitaciones y otros estudios</label>
										<div class="col-sm-10">
											<textarea rows="5" cols="5" class="form-control required"
												placeholder="Default textarea" name="Ent_form_academica"></textarea>
										</div>
									</div>

								</fieldset>

								<H3>Experiencia laborarl</H3>
								<fieldset>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Hableme de su empleo, que funciones
											realiza, duracion etc. Su mayor logro ha sido:</label>
										<div class="col-sm-10">
											<textarea rows="10" cols="12" class="form-control required"
												placeholder="Default textarea" name="Ent_exp_laboral"></textarea>
										</div>
									</div>
									<br>
									<p>Si no posees experiencia laboral deja en blanco este apartado</p>
								</fieldset>


								<h3>Caracteristicas personales</h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cuales son sus fortalezas</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_fortalezas" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cuales son sus debilidades</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_debilidades" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cuales son sus valores</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_valores" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cuales son sus metas personales a corto plazo</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_metas" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Escriba su pasatiempo o actividad favorita</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_pasatiempo" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Se considera una persona sociable? ¿Por que?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_sociable" type="text" class="form-control required ">
										</div>
									</div>


								</fieldset>

								<h3>Referencias laborales y conocimiento</h3>
								<fieldset>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Que es lo que mas le gusta de su
											trabajo(Ocupacion, profesion)</label>
										<div class="col-sm-10">
											<textarea rows="10" cols="10" class="form-control required"
												placeholder="Default textarea" name="Ent_desc_trabajo"></textarea>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Conoce usted de Cruz Roja ?¿Que
											conoce?</label>
										<div class="col-sm-10">
											<textarea rows="10" cols="10" class="form-control required"
												placeholder="Default textarea" name="Ent_desc_CR"></textarea>
										</div>
									</div>


								</fieldset>

								<h3>Preguntas de alta importancia</h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">¿Que le motivo a ingresar a la institucion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_motivo_ingreso" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Cuales son su expectativas en la institucion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_expectativas" type="text" class=" form-control required ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Que ofrece usted a nuestra institucion?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_oferta_CR" type="text" class=" form-control required">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Ha participado como voluntario en alguna otra
												organizacion?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Participacion_anterior" type="text" class="form-control required ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">¿Como se beneficia su comunidad a traves del trbajo
												de Cruz Roja?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_comunidad_benef" type="text" class="form-control required ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cuales son las areas que son de mayor interes para
												usted</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_areas_interes" type="text" class=" form-control required ">
										</div>
									</div>

								</fieldset>

								<h3>Preguntas de gran importancia II</h3>
								<fieldset>


									<div class="form-group row">

										<div class="col-md-4 col-lg-2">
											<label class="block">¿Le gusta trabajar en equipo?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_trabaja_en_equipo" type="text" class=" form-control required">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Esta disponible en caso de emergencia?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_disponibilidad" type="text" class=" form-control required">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Tiene alguna condicion? especial, fisica de salud,
												etc</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_condicion_med" type="text" class="form-control required ">
										</div>
									</div>

								</fieldset>

								<h3>Referencias escolares</h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Primer referencia escolar</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_escolar_uno" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_esc_uno" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Segunda referencia escolar</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_escolar_dos" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_esc_dos" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Tercer referencia escolar</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_escolar_tres" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_esc_tres" type="text" class=" form-control required">
										</div>
									</div>

								</fieldset>

								<h3>Referencias laborales</h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Primer referencia laboral</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_lab_uno" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_lab_uno" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Segunda referencia laboral</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_lab_dos" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_lab_dos" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Tercer referencia laboral</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_lab_tres" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_lab_tres" type="text" class=" form-control required">
										</div>
									</div>

								</fieldset>

								<h3>Referencias personales</h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Primer referencia laboral</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_pers_uno" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_pers_uno" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Segunda referencia laboral</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_pers_dos" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_pers_dos" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Tercer referencia laboral</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Ent_ref_pers_tres" type="text" class=" form-control required">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_pers_tres" type="text" class=" form-control required">
										</div>
									</div>

								</fieldset>
								<div class="row">
										<div class="col-md-9"></div>
										<div class="col-sm-12 col-md-3 d-flex flex-row-reverse">
											<div class="modal fade" id="small" tabindex="-1" role="dialog" style="z-index: 1090; display: none;" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title"> <b>Finalizar solicitud de ingreso</b> </h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="modal-body">
															<h5> Acuerdos </h5>
															<div class="row">
																<div class="col-md-1"></div>
																<div class="col-md-10">
																	<ul>
																		<li
																			style="  padding-top: 10px; padding-bottom: 10px">
																			Me comprometo que en ningun caso haré
																			responsable a Cruz
																			Roja Salvadoreña de las actuaciones
																			personales de mi
																			hijo/a.</li>
																		<li style=" padding-bottom: 10px">Eximo de toda
																			responsabilidad a Cruz Roja Salvadoreña y
																			todo personal de cualquier accidente que
																			pudiera ocasionarle
																			la muerte, lesiones fisicas o mentales.</li>
																		<li style=" padding-bottom: 20px">Actuaré
																			siempre conforme a los principíos
																			fundamentales de
																			la Cruz Roja Salvadoreña que
																			son:<br><b><i>Humanidad, Imparcialidad,
																					Neutralibilidad, Independencia,
																					Voluntariado, Unidad y
																					Universabilidad </i></b>
																		</li>
																	</ul>
																</div>
																<div class="col-md-1"></div>
															</div>

															<div class="row" style=" padding-bottom: 10px">
																<div class="col-md-6 col-lg-4">
																	<label class="block">Lugar de ingreso</label>
																</div>
																<div class="col-md-6 col-lg-8">
																	<input name="Lugar_ingreso" type="text"
																		class=" form-control required">
																</div>
															</div>


															<div class="row">
																<div class="col-md-6 col-lg-4">
																	<label class="block">Fecha de ingreso</label>
																</div>
																<div class="col-md-6 col-lg-8">
																	<input name="Ent_fecha" type="date" class=" form-control required">
																</div>
															</div>

															<div class="modal-footer">
																<button type="submit" class="btn btn-danger">Guardar y continuar</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
							</form>
						</section>
									
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
