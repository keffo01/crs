<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Login_modelo','LM', true);  
    $this->load->add_package_path( APPPATH . 'third_party/recupera');
    $this->load->add_package_path( APPPATH . 'third_party/phpmailer');
    $this->load->library('navegadores');
    $this->load->library('phpmailer_library');
    $this->load->library('facebook');
    $this->load->model('Solicitud_modelo');
    $this->facebook->enable_debug(TRUE);
  }

  public function index(){

   switch ($this->session->userdata('rol_id')) {
     case '':
     $mostrar['cabeza']=$this->load->view('modulos/head_login', NULL, TRUE);
     $mostrar['encabezado']=$this->load->view('modulos/header_general', NULL, TRUE);
     $mostrar['precargador']=$this->load->view('modulos/precargador', NULL, TRUE);
     $mostrar['barra_lateral']=$this->load->view('modulos/nav_aside', NULL, TRUE);

     $mostrar['cuerpo']=$this->load->view('contenidos/login', NULL, TRUE);
     $mostrar['javascript']=$this->load->view('modulos/scripts_login', NULL, TRUE);
     $this->load->view('plantilla_login', $mostrar);
     break;
     case 1:
     redirect(base_url().'secretaria');
     break;
     case 2:
     redirect(base_url().'administrador');
     break;
     case 6:
     $solicitud_num = $this->session->userdata('solicitud_id');
     $sol_ing = $this->LM->obtenerProcesoIngreso($solicitud_num);
     foreach ($sol_ing as $pi) {

      if ($pi['Solicitud_ingreso_id'] == 0) {
        redirect(base_url().'solicitud_ingreso');
      } else {
        redirect(base_url().'estado');
      }
    }
    break; 
    case 7:
    redirect(base_url().'solicitudes');
    break; 
    default: 
    $this->load->view('login',$data);
    break; 
  }
}

public function valida_login(){

 $nombre_usuario = $this->input->post('nombre_usuari');
 $clave = $this->input->post('clave');
 $asignar_usuario = $this->LM->loginUser($nombre_usuario,$clave);

 if($asignar_usuario == TRUE){
   $datos_de_sesion = array(
     'is_logued_in' => TRUE,
     'solicitud_id' => $asignar_usuario->Usuario_id,
     'id_usuario' => $asignar_usuario->Id_usuario,
     'rol_id' => $asignar_usuario->Rol_id,
     'nombre_usuario' => $asignar_usuario->Nombre_usuario,
     'email_user' => $asignar_usuario->Email
   ); 
   $this->session->set_userdata($datos_de_sesion);

   $this->index();
 }else{
  echo "LACA";
}
}

public function nuevo_usuario(){
  $dato = array(
    'Nombre_usuario' => $this->input->post('Nombre_usuario'),
    'Email' => $this->input->post('Email'),
    'Pass' => $this->input->post('Pass'),
    'Rol_id' => 6,
  );
  $data  = $this->LM->registrarUsuario($dato);
  echo $data;

  if ($data =='exito') {
    $correo_user = $this->input->post('Email');
    $asunto = 'Proceso de ingreso a Cruz Roja Salvadoreña';
    $mensaje =  utf8_decode('<html><head><title></title></head><body><div style="margin: auto; display: block; "><img src="http://blogs.eltiempo.com/accion-humanitaria-en-movimiento/wp-content/uploads/sites/530/2016/10/CRUZ-ROJA-1024x1024.jpg" style="margin: auto; display: block; " width="150" align="middle" height="150" align="middle"><br><p style="font-size:16px;text-align: center"><b>¡Felicidades!</b>, Ingrese al siguiente enlace para validar su correo.</p></div></body></html>');
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($correo_user, $asunto, $mensaje, $cabeceras);
    
  }
  

  
  
}

public function recuperacion(){
  switch ($this->session->userdata('rol_id')) {
    case '':
    $mostrar['cabeza']=$this->load->view('modulos/head_login', NULL, TRUE);
    $mostrar['encabezado']=$this->load->view('modulos/header_general', NULL, TRUE);
    $mostrar['precargador']=$this->load->view('modulos/precargador', NULL, TRUE);
    $mostrar['barra_lateral']=$this->load->view('modulos/nav_aside', NULL, TRUE);
    $mostrar['cuerpo']=$this->load->view('contenidos/enviar_correo', NULL, TRUE);
    $mostrar['javascript']=$this->load->view('modulos/scripts_login', NULL, TRUE);
    $this->load->view('plantilla_login', $mostrar);
    break;
    case 1:
    redirect(base_url().'secretaria');
    break;
    case 2:
    redirect(base_url().'administrador');
    break;
    case 6:
    $solicitud_num = $this->session->userdata('solicitud_id');
    $sol_ing = $this->LM->obtenerProcesoIngreso($solicitud_num);
    foreach ($sol_ing as $pi) {

     if ($pi['Solicitud_ingreso_id'] == 0) {
       redirect(base_url().'solicitud_ingreso');
     } else {
       redirect(base_url().'estado');
     }
   }
   break; 
   case 7:
   redirect(base_url().'solicitudes');
   break; 
   default: 
   $this->load->view('login',$data);
   break; 
 }
}



public function logout_ci(){

 $this->session->sess_destroy();
 $this->index();
}
}

?>
