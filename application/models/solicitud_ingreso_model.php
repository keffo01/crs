<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class solicitud_ingreso_model extends CI_model{
	public function __construct() {
		parent::__construct();
	}
	
	public function delete($id){
		$this->db->where('id_voluntario',$id);
		if($this->db->delete('solicitud_ingreso')){
			return 'Datos eliminados satifactoriamente';
		}else{
			return 'Ocurrio un error';
		}
	}
	public function llenarUsuario($id_session){
        $pa = "CALL datos_estado_volun_update($id_session)";
		$solicitudes = $this->db->query($pa);
		return $solicitudes->row();
	}

	

	public function estado_solicitud($id){

		$this->db->select('*');
		$this->db->from('estado_solicitud');
		$this->db->where('Id_estado_solicitud='.$id);
		$estado = $this->db->get();
		return $estado->row();
	}
	public function nacionalidad($id){
		$this->db->select('*');
		$this->db->from('nacionalidad');
		$this->db->where('Id_nacionalidad='.$id);
		$nacionalidad = $this->db->get();
		return $nacionalidad->row();
	}
	public function Rol($id){

		$this->db->select('*');
		$this->db->from('roles');
		$this->db->where('Id_rol='.$id);
		$Rol = $this->db->get();
		return $Rol->row();
	}
	public function seccional($id){
		$this->db->select('*');
		$this->db->from('seccional');
		$this->db->where('Id_seccional='.$id);
		$seccional = $this->db->get();
		return $seccional->row();

	}
	public function tipo_seccional($id){
		$this->db->select('*');
		$this->db->from('tipo_seccional');
		$this->db->where('Id_tipo_seccional='.$id);
		$tipo_seccional=$this->db->get();
		return $tipo_seccional->row();

	}
	public function sexo($id){
		$this->db->select('*');
		$this->db->from('sexo');
		$this->db->where('Id_sexo='.$id);
		$sexo = $this->db->get();
		return $sexo->row();
	}
	public function tipo_voluntario($id){
		$this->db->select('*');
		$this->db->from('tipo_voluntario');
		$this->db->where('Id_tipo_voluntario='.$id);
		$tipo_voluntario = $this->db->get();
		return $tipo_voluntario->row();
	}

	public function guardar_solicitud($data){
		$result = $this->db->insert('solicitud_ingreso',$data);
		if($result){
			return 'Exito';
		}else{
			return 'Fail';
		}
	}
	public function update_solicitud($data,$id){
		$this->db->where('Usuario_sol_id ='.$id);
		$result = $this->db->update('solicitud_ingreso',$data);
		if($result){
			return 'Exito';
		}else{
			return 'Fail';
		}
	}

	public function insert_entrevista($data){
		
		if($this->db->insert('entrevista',$data)){
			return 'Exito';
		}else{
			return 'Ocurrio un error';
		}
	}

	 public function mostrar_pdf(){
		
		$car=$this->db->get('solicitud_ingreso');
 		return $car->result_array();
 	}

 	public function select_seccional(){
		$this->db->reconnect();
 		$wen= $this->db->get('seccional');
 		return $wen->result();
	 }
	

 	 	public function select_area(){
 		$wen= $this->db->get('tipo_voluntario');
 		return $wen->result();
 	}


 	 	public function select_sexo(){
 		$wen= $this->db->get('sexo');
 		return $wen->result();
 	}

 	 	public function select_nacionalidad(){
 		$wen= $this->db->get('nacionalidad');
 		return $wen->result();
 	}
	

}
?>
