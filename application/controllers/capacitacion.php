<?php 

class Capacitacion extends CI_controller{


	public function __construct(){
		parent:: __construct();
		$this->load->model('capacitacion_model','CM',TRUE);
	}

	public function index(){
		
	$mostrar['cabeza']=$this->load->view('modulos/head_estandar', NULL, TRUE);
	$mostrar['encabezado']=$this->load->view('modulos/header_user', NULL, TRUE);
	$mostrar['precargador']=$this->load->view('modulos/precargador', NULL, TRUE);
	$mostrar['barra_lateral']=$this->load->view('modulos/nav_aside', NULL, TRUE);
	$mostrar['cuerpo']=$this->load->view('contenidos/Capacitaciones',NULL,TRUE);
	$mostrar['javascript']=$this->load->view('modulos/scripts_solicitudes', NULL, TRUE);
	$this->load->view('plantilla_general',$mostrar);
	
	}

	public function guardar_cap(){

		$cap  = array('Nombre_capacitacion' => $this->input->post('Nombre_capacitacion'),
					  'Fecha_capacitacion' => $this->input->post('Fecha_capacitacion' ),
					  'Capacitador' => $this->input->post('Capacitador' ),
						'No_horas' => $this->input->post('No_horas' ),
					  'Voluntario_id' => $this->input->post('Voluntario_id'),
					 'Observacion_capacitaciones' => $this->input->post('Observacion_capacitaciones')
					);
		$data=$this->CM->insertcap($cap);
		echo $data;
	}
	public function actualizar_cap(){
		$cap  = array('Nombre_capacitacion' => $this->input->post('Nombre_capacitacion'),
					  'Fecha_capacitacion' => $this->input->post('Fecha_capacitacion' ),
					  'capacitador' => $this->input->post('capacitador' ),
						'No_horas' => $this->input->post('No_horas' ),
					  'Voluntario_id' => $this->input->post('Voluntario_id'),
					 'Observacion_capacitaciones' => $this->input->post('Observacion_capacitaciones')
					);
		$this->CM->updatecap($cap);
	}

	
}
?>