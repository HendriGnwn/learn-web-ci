<div id="add" style="display:none;">
	<div class="page-header">
		
		<h1>
			<a href="javascript:;" class="btn btn-sm default" id="btn-back"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>
			Tambah Siswa
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				overview &amp; stats
			</small>
		</h1>
	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="portlet light ">
				<div class="portlet-body">
					<div class="row list-separated">
						<div class="col-md-12 col-sm-12">
							<div class="portlet light">
								<div class="portlet-body form">
									<form action="<?php echo site_url('administrasi/simpansiswa'); ?>" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-add">
										<div class="form-body">
											<div class="form-group">
												<label class="col-md-2 control-label">NISN</label>
												<div class="col-md-5">
													<input type="text" placeholder="NISN" name="nisn" id="nisn" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
												</div>
											</div>	
											<div class="form-group">
												<label class="col-md-2 control-label">NIS</label>
												<div class="col-md-5">
													<input type="text" placeholder="NIS" name="nis" id="nis" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
												</div>
											</div>					
											<div class="form-group">
												<label class="col-md-2 control-label">Nama Lengkap</label>
												<div class="col-md-5">
													<input type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" class="form-control">
												</div>
											</div>
											<div class="form-group">
											  <label class="col-md-2 control-label" for="exampleInputFile">Pilih Photo Siswa</label>
											  <div class="col-md-5">
												<input type="file" id="userfile" name="userfile">
											  </div>
											  <!-- <p class="help-block">Example block-level help text here.</p> -->
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Tempat Lahir</label>
												<div class="col-md-5">
													<input type="text" placeholder="Tempat Lahir" name="tpt_lahir" id="tpt_lahir" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Tanggal Lahir</label>
												<div class="col-md-5">
													<input type="text" placeholder="DD/MM/YYYY" name="tgl_lahir" id="tgl_lahir" class="form-control datepicker maskdate">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Jenis Kelamin</label>
												<div class="col-md-5">
													<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
														<option value="">Pilih</option>
														<option value="1">Laki - Laki</option>
														<option value="2">Perempuan</option>
														<option value="3">Lainnya</option>																
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Agama</label>
												<div class="col-md-5">
													<select class="form-control" name="agama" id="agama">
														<option value="">Pilih</option>                       											
														<?php foreach ($agama as $data):?>
														<option value="<?php echo $data['id_agama']; ?>"><?php echo $data['agama']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Alamat</label>
												<div class="col-md-5">
													<textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">No. Hp</label>
												<div class="col-md-5">
													<input type="text" placeholder="No. Hp" name="no_hp" id="no_hp" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Kelas</label>
												<div class="col-md-5">
													<select class="form-control" name="kelas" id="kelas">
														<option value="">Pilih</option>                       											
														<?php foreach ($kelas as $data):?>
														<option value="<?php echo $data['id_kelas']; ?>"><?php echo $data['kelas']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Jurusan</label>
												<div class="col-md-5">
													<select class="form-control" name="jurusan" id="jurusan">
														<option value="">Pilih</option>                       											
														<?php foreach ($jurusan as $data):?>
														<option value="<?php echo $data['id_jurusan']; ?>"><?php echo $data['jurusan']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Ekstrakulikuler </label>
												<div class="col-md-5">
													<select class="form-control" name="eskul" id="eskul">
														<option value="">Pilih</option>                       											
														<?php foreach ($eskul as $data):?>
														<option value="<?php echo $data['id_eskul']; ?>"><?php echo $data['nama_eskul']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Semester</label>
												<div class="col-md-5">
													<input type="text" placeholder="Semester" name="semester" id="semester" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Tanggal Masuk</label>
												<div class="col-md-5">
													<input type="text" placeholder="DD/MM/YYYY" name="tgl_masuk" id="tgl_masuk" class="form-control datepicker maskdate">
												</div>
											</div>	
											<div class="form-group">
												<label class="col-md-2 control-label">Status dalam keluarga</label>
												<div class="col-md-5">
													<input type="text" placeholder="Status dalam keluarga" name="status_dlm_keluarga" id="status_dlm_keluarga" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Anak-ke</label>
												<div class="col-md-5">
													<input type="text" placeholder="Anak-ke" name="anak_ke" id="anak_ke" class="form-control" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Jumlah Saudara</label>
												<div class="col-md-5">
													<input type="text" placeholder="Jumlah Saudara" name="jlh_saudara" id="jlh_saudara" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Pendidikan Sebelumnya</label>
												<div class="col-md-5">
													<input type="text" placeholder="Pendidikan Sebelumnya" name="pendidikan_sebelumnya" id="pendidikan_sebelumnya" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Nama Ayah</label>
												<div class="col-md-5">
													<input type="text" placeholder="Nama Ayah" name="nama_ayah" id="nama_ayah" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Nama Ibu</label>
												<div class="col-md-5">
													<input type="text" placeholder="Nama Ibu" name="nama_ibu" id="nama_ibu" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Alamat Orang Tua</label>
												<div class="col-md-5">
													<textarea class="form-control" name="alamat_ortu" id="alamat_ortu" placeholder="Alamat Orang Tua"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Pekerjaan Ayah</label>
												<div class="col-md-5">
													<select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
														<option value="">Pilih</option>                       											
														<?php foreach ($pekerjaan as $data):?>
														<option value="<?php echo $data['id_pekerjaan']; ?>"><?php echo $data['pekerjaan']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Pekerjaan Ibu</label>
												<div class="col-md-5">
													<select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
														<option value="">Pilih</option>                       											
														<?php foreach ($pekerjaan as $data):?>
														<option value="<?php echo $data['id_pekerjaan']; ?>"><?php echo $data['pekerjaan']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Penghasilah Ayah</label>
												<div class="col-md-5">
													<input type="text" placeholder="Penghasilah Ayah" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Penghasilah Ibu</label>
												<div class="col-md-5">
													<input type="text" placeholder="Penghasilah Ibu" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Telp/Hp. Orang Tua</label>
												<div class="col-md-5">
													<input type="text" placeholder="Telp/Hp. Orang Tua" name="telp_ortu" id="telp_ortu" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Nama Wali</label>
												<div class="col-md-5">
													<input type="text" placeholder="Nama Wali" name="nama_wali" id="nama_wali" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Alamat Wali</label>
												<div class="col-md-5">
													<textarea class="form-control" name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Telp/Hp. Wali</label>
												<div class="col-md-5">
													<input type="text" placeholder="Telp/Hp. Wali" name="telp_wali" id="telp_wali" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Pekerjaan Wali</label>
												<div class="col-md-5">
													<select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
														<option value="">Pilih</option>                       											
														<?php foreach ($pekerjaan as $data):?>
														<option value="<?php echo $data['id_pekerjaan']; ?>"><?php echo $data['pekerjaan']; ?></option>	
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Status Siswa</label>
												<div class="col-md-5">
													<select class="form-control" name="status_siswa" id="status_siswa">
														<option value="">Pilih</option>
														<option value="1">Mendaftar</option>
														<option value="2">Aktif</option>
														<option value="3">Alumni</option>

														<!-- <option value="3">Duda</option>
														<option value="3">Janda</option> -->																
													</select>
												</div>
											</div>																									                    
											<div class="form-group">
												<label class="col-md-2 control-label">Status</label>
												<div class="col-md-5">
													<select class="form-control" name="status" id="status">
														<option value="">Pilih</option>
														<option value="1">Aktif</option>
														<option value="0">Tidak Aktif</option>
														<!-- <option value="3">Guru</option> -->
													</select>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-2 col-md-10">
													<button class="btn green" id="btn-simpan" type="submit">Simpan</button>
													<button class="btn default" id="btn-batal" type="button">Batal</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>