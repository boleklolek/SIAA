<?php

class Profesores extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function listado()
	{
		$data['nombre'] = $this->session->userdata('name');
			if ($this->session->userdata('priv')==1){

			$this->load->model('profesores_model');
			$this->load->model('opciones_model');
			
			$data['profesores'] = $this->profesores_model->todos_profesores();
			
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_profesores';
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

		$data['opciones_grado'] = $this->opciones_model->drop_options('grados');
		$data['paises'] = $this->opciones_model->drop_options('paises');

		$data['contenido'] = 'contenido_profesores_agregar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);
	}

	function guardar()
	{
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apaterno' => $this->input->post('apaterno'),
            'amaterno' => $this->input->post('amaterno'),
            'tel1' => $this->input->post('tel1'),
            'tel2' => $this->input->post('tel2'),
            'email' => $this->input->post('email'),
            'url' => $this->input->post('url'),
            'rfc' => $this->input->post('rfc'),
            'curp' => $this->input->post('curp'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'pais_nacimiento' => $this->input->post('pais_nacimiento'),
            'lugar_nacimiento' => $this->input->post('lugar_nacimiento'),
            'nacionalidad' => $this->input->post('nacionalidad'),
            'notas' => $this->input->post('notas'),
            );
        $this->db->insert('profesores',$data);
        $id =$this->db->insert_id();

        $config['upload_path'] = './images/fotos_profesores';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_spaces'] = 'YES';
        $config['file_name'] = $id.'_profesor.jpg';
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
            redirect('/profesores/listado');

	}

	function editar(){
		$this->load->model('profesores_model');
		$this->load->model('opciones_model');
		$id = $this->uri->segment(3);

		$data['datos_profesor'] = $this->profesores_model->obten_profesor($id);

		$data['opciones_estatus'] = $this->opciones_model->drop_options('estatus');
		
		$data['opciones_grado'] = $this->opciones_model->drop_options('grados');

		$data['programas'] = $this->opciones_model->drop_options('programas');

		$data['planes'] = $this->opciones_model->drop_options('planes');

		$data['paises'] = $this->opciones_model->drop_options('paises');

		$data['contenido'] = 'contenido_profesores_editar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);	

	}

	function actualizar()
	{
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apaterno' => $this->input->post('apaterno'),
            'amaterno' => $this->input->post('amaterno'),
            'tel1' => $this->input->post('tel1'),
            'tel2' => $this->input->post('tel2'),
            'email' => $this->input->post('email'),
            'url' => $this->input->post('url'),
            'rfc' => $this->input->post('rfc'),
            'curp' => $this->input->post('curp'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'pais_nacimiento' => $this->input->post('pais_nacimiento'),
            'lugar_nacimiento' => $this->input->post('lugar_nacimiento'),
            'nacionalidad' => $this->input->post('nacionalidad'),
            'notas' => $this->input->post('notas'),
                 );
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('profesores', $data);
        $id = $this->input->post('id');
        
        //Upload de la foto del alumno
		$config['upload_path'] = './images/fotos_profesores';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_spaces'] = 'YES';
        $config['file_name'] = $id.'_profesor.jpg';
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
        $configthumb['source_image'] = './images/fotos_profesores/'.$id.'_profesor'.$data['upload_data']['file_ext'];
        $configthumb['create_thumb'] = TRUE;
        $configthumb['maintain_ratio'] = FALSE;
        $configthumb['width'] = 300;
        $configthumb['height'] = 290;
        $configthumb['new_image'] = './images/fotos_profesores';
        $configthumb['thumb_marker'] = '_thumb';

        $this->load->library('image_lib', $configthumb);
        $this->image_lib->resize();



        redirect('/profesores/listado');
	}

function detalles()
	{
		$data['nombre'] = $this->session->userdata('name');
			if ($this->session->userdata('priv')==1){

			$this->load->model('profesores_model');
			$this->load->model('opciones_model');

			$id = $this->uri->segment(3);

			$data['profesor'] = $this->profesores_model->obten_profesor($id);

			$data['grado'] = $this->opciones_model->obten_nombre('grados',$data['profesor']->grado);
		
			//$data['plan'] = $this->opciones_model->obten_nombre('planes',$data['profesor']->plan);
			
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_profesores_detalles';
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

	function borrar(){
		$this->load->model('profesores_model');
		$id = $this->uri->segment(3);
		$this->profesores_model->profesores_borrar($id);
		redirect('/profesores/listado');
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
