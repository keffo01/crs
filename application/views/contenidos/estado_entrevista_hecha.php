<div class="main-body">
	<div class="page-wrapper">
		<!-- Page-header start -->
		<div class="card page-header p-0">
			<div class="card-block front-icon-breadcrumb row align-items-end">
				<div class="breadcrumb-header col">
					<div class="big-icon">
						<i class="ti-comments-smiley"></i>
					</div>
					<div class="d-inline-block">
						<h5>Ver estado de solicitud</h5>
						<span>Puede revisar periódicamente el estado de su solicitud.</span>
					</div>
				</div>
				<div class="col">
					<div class="page-header-breadcrumb">
						<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
								<a href="<?=base_url();?>">
									<i class="icofont icofont-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item"><a href="<?=base_url();?>estado">Estado de solicitud de
									ingreso</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Page-header end -->

		<!-- Page-body start -->
		<div class="page-body">
			<!-- Table header styling table start -->
			<div class="card">

				<div class="card-header">

					<h5 style="display: block">Actualización</h5>
					<span>Si encuentra un error, llamar al número 2222211, envíenos mensajes o correo
						electrónico.</span>

				</div>
				<div class="card-block table-border-style">
					<div class="table-responsive">
						<table id="tabla_estado" class="table table-styling">
							<thead>
								<tr class="table-primary">
									<th>#</th>
									<th>Nombre </th>
									<th>Apellido</th>
									<th>Fecha de solicitud</th>
									<th>Estado</th>
								</tr>
							</thead>
							<tbody >
								<?php $contador=1;?>
								<?php foreach ($tabla_estado as $te) {?>
									<td><?=$contador?></td>
									<td><?=$te['Nombres']?></td>
									<td><?=$te['Primer_apellido']?></td>
									<td><?=$te['Fecha_ingreso']?></td>
									<td><?php 
									if ($te['Nombre_estado_solicitud'] == 'En proceso') {
										echo $te['Nombre_estado_solicitud'].'<div class="live-status-dos bg-warning"></div>';
									}elseif($te['Nombre_estado_solicitud'] == 'Aceptado'){
										echo $te['Nombre_estado_solicitud'].'<div class="live-status-dos bg-success"></div>';
									}elseif($te['Nombre_estado_solicitud'] == 'En revisión'){
										echo $te['Nombre_estado_solicitud'].'<div class="live-status-dos bg-danger"></div>';
									}else{
										echo $te['Nombre_estado_solicitud'].'<div class="live-status-dos bg-danger"></div>';
									}
								?></td>
								<?php $contador++; }?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<!-- Table header styling table end -->
		</div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3 right">
                <a class="btn btn-disabled" href="javascript:void(0)" >Entrevista enviada</a>
            </div>
        </div>
		<!-- Page-body end -->
	</div>
</div>




