<?php
class Blog extends CI_Controller {

	function index()
	{
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";

		$this->load->view('blogview', $data);
	}
}

//class Blog_controller extends CI_Controller {
//
//    function blog()
//    {
//        $this->load->model('Blog');
//
//        $data['query'] = $this->Blog->get_last_ten_entries();
//
//        $this->load->view('blog', $data);
//    }
//}
?>