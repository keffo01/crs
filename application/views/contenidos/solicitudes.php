<div class="main-body">
	<div class="page-wrapper">
		<!-- Page-header start -->
		
		<div class="card page-header p-0">
			<div class="card-block front-icon-breadcrumb row align-items-end">
				<div class="breadcrumb-header col">
					<div class="big-icon">
					<i class="icofont icofont-paper"></i>
					</div>
					<div class="d-inline-block">
						<h5>Solicitudes</h5>
						<span>Revisión de solicitudes, se actualizará constantemente</span>
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
							<li class="breadcrumb-item"><a href="<?=base_url();?>solicitudes">Revisión de solicitud de
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

					<h5 style="display: block">Listado</h5>
					<span>Datos exclusivos.</span>

				</div>
				<div class="card-block table-border-style">
					<div class="table-responsive">
						<table id="tabla_solicitudes" class="table table-styling">
							<thead>
								<tr class="table-primary">
									<th>#</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th style="width: 31px;">Fecha de solicitud</th>
									<th>Seccional</th>
									<th style="width: 72px;">Estado</th>
									<th>Gestion</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>

			</div>
			<!-- Table header styling table end -->
		</div>
		<!-- Page-body end -->
	</div>
</div>
<!-- Modal estados-->
<div class="modal fade" id="estado" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Cambiar estado de solicitud</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form id ="estado_form">
				<input type="hidden" value="" id="id_user" name="id_user">
				<select onchange="obtenerSelect()" name="estado_id" id="estado_id" class="form-control">
					<?php foreach ($estado as $e){?>
						<option value="<?php echo $e->Id_estado_solicitud?>"><?php echo $e->Nombre_estado_solicitud?></option>
					<?php }?>
				</select>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="cambiarEstado();" >Guardar</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal PDF -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"style="max-width:900px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title-dos" id="myModalLabel">Datos generales</h4> 
      </div>
      <div class="modal-body">
        <div style="text-align: center;">
			<iframe style="width:800px; height:500px;" frameborder="0"  id='aa'></iframe>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4 right">
                <a class="btn btn-danger" href="<?php echo base_url();?>solicitudes/pdf_2" >Solicitud de actualización</a>
            </div>
        </div>
<script>
	function mostrar_solicitudes() {
		$('#tabla_solicitudes').DataTable({
			"filter": true,
			"ordering": true,
			//"iDisplayLength":4,
			"ajax": {
				"url": "<?php echo base_url();?>solicitudes/mostrar_solicitudes",
				"dataSrc": ""
			},
			"language": {
				"lengthMenu": "Mostrar _MENU_ resultados por página",
				"zeroRecords": "No se encontraron registros",
				"info": "Mostrando página _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros",
				"infoFiltered": "(Filtrando de _MAX_ registros totales)",
				"search": "Buscar solicitudes",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "Siguiente",
					"previous": "Anterior"
				},

			},
			dom: 'Blfrtip',
			buttons: [
				'copy',
				'csv',
				'excel',
				'pdf'
			],
			"columns": [{
					"data": "contador"
				},
				{
					"data": "nombres"
				},
				{
					"data": "primer_apellido"
				},
				{
					"data": "fecha_ingreso"
				},
				{
					"data": "seccional"
				},
				{
					"data": "nombre_estado_solicitud"
				},
				{
					"data": "accion"
				}
			]
		});

	}

	function verPdf(id) {
		window.location.replace("<?=base_url();?>solicitudes/pdf?id=" + id);
	}

	function obtenerIdUser(id){
		$('#id_user').val(id);
	}
	function obtenerSelect() {
		var id = $('#estado_id').val();
		
	}
	function cambiarEstado() {
		var id = $('#id_user').val();
		var id = $('#estado_id').val();
		$.ajax({
			type: 'POST',
			url: '<?=base_url();?>estado/cambio',
			data : $('#estado_form').serialize(),
			success: function (respuesta) {
				if (respuesta == 'exito') {
					$('#estado').modal('hide');
					tabla = $('#tabla_solicitudes').DataTable();
					tabla.destroy();
					mostrar_solicitudes();
				} else {
					alert('error');
				}
			}
		});
	}
	function verPdfId(url, nombre){
        $('#myModal').modal('show');
		$('#aa').attr('src',url);
		$('#myModalLabel').text(nombre);
	}
    
</script>
