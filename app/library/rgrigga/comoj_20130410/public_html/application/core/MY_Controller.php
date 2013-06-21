<?php
function dbg ( $what ) {
    echo '<pre>';
    if ( is_array( $what ) )  {
        print_r ( $what );
    } else {
        var_dump ( $what );
    }
    echo '</pre>';
}
//php inheritance

//Don't do this:
//class Partner_Controller extends Secure_Controller
//{
//  function __construct(){
//    parent::__construct();
//    if( ! $this->ion_auth->is_admin()){ //if admin, OK!
//      if( ! $this->ion_auth->in_group('partners'))//if partner, OK
//      {
//        //else is a guest
//        redirect(base_url() . 'auth/login');
//      }
//    }
//  }
//}
//
//class Admin_Controller extends Secure_Controller
//{
//  function __construct(){  
//    parent::__construct();
//      
//        if( ! $this->ion_auth->is_admin())
//        {
//          redirect(base_url() . 'auth/login');
//        }
//  }
//  
//}
//

abstract class MY_Controller extends CI_Controller
  {
//Children are Auth, Admin

    function __construct(){
      
      parent::__construct();
      $this->init();
      }
      
    function init(){

      //load libraries
      $this->load->library('ion_auth');
      $this->load->library('session');
      $this->load->library('form_validation');
      $this->load->helper('url');
        // Load MongoDB library instead of native db driver if required
		//$this->config->item('use_mongodb', 'ion_auth') ?
		//$this->load->library('mongo_db') :
      
      //load db/connect
      $this->load->database();
      
      	$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'),
                                                     $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->helper('language');
    }
      
    function get_users(){
      
      $this->load->database();
    
      //set the flash data error message if there is one
	  $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

		//list the users  
      $this->data['users'] = $this->ion_auth->users()->result();
	  
      foreach ($this->data['users'] as $k => $user)
      {
	   $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
	  }
    }
    
      public function is_post()
      {
        return $_SERVER['REQUEST_METHOD'] == 'POST' ? TRUE : FALSE;
      }
      
      public function is_admin(){
          return $this->ion_auth->is_admin();
      }
      
      public function is_group($group){
          return $this->ion_auth->is_group($group);
      }
        
      public function is_auth($group){
        //$group= strtolower(get_class($this));
          if($this->is_admin() || $this->ion_auth->in_group($group))
          {
            return true;
          }
          else return false;
          
        //if is admin, good. if in group good. otherwise, bad.
      }
      
    function view($group)
	{
      //die('my->view('.$group);
      
     // if ($this->is_admin()){
     //  
     //  echo "AUTH->VIEW(ADMIN)";
     //  redirect($group);//admin can go anywhere
     //  exit;
     //}
     
     if ($this->is_auth($group)){
       $this->_render_page($group,$this->data);    
       //redirect($group);//only if authorized
       exit;
     }
       //http://davidwalsh.name/php-shorthand-if-else-ternary-operators
     else{
            die('Mycontroller 130 F my->view('.$group);
       redirect('home');
       //else redirect(base_url().$group);
     }
      
  }
    function _render_page($view, $data=null, $render=false)
// $this->_render_page('auth/change_password', $this->data);
//
       {
   
           $this->viewdata = (empty($data)) ? $this->data: $data;
           
           $view_html =$this->load->view('templates/header');
           $view_html .= $this->load->view($view, $this->viewdata, $render);
            $view_html .= "<hr>\$view_html .= \$this->load->view(\$view, \$this->viewdata, \$render); <hr> ".var_dump($this->viewdata);
          $view_html .=$this->load->view('templates/nav');
          $view_html .=$this->load->view('templates/footer');

           if (!$render) return $view_html;
       }
  //  function view()
  //{
  //  //    $group= strtolower(get_class($this));
  //  //  if (substr($group, -1) == 's')
  //  //    {
  //  //        $group = substr($group, 0, -1);
  //  //    }
  //  ////$this->load->view('templates/header');
  //  ////$this->load->view('admin/home');
  //  //////$this->load->view('auth/edit_group', $this->data);
  //  ////$this->load->view('templates/footer');
  //  //$this->_render_page($group.'/home');
  //}
      //public function dash($group='partner'){
      //  
      //  
      ////foreach(($this->get_users_groups()) as $group){
      ////  echo "<h1>.$group.</h1>";  
      ////}
      //  //$this->index('admin');
      //
      ////$data['title'] = ucfirst($page); // Capitalize the first letter
      ////$this->load->view('templates/header');
      ////$this->load->view(get_class($this).'/dash',$this);
      ////$this->load->view('templates/footer');
      //}
      function index(){
        die("INDEX");
        //must be implemented by child
        $this->view('admin');
      }

  }

