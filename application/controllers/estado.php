<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends CI_Controller{

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
			}elseif ($val['Nombre_estado_solicitud']=='En proceso' && $val['Entrevista_id'] == 0) {
				$mostrar['cuerpo']=$this->load->view('contenidos/estado_entrevista', $mostrar_dos, TRUE);
			}elseif ($val['Nombre_estado_solicitud']=='En proceso' && $val['Entrevista_id'] != 0) {
				$mostrar['cuerpo']=$this->load->view('contenidos/estado_entrevista_hecha', $mostrar_dos, TRUE);
			} else {
				$mostrar['cuerpo']=$this->load->view('contenidos/estado_ent_cap', $mostrar_dos, TRUE);
			}
			
		}
		$mostrar['javascript']=$this->load->view('modulos/scripts_estado', NULL, TRUE);
		$this->load->view('plantilla_general', $mostrar);
	}
	public function cambio(){

	

		$id = $this->input->post('id_user');
		$sel = $this->input->post('estado_id');
		
		$dato =$this->Solicitud_modelo->cambiarEstado($sel, $id);
		echo $dato;
		$dat =$this->Solicitud_modelo->mostrarEstado($id);
		foreach ($dat as $key) {
			$correo_user = $key['Email'];
			if ($sel==1) {

				$asunto = 'Proceso de ingreso a Cruz Roja Salvadoreña';
			
				$mensaje  ='<html><head><title></title></head><body><div style="margin: auto; display: block; "><img src="http://blogs.eltiempo.com/accion-humanitaria-en-movimiento/wp-content/uploads/sites/530/2016/10/CRUZ-ROJA-1024x1024.jpg" style="margin: auto; display: block; " width="150" align="middle" height="150" align="middle"><br><p style="font-size:16px;text-align: center"><b>¡Felicidades y bienvenido a Cruz Roja Salvadoreña!</b>, tu solicitud ha sido aceptada. Tu proceso ha terminado con éxito.</p></div></body></html>';

		}elseif ($sel==2) {

				$asunto = 'Proceso de ingreso a Cruz Roja Salvadoreña';
			
				$mensaje  ='<html><head><title></title></head><body><div style="margin: auto; display: block; "><img src="http://blogs.eltiempo.com/accion-humanitaria-en-movimiento/wp-content/uploads/sites/530/2016/10/CRUZ-ROJA-1024x1024.jpg" style="margin: auto; display: block; " width="150" align="middle" height="150" align="middle"><br><p style="font-size:16px;text-align: center"> <b>¡Lo lamentamos!</b>, tu solicitud ha sido rechazada.¡Muchas gracias por participar del proceso!.</p></div></body></html>';
		}elseif ($sel==3) {

				$asunto = 'Proceso de ingreso a Cruz Roja Salvadoreña';


				$mensaje  ='<html><head><title></title></head><body><div style="margin: auto; display: block; "><img src="http://blogs.eltiempo.com/accion-humanitaria-en-movimiento/wp-content/uploads/sites/530/2016/10/CRUZ-ROJA-1024x1024.jpg" style="margin: auto; display: block; "width="150" align="middle" height="150" align="middle"><br><p style="font-size:16px;text-align: center"><b>¡Felicidades!</b> Tu solicitud está en proceso, el siguiente paso es acceder a la <a href="http://localhost/crs">pagina de la Cruz Roja</a> y realizar la entrevista.¡Muchas gracias!</p></div></body></html>';

		}else{ 
				$asunto = 'Proceso de ingreso a Cruz Roja Salvadoreña';

				$mensaje  ='<html><head><title></title></head><body><div style="margin: auto; display: block; "><img src="http://blogs.eltiempo.com/accion-humanitaria-en-movimiento/wp-content/uploads/sites/530/2016/10/CRUZ-ROJA-1024x1024.jpg" style="margin: auto; display: block; "width="150" align="middle" height="150" align="middle"><br><p style="font-size:16px;text-align: center"><b>¡Felicidades!</b>, Tu solicitud ha sido ingresada con exito, estas en el proceso de revisión de solicitud, mantente pendiente del correo para continuar con el proceso.¡Muchas gracias!.</p></div></body></html>';
		}	
		}
				
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail($correo_user, $asunto, $mensaje, $cabeceras);
		
	}
	

}

?>
