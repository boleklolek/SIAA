<?php

class Alumnos_model extends CI_Model {

  function __construct()
  {
		parent::__construct();
	}

function todos_alumnos()
{
  $query = $this->db->get('alumnos');
  if($query->num_rows() > 0)
    {
    return $query;
  }
}

function alumnos_borrar($id)
{
  $this->db->where('id',$id);
  $this->db->delete('alumnos');
}

function obten_alumno($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('alumnos');
  if($query->num_rows() >0)
    {
      return $query->row();
    }
}

}
