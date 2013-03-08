<?php

class Membership_model extends CI_Model {

	function validate()
	{
		$this->db->where('login', $this->input->post('username'));
		$this->db->where('md5', md5($this->input->post('password')));
		$query = $this->db->get('usuarios');
//		print($this->db->last_query());
//		print($query->num_rows());
		if($query->num_rows() == 1)
		{

			return true;
		}
		
	}
	
}
