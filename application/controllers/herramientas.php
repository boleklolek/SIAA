<?php

class Herramientas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function index()
	{
		$data['nombre'] = $this->session->userdata('name');
			if ($this->session->userdata('priv')==1){

			$this->load->model('herramientas_model');
			
			//$data['asignaturas'] = $this->asignaturas_model->todos_asignaturas();
			
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_herramientas';
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
		$data['tipo_duracion'] = $this->opciones_model->drop_options('tipo_duracion');

		$data['contenido'] = 'contenido_asignaturas_agregar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);
	}

	function guardar()
	{
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'plan' => $this->input->post('planes'),
            'duracion' => $this->input->post('duracion'),
            'duracion_tipo' => $this->input->post('tipo_duracion')
            );
        $this->db->insert('asignaturas',$data);
            redirect('/asignaturas/listado');

	}

	function borrar(){
		$this->load->model('asignaturas_model');
		$id = $this->uri->segment(3);
		$this->asignaturas_model->asignaturas_borrar($id);
		redirect('/asignaturas/listado');
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
