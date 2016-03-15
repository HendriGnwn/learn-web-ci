<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php echo $title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="<?php echo base_url();?>assets/css/fs-opensans.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/login2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="login">
<div class="menu-toggler sidebar-toggler">
</div>
<div class="logo">
	<a href="index.html">
	<img src="<?php echo base_url();?>assets/img/logo/logo.png" style="height:140px;" alt=""/>
	</a>
</div>
<div class="content">
	<form class="login-form" id="form-login" method="post" action="<?php echo site_url('login/authentication');?>">
		<div class="form-title">
			<span class="form-title">Login Administrator</span>
		</div>
		<?php if ($this->session->flashdata('login_message')==true) { ?>
		<div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
			<span><i class="fa fa-warning"></i> <?php echo $this->session->flashdata('login_message') ?> </span>
		</div>
		<?php } ?>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" autofocus placeholder="Username" name="username" id="username" />
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" />
		</div>
		<div class="form-actions">
            <a href="javascript:;" id="btn-login" class="btn btn-primary btn-block uppercase"><i class="fa fa-sign-in"></i> Login</a>
		</div>
	</form>
</div>
<div class="copyright">
	 2015 © MODUL PROGRAMMING
</div>
<script src="<?php echo base_url();?>assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layout/scripts/demo.js" type="text/javascript"></script>
<script src='<?php echo base_url();?>assets/js/page/js_login.js'></script>
<script>
jQuery(document).ready(function() {     
	Metronic.init();
	Layout.init();
});
</script>
</body>
</html>