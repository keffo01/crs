<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login_modelo extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function loginUser($username,$password)
	{
		$this->db->select('a.*,b.Usuario_id');
		$this->db->from('usuarios a');
		$this->db->where('Nombre_usuario',$username);
		$this->db->where('Pass',$password);
		$this->db->join('proceso_ingreso b','a.Id_usuario = b.Usuario_id','left');
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			/*creamos una sesión flashdata y redirigimos al login mostrando el mensaje de dicha sesión, que como sabemos este tipo de sesiones desaparecen la próxima vez que actualicemos la página.*/
			$this->session->set_flashdata('usuario_incorrecto','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>¡Error!</strong> El nombre de usuario y la contraseña que ingresaste no coinciden con nuestros registros.</div>');
			redirect(base_url().'login','refresh');
		}
	}


	public function registrarUsuario($dato){
		$result=$this->db->insert('usuarios',$dato);
		if($result)
		{
			return 'exito';
		}
		else
		{
			return 'fail';
		}
	}

	public function obtenerProcesoIngreso($num_pi){
		$this->db->where('Usuario_id',$num_pi);
		$this->db->select('ifnull(Solicitud_ingreso_id,0) as Solicitud_ingreso_id');
		$pi_id = $this->db->get('proceso_ingreso');
		return $pi_id->result_array();
	}
}