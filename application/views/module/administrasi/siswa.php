<style type="text/css">
#view_table td{
	padding: 5px;
}
.title-view{
	width: 200px;
}
.konten-view{
	width: 200px;
}
.colum1{
	width:70%;
}
.colum2{
	width: 30%;
}
</style>
<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title">
				<h1>Data siswa <small>manajemen data siswa</small></h1>
			</div>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Administrasi & Keuangan</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Data Siswa
				</li>
			</ul>
			<div class="row margin-top-10">
				<div class="col-md-12 col-sm-12">
					<div class="portlet light ">
						<div class="portlet-body">

							<!-- 
							[BEGIN VIEW DATA]
							 -->
							<div class="row list-separated" id="read">
								<div class="col-md-12 col-sm-12">
									<div class="portlet light">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs font-green-sharp"></i>
												<span class="caption-subject font-green-sharp bold uppercase">Data Siswa</span>
											</div>
											<div class="actions btn-set">
												<a href="javascript:;" id="btn-tambah" class="btn green-haze btn-circle"><i class="fa fa-plus"></i> Tambah</a>
											</div>
										</div>
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th style="text-align:center !important;">
															 No
														</th>
														<th style="text-align:center !important;">
															 NIS
														</th>
														<th style="text-align:center !important;">
															 Nama Lengkap
														</th>
														<th style="text-align:center !important;">
															 Kelas
														</th>														
														<th style="text-align:center !important;">
															 Jurusan
														</th>
														<th style="text-align:center !important;">
															 Semester
														</th>
														<th style="text-align:center !important;">
															 No. Hp
														</th>
														<th style="text-align:center !important;">
															 Status Siswa
														</th>
														<th style="text-align:center !important;">
															 Edit | Delete | Lihat
														</th>
													</tr>
												</thead>
												<tbody>
												<?php 
													$no=1;
													foreach($siswa as $data):
												?>
													<tr class="odd gradeX">
														<td align="center">
															<?php echo $no++;?>
														</td>
														<td>
															<?php echo $data['nis'];?>
														</td>
														<td>
															<?php echo $data['nama_lengkap'];?>
														</td>
														<td>
															<?php echo $data['kelas'];?>
														</td>														
														<td>
															<?php echo $data['jurusan'];?>
														</td>
														<td>
															<?php echo $data['semester'];?>
														</td>
														<td>
															<?php echo $data['no_hp'];?>
														</td>
														<td style="text-align:center !important;">
															<span class="label label-sm label-success">
																<?php 
																	if($data['status_siswa']=='1'){
																		echo "Mendaftar";
																	}else if($data['status_siswa']=='2'){
																		echo "Aktif";
																	}else if($data['status_siswa']=='3'){
																		echo "Alumni";
																	}
																?>
															</span>
														</td>
														<td style="text-align:center !important;">
															<a href="javascript:;" id="btn-edit" title="Edit" id_edit="<?php echo $data['id_siswa'];?>" class="label label-sm label-primary">
																<i class="fa fa-edit"></i> Edit 
															</a>&nbsp;
															<a href="javascript:;" id="btn-delete" title="Delete" id_delete="<?php echo $data['id_siswa'];?>" foto="<?php echo $data['foto'];?>" class="label label-sm label-danger">
																<i class="fa fa-remove"></i> Delete 
															</a>&nbsp;
															<a href="javascript:;" id="btn-view" title="View" id_siswa="<?php echo $data['id_siswa'];?>" class="label label-sm label-success">
																<i class="fa fa-check"></i> View 
															</a>
														</td>
													</tr>
												<?php endforeach?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- 
							[END VIEW DATA]
							 -->

							<!-- 
							[BEGIN TAMBAH DATA]
							 -->
							<div class="row list-separated" id="add" style="display:none;">
								<div class="col-md-12 col-sm-12">
									<div class="portlet light">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs font-green-sharp"></i>
												<span class="caption-subject font-green-sharp bold uppercase">Tambah Data</span>
											</div>
										</div>
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
								                      <label for="exampleInputFile">Pilih Photo Siswa</label>
								                      <input type="file" id="userfile" name="userfile">
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
							<!-- 
							[END TAMBAH DATA]
							 -->

							<!-- 
							[BEGIN EDIT DATA]
							 -->
							<div class="row list-separated" id="edit" style="display:none;">
								<div class="col-md-12 col-sm-12">
									<div class="portlet light">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs font-green-sharp"></i>
												<span class="caption-subject font-green-sharp bold uppercase">Edit Data</span>
											</div>
										</div>
										<div class="portlet-body form">
	    									<form action="<?php echo site_url('administrasi/edit_siswa'); ?>" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-edit">
												<input type="hidden" name="id_siswa" id="id_siswa">
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
								                      <label for="exampleInputFile">Pilih Photo Siswa</label>
								                      <input type="file" id="userfile" name="userfile">
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
							<!-- 
							[END EDIT DATA]
							 -->

							<!-- 
							[BEGIN VIEW DATA]
							 -->
							<div class="row list-separated" id="view" style="display:none;">
								<div class="col-md-12 col-sm-12">
									<div class="portlet light">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs font-green-sharp"></i>
												<span class="caption-subject font-green-sharp bold uppercase">View Data</span>
											</div>
										</div>
										<div class="portlet-body form">
										<table>
											<tr>
												<td valign="top" class="colum1">
													<table cellpadding="5" id="view_table">
														<tr>
															<td class="title-view"><b>NISN</b></td>
															<td class="konten-view"><div id="v_nisn"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>NIS</b></td>
															<td class="konten-view"><div id="v_nis"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Nama Lengkap</b></td>
															<td class="konten-view"><div id="v_nama_lengkap"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Tempat Lahir</b></td>
															<td class="konten-view"><div id="v_tmp_lahir"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Tanggal Lahir</b></td>
															<td class="konten-view"><div id="v_tgl_lahir"></div></td>
														</tr>														
														<tr>
															<td class="title-view"><b>Jenis Kelamin</b></td>
															<td class="konten-view"><div id="v_jenis_kelamin"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Agama</b></td>
															<td class="konten-view"><div id="v_agama"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Alamat</b></td>
															<td class="konten-view"><div id="v_alamat"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>No.Hp</b></td>
															<td class="konten-view"><div id="v_nohp"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Kelas</b></td>
															<td class="konten-view"><div id="v_kelas"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Jurusan</b></td>
															<td class="konten-view"><div id="v_jurusan"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Ekstrakulikuler</b></td>
															<td class="konten-view"><div id="v_eskul"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Semester</b></td>
															<td class="konten-view"><div id="v_semester"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Tanggal Masuk</b></td>
															<td class="konten-view"><div id="v_tgl_masuk"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Status dalam keluarga</b></td>
															<td class="konten-view"><div id="v_status_dlm_keluarga"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Anak Ke</b></td>
															<td class="konten-view"><div id="v_anak-ke"></div></td>															
														</tr>
														<tr>
															<td class="title-view"><b>Jumlah Saudara</b></td>
															<td class="konten-view"><div id="v_jlh_saudara"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Pendidikan Sebelumnya</b></td>
															<td class="konten-view"><div id="v_pendidikan_sebelumnya"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Nama Ayah</b></td>
															<td class="konten-view"><div id="v_nama_ayah"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Nama Ibu</b></td>
															<td class="konten-view"><div id="v_nama_ibu"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Alamat Orang Tua</b></td>
															<td class="konten-view"><div id="v_alamat_ortu"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Pekerjaan Ayah </b></td>
															<td class="konten-view"><div id="v_pekerjaan_ayah"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Pekerjaan Ibu </b></td>
															<td class="konten-view"><div id="v_pekerjaan_ibu"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Penghasilan Ayah </b></td>
															<td class="konten-view"><div id="v_penghasilan_ayah"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Penghasilan Ibu </b></td>
															<td class="konten-view"><div id="v_penghasilan_ibu"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Telp/Hp Orang Tua</b></td>
															<td class="konten-view"><div id="v_telp_ortu"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Nama Wali </b></td>
															<td class="konten-view"><div id="v_nama_wali"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Alamat Wali </b></td>
															<td class="konten-view"><div id="v_alamat_wali"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Telp/Hp Wali </b></td>
															<td class="konten-view"><div id="v_telp_wali"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Pekerjaan Wali </b></td>
															<td class="konten-view"><div id="v_pekerjaan_wali"></div></td>
														</tr>
														<tr>
															<td class="title-view"><b>Status Siswa </b></td>
															<td class="konten-view"><div id="v_status_siswa"></div></td>
														</tr>
													</table>
												</td>
												<td valign="top"class="colum2">
													<div id="v_foto"></div>
												</td>
											</tr>
										</table>
										</div>
									</div>
								</div>
							</div>


							<!-- 
							[END VIEW DATA]
							 -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src='<?php echo base_url();?>assets/js/page/js_siswa.js'></script>