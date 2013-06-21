<?php
////http://jondavidjohn.com/blog/2011/01/scalable-login-system-for-codeigniter-ion_auth
//
class Admin_Controller extends CI_Controller {

    protected $the_user;

    public function __construct() {

        parent::__construct();

        //echo "FOO!" and die();
        
        if($this->ion_auth->is_admin()) {
            $this->the_user = $this->ion_auth->user()->row();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect('/');
        }
    }
}
////
//class MY_Controller extends CI_Controller
//{
//  
//  public function is_post()
//  {
//    return $_SERVER['REQUEST_METHOD'] == 'POST' ? TRUE : FALSE;
//  }
//}
//
////class User_Controller extends MY_Controller {
////
////    protected $the_user;
////
////    public function __construct() {
////
////        parent::__construct();
////
////        if($this->ion_auth->in_group('user')) {
////            $this->the_user = $this->ion_auth->user()->row();
////            $data->the_user = $this->the_user;
////            $this->load->vars($data);
////        }
////        else {
////            redirect('/');
////        }
////    }
////}
//
class Common_Auth_Controller extends CI_Controller {

    protected $the_user;

    public function __construct() {

        echo "FOO!";
        die();
        
        parent::__construct();

        if($this->ion_auth->logged_in()) {
            $this->the_user = $this->ion_auth->user()->row();
            $data->the_user = $this->the_user;
            $this->load->vars($data);
        }
        else {
            redirect('/');
        }
    }
}
//
////class Home extends Admin_Controller {
////
////    function __construct() {
////        parent::__construct();
////    }
////
////    function index() {
////        
////        echo "system/core/MYController.php/HOME";
////        // do stuff here -
////        // remember that $this->the_user is available in this controller
////        // as is $the_user available in any view I load
////    }
////
////}
//
//class Secure_Controller extends MY_Controller
//{
//  function __construct()
//  {
//    parent::__construct();
// 
//    //
//    // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
//    //
//    if( ! $this->ion_auth->logged_in())
//    {
//      redirect(base_url() . 'auth/login');
//    }
//}
?>