<?php

class Usuarios_model extends CI_Model {

  function __construct()
  {
		parent::__construct();
	}

function usuarios($login){
	 $this->db->select('id, nombre, priv')->from('usuarios')->where('login', $login);
	 $query = $this->db->get();
	 	if($query->num_rows() > 0){
			return $query->row_array();
							}
}

function todos_usuarios()
{
  $query = $this->db->get('usuarios');
  if($query->num_rows() > 0)
    {
    return $query;
  }
}

function usuario_borrar($id)
{
  $this->db->where('id',$id);
  $this->db->delete('usuarios');
}

function obten_usuario($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('usuarios');
  if($query->num_rows() >0)
    {
      return $query->row();
    }
}

}
