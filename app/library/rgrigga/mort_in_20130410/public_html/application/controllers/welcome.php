<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
      public function login()
  {
      // if this request is a form submission
      if ($_POST)
      {
          // get form values and xss filter the input
            $identity = $this->input->post('identity', true);
            $password = $this->input->post('password', true);

            // if user is logged in successfully
            if($this->ion_auth->login($identity,$password)) 
            {
                // send on to protected area ('user' controller)
                redirect('user');
            }
            else // incorrect creds
            {
                // load up error
                $data['error'] = "Incorrect Credentials (a/c/welcome)";
                
                // load form view again, with error
                $this->load->view('login_form', $data);
            }
      }
      else // show form view
      {
            $this->load->view('login_form');
      }
  } 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */