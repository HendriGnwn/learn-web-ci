<?php

class Model_siswa extends CI_Model {
	
	public function get_data_siswa() {
		$sql = "select
				app_siswa.id_siswa,
				app_siswa.nisn,
				app_siswa.nis,
				app_siswa.nama_lengkap,
				app_siswa.foto,
				app_siswa.tpt_lahir,
				app_siswa.tgl_lahir,
				app_siswa.jenis_kelamin,
				app_siswa.alamat,
				app_siswa.no_hp,
				app_siswa.semester,
				app_siswa.tgl_masuk,
				app_siswa.status_dlm_keluarga,
				app_siswa.anak_ke,
				app_siswa.jlh_saudara,
				app_siswa.pendidikan_sebelumnya,
				app_siswa.nama_ayah,
				app_siswa.nama_ibu,
				app_siswa.alamat_ortu,
				app_siswa.penghasilan_ayah,
				app_siswa.penghasilan_ibu,
				app_siswa.telp_ortu,
				app_siswa.nama_wali,
				app_siswa.alamat_wali,
				app_siswa.telp_wali,
				app_siswa.status_siswa,
				app_siswa.`status`,
				app_agama.id_agama,
				app_agama.agama,
				app_agama.keterangan,
				app_agama.`status`,
				app_pekerjaan.id_pekerjaan,
				app_pekerjaan.pekerjaan,
				app_pekerjaan.deskripsi,
				app_pekerjaan.`status`,
				app_jurusan.id_jurusan,
				app_jurusan.jurusan,
				app_jurusan.keterangan,
				app_jurusan.deskripsi,
				app_jurusan.`status`,
				app_kelas.id_kelas,
				app_kelas.kelas,
				app_kelas.id_jurusan,
				app_kelas.`status`,
				app_eskul.id_eskul,
				app_eskul.nama_eskul,
				app_eskul.deskripsi,
				app_eskul.hari_eskul,
				app_eskul.waktu_mulai,
				app_eskul.waktu_selesai,
				app_eskul.`status`
				FROM
				app_siswa
				LEFT JOIN app_agama ON app_siswa.agama = app_agama.id_agama
				LEFT JOIN app_kelas ON app_siswa.kelas = app_kelas.id_kelas
				LEFT JOIN app_pekerjaan ON app_siswa.pekerjaan_ayah = app_pekerjaan.id_pekerjaan AND app_siswa.pekerjaan_ibu = app_pekerjaan.id_pekerjaan AND app_siswa.pekerjaan_wali = app_pekerjaan.id_pekerjaan
				LEFT JOIN app_eskul ON app_siswa.eskul = app_eskul.id_eskul
				LEFT JOIN app_jurusan ON app_siswa.jurusan = app_jurusan.id_jurusan WHERE status_siswa= '2' ORDER BY id_siswa DESC";
				$query=$this->db->query($sql);
				return $query->result_array();
	}
	
	public function get_data_siswa_by_id($id)
	{
		$sql = "select * from app_siswa where id_siswa = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}


	public function get_data_agama()
	{
		$sql = "select * from app_agama order by id_agama desc ";
		$query=$this->db->query($sql);
		return $query->result_array();
	}


	public function get_data_pekerjaan()
	{
		$sql = "select * from app_pekerjaan order by id_pekerjaan desc ";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	public function get_data_pekerjaan_by_id($id)
	{
		$sql = "select * from app_pekerjaan where id_pekerjaan = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}

	public function get_data_agama_by_id($id)
	{
		$sql = "select * from app_agama where id_agama = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}

	public function get_data_ekstrakulikuler()
	{
		$sql = "select * from app_eskul order by id_eskul desc ";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	public function get_data_ekstrakulikuler_by_id($id)
	{
		$sql = "select * from app_eskul where id_eskul = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}

	/*
	BEGIN FUNCTION MODULE MODEL JURUSAN
	*/
	public function get_data_jurusan()
	{
		$sql = "select * from app_jurusan order by id_jurusan desc";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	public function get_data_jurusan_by_id($id)
	{
		$sql = "select * from app_jurusan where id_jurusan = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}

	/*
	BEGIN END FUNCTION MODULE MODEL JURUSAN
	*/
	public function get_data_kelas()
	{
		$sql = "SELECT
		app_kelas.id_kelas,
		app_kelas.kelas,
		app_kelas.`status`,
		app_jurusan.id_jurusan,
		app_jurusan.jurusan,
		app_jurusan.keterangan,
		app_jurusan.deskripsi,
		app_jurusan.`status`
		FROM
		app_kelas
		INNER JOIN app_jurusan ON app_kelas.id_jurusan = app_jurusan.id_jurusan
		order by id_kelas desc";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	public function get_data_kelas_by_id($id)
	{
		$sql = "select * from app_kelas where id_kelas = ?";
		$query=$this->db->query($sql,array($id));
		return $query->row_array();
	}
}