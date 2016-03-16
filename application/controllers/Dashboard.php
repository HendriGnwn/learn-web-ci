
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    var $template = 'index';

	public function __construct()
	{
		parent::__construct(true);
		if($this->session->userdata('is_logged_in')==false){
			redirect('login');
		}
	}

	public function index()
	{
		$this->pageTitle = 'Dashboard';
		$data['title'] = "DASHBOARD";
		$data['content'] = "module/dashboard";
		$this->load->view($this->template,$data);
	}

}
