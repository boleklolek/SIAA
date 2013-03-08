<?php

class Alumnos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
    //Listado unicial de todos los alumnos
	function listado()
	{
		$data['nombre'] = $this->session->userdata('name');
			if ($this->session->userdata('priv')==1){

			$this->load->model('alumnos_model');
            $this->load->model('opciones_model');
			
			$data['alumnos'] = $this->alumnos_model->todos_alumnos();
						
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_alumnos';
			//$data['contenido'] = 'bienvenida_admin';
			}
			elseif($this->session->userdata('priv')==2){
				$data['menu'] = "menu_redactor";
			}
			elseif($this->session->userdata('priv')==3){
				$data['menu'] = "menu_escritor";

			}

			$data['main_content'] = 'bienvenida';
		$this->load->view('administracion', $data);
	}

	function agregar()
	{
		$data['nombre'] = $this->session->userdata('name');

		$this->load->model('opciones_model');

		$data['planes'] = $this->opciones_model->drop_options('planes');
		$data['programas'] = $this->opciones_model->drop_options('programas');
		$data['paises'] = $this->opciones_model->drop_options('paises');
		$data['opciones_grado'] = $this->opciones_model->drop_options('grados');
		$data['opciones_estatus'] = $this->opciones_model->drop_options('estatus');
		$data['tipo_duracion'] = $this->opciones_model->drop_options('tipo_duracion');

		$data['contenido'] = 'contenido_alumnos_agregar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);
	}

	function guardar()
	{
        $data = array(
            'grado' 			=> $this->input->post('grado'),
            'programa' 			=> $this->input->post('programa'),
            'nombre' 			=> $this->input->post('nombre'),
            'apaterno' 			=> $this->input->post('apaterno'),
            'amaterno' 			=> $this->input->post('amaterno'),
            'tel1' 				=> $this->input->post('tel1'),
            'tel2' 				=> $this->input->post('tel2'),
            'email' 			=> $this->input->post('email'),
            'url'				=> $this->input->post('url'),
            'rfc'				=> $this->input->post('rfc'),
            'curp'				=> $this->input->post('curp'),
            'fecha_nacimiento' 	=> $this->input->post('fecha_nacimiento'),
            'pais_nacimiento'	=> $this->input->post('pais_nacimiento'),
            'lugar_nacimiento'	=> $this->input->post('lugar_nacimiento'),
            'nacionalidad'		=> $this->input->post('nacionalidad'),
            'domicilio'			=> $this->input->post('domicilio'),
            'colonia'			=> $this->input->post('colonia'),
            'delegacion'		=> $this->input->post('delegacion'),
            'estado'			=> $this->input->post('estado'),
            'cp'				=> $this->input->post('cp'),
            'carrera'			=> $this->input->post('carrera'),
            'titulado'			=> $this->input->post('titulado'),
            'fecha_titulacion'  => $this->input->post('fecha_titulacion'),
            'porcentaje'		=> $this->input->post('porcentaje'),
            'anio_fin'			=> $this->input->post('anio_fin'),
            'promedio'			=> $this->input->post('promedio'),
            'donde'				=> $this->input->post('donde'),
            'notas'				=> $this->input->post('notas'),
            'plan'				=> $this->input->post('plan'),
            'estatus'			=> $this->input->post('estatus')
            );
        $this->db->insert('alumnos',$data);
        
        $id =$this->db->insert_id();

        $config['upload_path'] = './images/fotos_alumnos';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_spaces'] = 'YES';
        $config['file_name'] = $id.'_alumno.jpg';
        $config['overwrite'] = 'TRUE';
        $this->upload->initialize($config);

        if ( $this->upload->do_upload('foto'))
            {

            $data = array('upload_data' => $this->upload->data());
            //print_r($data['upload_data']['full_path']);
            //die();
            }
        else
        {
        $error = array('error' => $this->upload->display_errors());

            }


        #subiendo el cv
        //Upload de la foto del alumno
        $config['upload_path'] = './archivos/cv_alumnos';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_spaces'] = 'YES';
        $config['file_name'] = $id.'_alumno.pdf';
        $config['overwrite'] = 'TRUE';
        
        $this->upload->initialize($config);

        if ( $this->upload->do_upload('cv'))
            {
            $data = array('upload_data' => $this->upload->data());
//            print_r($this->upload->data());
//            die();
            }
        else
        {
        $error = array('error' => $this->upload->display_errors());

        }
        redirect('/alumnos/listado');
	}


	function editar(){
		$this->load->model('alumnos_model');
		$this->load->model('opciones_model');
		$id = $this->uri->segment(3);

		$data['datos_alumno'] = $this->alumnos_model->obten_alumno($id);

		$data['opciones_estatus'] = $this->opciones_model->drop_options('estatus');
		
		$data['opciones_grado'] = $this->opciones_model->drop_options('grados');

		$data['programas'] = $this->opciones_model->drop_options('programas');

		$data['planes'] = $this->opciones_model->drop_options('planes');

		$data['paises'] = $this->opciones_model->drop_options('paises');

		$data['contenido'] = 'contenido_alumnos_editar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);	

	}

	function actualizar()
	{
        $data = array(
            'grado' 			=> $this->input->post('grado'),
            'programa' 			=> $this->input->post('programa'),
            'nombre' 			=> $this->input->post('nombre'),
            'apaterno' 			=> $this->input->post('apaterno'),
            'amaterno' 			=> $this->input->post('amaterno'),
            'tel1' 				=> $this->input->post('tel1'),
            'tel2' 				=> $this->input->post('tel2'),
            'email' 			=> $this->input->post('email'),
            'url'				=> $this->input->post('url'),
            'rfc'				=> $this->input->post('rfc'),
            'curp'				=> $this->input->post('curp'),
            'fecha_nacimiento' 	=> $this->input->post('fecha_nacimiento'),
            'pais_nacimiento'	=> $this->input->post('pais_nacimiento'),
            'lugar_nacimiento'	=> $this->input->post('lugar_nacimiento'),
            'nacionalidad'		=> $this->input->post('nacionalidad'),
            'domicilio'			=> $this->input->post('domicilio'),
            'colonia'			=> $this->input->post('colonia'),
            'delegacion'		=> $this->input->post('delegacion'),
            'estado'			=> $this->input->post('estado'),
            'cp'				=> $this->input->post('cp'),
            'carrera'			=> $this->input->post('carrera'),
            'titulado'			=> $this->input->post('titulado'),
            'fecha_titulacion'  => $this->input->post('fecha_titulacion'),
            'porcentaje'		=> $this->input->post('porcentaje'),
            'anio_fin'			=> $this->input->post('anio_fin'),
            'promedio'			=> $this->input->post('promedio'),
            'donde'				=> $this->input->post('donde'),
            'notas'				=> $this->input->post('notas'),
            'estatus'			=> $this->input->post('estatus'),
            'plan'				=> $this->input->post('plan')
            );
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('alumnos', $data);
        $id = $this->input->post('id');
        
        //Upload de la foto del alumno
		$config['upload_path'] = './images/fotos_alumnos';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_spaces'] = 'YES';
        $config['file_name'] = $id.'_alumno.jpg';
        $config['overwrite'] = 'TRUE';
        
        $this->upload->initialize($config);

        if ( $this->upload->do_upload('foto'))
            {
            $data = array('upload_data' => $this->upload->data());
//            print_r($this->upload->data());
//            die();
            }
        else
        {
        $error = array('error' => $this->upload->display_errors());

        }
        //Redimensionado de la foto
        $configthumb['image_library'] = 'gd2';
        $configthumb['source_image'] = './images/fotos_alumnos/'.$id.'_alumno'.$data['upload_data']['file_ext'];
        $configthumb['create_thumb'] = TRUE;
        $configthumb['maintain_ratio'] = FALSE;
        $configthumb['width'] = 300;
        $configthumb['height'] = 290;
        $configthumb['new_image'] = './images/fotos_alumnos';
        $configthumb['thumb_marker'] = '_thumb';

        $this->load->library('image_lib', $configthumb);
        $this->image_lib->resize();

        #subiendo el cv
        //Upload de la foto del alumno
        $config['upload_path'] = './archivos/cv_alumnos';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_spaces'] = 'YES';
        $config['file_name'] = $id.'_alumno.pdf';
        $config['overwrite'] = 'TRUE';
        
        $this->upload->initialize($config);

        if ( $this->upload->do_upload('cv'))
            {
            $data = array('upload_data' => $this->upload->data());
//            print_r($this->upload->data());
//            die();
            }
        else
        {
        $error = array('error' => $this->upload->display_errors());

        }

        redirect('/alumnos/listado');
	}

