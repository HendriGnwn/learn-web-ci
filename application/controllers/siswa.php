<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('model_siswa');
	}
	
	public function index()
	{	
		$this->pageTitle	= 'Data Siswa';
		$data['title'] 		= "DATA SISWA";
		$data['siswa'] 		= $this->model_siswa->get_data_siswa();
		$data['agama'] 		= $this->model_siswa->get_data_agama();
		$data['jurusan'] 	= $this->model_siswa->get_data_jurusan();
		$data['eskul'] 		= $this->model_siswa->get_data_ekstrakulikuler();		
		$data['kelas'] 		= $this->model_siswa->get_data_kelas();
		$data['pekerjaan'] 	= $this->model_siswa->get_data_pekerjaan();		
		$data['content'] 	= "module/siswa/index";
		$this->load->view($this->template,$data);
	}	
}