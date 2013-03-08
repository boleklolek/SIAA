<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siaa_login extends CI_Controller {

	function __construct() 
    {
    	parent::__construct();
 	}

	public function index()
	{	

		// Aqui cargamos el contenido principal
		$data['contenido'] = "siaa_login";

		$this->load->view('templates/templete',$data);
	}

	function validate_credentials()
	{		
	
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();

		if($query) // if the user's credentials validated...
		{
			$this->load->model('usuarios_model');
			$just = $this->usuarios_model->usuarios($this->input->post('username'));
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				'name' => $just['nombre'],
				'id' => $just['id'],
				'priv' => $just['priv']
			);
				$this->session->set_userdata($data);
				redirect('admin/index');
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}	

		function logout()
	{
		$this->session->sess_destroy();
		//redirect('siaa_login');
		$this->index();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */