<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link href="<?php echo base_url();?>assets/css/fs-opensans.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/tasks.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="<?php echo base_url();?>assets/layout3/css/custom.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link href="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/plugins/datepicker/css/datepicker.css" rel="stylesheet">

<script src="<?php echo base_url();?>assets/plugins/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	var base_url = '<?php echo base_url();?>';
	var site_url = '<?php echo site_url();?>';
</script>
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div class="page-header">
	<div class="page-header-top">
		<div class="container">
			<div class="page-logo">
				<img src="<?php echo base_url();?>assets/img/logo/logo-admin.png" style="height:50px;margin-top:10px;" alt="logo" class="logo-default"/>
			</div>
			<a href="javascript:;" class="menu-toggler"></a>
			<div class="top-menu">
				<i class="fa fa-fw fa-user"></i>Hi <?php echo $this->session->userdata('nama_lengkap');?> | <a href="<?php echo site_url('sistem/profil');?>"> <i class="fa fa-fw fa-gear"></i>Profile Setup </a> | <a href="<?php echo site_url('logout');?>"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
			</div>
		</div>
	</div>
	<div class="page-header-menu">
		<div class="container">
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?php echo site_url('dashboard');?>">Dashboard</a>
					</li>


					<!-- 
					[BEGIN MENU LEVEL ADMINISTRATOR]
					 -->
					<?php if($this->session->userdata('level')=='1'){?>
					<li class="menu-dropdown mega-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Administrasi &amp; Keuangan <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 710px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-4">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Data Master</h3>
												</li>												
												<li>
													<a href="<?php echo site_url('administrasi/siswa');?>" class="iconify">
													<i class="icon-briefcase"></i>
													Data Siswa </a>
												</li>
												<li>
													<a href="<?php echo site_url('administrasi/kelas');?>" class="iconify">
													<i class="icon-briefcase"></i>
													Data Kelas </a>
												</li>
												<li>
													<a href="<?php echo site_url('administrasi/jurusan');?>" class="iconify">
													<i class="icon-briefcase"></i>
													Data Jurusan </a>
												</li>
												<li>
													<a href="<?php echo site_url('administrasi/pekerjaan');?>" class="iconify">
													<i class="icon-briefcase"></i>
													Data Pekerjaan Orang Tua Siswa </a>
												</li>												
											</ul>
										</div>																														
									</div>
								</div>
							</li>
						</ul>
					</li>
					
					
					
					
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
							Sistem <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">							
							<li>
								<a href="<?php echo site_url('sistem/pengguna');?>">
									<i class="icon-settings"></i>
									Data Pengguna
								</a>
							</li>
						</ul>
					</li>
					<?php } ?>
					<!-- 
					[END LEVEL ADMINISTRATOR]
					 -->
					

				</ul>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view($content);?>
<div class="page-footer">
	<div class="container">
		 2015 &copy; MODUL PROGRAMMING
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<script src="<?php echo base_url();?>assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/tasks.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/plugins/table-managed.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.form.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.livequery.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/plug.js"></script>
<script src="<?php echo base_url('assets/plugins/tinymce/js/tinymce/tinymce.min.js');?>"></script>
<script>
jQuery(document).ready(function() {    
   Metronic.init();
   Layout.init();
   Demo.init();
   // Tasks.initDashboardWidget();
   // TableManaged.init();
});
tinymce.init({
        selector: ".konten",
relative_urls:false,
plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime table contextmenu paste moxiemanager"
],
min_height: 160,
height : 180,
autosave_ask_before_unload: true,
toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
$(document).ready(function() {
    $('#dataTables-example').dataTable();
});
</script>
</body>
</html>