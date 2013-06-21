<?php

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
class Auth extends Common_Auth_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        redirect('/');
    }

    /**
     * Global Login function to log user in and direct to proper area
     *
     * @return void
     * @author Jonathan Johnson
     **/
    function login() {
      
//      if (!$this->ion_auth->logged_in())
//		{
//            echo "YOU ARE NOT LOGGED IN!";
//			//redirect('auth/login');
//		}

        if($_POST) {   //clean public facing app input
            $identity = $this->input->post('identity', true);
            $password = $this->input->post('password', true);

            //Ion_Auth Login fun
            if($this->ion_auth->login($identity,$password)) {

                //capture the user
                $user = $this->ion_auth->user()->row();

                redirect($user->group.'/home');

                /*redirect to the proper home
                  controller using the user
                  groups as folder names */
            }
            else {

                // set error flashdata
                $this->session->set_flashdata(
                    'error',
                    'Your login attempt failed.'
                );

                redirect('/');
            }
        }
        redirect('/');
    }

    /**
     * Global logout function to destroy user session
     *
     * @return void
     * @author Jonathan Johnson
     **/
    function logout() {   //Basic Ion_Auth Logout function
        $this->ion_auth->logout();
        redirect('/');
    }

}
?>