//class Admin_Controller extends MY_Controller
//{
//  function __construct(){
//    parent::__construct();
//  }
//  //basically, go straight to the parent,
//  //but asking for me is easier than trying to remember
//  //and type "MY_Controller"
//}
//
////
//class Auth_Controller extends MY_Controller
//{
//  function __construct()
//  {
//    parent::__construct();
//    
//    //$this->is_admin()) ? $this->is_auth($group) : redirect(base_url() . 'home/home');
//    
//    //if(!$this->is_admin()){
//      //echo "NOT ADMIN";
//      //die();        
//      //$group= strtolower(get_class($this));
//
//      //if (substr($group, -1) == 's')
//      //  {
//      //      $group = substr($group, 0, -1);
//      //  }
//        
//    //  if(!$this->is_auth($group)){
//    //    echo "not auth for class=".$group;
//    //    debug_backtrace($this);
//    //    die();
//    //    redirect(base_url() . 'home/home');
//    //  }
//    //}
//  }
//    //{
//    //  );
//    //  exit;
//    //}
//    
//    public function is_auth($group){
//      
//      //if parent::in_group($this->group)
//      //thought this would be good, but no:
//      //
//      //return $this->is_admin() ? $this->in_group($group) : FALSE
//      //if is admin, good. if in group good. otherwise, bad.
//      
//      //if ( ! $this->is_admin() & ! $this->is_auth())//no
//      //if ( ! $this->is_auth() & ! $this->is_admin())//no
//      
//      //need to do that:
//      //?:redirect(base_url() . 'guest/home')//if
//      
//      //TO DO:
//      //group needs to be cleaned -
//      //can be pushed to ionauth later
//
//        //http://stackoverflow.com/questions/2534597/how-to-replace-the-last-s-with-in-php
//        
//    function auth($group='hackers'){
//        return $this->is_auth($group);
//    }
//    
//    function is_auth($group='hackers'){
//      return $this->ion_auth->in_group($group);
//    }
//    
//    function is_admin(){
//      return $this->ion_auth->is_admin();
//    }
//
//      $this->ion_auth->in_group($group) ? redirect(base_url() . 'home'):false;
//    }
//    
//    //function in_group($group){
//    //  return parent::in_group($group);
//    //}
//
//    function login($group){
//      //if (!$this->is_admin  && !$this->in_group()){
//      //  redirect(base_url() . 'home/home'):false;
//      //}
//      !$this->is_admin() ? !$this->is_auth($group):
//        redirect(base_url() . 'home');
//      //in_group($this->group)
//    }
//}
// 
//    //switch (TRUE){
//    //  case $this->ion_auth->in_group():
//    //    exit;
//    //  case $this->ion_auth->is_admin():
//    //    exit;
//    //  //case $this->ion_auth->something else
//    //}
//    
//    //if( ! $this->ion_auth->logged_in())
//    //{
//    //  
//    //  exit;
//    //}


class MY_Input extends CI_Input {

    function __construct(){parent::__construct();}
    
    public function is_post()
    {
      return $_SERVER['REQUEST_METHOD'] == 'POST' ? TRUE : FALSE;
    }
}

?>