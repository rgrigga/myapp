<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller{
  
  function __construct(){
    parent::__construct();
  }

    //function admin($group){
    //die ("group");
    //  //$this->view($group);
    //}
      function view($group)
      {
      //die('my->view('.$group);
      
     // if ($this->is_admin()){
     //  
     //  echo "AUTH->VIEW(ADMIN)";
     //  redirect($group);//admin can go anywhere
     //  exit;
     //}
     
        if ($this->is_admin()){
       //$this->get_users();
       
 //       redirect($group);//only if authorized
        die('admin->view');
       $this->load->view('templates/header', $this->data;);
       $this->load->view('templates/nav'), $this->data;
       //$this->load->view('templates/admin');
       $this->load->view('admin/home'), $this->data;
       $this->load->view('templates/footer'), $this->data;
              //exit;
      }  
        //http://davidwalsh.name/php-shorthand-if-else-ternary-operators
      else
      {
 //            die('F my->view('.$group);
        redirect('home');
        //else redirect(base_url().$group);
      }
          
    }
  //public function index(){
  //  //die('index!');
  //  
  //      $this->view();  
  //}
    
  //function view()
  //{
  //
  //  //$this->load->view('templates/header');
  //  //$this->load->view('admin/home');
  //  ////$this->load->view('auth/edit_group', $this->data);
  //  //$this->load->view('templates/footer');
  //  $this->_render_page('auth/home',$this->data);
  //}
     
//  	function _render_page($view, $data=null, $render=false)
//	{
//
//		$this->viewdata = (empty($data)) ? $this->data: $data;
//
//		$view_html = $this->load->view($view, $this->viewdata, $render);
//
//		if (!$render) return $view_html;
//	}
      function index(){
        //die("INDEX");
        //must be implemented by child
        $this->view('admin');
      }
}

?>