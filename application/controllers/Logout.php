<?php

class Logout extends CI_Controller {

	
    	public function __construct() {
       	parent::__construct();

     		$this->load->helper('url');
    	}

 	public function index()
	{
		$this->load->view('welcome_message');

		redirect('Login');

	}
}

?>