<?php

class Asignaturas_model extends CI_Model {

  function __construct()
  {
		parent::__construct();
	}

function todos_asignaturas()
{
  $query = $this->db->get('asignaturas');
  if($query->num_rows() > 0)
    {
    return $query;
  }
}

function asignaturas_borrar($id)
{
  $this->db->where('id',$id);
  $this->db->delete('asignaturas');
}

function obten_asignatura($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('asignaturas');
  if($query->num_rows() >0)
    {
      return $query->row();
    }
}

}
