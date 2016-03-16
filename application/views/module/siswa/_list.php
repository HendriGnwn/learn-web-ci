<div id="read">
	<div class="page-header">
		<h1>
			Data Siswa
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
								<div class="portlet-title">
									<div class="actions btn-set">
										<a href="javascript:;" id="btn-tambah" class="btn green-haze btn-circle"><i class="fa fa-plus"></i> Tambah</a>
									</div>
									<br/>
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
				</div>
			</div>
		</div>
	</div>
</div>