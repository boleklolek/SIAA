<?php

class Programas_model extends CI_Model {

  function __construct()
  {
		parent::__construct();
	}

function todos_programas()
{
  $query = $this->db->get('programas');
  if($query->num_rows() > 0)
    {
    return $query;
  }
}

function programa_borrar($id)
{
  $this->db->where('id',$id);
  $this->db->delete('programas');
}

function obten_programa($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('programas');
  if($query->num_rows() >0)
    {
      return $query->row();
    }
}

}
