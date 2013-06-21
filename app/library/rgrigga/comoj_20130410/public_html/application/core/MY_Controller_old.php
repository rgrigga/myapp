<?php

class MY_Controller extends CI_Controller {

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

    function __construct(){parent::__construct();}
    
    public function home(){
      redirect(base_url() . 'home/home'
    }
      
      public function is_admin($user){
          return $this->ion_auth->is_admin();
      }
      
      public function is_group($group){
          return $this->ion_auth->is_group();
      }
      
      public function is_auth($group){
          return $this->is_admin() ?
          $this->ion_auth->in_group($group) :
          FALSE;
        //if is admin, good. if in group good. otherwise, bad.
      }
}

class Admin_Controller extends MY_Controller
{
  function __construct(){
    parent::__construct();
  }
  //basically, go straight to the parent,
  //but asking for me is easier than trying to remember
  //and type "MY_Controller"
}

//
class Auth_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    
    //
    //$this->is_admin()) ? $this->is_auth($group) : redirect(base_url() . 'home/home'
    $this->is_admin()) ? $this->is_auth($group) : $this->home();
    //{
    //  );
    //  exit;
    //}
    
    public function is_auth($group){
      
      //thought this would be good, but no:
      //
      //return $this->is_admin() ? $this->in_group($group) : FALSE
      //if is admin, good. if in group good. otherwise, bad.
      
      //if ( ! $this->is_admin() & ! $this->is_auth())//no
      //if ( ! $this->is_auth() & ! $this->is_admin())//no
      
      
      
      //need to do that:
      //?:redirect(base_url() . 'guest/home')//if
      parent::is_auth($group) ?: redirect(base_url() . 'home/home');
    }
    
    function in_group($group);
      return parent::->in_group($group);
    }
    
    
    //switch (TRUE){
    //  case $this->ion_auth->in_group():
    //    exit;
    //  case $this->ion_auth->is_admin():
    //    exit;
    //  //case $this->ion_auth->something else
    //}
    
    //if( ! $this->ion_auth->logged_in())
    //{
    //  
    //  exit;
    //}
    
  }
}


class MY_Input extends CI_Input {

    function __construct(){parent::__construct();}
    
    public function is_post()
    {
      return $_SERVER['REQUEST_METHOD'] == 'POST' ? TRUE : FALSE;
    }
}

?>