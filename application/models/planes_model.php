<?php

class Planes_model extends CI_Model {

  function __construct()
  {
		parent::__construct();
	}

function todos_planes()
{
  $query = $this->db->get('planes');
  if($query->num_rows() > 0)
    {
    return $query;
  }
}

function planes_borrar($id)
{
  $this->db->where('id',$id);
  $this->db->delete('planes');
}

function obten_plan($id)
{
  $this->db->where('id',$id);
  $query = $this->db->get('planes');
  if($query->num_rows() >0)
    {
      return $query->row();
    }
}

}
