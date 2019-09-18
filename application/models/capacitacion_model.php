<?php
class capacitacion_model extends CI_model{

public function insertcap($cap){

	if($this->db->insert('capacitaciones_voluntarios',$cap)){
		return 'Exito';
	}else{
		return 'Error';
	}

}


}
 ?>
