<div class="main-body">
	<div class="page-wrapper">
		<!-- Page-header start -->
		<div class="page-header">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="page-header-title">
						<div class="d-inline">
							<h4>Perfil de Usuario</h4>
							<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="index-1.htm"> <i class="feather icon-home"></i> </a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Perfil de Usuario</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Page-header end -->

		<!-- Page-body start -->
		<div class="page-body">
			<!--profile cover start-->
			<div class="row">
				<div class="col-lg-12">
					<div class="cover-profile">
						<div class="profile-bg-img">
							<img class="profile-bg-img img-fluid"
								src="<?=base_url()?>\files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
							<div class="card-block user-info">
								<div class="col-md-12">
									<div class="media-left">
										<a href="#" class="profile-image">
											<img class="user-img img-radius"
												src="<?=base_url()?>\files\assets\images\user-profile\user-img.jpg"
												alt="user-img">
										</a>
									</div>
									<div class="media-body row">
										<div class="col-lg-12">
											<div class="user-title">
												<h2>Josephin Villa</h2>
												<span class="text-white">Web designer</span>
											</div>
										</div>
										<div>
											<div class="pull-right cover-btn">
												<!--<button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                                            <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--profile cover end-->
			<div class="row">
				<div class="col-lg-12">
					<!-- tab header start -->
					<div class="tab-header card">
						<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Información personal</a>
								<div class="slide"></div>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Servicios</a>
								<div class="slide"></div>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Contactos</a>
								<div class="slide"></div>
							</li>

						</ul>
					</div>
					<!-- tab header end -->
					<!-- tab content start -->
					<div class="tab-content">
						<!-- tab panel personal start -->
						<div class="tab-pane active" id="personal" role="tabpanel">
							<!-- personal card start -->
							<div class="card">
								<div class="card-header">
									<h5 class="card-header-text">About Me</h5>
									<button id="edit-btn" type="button"
										class="btn btn-sm btn-primary waves-effect waves-light f-right">
										<i class="icofont icofont-edit"></i>
									</button>
								</div>
								<div class="card-block">
									<div class="view-info">
										<div class="row">
											<div class="col-lg-12">
												<div class="general-info">
													<div class="row">
														<div class="col-lg-12 col-xl-6">
															<div class="table-responsive">
																<table class="table m-0">
																	<tbody>
																		<tr>
																			<th scope="row">Full Name</th>
																			<td>Josephine Villa</td>
																		</tr>
																		<tr>
																			<th scope="row">Gender</th>
																			<td>Female</td>
																		</tr>
																		<tr>
																			<th scope="row">Birth Date</th>
																			<td>October 25th, 1990</td>
																		</tr>
																		<tr>
																			<th scope="row">Marital Status</th>
																			<td>Single</td>
																		</tr>
																		<tr>
																			<th scope="row">Location</th>
																			<td>New York, USA</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<!-- end of table col-lg-6 -->
														<div class="col-lg-12 col-xl-6">
															<div class="table-responsive">
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row">Email</th>
																			<td><a href="#!"><span class="__cf_email__"
																						data-cfemail="4206272f2d02273a232f322e276c212d2f">[email&#160;protected]</span></a>
																			</td>
																		</tr>
																		<tr>
																			<th scope="row">Mobile Number</th>
																			<td>(0123) - 4567891</td>
																		</tr>
																		<tr>
																			<th scope="row">Twitter</th>
																			<td>@xyz</td>
																		</tr>
																		<tr>
																			<th scope="row">Skype</th>
																			<td>demo.skype</td>
																		</tr>
																		<tr>
																			<th scope="row">Website</th>
																			<td><a href="#!">www.demo.com</a></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<!-- end of table col-lg-6 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of general info -->
											</div>
											<!-- end of col-lg-12 -->
										</div>
										<!-- end of row -->
									</div>
									<!-- end of view-info -->
									<div class="edit-info">
										<div class="row">
											<div class="col-lg-12">
												<div class="general-info">
													<div class="row">
														<div class="col-lg-6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="input-group">
																				<span class="input-group-addon"><i
																						class="icofont icofont-user"></i></span>
																				<input type="text" class="form-control"
																					placeholder="Full Name">
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="form-radio">
																				<div class="group-add-on">
																					<div
																						class="radio radiofill radio-inline">
																						<label>
																							<input type="radio"
																								name="radio"
																								checked=""><i
																								class="helper"></i> Male
																						</label>
																					</div>
																					<div
																						class="radio radiofill radio-inline">
																						<label>
																							<input type="radio"
																								name="radio"><i
																								class="helper"></i>
																							Female
																						</label>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<input id="dropper-default"
																				class="form-control" type="text"
																				placeholder="Select Your Birth Date">
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<select id="hello-single"
																				class="form-control">
																				<option value="">---- Marital Status
																					----</option>
																				<option value="married">Married</option>
																				<option value="unmarried">Unmarried
																				</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="input-group">
																				<span class="input-group-addon"><i
																						class="icofont icofont-location-pin"></i></span>
																				<input type="text" class="form-control"
																					placeholder="Address">
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!-- end of table col-lg-6 -->
														<div class="col-lg-6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="input-group">
																				<span class="input-group-addon"><i
																						class="icofont icofont-mobile-phone"></i></span>
																				<input type="text" class="form-control"
																					placeholder="Mobile Number">
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="input-group">
																				<span class="input-group-addon"><i
																						class="icofont icofont-social-twitter"></i></span>
																				<input type="text" class="form-control"
																					placeholder="Twitter Id">
																			</div>
																		</td>
																	</tr>
																	<!-- <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr> -->
																	<tr>
																		<td>
																			<div class="input-group">
																				<span class="input-group-addon"><i
																						class="icofont icofont-social-skype"></i></span>
																				<input type="email" class="form-control"
																					placeholder="Skype Id">
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="input-group">
																				<span class="input-group-addon"><i
																						class="icofont icofont-earth"></i></span>
																				<input type="text" class="form-control"
																					placeholder="website">
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!-- end of table col-lg-6 -->
													</div>
													<!-- end of row -->
													<div class="text-center">
														<a href="#!"
															class="btn btn-primary waves-effect waves-light m-r-20">Guardar</a>
														<a href="#!" id="edit-cancel"
															class="btn btn-default waves-effect">Cancelar</a>
													</div>
												</div>
												<!-- end of edit info -->
											</div>
											<!-- end of col-lg-12 -->
										</div>
										<!-- end of row -->
									</div>
									<!-- end of edit-info -->
								</div>
								<!-- end of card-block -->
							</div>
							
						</div>
						<!-- tab pane personal end -->
						<!-- tab pane info start -->
						<div class="tab-pane" id="binfo" role="tabpanel">
							<!-- info card start -->
							<div class="card">
								<div class="card-header">
									<h5 class="card-header-text">User Services</h5>
								</div>
								<div class="card-block">
									<div class="row">
										<div class="col-md-6">
											<div class="card b-l-success business-info services m-b-20">
												<div class="card-header">
													<div class="service-header">
														<a href="#">
															<h5 class="card-header-text">Shivani Hero</h5>
														</a>
													</div>
													<span
														class="dropdown-toggle addon-btn text-muted f-right service-btn"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
														role="tooltip">
													</span>
													<div class="dropdown-menu dropdown-menu-right b-none services-list">
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-edit"></i> Edit</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-ui-delete"></i> Delete</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-eye-alt"></i> View</a>
													</div>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-12">
															<p class="task-detail">Lorem ipsum dolor sit amet, consectet
																ur adipisicing elit, sed do eiusmod temp or incidi dunt
																ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
														</div>
														<!-- end of col-sm-8 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of card-block -->
											</div>
										</div>
										<div class="col-md-6">
											<div class="card b-l-danger business-info services">
												<div class="card-header">
													<div class="service-header">
														<a href="#">
															<h5 class="card-header-text">Dress and Sarees</h5>
														</a>
													</div>
													<span
														class="dropdown-toggle addon-btn text-muted f-right service-btn"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
														role="tooltip">
													</span>
													<div class="dropdown-menu dropdown-menu-right b-none services-list">
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-edit"></i> Edit</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-ui-delete"></i> Delete</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-eye-alt"></i> View</a>
													</div>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-12">
															<p class="task-detail">Lorem ipsum dolor sit amet, consectet
																ur adipisicing elit, sed do eiusmod temp or incidi dunt
																ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
														</div>
														<!-- end of col-sm-8 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of card-block -->
											</div>
										</div>
										<div class="col-md-6">
											<div class="card b-l-info business-info services">
												<div class="card-header">
													<div class="service-header">
														<a href="#">
															<h5 class="card-header-text">Shivani Auto Port</h5>
														</a>
													</div>
													<span
														class="dropdown-toggle addon-btn text-muted f-right service-btn"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
														role="tooltip">
													</span>
													<div class="dropdown-menu dropdown-menu-right b-none services-list">
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-edit"></i> Edit</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-ui-delete"></i> Delete</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-eye-alt"></i> View</a>
													</div>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-12">
															<p class="task-detail">Lorem ipsum dolor sit amet, consectet
																ur adipisicing elit, sed do eiusmod temp or incidi dunt
																ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
														</div>
														<!-- end of col-sm-8 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of card-block -->
											</div>
										</div>
										<div class="col-md-6">
											<div class="card b-l-warning business-info services">
												<div class="card-header">
													<div class="service-header">
														<a href="#">
															<h5 class="card-header-text">Hair stylist</h5>
														</a>
													</div>
													<span
														class="dropdown-toggle addon-btn text-muted f-right service-btn"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
														role="tooltip">
													</span>
													<div class="dropdown-menu dropdown-menu-right b-none services-list">
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-edit"></i> Edit</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-ui-delete"></i> Delete</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-eye-alt"></i> View</a>
													</div>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-12">
															<p class="task-detail">Lorem ipsum dolor sit amet, consectet
																ur adipisicing elit, sed do eiusmod temp or incidi dunt
																ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
														</div>
														<!-- end of col-sm-8 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of card-block -->
											</div>
										</div>
										<div class="col-md-6">
											<div class="card b-l-danger business-info services">
												<div class="card-header">
													<div class="service-header">
														<a href="#">
															<h5 class="card-header-text">BMW India</h5>
														</a>
													</div>
													<span
														class="dropdown-toggle addon-btn text-muted f-right service-btn"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
														role="tooltip">
													</span>
													<div class="dropdown-menu dropdown-menu-right b-none services-list">
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-edit"></i> Edit</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-ui-delete"></i> Delete</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-eye-alt"></i> View</a>
													</div>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-12">
															<p class="task-detail">Lorem ipsum dolor sit amet, consectet
																ur adipisicing elit, sed do eiusmod temp or incidi dunt
																ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
														</div>
														<!-- end of col-sm-8 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of card-block -->
											</div>
										</div>
										<div class="col-md-6">
											<div class="card b-l-success business-info services">
												<div class="card-header">
													<div class="service-header">
														<a href="#">
															<h5 class="card-header-text">Shivani Hero</h5>
														</a>
													</div>
													<span
														class="dropdown-toggle addon-btn text-muted f-right service-btn"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
														role="tooltip">
													</span>
													<div class="dropdown-menu dropdown-menu-right b-none services-list">
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-edit"></i> Edit</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-ui-delete"></i> Delete</a>
														<a class="dropdown-item" href="#!"><i
																class="icofont icofont-eye-alt"></i> View</a>
													</div>
												</div>
												<div class="card-block">
													<div class="row">
														<div class="col-sm-12">
															<p class="task-detail">Lorem ipsum dolor sit amet, consectet
																ur adipisicing elit, sed do eiusmod temp or incidi dunt
																ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
														</div>
														<!-- end of col-sm-8 -->
													</div>
													<!-- end of row -->
												</div>
												<!-- end of card-block -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h5 class="card-header-text">Profit</h5>
										</div>
										<div class="card-block">
											<div id="main" style="height:300px;width: 100%;"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- info card end -->
						</div>
						<!-- tab pane info end -->
						<!-- tab pane contact start -->
						<div class="tab-pane" id="contacts" role="tabpanel">
							<div class="row">
								<div class="col-xl-3">
									<!-- user contact card left side start -->
									<div class="card">
										<div class="card-header contact-user">
											<img class="img-radius img-40"
												src="<?=base_url()?>\files\assets\images\avatar-4.jpg"
												alt="contact-user">
											<h5 class="m-l-10">John Doe</h5>
										</div>
										<div class="card-block">
											<ul class="list-group list-contacts">
												<li class="list-group-item active"><a href="#">All Contacts</a></li>
												<li class="list-group-item"><a href="#">Recent Contacts</a></li>
												<li class="list-group-item"><a href="#">Favourite Contacts</a></li>
											</ul>
										</div>
										<div class="card-block groups-contact">
											<h4>Groups</h4>
											<ul class="list-group">
												<li class="list-group-item justify-content-between">
													Project
													<span class="badge badge-primary badge-pill">30</span>
												</li>
												<li class="list-group-item justify-content-between">
													Notes
													<span class="badge badge-success badge-pill">20</span>
												</li>
												<li class="list-group-item justify-content-between">
													Activity
													<span class="badge badge-info badge-pill">100</span>
												</li>
												<li class="list-group-item justify-content-between">
													Schedule
													<span class="badge badge-danger badge-pill">50</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
										</div>
										<div class="card-block">
											<div class="connection-list">
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-1.jpg"
														alt="f-1" data-toggle="tooltip" data-placement="top"
														data-original-title="Airi Satou">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-2.jpg"
														alt="f-2" data-toggle="tooltip" data-placement="top"
														data-original-title="Angelica Ramos">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-3.jpg"
														alt="f-3" data-toggle="tooltip" data-placement="top"
														data-original-title="Ashton Cox">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-4.jpg"
														alt="f-4" data-toggle="tooltip" data-placement="top"
														data-original-title="Cara Stevens">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-5.jpg"
														alt="f-5" data-toggle="tooltip" data-placement="top"
														data-original-title="Garrett Winters">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-1.jpg"
														alt="f-6" data-toggle="tooltip" data-placement="top"
														data-original-title="Cedric Kelly">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-3.jpg"
														alt="f-7" data-toggle="tooltip" data-placement="top"
														data-original-title="Brielle Williamson">
												</a>
												<a href="#"><img class="img-fluid img-radius"
														src="<?=base_url()?>\files\assets\images\user-profile\follower\f-5.jpg"
														alt="f-8" data-toggle="tooltip" data-placement="top"
														data-original-title="Jena Gaines">
												</a>
											</div>
										</div>
									</div>
									<!-- user contact card left side end -->
								</div>
								<div class="col-xl-9">
									<div class="row">
										<div class="col-sm-12">
											<!-- contact data table card start -->
											<div class="card">
												<div class="card-header">
													<h5 class="card-header-text">Contacts</h5>
												</div>
												<div class="card-block contact-details">
													<div class="data_table_main table-responsive dt-responsive">
														<table id="simpletable"
															class="table  table-striped table-bordered nowrap">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Email</th>
																	<th>Mobileno.</th>
																	<th>Favourite</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="bbdad9d88a8988fbdcd6dad2d795d8d4d6">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="a3c2c1c0929190e3c4cec2cacf8dc0ccce">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star-o" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="1b7a79782a29285b7c767a727735787476">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="0c6d6e6f3d3e3f4c6b616d6560226f6361">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="ccadaeaffdfeff8caba1ada5a0e2afa3a1">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star-o" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="f7969594c6c5c4b7909a969e9bd994989a">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="f1909392c0c3c2b1969c90989ddf929e9c">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="7d1c1f1e4c4f4e3d1a101c1411531e1210">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="2f4e4d4c1e1d1c6f48424e4643014c4042">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="f4959697c5c6c7b49399959d98da979b99">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star-o" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Garrett Winters</td>
																	<td><a href="<?=base_url()?>\..\..\cdn-cgi\l\email-protection.htm"
																			class="__cf_email__"
																			data-cfemail="55343736646766153238343c397b363a38">[email&#160;protected]</a>
																	</td>
																	<td>9989988988</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i>
																	</td>
																	<td class="dropdown">
																		<button type="button"
																			class="btn btn-primary dropdown-toggle"
																			data-toggle="dropdown" aria-haspopup="true"
																			aria-expanded="false"><i class="fa fa-cog"
																				aria-hidden="true"></i></button>
																		<div
																			class="dropdown-menu dropdown-menu-right b-none contact-menu">
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-edit"></i>Edit</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-delete"></i>Delete</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>View</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-tasks-alt"></i>Project</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-ui-note"></i>Notes</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-eye-alt"></i>Activity</a>
																			<a class="dropdown-item" href="#!"><i
																					class="icofont icofont-badge"></i>Schedule</a>
																		</div>
																	</td>
																</tr>



															</tbody>
															<tfoot>
																<tr>
																	<th>Name</th>
																	<th>Email</th>
																	<th>Mobileno.</th>
																	<th>Favourite</th>
																	<th>Action</th>
																</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
											<!-- contact data table card end -->
										</div>
									</div>
								</div>
							</div>

							<!-- tab pane contact end -->

						</div>
						<!-- tab content end -->
					</div>
				</div>
			</div>
			<!-- Page-body end -->
		</div>
	</div>
