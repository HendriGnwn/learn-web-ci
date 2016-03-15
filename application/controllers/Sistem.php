<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem extends CI_Controller {

    var $template = 'index';

	public function __construct()
	{
		parent::__construct(true);
		if($this->session->userdata('is_logged_in')==false){
			redirect('login');
		}
		$this->load->model('model_sistem');
	}

	/*
	BEGIN FUNCTION MODULE PENGGUNA
	*/
	public function pengguna()
	{
		$data['title'] = "DATA PENGGUNA";
		$data['pengguna'] = $this->model_sistem->get_data_pengguna();
		$data['content'] = "module/sistem/pengguna";
		$this->load->view($this->template,$data);
	}

	function simpan_pengguna()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$status = $this->input->post('status');
		$level = $this->input->post('level');

		$data=array(
				 'username'=>$username
				,'password'=>sha1($password)
				,'re_password'=>$password
				,'status'=>$status
				,'nama_lengkap'=>$nama_lengkap
				,'level'=>$level
				,'tanggal_input'=>date('Y-m-d H:i:s')
				,'last_visited'=>date('Y-m-d H:i:s')
			);

		$this->db->trans_begin();
		$this->db->insert('app_user',$data);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function hapus_pengguna()
	{
		$id=$this->input->post('id');
		$param=array('id_user'=>$id);
		$this->db->trans_begin();
		$this->db->delete('app_user',$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return=array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function get_data_pengguna_by_id()
	{
		$id=$this->input->post('id');
		$data=$this->model_sistem->get_data_pengguna_by_id($id);
		echo json_encode($data);
	}

	function edit_pengguna()
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$status = $this->input->post('status');
		$level = $this->input->post('level');

		$data=array(
				 'username'=>$username
				,'status'=>$status
				,'nama_lengkap'=>$nama_lengkap
				,'level'=>$level
				,'tanggal_input'=>date('Y-m-d H:i:s')
				,'last_visited'=>date('Y-m-d H:i:s')
			);

		if ( $password != "" )
			$data['password'] = sha1($password);
			$data['re_password'] = $password;
		
		$param = array('id_user'=>$id_user);

		$this->db->trans_begin();
		$this->db->update('app_user',$data,$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}
	/*
	END FUNCTION MODULE PENGGUNA
	*/
}
