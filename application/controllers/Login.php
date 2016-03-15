<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    var $template = 'login';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		$data['title'] = "MODUL | LOGIN";
		$this->load->view($this->template,$data);
	}

	public function authentication()
	{	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// echo $username;
		// die();
		$cek = $this->model_login->authentication($username,$password);

		// echo "<pre>";
		// print_r($cek);
		// die();

		if($cek==true)
		{
			$cek['is_logged_in'] = true;
			$this->session->set_userdata($cek);
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('login_message','Username dan Password Anda salah !');
			redirect('login');
		}
	}
}

