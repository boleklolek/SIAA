<?php

class Profesores_model extends CI_Model {

  function __construct()
  {
		parent::__construct();
	}

function todos_profesores()
{
  $query = $this->db->get('profesores');
  if($query->num_rows() > 0)
    {
    return $query;
  }
}

function profesores_borrar($id)
{
  $this->db->where('id',$id);
  $this->db->delete('profesores');
}

function obten_profesor($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('profesores');
  if($query->num_rows() >0)
    {
      return $query->row();
    }
}

}
