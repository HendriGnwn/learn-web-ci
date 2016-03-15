<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sistem extends CI_Model {

	function get_data_pengguna()
	{
		$sql = "select * from app_user order by tanggal_input asc";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function get_data_pengguna_by_id($id)
	{
		$sql = "select * from app_user where id_user = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}

}