<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Solicitudes_modelo extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function mostrarPdfId($id){
		$pa = "CALL pdf($id)"; 
		$result = $this->db->query($pa);
		return $result->result_array();
	}

	

	//MOSTRAR solicitudes
	public function mostrarSolicitudes(){
    $pa = "CALL Datos_generales_voluntario() ";
		$solicitudes = $this->db->query($pa);
		return $solicitudes->result_array();
    }
    
    public function estado_solicitud(){
			$estado = $this->db->get("estado_solicitud");
			return $estado->result();
		}

		public function mostrar_pdf(){


			$this->db->select('sol.id_voluntario,se.Nombre_seccional,tp.Nombre_tipo_voluntario, sol.Primer_apellido, sol.Segundo_apellido, sol.Nombres,sex.Tipo_sexo,sol.Lugar_nacimiento, sol.Fecha_nacimiento,sol.Edad,na.Nombre_nacionalidad,sol.Carnet_partida_nac,sol.Lugar_exp_partidacarnet,sol.Fecha_exp_partidacarnet,sol.Idiomas,
	sol.Domicilio,sol.Telefono,sol.Email,sol.Nombre_padre,IF(Condicion_padre = 1,"X","x")as  Condicion_padre,sol.Nombre_madre,IF(Condicion_madre = 1,"X","x")as  Condicion_madre,sol.Estudios_realizados, sol.Estudios_realizados_dos,sol.Lugar_exp_diploma_induccion,sol.Fecha_exp_diploma_induccion,sol.Referencia_uno,sol.Dir_ref_uno,sol.Tel_ref_uno, sol.Referencia_dos,sol.Dir_ref_dos,sol.Tel_ref_dos,sol.Tipo_sangre,sol.Peso,sol.Altura,sol.Alergias,sol.Epilepsia,sol.Asma,sol.Cardiaco,sol.Hepatitis, sol.Enf_venereas,sol.Diabetico,sol.Serv_asistenciales,sol.Emergencia,sol.Dir_emergencia,sol.Tel_emergencia,sol.Nombre_trabajo,sol.Direccion_trabajo, sol.Tel_trabajo,sol.Estudiante,sol.Carrera,sol.Institucion,sol.Dir_institucion,sol.Tel_institucion,sol.Lugar_ingreso,sol.Fecha_ingreso');	
			$this->db->from('solicitud_ingreso sol');
			$this->db->join('seccional se','sol.Seccional_id = se.Id_seccional','INNER');
			$this->db->join('tipo_voluntario tp','sol.Area_id = tp.Id_tipo_voluntario','INNER');
			$this->db->join('sexo sex','sol.Sexo_id = sex.Id_sexo','INNER');
			$this->db->join('nacionalidad na','sol.Nacionalidad_id = na.Id_nacionalidad','INNER');
			
			$car=$this->db->get();
			return $car->result_array();
		}


}
?>