function detalles()
	{
		$data['nombre'] = $this->session->userdata('name');
			if ($this->session->userdata('priv')==1){

			$this->load->model('alumnos_model');
			$this->load->model('opciones_model');

			$id = $this->uri->segment(3);

			$data['alumno'] = $this->alumnos_model->obten_alumno($id);

			$data['programa'] = $this->opciones_model->obten_nombre('programas',$data['alumno']->programa);
		
			$data['plan'] = $this->opciones_model->obten_nombre('planes',$data['alumno']->plan);
			
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_alumnos_detalles';
			//$data['contenido'] = 'bienvenida_admin';
			}
			elseif($this->session->userdata('priv')==2){
				$data['menu'] = "menu_redactor";
			}
			elseif($this->session->userdata('priv')==3){
				$data['menu'] = "menu_escritor";

			}

			$data['main_content'] = 'bienvenida';
		$this->load->view('administracion', $data);
	}

function academicos(){
        $this->load->model('alumnos_model');
        $this->load->model('opciones_model');
        $id = $this->uri->segment(3);

        $data['datos_alumno'] = $this->alumnos_model->obten_alumno($id);

        $data['tipo_graduacion'] = $this->opciones_model->drop_options('tipo_graduacion');
        
        $data['opciones_grado'] = $this->opciones_model->drop_options('grados');

        $data['tutores'] = $this->opciones_model->drop_options_nombres('profesores');

        $data['planes'] = $this->opciones_model->drop_options('planes');

        $data['paises'] = $this->opciones_model->drop_options('paises');

        $data['contenido'] = 'contenido_alumnos_academicos_agregar';

        $data['main_content'] = 'bienvenida';

        $this->load->view('administracion', $data); 

    }

    function guardar_academicos()
    {
        $data = array(
            'grado'             => $this->input->post('grado'),
            'programa'          => $this->input->post('programa'),
            'nombre'            => $this->input->post('nombre'),
            'apaterno'          => $this->input->post('apaterno'),
            'amaterno'          => $this->input->post('amaterno'),
            'tel1'              => $this->input->post('tel1'),
            'tel2'              => $this->input->post('tel2'),
            'email'             => $this->input->post('email'),
            'url'               => $this->input->post('url'),
            'rfc'               => $this->input->post('rfc'),
            'curp'              => $this->input->post('curp'),
            'fecha_nacimiento'  => $this->input->post('fecha_nacimiento'),
            'pais_nacimiento'   => $this->input->post('pais_nacimiento'),
            'lugar_nacimiento'  => $this->input->post('lugar_nacimiento'),
            'nacionalidad'      => $this->input->post('nacionalidad'),
            'domicilio'         => $this->input->post('domicilio'),
            'colonia'           => $this->input->post('colonia'),
            'delegacion'        => $this->input->post('delegacion'),
            'estado'            => $this->input->post('estado'),
            'cp'                => $this->input->post('cp'),
            'carrera'           => $this->input->post('carrera'),
            'titulado'          => $this->input->post('titulado'),
            'fecha_titulacion'  => $this->input->post('fecha_titulacion'),
            'porcentaje'        => $this->input->post('porcentaje'),
            'anio_fin'          => $this->input->post('anio_fin'),
            'promedio'          => $this->input->post('promedio'),
            'donde'             => $this->input->post('donde'),
            'notas'             => $this->input->post('notas'),
            'plan'              => $this->input->post('plan'),
            'estatus'           => $this->input->post('estatus')
            );
        $this->db->insert('alumnos',$data);
}

    function pdf(){

        $this->load->model('alumnos_model');
        $this->load->model('opciones_model');

        $id = $this->uri->segment(3);

        $data['alumno'] = $this->alumnos_model->obten_alumno($id);

        $data['programa'] = $this->opciones_model->obten_nombre('programas',$data['alumno']->programa);
        
        $data['plan'] = $this->opciones_model->obten_nombre('planes',$data['alumno']->plan);


        try {
        $p = new PDFlib();

        /*  open new PDF file; insert a file name to create the PDF on disk */
        if ($p->begin_document("", "") == 0) {
            die("Error: " . $p->get_errmsg());
        }

        $p->set_info("Creator", "Sistema Integral de administración de alumnos // SIAA");
        $p->set_info("Author", "INACIPE.GOB.MX");
        $p->set_info("Title", "Resumen del alumno: ".mb_convert_encoding($data['alumno']->nombre,"latin1")." ".mb_convert_encoding($data['alumno']->apaterno,"latin1")." ".mb_convert_encoding($data['alumno']->amaterno,"latin1" ) );
        #Pagina al tamaño carta
        $p->begin_page_ext(612, 792, "");

         # Load the image

        $foto_alumno = $p->load_image('auto','./images/fotos_alumnos/'.$data['alumno']->id.'_alumno_thumb.jpg','');

        $logo = $p->load_image("auto", "./images/logok.png", "");

        $logo_pgr = $p->load_image("auto", "./images/logoPGR.png", "");

        $escudo_nacional = $p->load_image("auto", "./images/escudo_nacional.png", "");

        $font = $p->load_font("Helvetica-Bold", "winansi", "");
        $p->save();
        $gstate = $p->create_gstate("opacityfill=0.1");
        $p->set_gstate($gstate);
        $p->fit_image($escudo_nacional, 75, 50, "");
        $p->restore();

        $p->fit_image($logo, 440, 690, "scale=0.9");
        $p->setfont($font, 9.0);
        $p->fit_textline("Instituto Nacional de Ciencias Penales", 402, 685, "");

        $p->fit_image($logo_pgr, 40, 700, "scale=1.8");

        $p->fit_image($foto_alumno, 50, 450, "scale=.6");

        $p->setfont($font, 20.0);
        $p->set_text_pos(50, 650);
        $p->show($data['programa']->nombre);
        $p->setfont($font, 12.0);
        $p->continue_text(mb_convert_encoding($data['plan']->nombre,"latin1"));
        $p->setfont($font, 12.0);
        $p->set_text_pos(250, 610);
        $p->show("Nombre: ".mb_convert_encoding($data['alumno']->nombre,"latin1")." ".mb_convert_encoding($data['alumno']->apaterno,"latin1")." ".mb_convert_encoding($data['alumno']->amaterno,"latin1"));
        $p->continue_text("Calle: ".mb_convert_encoding($data['alumno']->domicilio,"latin1"));
        $p->continue_text("Colonia: ".mb_convert_encoding($data['alumno']->colonia,"latin1"));
        $p->continue_text("Delegacion: ".mb_convert_encoding($data['alumno']->delegacion,"latin1"));
        $p->continue_text("Codigo postal: ".mb_convert_encoding($data['alumno']->cp,"latin1"));
        $p->continue_text("Estado: ".mb_convert_encoding($data['alumno']->estado,"latin1"));
        $p->continue_text("Telefono 1: ".mb_convert_encoding($data['alumno']->tel1,"latin1"));
        $p->continue_text("Telefono 2: ".mb_convert_encoding($data['alumno']->tel2,"latin1"));
        $p->continue_text("Correo: ".mb_convert_encoding($data['alumno']->email,"latin1"));
        $p->continue_text("Nacionalidad: ".mb_convert_encoding($data['alumno']->nacionalidad,"latin1"));
        $p->continue_text("URL: ".mb_convert_encoding($data['alumno']->url,"latin1"));
        $p->continue_text("RFC: ".mb_convert_encoding($data['alumno']->rfc,"latin1"));
        $p->continue_text("CURP: ".mb_convert_encoding($data['alumno']->curp,"latin1"));

        $p->setfont($font, 7.0);
        $p->fit_textline("Magisterio Nacional 113, Col. Tlalpan, C.P. 14000, Delegacion Tlalpan, ".mb_convert_encoding("México","latin1").",D.F.", 290, 20, "position={center bottom}");
        $p->fit_textline("Tel.:+01 (55) 5487-1500 www.inacipe.gob.mx",290,10,"position={center bottom}");

        $p->end_page_ext("");

        $p->end_document("");

        $buf = $p->get_buffer();
        $len = strlen($buf);

        header("Content-type: application/pdf");
        header("Content-Length: $len");
        header('Content-Disposition: inline; filename='.$data['alumno']->id.'_alumno.pdf');
        print $buf;
    }
    catch (PDFlibException $e) {
        die("PDFlib exception occurred in hello sample:\n" .
        "[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
        $e->get_errmsg() . "\n");
    }
    catch (Exception $e) {
        die($e);
    }
    $p = 0;



    }


	function borrar(){
		$this->load->model('alumnos_model');
		$id = $this->uri->segment(3);
		$this->alumnos_model->alumnos_borrar($id);
		redirect('/alumnos/listado');
	}


	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo '<html><body><div id="nolog">No tienes permiso para ver esta pagina. <a href="../login">Login</a></div></body></html>';
			die();
			//$this->load->view('login_form');
		}
	}

}
