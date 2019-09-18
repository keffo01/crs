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
									href="<?=base_url();?>login/logout_ci">Salir</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--The Camera Modal-->
<div class="modal fade" id="Modal-lightbox" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<video id="video"></video>
				<br>
				<button id="boton">Tomar foto</button>
				<p id="estado"></p>
				<canvas id="canvas" style="display: none;"></canvas>
			</div>
		</div>
	</div>
</div>
<!--Final of Modal-->
	<div class="page-body">
		<div class="card-block">
			<div class="row">
				<div class="col-md-12">
					<div id="wizard">
						<section>
							<form class="wizard-form" id="example-advanced-form" autocomplete="off" enctype="multipart/form-data" action="<?=base_url();?>solicitud_ingreso/nueva_solicitud" method="POST">
								<h3>Datos personales </h3>
								<fieldset>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Subir una foto</label>
										</div>
										<div class="col-md-4 col-lg-5">
											<input type="hidden" id="Fotografia" name="Fotografia" hidden="hidden" class="input_normal">
											<img alt="" hidden="true" id="eshte" width="100" height="120">
											
											<input type="file" name="Fotografia" id="Fotografia" class="form-control input_file" accept="image/*" value="">
										</div>
										<div class="col-md-4 col-lg-5">
											<button type="button" class="btn btn-primary waves-effect"  onclick="abrirCamara()">Tomarse una Foto</button>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Ingrese su seccional</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Seccional_id" id="Seccional_id"
												class="form-control  ">
												<option>Seleccione una seccional</option>
												<?php
												foreach ($seccional as $se) { ?>
												<option value="<?=$se->Id_seccional?>"><?=$se->Nombre_seccional?>
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
												<option>Seleccione una area</option>
												<?php
											foreach ($area as $ar) { ?>
												<option value="<?=$ar->Id_tipo_voluntario?>">
													<?=$ar->Nombre_tipo_voluntario?></option>
												<?php } ?>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Primer apellido</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input pattern="A-Z" name="Primer_apellido" type="text" class="form-control Texto  ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Segundo apellido</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Segundo_apellido" type="text" class="form-control Texto ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombres</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombres" type="text" class=" form-control Nombres">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Sexo</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Sexo_id" class=" form-control ">
												<option>Seleccione un sexo</option>
												<?php 
												foreach ($sexo as $se) { ?>
												<option value="<?=$se->Id_sexo?>"><?=$se->Tipo_sexo?></option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Lugar de nacimiento</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Lugar_nacimiento" class="form-control">
												<option value>Seccione un departamento</option>
												<option value="Ahuachapan">Ahuachapan</option>
												<option value="Santa Ana">Santa Ana</option>
												<option value="Sonsonate">Sonsonate</option>
												<option value="Usulután">Usulután</option>
												<option value="Morazán">Morazán</option>
												<option value="La Unión">La Unión</option>
												<option value="La libertad">La Libertad</option>
												<option value="Chalatenango">Chalatenango</option>
												<option value="Cuscatlán">Cuscatlán</option>
												<option value="San Salvador">San Salvador</option>
												<option value="La Paz">La Paz</option>
												<option value="Cabañas">Cabañas</option>
												<option value="San vicente">San vicente</option>
											</select>
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
										
											<input onchange="edad()"  data-dd-format="Y-m-d" class="form-control" type="text" placeholder="Fecha de nacimiento"name="Fecha_nacimiento" id="Fecha_nacimiento" >
										</div>
									</div>



									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Edad</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Edad" id="Edad" type="text" class="form-control Edad">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nacionalidad</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Nacionalidad_id" class=" form-control ">
												<option>Seleccione una nacionalidad</option>
												<?php 
												foreach ($nacionalidad as $na) { ?>
												<option value="<?=$na->Id_nacionalidad?>"><?=$na->Nombre_nacionalidad?>
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
											<input name="Carnet_partida_nac" type="text" class=" form-control Minoridad">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Lugar de expedicion de partida o carnet</label>
										</div>
										<div class="col-md-8 col-lg-10">
												<select name="Lugar_nacimiento" class="form-control">
												<option value>Seccione un departamento</option>
												<option value="Ahuachapan">Ahuachapan</option>
												<option value="Santa Ana">Santa Ana</option>
												<option value="Sonsonate">Sonsonate</option>
												<option value="Usulután">Usulután</option>
												<option value="Morazán">Morazán</option>
												<option value="La Unión">La Unión</option>
												<option value="La libertad">La Libertad</option>
												<option value="Chalatenango">Chalatenango</option>
												<option value="Cuscatlán">Cuscatlán</option>
												<option value="San Salvador">San Salvador</option>
												<option value="La Paz">La Paz</option>
												<option value="Cabañas">Cabañas</option>
												<option value="San vicente">San vicente</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">fecha de expedicion de partida o carnet</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Fecha_exp_partidacarnet" type="date"
												class="form-control  ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Idiomas que domina</label>
										</div>
										<div class="col-md-8 col-lg-10">
										  <select class="js-example-basic-multiple col-sm-12" multiple="multiple">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="WY">Coming</option>
                                            <option value="WY">Hanry Die</option>
                                            <option value="WY">John Doe</option>
                                           </select>
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
											<input name="Domicilio" type="text" class="form-control  ">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Telefono" type="text" class="form-control Telefono ">
										</div>
									</div>



									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de padre</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombre_padre" type="text" class="form-control Completos ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">vive?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Condicion_padre" class="form-control  ">
												<option value>Seleccione una condicion</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de madre</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Nombre_madre" type="text" class="form-control Completos  ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">vive?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Condicion_madre" class="form-control  ">
												<option value>Seleccione una condicion</option>
												<option value="1">Si</option>
												<option value="2">No</option>
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
											<input name="Estudios_realizados" type="text"
												class="form-control  Completos ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Mas estudios realizados</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Estudios_realizados_dos" type="text"
												class="form-control Completos ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Lugar de expedicion de obtencion del diploma de curso
												de
												induccion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Lugar_exp_diploma_induccion" type="text"
												class="form-control Texto ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">fecha de expedicion de obtencion del diploma de curso
												de
												induccion</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Fecha_exp_diploma_induccion" type="date"
												class="form-control  ">
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
											<input name="Referencia_uno" type="text" class="form-control  Completos ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de primer referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Dir_ref_uno" type="text" class="form-control  ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de primer referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_uno" type="text" class="form-control Telefono ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Nombre de segunda referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Referencia_dos" type="text" class="form-control Completos ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de segunda referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Dir_ref_dos" type="text" class="form-control  ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de segunda referencia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_ref_dos" type="text" class="form-control Telefono ">
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
											<input name="Tipo_sangre" type="text" class=" form-control ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Peso</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Peso" type="text" class=" form-control Libras ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Altura</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Altura" type="text" class="form-control Centimetros ">
										</div>
										
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Alergias</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Alergias" type="text" class="form-control  ">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Epilepsia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Epilepsia" class="form-control ">
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Asma</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Asma" class="form-control  ">
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Cardiaco</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Cardiaco" class="form-control  ">
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
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
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Enfermedades venereas</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Enf_venereas" class="form-control  ">
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Diabetico</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Diabetico" class="form-control  ">
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Servicios asistenciales a los que tiene
												derecho</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Serv_asistenciales" type="text" class="form-control  Completos"
												placeholder="ISSS, ANTEL, etc">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">En caso de accidente avisar a</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Emergencia" type="text" class=" form-control  Completos">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de persona en caso de accidente</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Dir_emergencia" type="text" class=" form-control ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de persona en caso de accidente</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_emergencia" type="text" class="form-control Telefono ">
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
											<input name="Nombre_trabajo" type="text" class=" form-control Completos">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Direccion de la empresa</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Direccion_trabajo" type="text" class=" form-control ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Telefono de la empresa</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Tel_trabajo" type="text" class="form-control Telefono ">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="bloasdck">Estudia actualmente?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<select name="Estudiante" class="form-control   ">
												<option value>Seleccione una respuesta</option>
												<option value="1">Si</option>
												<option value="2">No</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">¿Que estudia?</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Carrera" type="text" class=" form-control Completos">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-md-4 col-lg-2">
											<label class="block">Institucion en donde estudia</label>
										</div>
										<div class="col-md-8 col-lg-10">
											<input name="Institucion" type="text" class=" form-control Completos ">
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
																	<input name="Lugar_ingreso" type="text"
																		class=" form-control Texto">
																</div>
															</div>


															<div class="row">
																<div class="col-md-6 col-lg-4">
																	<label class="block">Fecha de ingreso</label>
																</div>
																<div class="col-md-6 col-lg-8">
																	<input name="Fecha_ingreso" type="date"
																		class=" form-control ">
																</div>
															</div>

															<div class="modal-footer">
																<button type="submit"
																	class="btn btn-danger" id="btnmodal">Guardar y continuar</button>

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
