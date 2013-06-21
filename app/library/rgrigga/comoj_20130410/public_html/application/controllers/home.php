<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MI_Controller extends MY_Controller{
  function __construct(){
    parent::__construct();
    
  }
}

class Home extends MI_Controller{
  function __construct(){
    parent::__construct();
    
  }
  
  function index($data){
    $this->home($data);
  }
    
  function home($data){
    $this->load->view('templates/header.php');
    if($this->is_auth();
    {
      $this->load->view('templates/nav.php');
    }
    if($this->is_admin();
    {
      $this->load->view('templates/nav.php');
    }
      
    //if admin, show admin
    $this->load->view('home/home');
    $this->load->view('templates/footer.php');
  }
  
  
}

?>