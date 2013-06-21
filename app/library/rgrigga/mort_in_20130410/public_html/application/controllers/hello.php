<?php
class Hello extends CI_Controller{
  
  var $name;
  var $color;
  
  function Hello(){
    parent::__construct();
    
    $this->name = "Ryan";
    $this->color = 'green';
  }
  function you($first='', $last=''){
    //http://www.phpeveryday.com/articles/CodeIgniter-Creating-and-Sending-Parameters-Between-Controller-and-View-P151.html
    
    $data['name']=
      ($first) ? $first.' '.$last :
    $this->name;
    $data['color'] = $this->color;
    
    $this->load->view('you_view',$data);
  }
}

?>