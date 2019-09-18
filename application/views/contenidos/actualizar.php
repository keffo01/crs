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

							<li class="breadcrumb-item"><a class="btn btn-danger text-white"
									href="<?=base_url();?>estado">Cancelar</a>
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
								<h3>Datos personales </h3>
								<fieldset>
									
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Ingrese su seccional</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Seccional_id" id="Seccional_id"
												class="form-control  ">
												<option value= "0" disabled >Seleccione una seccional</option>
												<?php
												foreach ($seccional as $se) { ?>
												<option value="<?=$se->Id_seccional?>" <?=$se->Id_seccional==$extraer->Seccional_id ? "selected" : ""?>><?=$se->Nombre_seccional?>
												</option>
												<?php } ?>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Area</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Area_id" class="form-control  ">
												<option value= "0" disabled>Seleccione una area</option>
												<?php
											foreach ($area as $ar) { ?>
												<option value="<?=$ar->Id_tipo_voluntario?>" <?=$ar->Id_tipo_voluntario==$extraer->Area_id ? "selected" : ""?>><?=$ar->Nombre_tipo_voluntario?></option>
												<?php } ?>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Primer apellido</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Primer_apellido" type="text" class="form-control  " value="<?php echo $extraer->Primer_apellido ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Segundo apellido</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Segundo_apellido" type="text" class="form-control  " value="<?php echo $extraer->Segundo_apellido ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombres</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombres" type="text" class=" form-control " value="<?php echo $extraer->Nombres ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Sexo</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Sexo_id" class=" form-control ">
												<option value= "0" disabled>Seleccione un sexo</option>
												<?php 
												foreach ($sexo as $se) { ?>
												<option value="<?=$se->Id_sexo?>" <?=$se->Tipo_sexo==$extraer->Tipo_sexo ? "selected" : ""?>><?=$se->Tipo_sexo?></option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Lugar de nacimiento</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Lugar_nacimiento" type="text" class="form-control  " value="<?php echo $extraer->Lugar_nacimiento ?>">
										</div>
									</div>
								</fieldset>

								<h3>Datos personales II</h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Fecha de nacimiento</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Fecha_nacimiento" type="date" class="form-control  " value="<?php echo $extraer->Fecha_nacimiento ?>">
										</div>
									</div>
									


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Edad</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Edad" type="text" class="form-control  " value="<?php echo $extraer->Edad ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nacionalidad</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Nacionalidad_id" class=" form-control ">
												<option value= "0" disabled>Seleccione una nacionalidad</option>
												<?php 
												foreach ($nacionalidad as $na) { ?>
												<option value="<?=$na->Id_nacionalidad?>" <?=$na->Id_nacionalidad==$extraer->Nacionalidad_id ? "selected" : ""?>><?=$na->Nombre_nacionalidad?>
												</option>
												<?php } ?>
											</select>
										</div>
									</div>



									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Carnet de minoridad o partida de nacimiento</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Carnet_partida_nac" type="text" class=" form-control " value="<?php echo $extraer->Carnet_partida_nac ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Lugar de expedicion de partida o carnet</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Lugar_exp_partidacarnet" type="text" class="form-control" value="<?php echo $extraer->Lugar_exp_partidacarnet ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">fecha de expedicion de partida o carnet</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Fecha_exp_partidacarnet" type="date" class="form-control  " value="<?php echo $extraer->Fecha_exp_partidacarnet ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Idiomas que domina</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Idiomas" type="text" class="form-control  " value="<?php echo $extraer->Idiomas ?>">
										</div>
									</div>



								</fieldset>

								<h3>Datos personales III</h3>
								<fieldset>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Domicilio</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Domicilio" type="text" class="form-control " value="<?php echo $extraer->Domicilio ?>">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Telefono" type="text" class="form-control  " value="<?php echo $extraer->Telefono ?>">
										</div>
									</div>



									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de padre</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombre_padre" type="text" class="form-control  " value="<?php echo $extraer->Nombre_padre ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">vive?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Condicion_padre" class="form-control  ">
												<option value= "0" disabled>Seleccione una condicion</option>
												<option value="1" <?php echo $extraer->Condicion_padre == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Condicion_padre == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de madre</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombre_madre" type="text" class="form-control  " value="<?php echo $extraer->Nombre_madre ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">vive?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Condicion_madre" class="form-control  ">
												<option value= "0" disabled>Seleccione una condicion</option>
												<option value="1"  <?php echo $extraer->Condicion_madre == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2"  <?php echo $extraer->Condicion_madre == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>
								</fieldset>

								<H3>Datos academicos</H3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Estudios realizados</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Estudios_realizados" type="text" class="form-control  " value="<?php echo $extraer->Estudios_realizados ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Mas estudios realizados</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Estudios_realizados_dos" type="text" class="form-control  " value="<?php echo $extraer->Estudios_realizados_dos ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Lugar de expedicion de obtencion del diploma de curso
												de
												induccion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Lugar_exp_diploma_induccion" type="text" class="form-control  " value="<?php echo $extraer->Lugar_exp_diploma_induccion ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">fecha de expedicion de obtencion del diploma de curso
												de
												induccion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Fecha_exp_diploma_induccion" type="date" class="form-control  " value="<?php echo $extraer->Fecha_exp_diploma_induccion ?>">
										</div>
									</div>


								</fieldset>

								<h3>Datos medicos </h3>
								<fieldset>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de primer referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Referencia_uno" type="text" class="form-control  " value="<?php echo $extraer->Referencia_uno ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de primer referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Dir_ref_uno" type="text" class="form-control  " value="<?php echo $extraer->Dir_ref_uno ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de primer referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_uno" type="text" class="form-control  " value="<?php echo $extraer->Tel_ref_uno ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de segunda referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Referencia_dos" type="text" class="form-control  " value="<?php echo $extraer->Referencia_dos ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de segunda referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Dir_ref_dos" type="text" class="form-control  " value="<?php echo $extraer->Dir_ref_dos ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de segunda referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_dos" type="text" class="form-control  " value="<?php echo $extraer->Tel_ref_dos ?>">
										</div>
									</div>


								</fieldset>

								<h3>Datos medicos </h3>
								<fieldset>

									<div class="form-group row">

										<div class="col-md-4 col-lg-2">
											<label class="block">Tipo sanguinero</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tipo_sangre" type="text" class=" form-control " value="<?php echo $extraer->Tipo_sangre ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">peso</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Peso" type="text" class=" form-control " value="<?php echo $extraer->Peso ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Altura</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Altura" type="text" class="form-control  " value="<?php echo $extraer->Altura ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Alergias</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Alergias" type="text" class="form-control  " value="<?php echo $extraer->Alergias ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Epilepsia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Epilepsia" class="form-control ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Epilepsia == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Epilepsia == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Asma</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Asma" class="form-control  ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Asma == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Asma == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cardiaco</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Cardiaco" class="form-control  ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Cardiaco == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Cardiaco == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>

								</fieldset>

								<h3>Datos medicos I</h3>
								<fieldset>


									<div class="form-group row">

										<div class="col-md-4 col-lg-2">
											<label class="block">Hepatitis</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Hepatitis" class="form-control  ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Hepatitis == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Hepatitis == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Enfermedades venereas</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Enf_venereas" class="form-control  ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Enf_venereas == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Enf_venereas == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Diabetico</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Diabetico" class="form-control  ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Diabetico == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Diabetico == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Servicios asistenciales a los que tiene
												derecho</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Serv_asistenciales" type="text" class="form-control  "placeholder="ISSS, ANTEL, otros." value="<?php echo $extraer->Serv_asistenciales ?>">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">En caso de accidente avisar a</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Emergencia" type="text" class=" form-control  " value="<?php echo $extraer->Emergencia ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de persona en caso de accidente</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Dir_emergencia" type="text" class=" form-control " value="<?php echo $extraer->Dir_emergencia ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de persona en caso de accidente</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_emergencia" type="text" class="form-control  " value="<?php echo $extraer->Tel_emergencia ?>">
										</div>
									</div>

								</fieldset>

								<h3>Datos de empleo o estudio actual</h3>
								<fieldset>


									<div class="form-group row">

										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de la empresa</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombre_trabajo" type="text" class=" form-control " value="<?php echo $extraer->Nombre_trabajo ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de la empresa</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Direccion_trabajo" type="text" class=" form-control " value="<?php echo $extraer->Direccion_trabajo ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de la empresa</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_trabajo" type="text" class="form-control  " value="<?php echo $extraer->Tel_trabajo ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Estudia actualmente?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Estudiante" class="form-control   ">
												<option value= "0" disabled>Seleccione una respuesta</option>
												<option value="1" <?php echo $extraer->Estudiante == 1 ? "selected" : "" ;?>>Si</option>
												<option value="2" <?php echo $extraer->Estudiante == 2 ? "selected" : "" ;?>>No</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Que estudia?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Carrera" type="text" class=" form-control " value="<?php echo $extraer->Carrera ?>">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Institucion en donde estudia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Institucion" type="text" class=" form-control " value="<?php echo $extraer->Institucion ?>">
										</div>
									</div>


									<div class="row">
										<div class="col-md-9"></div>
										<div class="col-sm-12 col-md-3 d-flex flex-row-reverse">


											<div class="modal fade" id="small-Modal" tabindex="-1" role="dialog"
												style="z-index: 1050; display: none;" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title"> <b>Finalizar solicitud de
																	ingreso</b> </h4>
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
																	<input name="Lugar_ingreso" type="text" class=" form-control " value="<?=$extraer->Lugar_ingreso?>">
																</div>
															</div>


															<div class="row">
																<div class="col-md-6 col-lg-4">
																	<label class="block">Fecha de ingreso</label>
																</div>
																<div class="col-md-6 col-lg-8">
																	<input name="Fecha_ingreso" type="date" class=" form-control " value="<?php echo $extraer->Fecha_ingreso ?>">
																</div>
															</div>

															<div class="modal-footer">
																<button type="button" onclick="actualizarSolicitud();"
																	class="btn btn-danger">Guardar y continuar</button>

															</div>

														</div>
													</div>

												</div>
											</div>
										</div>
									</div>


								</fieldset>
							</form>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
