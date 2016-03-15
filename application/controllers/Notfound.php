<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notfound extends CI_Controller {

    var $template = 'errors';

	public function __construct()
	{
		parent::__construct(true);
	}

	public function index()
	{
		$data['title'] = "SMK 2 TRIPLE J | 404 NOT FOUND";
		$this->load->view($this->template,$data);
	}

}

