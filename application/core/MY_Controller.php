<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public $pageTitle;
	public $metaTag;
	public $metaDesc;
	public $headerTitle;
	
	public $template = 'index'; // by default index
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Webpage');
	}
}