<?php
//contact_model

class Contact_model extends CI_Model{
  
  function CI_Contact_model(){
    parent::__construct();
  }
  function contact_getall(){
    $this->load->database();
    $query=$this->db->get('contact');
    return $query->result();
  }
  
  function contact_get($id){
    $this->load->database();
    $query=$this->db->get_where('contact',array('id'=>$id));
    return $query->row_array();
  }
}

?>