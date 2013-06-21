<?php
class Contact extends CI_Controller{
  
  function contact(){
    parent::__construct();
  }
  function GetAll(){
    
    $this->load->model('contact_model');
    $this->load->library('javascript');
    
    $data['query']=$this->contact_model->contact_getall();
    
    $this->load->view('contact_viewall',$data);
  }
  function Get($id){
    $this->load->model('contact_model');
    $data['query']=$this->contact_model->contact_get($id);
    $this->load->view('contact_view',$data);
  }
  
}


?>