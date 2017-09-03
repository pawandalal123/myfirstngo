<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset='utf-8' />
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>css/blue.css">
	<link href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>style.css" rel="stylesheet" type="text/css" />
</head>

<body style=" background:#ccc;">
	<div id="login">
		<h5>LOGIN</h5>
		<?php if($this->session->flashdata('flsh_msg')) {
			?><p class="error"><?php echo $this->session->flashdata('flsh_msg'); ?></p><?php
		} ?>
		<form action="<?php echo SITE_URL; ?>administrator/login" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
			<div class="box1">
				<label>User Name</label>
				<input  type="text" name="login_id" class="log" required />
			</div>
			<div class="box1">
				<label>Password</label>
				<input type="password" name="login_password" class="log"required />
			</div>
			<a href="#" id="forgot">Forgot Password</a>
			<input  type="submit" value="Submit" class="submit"/>
		</form>
	</div>
</body>
</html>
