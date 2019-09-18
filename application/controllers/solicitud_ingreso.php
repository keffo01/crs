<?php
Class Solicitud_ingreso extends CI_controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Solicitud_ingreso_model', 'SIM', TRUE);
        $this->load->model('Solicitud_modelo');
        $this->load->helper('array');
    }
    public function index()
    {
        if ($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 6) {
            redirect(base_url() . 'login');
        }
        $bon              = $this->SIM->select_seccional();
        $wen['seccional'] = $bon;
        $bon         = $this->SIM->select_area();
        $wen['area'] = $bon;
        $bon         = $this->SIM->select_sexo();
        $wen['sexo'] = $bon;
        $bon                      = $this->SIM->select_nacionalidad();
        $wen['nacionalidad']      = $bon;
        $mostrar['cabeza']        = $this->load->view('modulos/head_estandar', NULL, TRUE);
        $mostrar['encabezado']    = $this->load->view('modulos/header_user', NULL, TRUE);
        $mostrar['precargador']   = $this->load->view('modulos/precargador', NULL, TRUE);
        $mostrar['barra_lateral'] = $this->load->view('modulos/nav_aside', NULL, TRUE);
        $mostrar['cuerpo'] = $this->load->view('contenidos/solicitud_ingreso', $wen, TRUE);
        $mostrar['javascript'] = $this->load->view('modulos/scripts_solicitudes', NULL, TRUE);
        $this->load->view('plantilla_sin_nav', $mostrar);
	}
	
    public function nueva_solicitud()
    {
        if ($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 6) {
            redirect(base_url() . 'login');
        }

        $imagen = $_FILES['Fotografia'];
        if($_FILES['Fotografia']['error']>0){
            echo "error: ".$_FILES['Fotografia']['Error']."<br>";
        }else{
            move_uploaded_file($_FILES['Fotografia']['tmp_name'],"upload/".$_FILES['Fotografia']['name']);
        }
        $dir = "upload/".$_FILES['Fotografia']['name'];
        $crs = array(
            'Seccional_id' => $this->input->post('Seccional_id'),
            'Area_id' => $this->input->post('Area_id'),
            'Primer_apellido' => $this->input->post('Primer_apellido'),
            'Segundo_apellido' => $this->input->post('Segundo_apellido'),
            'Nombres' => $this->input->post('Nombres'),
            'Sexo_id' => $this->input->post('Sexo_id'),
            'Lugar_nacimiento' => $this->input->post('Lugar_nacimiento'),
            'Fecha_nacimiento' => $this->input->post('Fecha_nacimiento'),
            'Edad' => $this->input->post('Edad'),
            'Nacionalidad_id' => $this->input->post('Nacionalidad_id'),
            'Carnet_partida_nac' => $this->input->post('Carnet_partida_nac'),
            'Lugar_exp_partidacarnet' => $this->input->post('Lugar_exp_partidacarnet'),
            'Fecha_exp_partidacarnet' => $this->input->post('Fecha_exp_partidacarnet'),
            'Idiomas' => $this->input->post('Idiomas'),
            'Domicilio' => $this->input->post('Domicilio'),
            'Telefono' => $this->input->post('Telefono'),
            /*'Email' => $this->input->post('Email'),*/
            'Nombre_padre' => $this->input->post('Nombre_padre'),
            'Condicion_padre' => $this->input->post('Condicion_padre'),
            'Nombre_madre' => $this->input->post('Nombre_madre'),
            'Condicion_madre' => $this->input->post('Condicion_madre'),
            'Estudios_realizados' => $this->input->post('Estudios_realizados'),
            'Lugar_exp_diploma_induccion' => $this->input->post('Lugar_exp_diploma_induccion'),
            'Fecha_exp_diploma_induccion' => $this->input->post('Fecha_exp_diploma_induccion'),
            'Referencia_uno' => $this->input->post('Referencia_uno'),
            'Dir_ref_uno' => $this->input->post('Dir_ref_uno'),
            'Tel_ref_uno' => $this->input->post('Tel_ref_uno'),
            'Referencia_dos' => $this->input->post('Referencia_dos'),
            'Dir_ref_dos' => $this->input->post('Dir_ref_dos'),
            'Tel_ref_dos' => $this->input->post('Tel_ref_dos'),
            'Tipo_sangre' => $this->input->post('Tipo_sangre'),
            'Peso' => $this->input->post('Peso'),
            'Altura' => $this->input->post('Altura'),
            'Alergias' => $this->input->post('Alergias'),
            'Epilepsia' => $this->input->post('Epilepsia'),
            'Asma' => $this->input->post('Asma'),
            'Cardiaco' => $this->input->post('Cardiaco'),
            'Hepatitis' => $this->input->post('Hepatitis'),
            'Enf_venereas' => $this->input->post('Enf_venereas'),
            'Diabetico' => $this->input->post('Diabetico'),
            'Serv_asistenciales' => $this->input->post('Serv_asistenciales'),
            'Emergencia' => $this->input->post('Emergencia'),
            'Dir_emergencia' => $this->input->post('Tel_emergencia'),
            'Tel_emergencia' => $this->input->post('Dir_emergencia'),
            'Nombre_trabajo' => $this->input->post('Nombre_trabajo'),
            'Direccion_trabajo' => $this->input->post('Direccion_trabajo'),
            'Tel_trabajo' => $this->input->post('Tel_trabajo'),
            'Estudiante' => $this->input->post('Estudiante'),
            'Carrera' => $this->input->post('Carrera'),
            'Institucion' => $this->input->post('Institucion'),
            'Lugar_ingreso' => $this->input->post('Lugar_ingreso'),
            'Fecha_ingreso' => $this->input->post('Fecha_ingreso'),
            'Usuario_sol_id ' => $this->session->userdata('id_usuario'),
            'Fotografia'  => $dir
           

        );
        
        $data = $this->SIM->guardar_solicitud($crs);
        echo $data;
        redirect(base_url().'estado');
        $solicitud_num = $this->session->userdata('id_usuario');
        $dat =$this->Solicitud_modelo->mostrarEstadoId($solicitud_num);
		foreach ($dat as $key) {    
			$correo_user = $key['Email'];
				$asunto = 'Proceso de ingreso a Cruz Roja Salvadoreña';
				$mensaje  ='<html><head><title></title></head><body><div style="margin: auto; display: block; "><img src="http://blogs.eltiempo.com/accion-humanitaria-en-movimiento/wp-content/uploads/sites/530/2016/10/CRUZ-ROJA-1024x1024.jpg" style="margin: auto; display: block; " width="150" align="middle" height="150" align="middle"><br><p style="font-size:16px;text-align: center"><b>¡Felicidades!</b>, tu solicitud ha sido aceptada. Mantenerse pendiente.</p></div></body></html>';
		}
				
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail($correo_user, $asunto, $mensaje, $cabeceras);
    }
    public function actualizarId()
    {
        if ($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 6) {
            redirect(base_url() . 'login');
        }
        $crs = array(
            'Seccional_id' => $this->input->post('Seccional_id'),
            'Area_id' => $this->input->post('Area_id'),
            'Primer_apellido' => $this->input->post('Primer_apellido'),
            'Segundo_apellido' => $this->input->post('Segundo_apellido'),
            'Nombres' => $this->input->post('Nombres'),
            'Sexo_id' => $this->input->post('Sexo_id'),
            'Lugar_nacimiento' => $this->input->post('Lugar_nacimiento'),
            'Fecha_nacimiento' => $this->input->post('Fecha_nacimiento'),
            'Edad' => $this->input->post('Edad'),
            'Nacionalidad_id' => $this->input->post('Nacionalidad_id'),
            'Carnet_partida_nac' => $this->input->post('Carnet_partida_nac'),
            'Lugar_exp_partidacarnet' => $this->input->post('Lugar_exp_partidacarnet'),
            'Fecha_exp_partidacarnet' => $this->input->post('Fecha_exp_partidacarnet'),
            'Idiomas' => $this->input->post('Idiomas'),
            'Domicilio' => $this->input->post('Domicilio'),
            'Telefono' => $this->input->post('Telefono'),
            /*'Email' => $this->input->post('Email'),*/
            'Nombre_padre' => $this->input->post('Nombre_padre'),
            'Condicion_padre' => $this->input->post('Condicion_padre'),
            'Nombre_madre' => $this->input->post('Nombre_madre'),
            'Condicion_madre' => $this->input->post('Condicion_madre'),
            'Estudios_realizados' => $this->input->post('Estudios_realizados'),
            'Lugar_exp_diploma_induccion' => $this->input->post('Lugar_exp_diploma_induccion'),
            'Fecha_exp_diploma_induccion' => $this->input->post('Fecha_exp_diploma_induccion'),
            'Referencia_uno' => $this->input->post('Referencia_uno'),
            'Dir_ref_uno' => $this->input->post('Dir_ref_uno'),
            'Tel_ref_uno' => $this->input->post('Tel_ref_uno'),
            'Referencia_dos' => $this->input->post('Referencia_dos'),
            'Dir_ref_dos' => $this->input->post('Dir_ref_dos'),
            'Tel_ref_dos' => $this->input->post('Tel_ref_dos'),
            'Tipo_sangre' => $this->input->post('Tipo_sangre'),
            'Peso' => $this->input->post('Peso'),
            'Altura' => $this->input->post('Altura'),
            'Alergias' => $this->input->post('Alergias'),
            'Epilepsia' => $this->input->post('Epilepsia'),
            'Asma' => $this->input->post('Asma'),
            'Cardiaco' => $this->input->post('Cardiaco'),
            'Hepatitis' => $this->input->post('Hepatitis'),
            'Enf_venereas' => $this->input->post('Enf_venereas'),
            'Diabetico' => $this->input->post('Diabetico'),
            'Serv_asistenciales' => $this->input->post('Serv_asistenciales'),
            'Emergencia' => $this->input->post('Emergencia'),
            'Dir_emergencia' => $this->input->post('Tel_emergencia'),
            'Tel_emergencia' => $this->input->post('Dir_emergencia'),
            'Nombre_trabajo' => $this->input->post('Nombre_trabajo'),
            'Direccion_trabajo' => $this->input->post('Direccion_trabajo'),
            'Tel_trabajo' => $this->input->post('Tel_trabajo'),
            'Estudiante' => $this->input->post('Estudiante'),
            'Carrera' => $this->input->post('Carrera'),
            'Institucion' => $this->input->post('Institucion'),
            'Lugar_ingreso' => $this->input->post('Lugar_ingreso'),
            'Fecha_ingreso' => $this->input->post('Fecha_ingreso')
        );
        $id_user = $this->session->userdata('id_usuario');
        $data = $this->SIM->update_solicitud($crs, $id_user);
        echo $data;
    }
    
    
    
    public function actualizar_solicitud()
    {
        if ($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 6) {
            redirect(base_url() . 'login');
		}
		$id_session = $this->session->userdata('solicitud_id');
		$datos['extraer']   =  $this->SIM->llenarUsuario($id_session);
		$ok =  $this->SIM->select_seccional();
        $datos['seccional'] =$ok;
        $datos['area'] = $this->SIM->select_area();
        $datos['sexo'] = $this->SIM->select_sexo();
        $datos['nacionalidad']    = $this->SIM->select_nacionalidad();
        $mostrar['cabeza']        = $this->load->view('modulos/head_estandar', NULL, TRUE);
        $mostrar['encabezado']    = $this->load->view('modulos/header_user', NULL, TRUE);
        $mostrar['precargador']   = $this->load->view('modulos/precargador', NULL, TRUE);
        $mostrar['barra_lateral'] = $this->load->view('modulos/vacio', NULL, TRUE);
        $mostrar['cuerpo']        = $this->load->view('contenidos/actualizar', $datos, TRUE);
        $mostrar['javascript']    = $this->load->view('modulos/scripts_solicitudes', NULL, TRUE);
        $this->load->view('plantilla_general', $mostrar);
        
    }
    
    public function entrevista()
    {
        if ($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 6) {
            redirect(base_url() . 'login');
        }
        $mostrar['cabeza']        = $this->load->view('modulos/head_estandar', NULL, TRUE);
        $mostrar['encabezado']    = $this->load->view('modulos/header_user', NULL, TRUE);
        $mostrar['precargador']   = $this->load->view('modulos/precargador', NULL, TRUE);
        $mostrar['barra_lateral'] = $this->load->view('modulos/nav_aside', NULL, TRUE);
        $mostrar['cuerpo']        = $this->load->view('contenidos/entrevista', NULL, TRUE);
        $mostrar['javascript']    = $this->load->view('modulos/scripts_solicitudes', NULL, TRUE);
        $this->load->view('plantilla_sin_nav', $mostrar);
    }
    
    
    public function guardar_entrevista()
    {
        
        $entrevista = array(
            'Ent_nombre' => $this->input->post('Ent_nombre'),
            'Ent_edad' => $this->input->post('Ent_edad'),
            'Ent_direccion' => $this->input->post('Ent_direccion'),
            'Ent_estado_civil' => $this->input->post('Ent_estado_civil'),
            'Ent_DUI' => $this->input->post('Ent_DUI'),
            'Ent_NIT' => $this->input->post('Ent_NIT'),
            'No_hijos' => $this->input->post('No_hijos'),
            'Ent_vive_con' => $this->input->post('Ent_vive_con'),
            'Ent_familia' => $this->input->post('Ent_familia'),
            'Ent_carrera' => $this->input->post('Ent_carrera'),
            'Ent_nivel_estudio' => $this->input->post('Ent_nivel_estudio'),
            'Ent_form_academica' => $this->input->post('Ent_form_academica'),
            'Ent_exp_laboral' => $this->input->post('Ent_exp_laboral'),
            'Ent_fortalezas' => $this->input->post('Ent_fortalezas'),
            'Ent_debilidades' => $this->input->post('Ent_debilidades'),
            'Ent_valores' => $this->input->post('Ent_valores'),
            'Ent_metas' => $this->input->post('Ent_metas'),
            'Ent_pasatiempo' => $this->input->post('Ent_pasatiempo'),
            'Ent_sociable' => $this->input->post('Ent_sociable'),
            'Ent_desc_trabajo' => $this->input->post('Ent_desc_trabajo'),
            'Ent_desc_CR' => $this->input->post('Ent_desc_CR'),
            'Ent_motivo_ingreso' => $this->input->post('Ent_motivo_ingreso'),
            'Ent_expectativas' => $this->input->post('Ent_expectativas'),
			'Ent_oferta_CR' => $this->input->post('Ent_oferta_CR'),
			'Participacion_anterior' => $this->input->post('Participacion_anterior'),
            'Ent_comunidad_benef' => $this->input->post('Ent_comunidad_benef'),
            'Ent_areas_interes' => $this->input->post('Ent_areas_interes'),
            'Ent_trabaja_en_equipo' => $this->input->post('Ent_trabaja_en_equipo'),
            'Ent_disponibilidad' => $this->input->post('Ent_disponibilidad'),
            'Ent_condicion_med' => $this->input->post('Ent_condicion_med'),
            'Ent_ref_escolar_uno' => $this->input->post('Ent_ref_escolar_uno'),
            'Tel_ref_esc_uno' => $this->input->post('Tel_ref_esc_uno'),
            'Ent_ref_escolar_dos' => $this->input->post('Ent_ref_escolar_dos'),
            'Tel_ref_esc_dos' => $this->input->post('Tel_ref_esc_dos'),
            'Ent_ref_escolar_tres' => $this->input->post('Ent_ref_escolar_tres'),
            'Tel_ref_esc_tres' => $this->input->post('Tel_ref_esc_tres'),
            'Ent_ref_lab_uno' => $this->input->post('Ent_ref_lab_uno'),
            'Tel_ref_lab_uno' => $this->input->post('Tel_ref_lab_uno'),
            'Ent_ref_lab_dos' => $this->input->post('Ent_ref_lab_dos'),
            'Tel_ref_lab_dos' => $this->input->post('Tel_ref_lab_dos'),
            'Ent_ref_lab_tres' => $this->input->post('Ent_ref_lab_tres'),
            'Tel_ref_lab_tres' => $this->input->post('Tel_ref_lab_tres'),
            'Ent_ref_pers_uno' => $this->input->post('Ent_ref_pers_uno'),
            'Tel_ref_pers_uno' => $this->input->post('Tel_ref_pers_uno'),
            'Ent_ref_pers_dos' => $this->input->post('Ent_ref_pers_dos'),
            'Tel_ref_pers_dos' => $this->input->post('Tel_ref_pers_dos'),
            'Ent_ref_pers_tres' => $this->input->post('Ent_ref_pers_tres'),
			'Tel_ref_pers_tres' => $this->input->post('Tel_ref_pers_tres'),
			'Usuario_ent_id' => $this->session->userdata('id_usuario'),
            'Ent_fecha' => $this->input->post('Ent_fecha')
            
        );
        
        $data = $this->SIM->insert_entrevista($entrevista);
		redirect(base_url().'estado');
        
    }

function cargar_archivo() {

    $mi_imagen = 'Fotografia';
    $config['upload_path'] = "upload/";
  //  $config['file_name'] = "nombre_archivo";
    $config['allowed_types'] = "gif|jpg|jpeg|png";
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($mi_imagen)) {
        //*** ocurrio un error
        $data['uploadError'] = $this->upload->display_errors();
        echo $this->upload->display_errors();
        return;
    }

    $data['uploadSuccess'] = $this->upload->data();
    }


}

?>