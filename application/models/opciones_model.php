 <?php

class Opciones_model extends CI_Model {

  function __construct()
  {
        parent::__construct();
    }

 function drop_options($table)
    {
    $this->db->order_by('nombre');
    $result = $this->db->get($table);
    $return = array();
    if($result->num_rows() > 0){
            $return[''] = 'Seleccione';
        foreach($result->result_array() as $row){
            $return[$row['id']] = $row['nombre'];
        }
    }
    return $return;
}

function drop_options_nombres($table)
    {
    $this->db->select('id, nombre, apaterno, amaterno');
    $this->db->order_by('nombre');
    $result = $this->db->get($table);
    $return = array();
    if($result->num_rows() > 0){
            $return[''] = 'Seleccione';
        foreach($result->result_array() as $row){
            $return[$row['id']] = $row['nombre']." ".$row['apaterno']." ".$row['amaterno'];
        }
    }
    return $return;
}

 function obten_nombre($table,$id)
    {
    $this->db->select('nombre');
    $this->db->where('id',$id);
    $query = $this->db->get($table);
    if($query->num_rows() > 0){
         return $query->row();
            }
    }


}