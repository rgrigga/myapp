<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guest_Controller extends MY_Controller{

  function __construct(){
    parent::__construct();
  }

  public function view($data=null){      
    $this->home();
    }
  
  public function home(){
    $this->load->view('home/home');
  }
}

?>