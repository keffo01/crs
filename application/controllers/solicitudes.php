<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitudes extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Solicitudes_modelo','SM',true);
		$this->load->add_package_path( APPPATH . 'third_party/fpdf');
		$this->load->library('pdf');
	}

	public function index(){
		if($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 7 )
		{
			redirect(base_url().'login');
		}
		$mostrardos['estado'] = $this->SM->estado_solicitud();
		$mostrar['cabeza']=$this->load->view('modulos/head_estandar', NULL, TRUE);
		$mostrar['encabezado']=$this->load->view('modulos/header_user', NULL, TRUE);
		$mostrar['precargador']=$this->load->view('modulos/precargador', NULL, TRUE);
		$mostrar['barra_lateral']=$this->load->view('modulos/nav_aside', NULL, TRUE);
		$mostrar['cuerpo']=$this->load->view('contenidos/solicitudes', $mostrardos, TRUE);
		$mostrar['javascript']=$this->load->view('modulos/scripts_solicitudes', NULL, TRUE);
		$this->load->view('plantilla_general', $mostrar);
	}

	public function mostrar_solicitudes(){
		$posicion=0;
		$c = $this->SM->mostrarSolicitudes();
		$arreglo_auxiliar[$posicion]=NULL;
		$contador = 1;
		foreach ($c as $result) {
			$arreglo_auxiliar[$posicion]['contador'] = $contador;
			$arreglo_auxiliar[$posicion]['nombres']=$result['Nombres'];
			$arreglo_auxiliar[$posicion]['primer_apellido']=$result['Primer_apellido'];
			$arreglo_auxiliar[$posicion]['fecha_ingreso']=$result['Fecha_ingreso'];
			$arreglo_auxiliar[$posicion]['seccional']=$result['Nombre_seccional'];
			$arreglo_auxiliar[$posicion]['nombre_estado_solicitud'] = $result['Nombre_estado_solicitud'] == 'En proceso' || $result['Nombre_estado_solicitud'] == 'Aceptado' ? ''.$result["Nombre_estado_solicitud"].'<div class="live-status-dos bg-success"></div>' : ''.$result["Nombre_estado_solicitud"].'<div class="live-status-dos bg-danger"></div>';
			$arreglo_auxiliar[$posicion]['accion']='<div class="dropdown-danger dropdown open">'.
			'<button class="btn btn-danger dropdown-toggle waves-effect waves-light " id="dropdown-2" aria-expanded="false" aria-haspopup="true" type="button" data-toggle="dropdown">'.
			'<i class="icofont icofont-wheel"></i> Acción'.
			'</button>'.
			'<div class="dropdown-menu" aria-labelledby="dropdown-2" style="left: 0px; top: 0px; position: absolute; transform: translate3d(-1px, 40px, 0px);" data-dropdown-out="fadeOut" data-dropdown-in="fadeIn" x-placement="bottom-start">'.
			'<a class="dropdown-item waves-light waves-effect abrir" href="javascript:void(0);" onclick="verPdfId('."'".base_url().'solicitudes/pdf?id='.$result["id_voluntario"]."'".','."'".$result["Nombres"]."'".')">'.
			'<i class="icofont icofont-id-card"></i> Ver expediente'.
			'</a>'.
			'<a class="dropdown-item waves-light waves-effect editar_fila" href="javascript:void(0);" onclick ="obtenerIdUser('.$result["Usuario_sol_id"].')" data-toggle="modal" data-target="#estado"  id="det">'.
			'<i class="ti-check-box"></i></i>Cambiar estado'.
			'</a>'.
			'<div class="dropdown-divider"></div>'.
			'<a class="dropdown-item waves-light waves-effect" data-toggle="modal" data-target="#update_user" href="javascript:void(0);" onclick="extraersolicitude('.$result["id_voluntario"].')">'.
			'<i class="icofont icofont-ui-edit"></i> Modificar solicitud'.
			'</a>'.
			'</div>';
			$contador++;
			$posicion++;

		}
		echo json_encode($arreglo_auxiliar);
	}

	

	public function pdf(){
		if($this->session->userdata('rol_id') == FALSE || $this->session->userdata('rol_id') != 7 )
		{
			redirect(base_url().'login');
		}
		$dato =$this->SM->mostrarPdfId($_REQUEST['id']);
		
		foreach ($dato as $datos) {
			$pdf = new PDF();

			$pdf->AddPage(); 
			$pdf->SetFont ('times', '', 11);
			$pdf->image('./files/assets/images/auth/logo-cruz-roja.png', 10, 5, 30);
			$pdf->image( utf8_decode('./'. $datos["Fotografia"].''), 170, 5, 30);   
			$pdf->SetXY(10, 7);
			$pdf->Cell(190, 0, 'SOLICITUD DE INGRESO', 0, 1, 'C');
			$pdf->SetFont ('times', '', 10);
			$pdf->SetXY(95, 45);
			$pdf->Cell(30, 5, 'I-DATOS PERSONALES', 0, 'C',0);
			$pdf->SetXY(10, 15);
			$pdf->SetFont ('times', '', 8);
			$pdf->Cell(110, 0, utf8_decode('SECCIONAL:'. $datos["Nombre_seccional"].''), 0, 'C',0);
			$pdf->SetXY(53, 23);
			$pdf->SetFont ('times', '', 8);
			$pdf->Cell(30, 5, 'PUESTO DE SOCORRO', 0, 'C',0);
			$pdf->Cell(4, 4, ' ', 1, 'C',0);
			$pdf->SetXY(53, 30);
			$pdf->Cell(30, 5, 'CUERPO DE GUARDAVIDAS', 0, 'C',0);
			$pdf->Cell(4, 4, ' ', 1, 'C',0);
			$pdf->SetXY(53, 37);
			$pdf->Cell(30, 5, 'VOLUNTARIO SOCIAL', 0, 'C',0);
			$pdf->Cell(4, 4, ' ', 1, 'C',0);
			$pdf->SetXY(125, 23);
			$pdf->SetFont ('times', '', 8);
			$pdf->Cell(30, 5, 'U. COMUNITARIA', 0, 'C',0);
			$pdf->Cell(4, 4, ' ', 1, 'C',0);
			$pdf->SetXY(125, 30);
			$pdf->Cell(30, 5, 'COMITE DE DAMAS', 0, 'C',0);
			$pdf->Cell(4, 4, ' ', 1, 'C',0);
			$pdf->SetXY(125, 37);
			$pdf->Cell(30, 5, 'JUVENTUD', 0, 'C',0);
			$pdf->Cell(4, 4, ' ', 1, 'C',0);



			if ( $datos["Area_id"]==1) {
				$pdf->SetXY(83, 23);  
				$pdf->MultiCell(24, 4, utf8_decode('x'), 0, '',0);

			}elseif($datos["Area_id"]==2){
				$pdf->SetXY(83, 30);  
				$pdf->MultiCell(24, 4, utf8_decode('x'), 0, '',0);

			}elseif($datos["Area_id"]==3){
				$pdf->SetXY(83, 37);  
				$pdf->MultiCell(24, 4, utf8_decode('x'), 0, '',0);
				

			}elseif($datos["Area_id"]==4){
				$pdf->SetXY(155, 23);  
				$pdf->MultiCell(24, 4, utf8_decode('x'), 0, '',0);
				

			}elseif($datos["Area_id"]==5){
				$pdf->SetXY(155, 30);  
				$pdf->MultiCell(24, 4, utf8_decode('x'), 0, '',0);


			}else{
				$pdf->SetXY(155, 37);  
				$pdf->MultiCell(24, 4, utf8_decode('x'), 0, '',0);
			}



			$pdf->SetXY(10, 50);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(43, 4, utf8_decode( 'PRIMER APELLIDO                      '. $datos["Primer_apellido"].''), 1,'',0);
			$pdf->SetXY(53, 50);
			$pdf->MultiCell(43, 4, utf8_decode('SEGUNDO APELLIDO                  '. $datos["Segundo_apellido"].''), 1, 'L',0);
			$pdf->SetXY(96, 50);
			$pdf->MultiCell(82, 4, utf8_decode('NOMBRE                                                                                             '. $datos["Nombres"].''), 1, 'L',0);
			$pdf->SetXY(178, 50);
			$pdf->MultiCell(22, 4, utf8_decode('SEXO                   '. $datos["Tipo_sexo"].''), 1, 'L',0);
			$pdf->SetXY(10, 58);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(43, 4, utf8_decode('LUGAR DE NACIMIENTO      '. $datos["Lugar_nacimiento"].''), 1, 'C',0);
			$pdf->SetXY(53, 58);
			$pdf->MultiCell(43, 4, utf8_decode('FECHA DE NACIMIENTO   '. $datos["Fecha_nacimiento"].''), 1, 'C',0);
			$pdf->SetXY(96, 58); 
			$pdf->MultiCell(18, 4, utf8_decode('EDAD         '. $datos["Edad"].''), 1, 'C',0);
			$pdf->SetXY(114, 58); 
			$pdf->MultiCell(86, 4, utf8_decode('NACIONALIDAD                                                                                        '. $datos["Nombre_nacionalidad"].''), 1, 'C',0);
			$pdf->SetXY(10, 66);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(86, 4, utf8_decode('CARNET DE MINORIDAD O PARTIDA DE NACIMIENTO            '. $datos["Carnet_partida_nac"].''), 1, 'C',0);
			$pdf->SetXY(96, 66);
			$pdf->MultiCell(52, 4, utf8_decode('LUGAR Y FECHA DE EXPEDICION    '. $datos["Lugar_exp_partidacarnet"]. $datos["Fecha_exp_partidacarnet"].''), 1, 'C',0);
			$pdf->SetXY(148, 66);
			$pdf->MultiCell(52, 4, utf8_decode('IDIOMAS QUE DOMINA                '. $datos["Idiomas"].''), 1, 'C',0);

			$pdf->SetXY(10, 74);
			$pdf->SetFont ('times', '', 8); 
			$pdf->MultiCell(120, 4, utf8_decode('DOMICILIO                                                                                                                                                       '. $datos["Domicilio"].''), 1, 'C',0);
			$pdf->SetXY(130, 74);
			$pdf->MultiCell(70, 4, utf8_decode('TELEFONO                                                               '. $datos["Telefono"].''), 1, 'C',0);

			$pdf->SetXY(10, 82);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(65, 4, utf8_decode('NOMBRE DEL PADRE                                                    '. $datos["Nombre_padre"].''), 1, '',0);
			$pdf->SetXY(75, 82);
			$pdf->MultiCell(21, 4, utf8_decode('VIVE?                                     '. $datos["Condicion_padre"].''), 1, '',0);
			$pdf->SetXY(96, 82);
			$pdf->MultiCell(80, 4, utf8_decode('NOMBRE DE LA MADRE                                                                '. $datos["Nombre_madre"].''), 1, '',0);

			if ( $datos["Condicion_madre"]==1) {
				$pdf->SetXY(176, 86);  
				$pdf->MultiCell(24, 4, utf8_decode('__                   '), 0, '',0);

			}else{
				$pdf->SetXY(193, 86);  
				$pdf->MultiCell(24, 4, utf8_decode('__                  '), 0, '',0);
			}

			if ( $datos["Condicion_padre"]==1) {
				$pdf->SetXY(75, 86);  
				$pdf->MultiCell(24, 4, utf8_decode('__                   '), 0, '',0);

			}else{
				$pdf->SetXY(89, 86);  
				$pdf->MultiCell(24, 4, utf8_decode('__                  '), 0, '',0);
			}			



			$pdf->SetXY(176, 82);  
			$pdf->MultiCell(24, 4, utf8_decode('VIVE?                     '), 1, '',0);

			$pdf->SetXY(75, 86); 
			$pdf->MultiCell(24, 4, utf8_decode('SI                         '), 0, '',0);
			$pdf->SetXY(89, 86);  
			$pdf->MultiCell(24, 4, utf8_decode('NO                         '), 0, '',0);

			$pdf->SetXY(176, 86); 
			$pdf->MultiCell(24, 4, utf8_decode('SI                          '), 0, '',0);
			$pdf->SetXY(193, 86);  
			$pdf->MultiCell(24, 4, utf8_decode('NO                         '), 0, '',0);

			$pdf->SetFont ('times', 'b', 10);
			$pdf->Cell(43, 4,  utf8_decode('II-DATOS ACADEMICOS'),0, '',0);

			$pdf->SetXY(10, 99);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(190, 4, utf8_decode('ESTUDIOS REALIZADOS                                                                                                                     '), 1,'',0);
			$pdf->MultiCell(190, 4,utf8_decode(''. $datos["Estudios_realizados"].'                                                                                                                                                                                                                                                                                                        '), 1, 'L',0);

			$pdf->MultiCell(190, 4, utf8_decode(' '. $datos["Estudios_realizados_dos"].'                                                                                                                                                                                                                                                                                  '), 1, 'L',0);

			$pdf->MultiCell(190, 4, utf8_decode('LUGAR DE EXPEDICION DE OBTENCION DEL DIPLOMA DE CURSO DE INDUCCION                                                                                                               '. $datos["Lugar_exp_diploma_induccion"].  ' ,   Fecha de obtencion   '. $datos["Fecha_exp_diploma_induccion"].''), 1, 'L',0);

			$pdf->SetXY(90, 134);
			$pdf->SetFont ('times', 'b', 10);
			$pdf->Cell(43, 4,  utf8_decode('III-REFERENCIAS PERSONALES'),0, '',0);

			$pdf->SetXY(10, 140);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(55, 4,utf8_decode('NOMBRE                                                                                                '), 1,'',0);
			$pdf->SetXY(65, 140);
			$pdf->MultiCell(90, 4, utf8_decode('DIRECCION                                                                                                        ' ), 1, 'L',0);
			$pdf->SetXY(155, 140);
			$pdf->MultiCell(45, 4, utf8_decode('TELEFONO                                                                         '), 1, 'L',0);
			$pdf->SetXY(10, 148);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(55, 8,utf8_decode( ''. $datos["Referencia_uno"].''), 1,'',0);
			$pdf->SetXY(65, 148);
			$pdf->MultiCell(90, 8, utf8_decode(''. $datos["Dir_ref_uno"].'' ),1, 'L',0);
			$pdf->SetXY(155, 148);
			$pdf->MultiCell(45, 8,utf8_decode( ''. $datos["Tel_ref_uno"].'') ,1, 'L',0);


			$pdf->SetXY(10, 156);
			$pdf->SetFont ('times', '', 8); 
			$pdf->MultiCell(55, 8, utf8_decode(''. $datos["Referencia_dos"].''), 1,'',0);
			$pdf->SetXY(65, 156);
			$pdf->MultiCell(90, 8, utf8_decode(''. $datos["Dir_ref_dos"].''), 1, 'L',0);
			$pdf->SetXY(155, 156);
			$pdf->MultiCell(45, 8, utf8_decode(''. $datos["Tel_ref_dos"].''), 1, 'L',0);

			$pdf->SetXY(80, 170);
			$pdf->SetFont ('times', 'b', 10);
			$pdf->Cell(43, 4,  'III-DATOS MEDICOS',0, '',0);

			$pdf->SetFont ('times', '', 8);
			$pdf->SetXY(10,175);
			$pdf->MultiCell(47, 4,utf8_decode('TIPO SANGUINEO                                           '. $datos["Tipo_sangre"].''), 1,'',0);
			$pdf->SetXY(57, 175);
			$pdf->MultiCell(47, 4, utf8_decode('PESO                                                     '. $datos["Peso"].''), 1, 'L',0);
			$pdf->SetXY(104, 175);
			$pdf->MultiCell(48, 4, utf8_decode('ALTURA                                                                   '. $datos["Altura"].''), 1, 'L',0);
			$pdf->SetXY(152, 175);
			$pdf->MultiCell(48, 4, utf8_decode('ALERGIAS (ESPECIFIQUE)                        '. $datos["Alergias"].''), 1, 'L',0);
			$pdf->SetFont ('times', '', 8);
			$pdf->SetXY(10,183.1);
			$pdf->MultiCell(35, 4, utf8_decode('EPILEPSIA                                           '), 1,'',0);
			$pdf->SetXY(45, 183.1);
			$pdf->MultiCell(35, 4, utf8_decode('ASMA                                                     '), 1, 'L',0);
			$pdf->SetXY(80, 183.1);
			$pdf->MultiCell(36, 4, utf8_decode('CARDIACO                                 '), 1, 'L',0);
			$pdf->SetXY(116, 183.1);
			$pdf->MultiCell(36, 4,utf8_decode('HEPATITIS                                              '), 1, 'L',0);
			$pdf->SetXY(152,183.1);
			$pdf->MultiCell(48, 4, utf8_decode('ENF. VENEREAS (ESPECIFIQUE)     '. $datos["Enf_venereas"].''), 1,'',0);                                   

			if ( $datos["Epilepsia"]==1) {
				$pdf->SetXY(10, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                   '), 0, '',0);

			}else{
				$pdf->SetXY(38, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                  '), 0, '',0);
			}


			if ( $datos["Asma"]==1) {
				$pdf->SetXY(46, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                   '), 0, '',0);

			}else{
				$pdf->SetXY(74, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                  '), 0, '',0);
			}

			if ( $datos["Cardiaco"]==1) {
				$pdf->SetXY(80, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                   '), 0, '',0);

			}else{
				$pdf->SetXY(109, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                  '), 0, '',0);
			}

			if ( $datos["Hepatitis"]==1) {
				$pdf->SetXY(116, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                   '), 0, '',0);

			}else{
				$pdf->SetXY(145, 187);  
				$pdf->MultiCell(24, 4, utf8_decode('___                  '), 0, '',0);
			}

			if ( $datos["Diabetico"]==1) {
				$pdf->SetXY(10, 195);  
				$pdf->MultiCell(24, 4, utf8_decode('___                   '), 0, '',0);

			}else{
				$pdf->SetXY(38, 195);  
				$pdf->MultiCell(24, 4, utf8_decode('___                  '), 0, '',0);
			}			





			$pdf->SetXY(10, 187); 
			$pdf->MultiCell(24, 4, 'SI                          ', 0, '',0);
			$pdf->SetXY(38, 187);  
			$pdf->MultiCell(24, 4, 'NO                         ', 0, '',0);

			$pdf->SetXY(46, 187); 
			$pdf->MultiCell(24, 4, 'SI                          ', 0, '',0);
			$pdf->SetXY(74, 187);  
			$pdf->MultiCell(24, 4, 'NO                         ', 0, '',0);

			$pdf->SetXY(80, 187); 
			$pdf->MultiCell(24, 4, 'SI                          ', 0, '',0);
			$pdf->SetXY(109, 187);  
			$pdf->MultiCell(24, 4, 'NO                         ', 0, '',0);

			$pdf->SetXY(116, 187); 
			$pdf->MultiCell(24, 4, 'SI                          ', 0, '',0);
			$pdf->SetXY(145, 187);  
			$pdf->MultiCell(24, 4, 'NO                         ', 0, '',0);
 //
			$pdf->SetFont ('times', '', 8);
			$pdf->SetXY(10,191);
			$pdf->MultiCell(35, 4, utf8_decode('DIABETICO                                           '), 1,'',0);
			$pdf->SetXY(45,191);
			$pdf->MultiCell(155, 4, utf8_decode('SERVICIOS ASISTENCIALES A QUE TIENE DERECHO(ISSS, ANTEL, ETC.)                                                                             '. $datos["Serv_asistenciales"].''), 1,'',0);
			$pdf->SetXY(10, 195); 
			$pdf->MultiCell(24, 4, 'SI                          ', 0, '',0);
			$pdf->SetXY(38, 195);  
			$pdf->MultiCell(24, 4, 'NO                         ', 0, '',0);
 //

			$pdf->SetXY(10, 199);
			$pdf->SetFont ('times', '', 8);
			$pdf->MultiCell(55, 4, utf8_decode('EN CASO DE ACCIDENTE AVISAR A                     '. $datos["Emergencia"].''), 1,'',0);
			$pdf->SetXY(65, 199);
			$pdf->MultiCell(80, 4, utf8_decode('DIRECCION:                                                                           '. $datos["Dir_emergencia"].''), 1, 'L',0);
			$pdf->SetXY(145, 199);
			$pdf->MultiCell(55, 4, utf8_decode('TELEFONO:                                                                         '. $datos["Tel_emergencia"].''), 1, 'L',0);

			$pdf->SetXY(100, 210);
			$pdf->SetFont ('times', 'b', 10);
			$pdf->Cell(43, 4,  'V-DATOS DE EMPPLEO O ESTUDIO ACTUAL',0, '',0);
			$pdf->SetFont ('times', '', 8);
			$pdf->SetXY(10, 215);
			$pdf->MultiCell(55, 4,utf8_decode('NOMBRE DE LA EMPRESA                                                 '. $datos["Nombre_trabajo"].''), 1,'',0);
			$pdf->SetXY(65, 215);
			$pdf->MultiCell(73, 4, utf8_decode('DIRECCION                                                                                          '. $datos["Direccion_trabajo"].''), 1, 'L',0);
			$pdf->SetXY(138, 215);
			$pdf->MultiCell(63, 4, utf8_decode('TELEFONO:                                                                         '. $datos["Tel_trabajo"].''), 1, 'L',0);
 //
			$pdf->SetFont ('times', '', 8);
			$pdf->SetXY(10, 223);
			$pdf->MultiCell(55, 4, utf8_decode('ESTUDIA ACTUALMENTE                                       '),1, 1,'',0);

			if ( $datos["Estudiante"]==1) {
				$pdf->SetXY(10, 227);  
				$pdf->MultiCell(24, 4, utf8_decode('Si                  '), 0, '',0);

			}else{
				$pdf->SetXY(38, 227);  
				$pdf->MultiCell(24, 4, utf8_decode('No                  '), 0, '',0);
			}			


			$pdf->SetXY(65, 223);
			$pdf->MultiCell(73, 4, utf8_decode('QUE ESTUDIA                                                            '. $datos["Carrera"].''), 1, 'L',0);
			$pdf->SetXY(138, 223);
			$pdf->MultiCell(63, 4, utf8_decode('INSTITUCION                                                       '. $datos["Institucion"].''), 1, 'L',0);
 //
			$pdf->SetXY(10, 235);
			$pdf->MultiCell(191, 10, utf8_decode('lUGAR  ' . $datos["Lugar_ingreso"].     '  ,  fecha ' . $datos["Fecha_ingreso"].'             Firma ___________________'), 1, 'L',0);
			$pdf->SetFont ('TIMES', '', 7);
			$pdf->SetXY(10, 245);
			$pdf->MultiCell(191, 4, utf8_decode('- ME COMPROMETO QUE EN NINGUN CASO, HARE RESPONSABLE A CRUZ ROJA SALVADOREnA DE LAS ACTUACIONES PERSONALES DE MI HIJ@                        -EXIMO DE TODA RESPONSABILIDAD A CRUZ ROJA SALVADOREÑA Y TODO SU PERSONAL, DE CUALQUIER ACCIDENTE QUE PUEDIERA OCASIONARLE LA MUERTE, LESIONES FISICAS O MENTALES                                                                                                                                                                                                                         -ACTUARE SIEMPRE CONFORME A LOS PRINCIPIOS FUNCDAMENTALES DE LA CRUZ ROJA SALVADOREnA QUE SON:                                                                            -IMPACIALIDAD-NEUTRALIDAD-INDEPENDENCIA-VOLUNTARIO UNIDAD- UNIVERSALIDAD                                                                                                                              LUGAR_____________________________________,_____________ DE____________________ DE____________________   FIRMA DE RESPONSABLE_______________________'), 1, 'L',0);

			$pdf->Output(); 
		}
		

	}

	public function pdf_2(){

		$ver=$this->SM->mostrar_pdf();
		foreach ($ver as $datos) {
			$pdf = new PDF();
           /*$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
           $pdf->image('../images/2.png', 10, 5, 30);*/

           $pdf->AddPage();

           $pdf->SetXY(10,7);
           $pdf->SetFont('times', '', 13 );
           $pdf->Cell(190, 0, utf8_decode('CRUZ ROJA SALVADOREÑA'), 0, 1,'C'); 
           $pdf->SetXY(10,12);
           $pdf->Cell(190, 0, 'FICHA DE ACTUALIZACION DE DATOS', 0, 1,'C');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(35,20);
           $pdf->Cell(10, 10, 'Registro:____________', 0, 1,'C');
           $pdf->SetFont('times', '', 11 ); 
           $pdf->SetXY(39,20);
           $pdf->Cell(10 ,10, 'Nombres obtenidos de bd', 0, 1,'C');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(85,20);
           $pdf->Cell(10, 10, 'Seccional:_______________', 0, 1,'C');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', 'B', 12 ); 
           $pdf->SetXY(15,35);
           $pdf->Cell(10, 10, 'I Datos generales', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(26,50);
           $pdf->Cell(10, 10, 'Primer apellido', 0, 1,'c');
           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,45);
           $pdf->Cell(10, 10, '_______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(90,50);
           $pdf->Cell(10, 10, 'Segundo apellido', 0, 1,'c');
           $pdf->SetXY(81,45);
           $pdf->Cell(10, 10, '_______________________', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(159,50);
           $pdf->Cell(10, 10, 'Nombres', 0, 1,'c');
           $pdf->SetXY(143.1,45);
           $pdf->Cell(10, 10, '_______________________', 0, 1,'c');           
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,64);
           $pdf->Cell(10, 10, 'Lugar de nacimiento', 0, 1,'c');
           $pdf->SetXY(15,59);
           $pdf->Cell(10, 10, '________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(63,64);
           $pdf->Cell(10, 10, 'Fecha Nac.', 0, 1,'c');
           $pdf->SetXY(58,59);
           $pdf->Cell(10, 10, '_____________', 0, 1,'c'); 

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,64);
           $pdf->Cell(10, 10, 'Nacionalidad', 0, 1,'c');
           $pdf->SetXY(92,59);
           $pdf->Cell(10, 10, '______________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(135,64);
           $pdf->Cell(10, 10, 'Sexo', 0, 1,'c');
           $pdf->SetXY(128,59);
           $pdf->Cell(10, 10, '___________', 0, 1,'c');   

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(164,64);
           $pdf->Cell(10, 10, 'Estado civil', 0, 1,'c');
           $pdf->SetXY(158 ,59);
           $pdf->Cell(10, 10, '________________', 0, 1,'c');  

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(21,78);
           $pdf->Cell(10, 10, 'Profesion u ofccio', 0, 1,'c');
           $pdf->SetXY(15,73);
           $pdf->Cell(10, 10, '____________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(67,78);
           $pdf->Cell(10, 10, 'Nivel academico', 0, 1,'c');
           $pdf->SetXY(62,73);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c'); 

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(115,78);
           $pdf->Cell(10, 10, 'DUI', 0, 1,'c');
           $pdf->SetXY(105,73);
           $pdf->Cell(10, 10, '______________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(143,78);
           $pdf->Cell(10, 10, 'Tipo sangre', 0, 1,'c');
           $pdf->SetXY(140,73);
           $pdf->Cell(10, 10, '___________', 0, 1,'c');   

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(174,78);
           $pdf->Cell(10, 10, 'No. Hijo', 0, 1,'c');
           $pdf->SetXY(169 ,73);
           $pdf->Cell(10, 10, '___________', 0, 1,'c');                                                      

////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(49,92);
           $pdf->Cell(10, 10, 'Direccion domiciliar', 0, 1,'c');
           $pdf->SetXY(15,87);
           $pdf->Cell(10, 10, '_______________________________________________', 0, 1,'c');
           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(127,92);
           $pdf->Cell(10, 10, 'Telefono fijo', 0, 1,'c');
           $pdf->SetXY(120,87);
           $pdf->Cell(10, 10, '________________', 0, 1,'c');   

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(165,92);
           $pdf->Cell(10, 10, 'Tel. Movil', 0, 1,'c');
           $pdf->SetXY(158 ,87);
           $pdf->Cell(10, 10, '________________', 0, 1,'c');  
//////////////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(17,106);
           $pdf->Cell(10, 10, 'Nombre del centro de trabajo', 0, 1,'c');
           $pdf->SetXY(15,101);
           $pdf->Cell(10, 10, '_________________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(90,106);
           $pdf->Cell(10, 10, 'Direccion centro de trabajo', 0, 1,'c');
           $pdf->SetXY(73,101);
           $pdf->Cell(10, 10, '______________________________________', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(168,106);
           $pdf->Cell(10, 10, 'Telefono', 0, 1,'c');
           $pdf->SetXY(160,101);  
           $pdf->Cell(10, 10, '_______________', 0, 1,'c');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                       

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(42,120);
           $pdf->Cell(10, 10, 'Correo electronico', 0, 1,'c');
           $pdf->SetXY(15,115);
           $pdf->Cell(10, 10, '________________________________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(140,120);
           $pdf->Cell(10, 10, 'Licencia', 0, 1,'c');
           $pdf->SetXY(107,115);
           $pdf->Cell(10, 10, '________________________________________', 0, 1,'c');    

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', 'B', 12 ); 
           $pdf->SetXY(15,135);
           $pdf->Cell(10, 10, 'II Historial dentro de Cruz Roja', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,145);
           $pdf->Cell(10, 10, 'Fecha de ingreso', 0, 1,'c');
           $pdf->SetXY(43,145);
           $pdf->Cell(10, 10, '________________________________________', 0, 1,'c');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,155);
           $pdf->Cell(10, 10, 'Tipo de voluntario:', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(49,155);
           $pdf->Cell(10, 10, 'DD', 0, 1,'c');
           $pdf->SetXY(55,155);
           $pdf->Cell(10, 10, '___', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(66,155);
           $pdf->Cell(10, 10, 'JL', 0, 1,'c');
           $pdf->SetXY(70,155);
           $pdf->Cell(10, 10, '___', 0, 1,'c');   

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(80,155);
           $pdf->Cell(10, 10, 'Soc.', 0, 1,'c');
           $pdf->SetXY(88,155);
           $pdf->Cell(10, 10, '___', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(98,155);
           $pdf->Cell(10, 10, 'Damas', 0, 1,'c');
           $pdf->SetXY(110,155);
           $pdf->Cell(10, 10, '___', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(120,155);
           $pdf->Cell(10, 10, 'Juventud', 0, 1,'c');
           $pdf->SetXY(136,155);
           $pdf->Cell(10, 10, '___', 0, 1,'c');   
           
           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(146,155);
           $pdf->Cell(10, 10, 'Guar.', 0, 1,'c');
           $pdf->SetXY(156,155);
           $pdf->Cell(10, 10, '___', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(166,155);
           $pdf->Cell(10, 10, 'V. Social', 0, 1,'c');
           $pdf->SetXY(182,155);
           $pdf->Cell(10, 10, '____', 0, 1,'c');

//////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(98,165);
           $pdf->Cell(10, 10, 'Cargo actual:', 0, 1,'c');
           $pdf->SetXY(121,165);
           $pdf->Cell(10, 10, '_________________________________', 0, 1,'c');

/////////////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,180);
           $pdf->Cell(10, 10, 'Firma:', 0, 1,'c');
           $pdf->SetXY(27,180);
           $pdf->Cell(10, 10, '____________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(74,180);
           $pdf->Cell(10, 10, 'Fecha', 0, 1,'c');
           $pdf->SetXY(85,180);
           $pdf->Cell(10, 10, '_______', 0, 1,'c'); 

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(104,180);
           $pdf->Cell(10, 10, 'De', 0, 1,'c');
           $pdf->SetXY(110,180);
           $pdf->Cell(10, 10, '_________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,180);
           $pdf->Cell(10, 10, 'Del', 0, 1,'c');
           $pdf->SetXY(157,180);
           $pdf->Cell(10, 10, '________________', 0, 1,'c');

////////////////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,200);
           $pdf->Cell(10, 10, 'PRESIDENTE SECCIONAL', 0, 1,'c');
           $pdf->SetXY(15,195);
           $pdf->Cell(10, 10, '_________________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(86,200);
           $pdf->Cell(10, 10, 'JEFE DD/ LOCAL', 0, 1,'c');
           $pdf->SetXY(76,195);
           $pdf->Cell(10, 10, '_________________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(138,200);
           $pdf->Cell(10, 10, 'V.B JEFATURA NACIONAL', 0, 1,'c');
           $pdf->SetXY(138,195);
           $pdf->Cell(10, 10, '_________________________', 0, 1,'c');

//////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,208);
           $pdf->Cell(10, 10, 'Nombre:', 0, 1,'c');
           $pdf->SetXY(30,208);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(77,208);
           $pdf->Cell(10, 10, 'Nombre:', 0, 1,'c');
           $pdf->SetXY(92,208);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(138,208);
           $pdf->Cell(10, 10, 'Nombre:', 0, 1,'c');
           $pdf->SetXY(153,208);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

//////////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(15,225);
           $pdf->Cell(10, 10, 'V. B PRESIDENTE DEPAR.', 0, 1,'c');
           $pdf->SetXY(15,220);
           $pdf->Cell(10, 10, '________________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(75,225);
           $pdf->Cell(10, 10, 'V.B DIREC. DE GESTION DE VOLUNTARIADO Y SECCIONA.', 0, 1,'c');
           $pdf->SetXY(75,220);
           $pdf->Cell(10, 10, '_______________________________________________________', 0, 1,'c');

           $pdf->SetXY(15,233);
           $pdf->Cell(10, 10, 'Nombre:', 0, 1,'c');
           $pdf->SetXY(30.5,233);
           $pdf->Cell(10, 10, '_________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(75,233);
           $pdf->Cell(10, 10, 'Nombre:', 0, 1,'c');
           $pdf->SetXY(90,233);
           $pdf->Cell(10, 10, '________________________________________________', 0, 1,'c');


           $pdf->AddPage();     

           $pdf->SetFont('times', 'U', 12 ); 
           $pdf->SetXY(35,15);
           $pdf->Cell(10, 10, 'Capacitaciones recibida', 0, 1,'C');     

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,25);
           $pdf->Cell(10, 10, 'Nombre de la capacitacion', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(75,25);
           $pdf->Cell(10, 10, utf8_decode('Año'), 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,25);
           $pdf->Cell(10, 10, 'impartido por', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(127,25);
           $pdf->Cell(10, 10, 'No. Horas', 0, 1,'c');

           $pdf->SetFont('times', '', 12 );
           $pdf->SetXY(155,25);
           $pdf->Cell(10, 10, 'Observaciones', 0, 1,'c');

///////////////////////////////////////////////////////////////           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,35);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,35);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,35);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,35);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,35);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,45);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,45);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,45);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,45);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,45);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,55);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,55);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,55);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,55);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,55);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,65);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,65);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,65);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,65);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,65);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');



           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,75);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,75);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,75);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,75);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,75);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,85);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,85);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,85);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,85);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,85);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,95);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,95);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,95);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,95);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,95);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,105);
           $pdf->Cell(10, 10, '______________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,105);
           $pdf->Cell(10, 10,'______', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(95,105);
           $pdf->Cell(10, 10, '____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(130,105);
           $pdf->Cell(10, 10, '______', 0, 1,'c');           

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,105);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c'); 

///////////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', 'U', 12 ); 
           $pdf->SetXY(50,115);
           $pdf->Cell(10, 10, 'Cargos o responsabilidades que ha tenido', 0, 1,'C');     

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,125);
           $pdf->Cell(10, 10, 'Nombre del cargo', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(73,125);
           $pdf->Cell(10, 10, 'Periodo', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(105,125);
           $pdf->Cell(10, 10, 'En que estructura ', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(107,130);
           $pdf->Cell(10, 10, 'de Cruz Roja', 0, 1,'c');

           $pdf->SetFont('times', '', 12 );
           $pdf->SetXY(155,125);
           $pdf->Cell(10, 10, 'Observaciones', 0, 1,'c');

///////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,135);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(68,135);
           $pdf->Cell(10, 10,'____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(100,135);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,135);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c'); 


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,145);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(68,145);
           $pdf->Cell(10, 10,'____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(100,145);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,145);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');            


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,155);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(68,155);
           $pdf->Cell(10, 10,'____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(100,155);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,155);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,165);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(68,165);
           $pdf->Cell(10, 10,'____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(100,165);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,165);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c'); 


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,175);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(68,175);
           $pdf->Cell(10, 10,'____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(100,175);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,175);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');            


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,185);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(68,185);
           $pdf->Cell(10, 10,'____________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(100,185);
           $pdf->Cell(10, 10, '___________________', 0, 1,'c');


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(150,185);
           $pdf->Cell(10, 10, '__________________', 0, 1,'c');   

/////////////////////////////////////////////////////////////////////

           $pdf->SetFont('times', 'b', 12 ); 
           $pdf->SetXY(19,200);
           $pdf->Cell(10, 10, 'Contacto en caso de emergencia', 0, 1,'c');


           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,210);
           $pdf->Cell(10, 10, 'Nombre y apellidos:', 0, 1,'c');
           $pdf->SetXY(53,210);
           $pdf->Cell(10, 10, '______________________________________________', 0, 1,'c'); 

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,220);
           $pdf->Cell(10, 10, 'Parentesco:', 0, 1,'c');
           $pdf->SetXY(39,220);
           $pdf->Cell(10, 10, '____________________________________', 0, 1,'c');

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,230);
           $pdf->Cell(10, 10, 'Direccion:', 0, 1,'c');
           $pdf->SetXY(37,230);
           $pdf->Cell(10, 10, '___________________________________________________________________', 0, 1,'c');  

           $pdf->SetFont('times', '', 12 ); 
           $pdf->SetXY(19,240);
           $pdf->Cell(10, 10, 'Telefonos:', 0, 1,'c');
           $pdf->SetXY(38, 240);
           $pdf->Cell(10, 10, '_____________________________________', 0, 1,'c');



           $pdf->Output();   



       }
   }

}

?>
