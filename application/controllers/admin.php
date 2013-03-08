<?php

class Admin extends CI_Controller
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
			//$this->load->model('notas_model');
            //$data['divisas'] = $this->notas_model->divisas_admin_todas();
            //$data['princesas'] = $this->notas_model->pricesas_admin_todas_mes();
            //$data['columnas'] = $this->notas_model->columnas_admin_todas_mes();
            //$data['segundas'] = $this->notas_model->segundas_admin_todas_mes();
            //$data['fotonotas'] = $this->notas_model->fotonotas_admin_todas_mes();
            //$data['fotogaleria'] = $this->notas_model->fotogalerias_admin_todas_mes();	
			//$data['todas'] = $this->notas_model->obtener_todas();
			
			//$data['menu'] = 'menu_admin';
			$data['contenido'] = 'contenido_admin';
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
