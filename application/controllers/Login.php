<?php

class Login extends CI_Controller {

	
    	public function __construct() {
       	parent::__construct();

        	$this->load->model('login_model');
		$this->load->helper('url');
    	}

 	public function index()
	{
		$this->load->view('login_view');

		$username = $this->input->get('username');
        	$password = $this->input->get('password');

		$result = $this->login_model->validate($username, $password);

		if ($result == true){
			redirect('Welcome');
		}

	}
}

?>