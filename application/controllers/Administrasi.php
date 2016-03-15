<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrasi extends CI_Controller {

    var $template = 'index';

	public function __construct()
	{
		parent::__construct(true);
		$this->gallery_path_siswa = realpath(APPPATH . '../assets/img/siswa');		
						

		if($this->session->userdata('is_logged_in')==false){
			redirect('login');
		}
		$this->load->model('model_administrasi');

	}

	private function RupiahToNumeric($value) {
		$return = str_replace('.','',$value);
		$return = str_replace(',','.',$return);
		return $return;
	}

	private function DatepickerToEn($datepicker) {
		$datepicker = str_replace('/', '', $datepicker);
        $date = substr($datepicker,4,4).'-'.substr($datepicker,2,2).'-'.substr($datepicker,0,2);
        return $date;
	}

	public function siswa()
	{		
		$data['title'] 		= "DATA SISWA";
		$data['siswa'] 		= $this->model_administrasi->get_data_siswa();
		$data['agama'] 		= $this->model_administrasi->get_data_agama();
		$data['jurusan'] 	= $this->model_administrasi->get_data_jurusan();
		$data['eskul'] 		= $this->model_administrasi->get_data_ekstrakulikuler();		
		$data['kelas'] 		= $this->model_administrasi->get_data_kelas();
		$data['pekerjaan'] 	= $this->model_administrasi->get_data_pekerjaan();		
		$data['content'] 	= "module/administrasi/siswa";
		$this->load->view($this->template,$data);
	}

	function get_data_siswa_by_id()
	{
		$id=$this->input->post('id');
		$data=$this->model_administrasi->get_data_siswa_by_id($id);
		echo json_encode($data);
	}

	function simpansiswa()
	{
		$nisn						 = $this->input->post('nisn');
		$nis						 = $this->input->post('nis');		
		$nama_lengkap				 = $this->input->post('nama_lengkap');
		$nama_file_photo			 = $this->input->post('userfile');		
		$tpt_lahir					 = $this->input->post('tpt_lahir');
		$tgl_lahir					 = $this->DatepickerToEn($this->input->post('tgl_lahir'));
		$jenis_kelamin				 = $this->input->post('jenis_kelamin');
		$agama						 = $this->input->post('agama');
		$alamat						 = $this->input->post('alamat');
		$no_hp						 = $this->input->post('no_hp');
		$kelas 					 	 = $this->input->post('kelas');
		$jurusan 					 = $this->input->post('jurusan');
		$eskul 						 = $this->input->post('eskul');
		$semester 					 = $this->input->post('semester');
		$tgl_masuk					 = $this->DatepickerToEn($this->input->post('tgl_masuk'));
		$status_dlm_keluarga		 = $this->input->post('status_dlm_keluarga');
		$anak_ke					 = $this->input->post('anak_ke');
		$jlh_saudara				 = $this->input->post('jlh_saudara');
		$pendidikan_sebelumnya 		 = $this->input->post('pendidikan_sebelumnya');
		$nama_ayah					 = $this->input->post('nama_ayah');
		$nama_ibu					 = $this->input->post('nama_ibu');
		$alamat_ortu				 = $this->input->post('alamat_ortu');
		$pekerjaan_ayah				 = $this->input->post('pekerjaan_ayah');
		$pekerjaan_ibu				 = $this->input->post('pekerjaan_ibu');
		$penghasilan_ayah			 = $this->input->post('penghasilan_ayah');
		$penghasilan_ibu			 = $this->input->post('penghasilan_ibu');
		$telp_ortu					 = $this->input->post('telp_ortu');
		$nama_wali					 = $this->input->post('nama_wali');
		$alamat_wali				 = $this->input->post('alamat_wali');
		$telp_wali					 = $this->input->post('telp_wali');
		$pekerjaan_wali				 = $this->input->post('pekerjaan_wali');
		$status_siswa				 = $this->input->post('status_siswa');
		$status 					 = $this->input->post('status');

		//rename
	   	$nama_file_foto = str_replace(' ', '-', strtoupper($nama_lengkap));
	   		
	   //upload images
		$userfile = @$_FILES['userfile'];
		$ext = pathinfo(@$userfile['name'], PATHINFO_EXTENSION);
			$file_name = $nama_file_foto.'-'.'SISFOKOL'.'.'.$ext;
		
		 $config = array(
						 'allowed_types'=>'jpg|jpeg|gif|png',
						 'upload_path' 	=> $this->gallery_path_siswa,
						 'file_name' 	=> $file_name,
						 'max_size' 	=> 5000
		 				);
		 
		$this->load->library('upload',$config);
			$this->upload->do_upload();
			$image_data = $this->upload->data();
		 
		$config = array(
						 'source_image'		=> $image_data['full_path'],
						 'new_image'		=>$this->gallery_path_siswa . '/'.$file_name,
						 'new_image'		=>$this->gallery_path_siswa . '/thumbs/'.$file_name,
						 'maintain_ration'	=>true,
						 'width'			=>210,
						 'master_dim' 		=> 'width',
						 'height'			=>210
						);
		 
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		//end upload images

		$data=array(

				 'nisn'						=>$nisn		
				,'nis'						=>$nis				 	
				,'nama_lengkap'				=>$nama_lengkap
				,'foto'						=>$file_name				
				,'tpt_lahir'				=>$tpt_lahir
				,'tgl_lahir'				=>$tgl_lahir
				,'jenis_kelamin'			=>$jenis_kelamin
				,'agama'					=>$agama
				,'alamat'					=>$alamat
				,'no_hp'					=>$no_hp
				,'kelas'					=>$kelas
				,'jurusan'					=>$jurusan
				,'eskul'					=>$eskul						
				,'semester'					=>$semester											
				,'tgl_masuk'				=>$tgl_masuk
				,'status_dlm_keluarga'		=>$status_dlm_keluarga
				,'anak_ke'					=>$anak_ke
				,'jlh_saudara'				=>$jlh_saudara
				,'pendidikan_sebelumnya'	=>$pendidikan_sebelumnya
				,'nama_ayah'				=>$nama_ayah
				,'nama_ibu'					=>$nama_ibu
				,'alamat_ortu'				=>$alamat_ortu
				,'pekerjaan_ayah'			=>$pekerjaan_ayah
				,'pekerjaan_ibu'			=>$pekerjaan_ibu
				,'penghasilan_ayah'			=>$penghasilan_ayah
				,'penghasilan_ibu'			=>$penghasilan_ibu
				,'telp_ortu'				=>$telp_ortu
				,'nama_wali'				=>$nama_wali
				,'alamat_wali'				=>$alamat_wali
				,'telp_wali'				=>$telp_wali
				,'pekerjaan_wali'			=>$pekerjaan_wali
				,'status_siswa'				=>$status_siswa
				,'status'					=>$status

				
			);

		// echo "<pre>";
		// print_r($data);
		// die();

		$this->db->trans_begin();
		$this->db->insert('app_siswa',$data);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function hapussiswa()
	{
		$id=$this->input->post('id');
		$foto=$this->input->post('foto');
		$param=array('id_siswa'=>$id);
		$this->db->trans_begin();
		$this->db->delete('app_siswa',$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return=array('success'=>true);
			@unlink($this->gallery_path_siswa.'/'.$foto);
			@unlink($this->gallery_path_siswa.'/thumbs/'.$foto);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}


	function edit_siswa()
	{
		$id_siswa 					 = $this->input->post('id_siswa');		
		$nisn						 = $this->input->post('nisn');
		$nis						 = $this->input->post('nis');		
		$nama_lengkap				 = $this->input->post('nama_lengkap');
		// $nama_file_photo			 = $this->input->post('userfile');		
		$tpt_lahir					 = $this->input->post('tpt_lahir');
		$tgl_lahir					 = $this->DatepickerToEn($this->input->post('tgl_lahir'));
		$jenis_kelamin				 = $this->input->post('jenis_kelamin');
		$agama						 = $this->input->post('agama');
		$alamat						 = $this->input->post('alamat');
		$no_hp						 = $this->input->post('no_hp');
		$kelas 					 	 = $this->input->post('kelas');
		$jurusan 					 = $this->input->post('jurusan');
		$eskul 						 = $this->input->post('eskul');		
		$semester 					 = $this->input->post('semester');
		$tgl_masuk					 = $this->DatepickerToEn($this->input->post('tgl_masuk'));
		$status_dlm_keluarga		 = $this->input->post('status_dlm_keluarga');
		$anak_ke					 = $this->input->post('anak_ke');
		$jlh_saudara				 = $this->input->post('jlh_saudara');
		$pendidikan_sebelumnya 		 = $this->input->post('pendidikan_sebelumnya');
		$nama_ayah					 = $this->input->post('nama_ayah');
		$nama_ibu					 = $this->input->post('nama_ibu');
		$alamat_ortu				 = $this->input->post('alamat_ortu');
		$pekerjaan_ayah				 = $this->input->post('pekerjaan_ayah');
		$pekerjaan_ibu				 = $this->input->post('pekerjaan_ibu');
		$penghasilan_ayah			 = $this->input->post('penghasilan_ayah');
		$penghasilan_ibu			 = $this->input->post('penghasilan_ibu');
		$telp_ortu					 = $this->input->post('telp_ortu');
		$nama_wali					 = $this->input->post('nama_wali');
		$alamat_wali				 = $this->input->post('alamat_wali');
		$telp_wali					 = $this->input->post('telp_wali');
		$pekerjaan_wali				 = $this->input->post('pekerjaan_wali');
		$status_siswa				 = $this->input->post('status_siswa');
		$status 					 = $this->input->post('status');
	    $foto_lama = $this->input->post('foto');
		$userfile = @$_FILES['userfile'];
		if($userfile['name']!="")
	    {

		    //rename
		   	$nama_file_foto = str_replace(' ', '-', strtoupper($nama_lengkap));
			@unlink($this->gallery_path_siswa.'/'.$foto_lama);
			@unlink($this->gallery_path_siswa.'/thumbs/'.$foto_lama);
		   		
		   //upload images
			$userfile = @$_FILES['userfile'];
			$ext = pathinfo(@$userfile['name'], PATHINFO_EXTENSION);
				$file_name = $nama_file_foto.'-'.'SISFOKOL'.'.'.$ext;
			
			 $config = array(
							 'allowed_types'=>'jpg|jpeg|gif|png',
							 'upload_path' 	=> $this->gallery_path_siswa,
							 'file_name' 	=> $file_name,
							 'max_size' 	=> 5000
			 				);
			 
			$this->load->library('upload',$config);
				$this->upload->do_upload();
				$image_data = $this->upload->data();
			 
			$config = array(
							 'source_image'		=> $image_data['full_path'],
							 'new_image'		=>$this->gallery_path_siswa . '/'.$file_name,
							 'new_image'		=>$this->gallery_path_siswa . '/thumbs/'.$file_name,
							 'maintain_ration'	=>true,
							 'width'			=>210,
							 'master_dim' 		=> 'width',
							 'height'			=>210
							);
			 
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			//end upload images
			$data=array(

					 'nisn'						=>$nisn
					,'nis'						=>$nis
					,'nama_lengkap'				=>$nama_lengkap
					,'foto'						=>$file_name					
					,'tpt_lahir'				=>$tpt_lahir
					,'tgl_lahir'				=>$tgl_lahir
					,'jenis_kelamin'			=>$jenis_kelamin
					,'agama'					=>$agama
					,'alamat'					=>$alamat
					,'no_hp'					=>$no_hp
					,'kelas'					=>$kelas
					,'jurusan'					=>$jurusan
					,'eskul'					=>$eskul					
					,'semester'					=>$semester
					,'tgl_masuk'				=>$tgl_masuk
					,'status_dlm_keluarga'		=>$status_dlm_keluarga
					,'anak_ke'					=>$anak_ke
					,'jlh_saudara'				=>$jlh_saudara
					,'pendidikan_sebelumnya'	=>$pendidikan_sebelumnya
					,'nama_ayah'				=>$nama_ayah
					,'nama_ibu'					=>$nama_ibu
					,'alamat_ortu'				=>$alamat_ortu
					,'pekerjaan_ayah'			=>$pekerjaan_ayah
					,'pekerjaan_ibu'			=>$pekerjaan_ibu
					,'penghasilan_ayah'			=>$penghasilan_ayah
					,'penghasilan_ibu'			=>$penghasilan_ibu
					,'telp_ortu'				=>$telp_ortu
					,'nama_wali'				=>$nama_wali
					,'alamat_wali'				=>$alamat_wali
					,'telp_wali'				=>$telp_wali
					,'pekerjaan_wali'			=>$pekerjaan_wali
					,'status_siswa'				=>$status_siswa
					,'status'					=>$status
				);
		}else{
			$data=array(
					 'nisn'						=>$nisn
					,'nis'						=>$nis
					,'nama_lengkap'				=>$nama_lengkap
					// ,'foto'						=>$file_name					
					,'tpt_lahir'				=>$tpt_lahir
					,'tgl_lahir'				=>$tgl_lahir
					,'jenis_kelamin'			=>$jenis_kelamin
					,'agama'					=>$agama
					,'alamat'					=>$alamat
					,'no_hp'					=>$no_hp
					,'kelas'					=>$kelas
					,'jurusan'					=>$jurusan
					,'eskul'					=>$eskul										
					,'semester'					=>$semester
					,'tgl_masuk'				=>$tgl_masuk
					,'status_dlm_keluarga'		=>$status_dlm_keluarga
					,'anak_ke'					=>$anak_ke
					,'jlh_saudara'				=>$jlh_saudara
					,'pendidikan_sebelumnya'	=>$pendidikan_sebelumnya
					,'nama_ayah'				=>$nama_ayah
					,'nama_ibu'					=>$nama_ibu
					,'alamat_ortu'				=>$alamat_ortu
					,'pekerjaan_ayah'			=>$pekerjaan_ayah
					,'pekerjaan_ibu'			=>$pekerjaan_ibu
					,'penghasilan_ayah'			=>$penghasilan_ayah
					,'penghasilan_ibu'			=>$penghasilan_ibu
					,'telp_ortu'				=>$telp_ortu
					,'nama_wali'				=>$nama_wali
					,'alamat_wali'				=>$alamat_wali
					,'telp_wali'				=>$telp_wali
					,'pekerjaan_wali'			=>$pekerjaan_wali
					,'status_siswa'				=>$status_siswa
					,'status'					=>$status
				);
		}

		
		$param = array('id_siswa'=>$id_siswa);

		// echo "<pre>";
		// print_r($data);
		// die();

		$this->db->trans_begin();
		$this->db->update('app_siswa',$data,$param);
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
	BEGIN FUNCTION MODULE JURUSAN
	*/

	public function jurusan()
	{		
		$data['title'] 		= "DATA JURUSAN";
		$data['jurusan'] 	= $this->model_administrasi->get_data_jurusan();
		$data['content'] 	= "module/administrasi/jurusan";
		$this->load->view($this->template,$data);
	}

	function simpan_jurusan()
	{
		$jurusan = $this->input->post('jurusan');
		$keterangan = $this->input->post('keterangan');
		$deskripsi = $this->input->post('deskripsi');					
		$status = $this->input->post('status');

		$data=array(
				'jurusan'=>$jurusan	
				,'keterangan'=>$keterangan
				,'deskripsi'=>$deskripsi				
				,'status'=>$status
				
			);

		$this->db->trans_begin();
		$this->db->insert('app_jurusan',$data);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function hapus_jurusan()
	{
		$id=$this->input->post('id');
		$param=array('id_jurusan'=>$id);
		$this->db->trans_begin();
		$this->db->delete('app_jurusan',$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return=array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function get_data_jurusan_by_id()
	{
		$id=$this->input->post('id');
		$data=$this->model_administrasi->get_data_jurusan_by_id($id);
		echo json_encode($data);
	}

	function edit_jurusan()
	{
		$id_jurusan = $this->input->post('id_jurusan');
		$jurusan = $this->input->post('jurusan');		
		$keterangan = $this->input->post('keterangan');	
		$deskripsi = $this->input->post('deskripsi');				
		$status = $this->input->post('status');

		$data=array(
				 'jurusan'=>$jurusan
				,'keterangan'=>$keterangan
				,'deskripsi'=>$deskripsi				
				,'status'=>$status				
				
			);

		
		 $param = array('id_jurusan'=>$id_jurusan);

		$this->db->trans_begin();
		$this->db->update('app_jurusan',$data,$param);
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
	BEGIN END FUNCTION MODULE JURUSAN
	*/


	
	/*
	BEGIN FUNCTION MODULE PEKERJAAN ORANG TUA
	*/

	public function pekerjaan()
	{		
		$data['title'] 		= "DATA PEKERJAAN ORANG TUA SISWA";
		$data['pekerjaan'] 	= $this->model_administrasi->get_data_pekerjaan();
		$data['content'] 	= "module/administrasi/pekerjaan";
		$this->load->view($this->template,$data);
	}

	function simpan_pekerjaan()
	{
		$pekerjaan = $this->input->post('pekerjaan');
		$deskripsi = $this->input->post('deskripsi');					
		$status = $this->input->post('status');

		$data=array(
				'pekerjaan'=>$pekerjaan	
				,'deskripsi'=>$deskripsi				
				,'status'=>$status
				
			);

		$this->db->trans_begin();
		$this->db->insert('app_pekerjaan',$data);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}


	function hapus_pekerjaan()
	{
		$id=$this->input->post('id');
		$param=array('id_pekerjaan'=>$id);
		$this->db->trans_begin();
		$this->db->delete('app_pekerjaan',$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return=array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function get_data_pekerjaan_by_id()
	{
		$id=$this->input->post('id');
		$data=$this->model_administrasi->get_data_pekerjaan_by_id($id);
		echo json_encode($data);
	}

	function edit_pekerjaan()
	{
		$id_pekerjaan = $this->input->post('id_pekerjaan');
		$pekerjaan = $this->input->post('pekerjaan');		
		$deskripsi = $this->input->post('deskripsi');				
		$status = $this->input->post('status');

		$data=array(
				 'pekerjaan'=>$pekerjaan
				,'deskripsi'=>$deskripsi				
				,'status'=>$status				
				
			);

		
		 $param = array('id_pekerjaan'=>$id_pekerjaan);

		$this->db->trans_begin();
		$this->db->update('app_pekerjaan',$data,$param);
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
	BEGIN END FUNCTION MODULE PEKERJAAN ORANG TUA
	*/

	


	/*
	BEGIN FUNCTION MODULE EKSTRAKULIKULER
	*/

	public function ekstrakulikuler()
	{		
		$data['title'] 		= "DATA EKSTRAKULIKULER";
		$data['esktrakuler'] 	= $this->model_administrasi->get_data_ekstrakulikuler();
		$data['content'] 	= "module/administrasi/ekstrakulikuler";
		$this->load->view($this->template,$data);
	}

	function simpan_ekstrakulikuler()
	{
		$nama_eskul = $this->input->post('nama_eskul');
		$deskripsi = $this->input->post('deskripsi');		
		$hari_eskul = $this->input->post('hari_eskul');
		$waktu_mulai = $this->input->post('waktu_mulai');
		$waktu_selesai = $this->input->post('waktu_selesai');												
		$status = $this->input->post('status');

		$data=array(
				'nama_eskul'=>$nama_eskul	
				,'deskripsi'=>$deskripsi
				,'hari_eskul'=>$hari_eskul
				,'waktu_mulai'=>$waktu_mulai
				,'waktu_selesai'=>$waktu_selesai																																																																				
				,'status'=>$status
				
			);

		$this->db->trans_begin();
		$this->db->insert('app_eskul',$data);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function hapus_ekstrakulikuler()
	{
		$id=$this->input->post('id');
		$param=array('id_eskul'=>$id);
		$this->db->trans_begin();
		$this->db->delete('app_eskul',$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return=array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function get_data_ekstrakulikuler_by_id()
	{
		$id=$this->input->post('id');
		$data=$this->model_administrasi->get_data_ekstrakulikuler_by_id($id);
		echo json_encode($data);
	}

	function edit_ekstrakulikuler()
	{
		$id_eskul = $this->input->post('id_eskul');
		$nama_eskul = $this->input->post('nama_eskul');		
		$deskripsi = $this->input->post('deskripsi');
		$hari_eskul = $this->input->post('hari_eskul');	
		$waktu_mulai = $this->input->post('waktu_mulai');
		$waktu_selesai = $this->input->post('waktu_selesai');																
		$status = $this->input->post('status');

		$data=array(
				 'nama_eskul'=>$nama_eskul
				,'deskripsi'=>$deskripsi
				,'hari_eskul'=>$hari_eskul
				,'waktu_mulai'=>$waktu_mulai
				,'waktu_selesai'=>$waktu_selesai								
				,'status'=>$status				
				
			);

		
		 $param = array('id_eskul'=>$id_eskul);

		$this->db->trans_begin();
		$this->db->update('app_eskul',$data,$param);
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
	BEGIN END FUNCTION MODULE EKSTRAKULIKULER
	*/

	public function kelas()
	{		
		$data['title'] 		= "DATA KELAS";
		$data['kelas'] 		= $this->model_administrasi->get_data_kelas();
		$data['jurusan'] 	= $this->model_administrasi->get_data_jurusan();
		$data['content'] 	= "module/administrasi/kelas";
		$this->load->view($this->template,$data);
	}
	
	function simpan_kelas()
	{
		$kelas = $this->input->post('kelas');
		$id_jurusan = $this->input->post('id_jurusan');		
		$status = $this->input->post('status');
		$data=array(
				'kelas'=>$kelas	
				,'id_jurusan'=>$id_jurusan
				,'status'=>$status
				
			);

		$this->db->trans_begin();
		$this->db->insert('app_kelas',$data);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function hapus_kelas()
	{
		$id=$this->input->post('id');
		$param=array('id_kelas'=>$id);
		$this->db->trans_begin();
		$this->db->delete('app_kelas',$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return=array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}

	function get_data_kelas_by_id()
	{
		$id=$this->input->post('id');
		$data=$this->model_administrasi->get_data_kelas_by_id($id);
		echo json_encode($data);
	}

	function edit_kelas()
	{
		$id_kelas = $this->input->post('id_kelas');
		$kelas = $this->input->post('kelas');
		$id_jurusan = $this->input->post('id_jurusan');		
		$status = $this->input->post('status');

		$data=array(
				'kelas'=>$kelas
				,'id_jurusan'=>$id_jurusan
				,'status'=>$status				
				
			);

		// if ( $password != "" )
		// 	$data['password'] = sha1($password);
		// 	$data['re_password'] = $password;
		
		$param = array('id_kelas'=>$id_kelas);

		$this->db->trans_begin();
		$this->db->update('app_kelas',$data,$param);
		if($this->db->trans_status()===true){
			$this->db->trans_commit();
			$return = array('success'=>true);
		}else{
			$this->db->trans_rollback();
			$return = array('success'=>false);
		}
		echo json_encode($return);
	}


	

}
