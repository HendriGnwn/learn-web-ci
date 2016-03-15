<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title">
				<h1>Data Ekstrakulikuler <small>manajemen data Ekstrakulikuler</small></h1>
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
					<a href="#">Aministrasi</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Data Ekstrakulikuler
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
												<span class="caption-subject font-green-sharp bold uppercase">Data Ekstrakulikuler</span>
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
															 Nama Eskul
														</th>
														<th style="text-align:center !important;">
															 Deskripsi
														</th>
														<th style="text-align:center !important;">
															 Hari Eskul
														</th>
														<th style="text-align:center !important;">
															 Waktu Mulai
														</th>
														<th style="text-align:center !important;">
															 Waktu Selesai
														</th>
														<th style="text-align:center !important;">
															 Status
														</th>														
														<th style="text-align:center !important;">
															 Edit | Delete
														</th>
													</tr>
												</thead>
												<tbody>
												<?php 
													$no=1;
													foreach($esktrakuler as $data):
												?>
													<tr class="odd gradeX">
														<td align="center">
															<?php echo $no++;?>
														</td>														
														<td>
															<?php echo $data['nama_eskul'];?>
														</td>
														<td>
															<?php echo $data['deskripsi'];?>
														</td>
														<td>
															<?php echo $data['hari_eskul'];?>
														</td>
														<td>
															<?php echo $data['waktu_mulai'];?> WIB
														</td>
														<td>
															<?php echo $data['waktu_selesai'];?> WIB
														</td>
														<td style="text-align:center !important;">
															<span class="label label-sm label-success">
																<?php 
																	if($data['status']=='1'){
																		echo "Aktif";
																	}else if($data['status']=='0'){
																		echo "Tidak Aktif";
																	}
																?>
															</span>
														</td>													
														<td style="text-align:center !important;">
															<a href="javascript:;" id="btn-edit" title="Edit" id_edit="<?php echo $data['id_eskul'];?>" class="label label-sm label-primary">
																<i class="fa fa-edit"></i> Edit 
															</a>&nbsp;
															<a href="javascript:;" id="btn-delete" title="Delete" id_delete="<?php echo $data['id_eskul'];?>" class="label label-sm label-danger">
																<i class="fa fa-remove"></i> Delete 
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
	    									<form action="<?php echo site_url('administrasi/simpan_ekstrakulikuler'); ?>" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-add">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Nama Ekstrakulikuler</label>
														<div class="col-md-5">
															<input type="text" placeholder="Nama Ekstrakulikuler" name="nama_eskul" id="nama_eskul" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Deskripsi</label>
														<div class="col-md-5">
															<textarea class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Hari Ekstrakulikuler</label>
														<div class="col-md-5">
															<input type="text" placeholder="Hari Ekstrakulikuler" name="hari_eskul" id="hari_eskul" class="form-control">
														</div>
													</div>	
													<div class="form-group">
														<label class="col-md-2 control-label">Waktu Mulai</label>
														<div class="col-md-5">
															<input type="text" placeholder="Waktu Mulai" name="waktu_mulai" id="waktu_mulai" class="form-control">
														</div>
													</div>	
													<div class="form-group">
														<label class="col-md-2 control-label">Waktu Selesai</label>
														<div class="col-md-5">
															<input type="text" placeholder="Waktu Selesai" name="waktu_selesai" id="waktu_selesai" class="form-control">
														</div>
													</div>																							
													<div class="form-group">
														<label class="col-md-2 control-label">Status</label>
														<div class="col-md-5">
															<select class="form-control" name="status" id="status">
																<option value="">Pilih</option>
																<option value="1">Aktif</option>
																<option value="0">Tidak Aktif</option>
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
	    									<form action="<?php echo site_url('administrasi/edit_ekstrakulikuler'); ?>" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-edit">
												<input type="hidden" name="id_eskul" id="id_eskul">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Nama Ekstrakulikuler</label>
														<div class="col-md-5">
															<input type="text" placeholder="Nama Ekstrakulikuler" name="nama_eskul" id="nama_eskul" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Deskripsi</label>
														<div class="col-md-5">
															<textarea class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Hari Ekstrakulikuler</label>
														<div class="col-md-5">
															<input type="text" placeholder="Hari Ekstrakulikuler" name="hari_eskul" id="hari_eskul" class="form-control">
														</div>
													</div>	
													<div class="form-group">
														<label class="col-md-2 control-label">Waktu Mulai</label>
														<div class="col-md-5">
															<input type="text" placeholder="Waktu Mulai" name="waktu_mulai" id="waktu_mulai" class="form-control">
														</div>
													</div>	
													<div class="form-group">
														<label class="col-md-2 control-label">Waktu Selesai</label>
														<div class="col-md-5">
															<input type="text" placeholder="Waktu Selesai" name="waktu_selesai" id="waktu_selesai" class="form-control">
														</div>
													</div>	
													<div class="form-group">
														<label class="col-md-2 control-label">Status</label>
														<div class="col-md-5">
															<select class="form-control" name="status" id="status">
																<option value="">Pilih</option>
																<option value="1">Aktif</option>
																<option value="0">Tidak Aktif</option>
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


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src='<?php echo base_url();?>assets/js/page/js_ekstrakulikuler.js'></script>