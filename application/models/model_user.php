<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {
	
	public function __construct() {
		$this->load->helper('string');
		parent::__construct();
	}

	public function generateKey()
	{
		$key = json_encode(random_string('alnum', 10));
		return $key;
	}

}