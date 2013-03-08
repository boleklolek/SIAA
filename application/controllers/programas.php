<?php

class Programas extends CI_Controller
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
				
			$this->load->model('programas_model');

			$data['programas'] = $this->programas_model->todos_programas();

			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_programas';
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
		$data['contenido'] = 'contenido_programas_agregar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);
	}

	function guardar()
	{
        $data = array(
            'nombre' => $this->input->post('nombre'),
            );
        $this->db->insert('programas',$data);
            redirect('/programas/listado');

	}

	function borrar(){
		$this->load->model('programas_model');
		$id = $this->uri->segment(3);
		$this->programas_model->programa_borrar($id);
		redirect('/programas/listado');
	}

	function editar(){
		$this->load->model('programas_model');
		$id = $this->uri->segment(3);

		$data['datos_programa'] = $this->programas_model->obten_programa($id);

		$data['contenido'] = 'contenido_programas_editar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);	

	}


	function actualizar(){
		$data = array(
               'nombre' => $this->input->post('nombre')
                );

	$this->db->where('id', $this->input->post('id'));
	$this->db->update('programas', $data); 
	redirect('/programas/listado');
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
