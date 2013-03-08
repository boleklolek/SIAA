<?php

class Usuarios extends CI_Controller
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
				
			$this->load->model('usuarios_model');

			$data['usuarios'] = $this->usuarios_model->todos_usuarios();

			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_usuarios';
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

		$data['contenido'] = 'contenido_usuarios_agregar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);
	}

	function editar(){
		$this->load->model('usuarios_model');
		$this->load->model('opciones_model');
		$id = $this->uri->segment(3);

		$data['datos_usuarios'] = $this->usuarios_model->obten_usuario($id);

		$data['contenido'] = 'contenido_usuarios_editar';

		$data['main_content'] = 'bienvenida';

		$this->load->view('administracion', $data);	

	}

	function actualizar(){
		$data = array(
            'nombre' => $this->input->post('nombre'),
            'login' => $this->input->post('login'),
            'password' => $this->input->post('password'),
            'md5' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'admin' => 1,
            'level' => 1,
            'priv' => 1
                );

	$this->db->where('id', $this->input->post('id'));
	$this->db->update('usuarios', $data); 
	redirect('/usuarios/listado');
	}



	function guardar()
	{
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'login' => $this->input->post('login'),
            'password' => $this->input->post('password'),
            'md5' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'admin' => '1',
            'level' => '1',
            'priv' => '1'
            );

        $this->db->insert('usuarios',$data);
            redirect('/usuarios/listado');

	}

	function borrar(){
		$this->load->model('usuarios_model');
		$id = $this->uri->segment(3);
		$this->usuarios_model->usuarios_borrar($id);
		redirect('/usuarios/listado');
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
