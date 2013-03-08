<?php

class Planes extends CI_Controller
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

			$this->load->model('planes_model');
			
			$data['planes'] = $this->planes_model->todos_planes();
			
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_planes';
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

		$data['programas'] = $this->opciones_model->drop_options('programas');
		
		$data['tipo_duracion'] = $this->opciones_model->drop_options('tipo_duracion');

		$data['contenido'] = 'contenido_planes_agregar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);
	}

	function guardar()
	{
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'programa' => $this->input->post('programa'),
            'duracion' => $this->input->post('duracion'),
            'tipo_duracion' => $this->input->post('tipo_duracion')
            );
        $this->db->insert('planes',$data);
            redirect('/planes/listado');

	}

	function borrar(){
		$this->load->model('planes_model');
		$id = $this->uri->segment(3);
		$this->planes_model->planes_borrar($id);
		redirect('/planes/listado');
	}

	function editar(){
		$this->load->model('planes_model');
		$this->load->model('opciones_model');
		$id = $this->uri->segment(3);

		$data['datos_planes'] = $this->planes_model->obten_plan($id);

		$data['programas'] = $this->opciones_model->drop_options('programas');
		
		$data['tipo_duracion'] = $this->opciones_model->drop_options('tipo_duracion');

		$data['contenido'] = 'contenido_planes_editar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);	

	}

	function actualizar(){
		$data = array(
               'nombre' => $this->input->post('nombre'),
               'programa' => $this->input->post('programa'),
               'duracion' => $this->input->post('duracion'),
               'tipo_duracion' => $this->input->post('tipo_duracion')
                );

	$this->db->where('id', $this->input->post('id'));
	$this->db->update('planes', $data); 
	redirect('/planes/listado');
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
