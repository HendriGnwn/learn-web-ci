<div class="page-container">
	<div class="page-head">
		<div class="container">
			<div class="page-title">
				<h1>Data Jurusan <small>manajemen data Jurusan</small></h1>
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
					<a href="#">Administrasi</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Data Jurusan
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
												<span class="caption-subject font-green-sharp bold uppercase">Data Jurusan</span>
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
															 Jurusan
														</th>
														<th style="text-align:center !important;">
															 Keterangan
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
													foreach($jurusan as $data):
												?>
													<tr class="odd gradeX">
														<td align="center">
															<?php echo $no++;?>
														</td>														
														<td>
															<?php echo $data['jurusan'];?>
														</td>
														<td>
															<?php echo $data['keterangan'];?>
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
															<a href="javascript:;" id="btn-edit" title="Edit" id_edit="<?php echo $data['id_jurusan'];?>" class="label label-sm label-primary">
																<i class="fa fa-edit"></i> Edit 
															</a>&nbsp;
															<a href="javascript:;" id="btn-delete" title="Delete" id_delete="<?php echo $data['id_jurusan'];?>" class="label label-sm label-danger">
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
	    									<form action="<?php echo site_url('administrasi/simpan_jurusan'); ?>" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-add">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Jurusan</label>
														<div class="col-md-5">
															<input type="text" placeholder="Jurusan" name="jurusan" id="jurusan" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Keterangan</label>
														<div class="col-md-5">
															<input type="text" placeholder="Keterangan" name="keterangan" id="keterangan" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Deskripsi</label>
														<div class="col-md-5">
															<input type="text" placeholder="Deskripsi" name="deskripsi" id="deskripsi" class="form-control">
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
	    									<form action="<?php echo site_url('administrasi/edit_jurusan'); ?>" role="form" class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-edit">
												<input type="hidden" name="id_jurusan" id="id_jurusan">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Jurusan</label>
														<div class="col-md-5">
															<input type="text" placeholder="Jurusan" name="jurusan" id="jurusan" class="form-control">
														</div>
													</div>													
													<div class="form-group">
														<label class="col-md-2 control-label">Keterangan</label>
														<div class="col-md-5">
															<input type="text" placeholder="Keterangan" name="keterangan" id="keterangan" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Deskripsi</label>
														<div class="col-md-5">
															<input type="text" placeholder="Deskripsi" name="deskripsi" id="deskripsi" class="form-control">
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
<script src='<?php echo base_url();?>assets/js/page/js_jurusan.js'></script>