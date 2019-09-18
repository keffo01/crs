<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensajes extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Solicitud_modelo');
	}

	public function index(){
		if($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 6 )
		{
			redirect(base_url().'login');
		}
		//EXTRAEMOS USUARIO POR SOLICITUD
		$solicitud_num = $this->session->userdata('solicitud_id');
		$c = $this->Solicitud_modelo->mostrarEstado($solicitud_num);
		//MOSTRAMOS TABLA
		$mostrar_dos['tabla_estado']= $c;
		$mostrar['cabeza']=$this->load->view('modulos/head_estandar', NULL, TRUE);
		
		
		$mostrar['precargador']=$this->load->view('modulos/precargador', NULL, TRUE);
		foreach ($c as $val) {
			if ($val['Nombre_estado_solicitud']=='En revisión' || $val['Nombre_estado_solicitud']=='Rechazado') {
				$mostrar['encabezado']=$this->load->view('modulos/header_user', NULL, TRUE);
			} else {
				$mostrar['encabezado']=$this->load->view('modulos/header_user_not_update', NULL, TRUE);
			}
			
		}

		$mostrar['barra_lateral']=$this->load->view('modulos/nav_aside', NULL, TRUE);
		foreach ($c as $val) {
			if ($val['Nombre_estado_solicitud']=='En revisión' || $val['Nombre_estado_solicitud']=='Rechazado') {
				$mostrar['cuerpo']=$this->load->view('contenidos/estado', $mostrar_dos, TRUE);
			}elseif ($val['Nombre_estado_solicitud']=='En proceso') {
				$mostrar['cuerpo']=$this->load->view('contenidos/estado_entrevista', $mostrar_dos, TRUE);
			} else {
				$mostrar['cuerpo']=$this->load->view('contenidos/estado_ent_cap', $mostrar_dos, TRUE);
			}
			
		}
		$mostrar['javascript']=$this->load->view('modulos/scripts_estado', NULL, TRUE);
		$this->load->view('plantilla_general', $mostrar);
	}

}

?>
