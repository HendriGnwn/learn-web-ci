<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct(true);
		if($this->session->userdata('is_logged_in')==false){
			redirect('login');
		}
	}

	public function index()
	{
        $this->session->sess_destroy();
		redirect('login','refresh');
	}
}

