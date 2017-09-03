<?php $pageno = 8; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Impakthub Admin Pannel</title>
	<?php include('template/head.php'); ?>
	<script src="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>ckeditor/ckeditor.js" type="text/javascript"></script>	
</head>
<body>
<div id="header">
	<?php include('template/header.php'); ?>
</div>
<div class="grid_16" id="navheader">
	<div id="menu">
		<?php include('template/topnav.php'); ?>
	</div>
</div>
<div class="grid_16" id="tabs">
	<div class="container">
		<ul>
			<li><a href=""  class="current"><span>Static Pages</span></a></li>
		</ul>
	</div>
</div>
<div class="container_16" id="wrapper">	
    <div class="grid_16" id="content"> 
		<div class="grid_9">
			<h1 class="website1">Edit page</h1>
		</div>
		<div class="grid_15" id="textcontent">
			<div id="table">
				<div id="user_profile_main_div">
					<div id="message">
					<?php 
					if($this->session->flashdata('flsh_msg')) {
						?><p id="success" class="info"><span class="info_inner"><?php echo $this->session->flashdata('flsh_msg'); ?></span></p> <?php
					} 
					if($this->session->flashdata('flsh_msg1')) {
						?><p id="error" class="info"><span class="info_inner"><?php echo $this->session->flashdata('flsh_msg1'); ?></span></p> <?php
					} 
					?>
					</div>
					<div class="clear"></div>
					<form action="<?php echo WEBROOT_PATH_ADMIN_PATH; ?>pages_process" method="post" enctype="multipart/form-data" name="frmUsers" id="frmTransaction" onsubmit="return validation(this)">
						<fieldset class="topleft">
							<legend class="legend">SEO Details</legend>
							<div  class="change_pwd_container_user_list">
								<label style="float: left;">Title<span style="color:red;" required>*</span></label>
								<input type="hidden" class="smallInput medium" value="<?php echo $query['id']; ?>" name="id">
								<input type="text" class="smallInput medium" value="<?php echo $query['page_title']; ?>" name="page_title" required>
							</div>
							<div  class="change_pwd_container_user_list">
								<label style="float: left;">Keyword<span style="color:red;">*</span></label>
								<input type="text" class="smallInput medium" value="<?php echo $query['meta_keyword']; ?>" name="meta_keyword" required>
							</div>
							<div  class="change_pwd_container_user_list" style="width: 1096px;" >
								<label style="float: left;">Discerption<span style="color:red;">*</span></label>
								<input type="text" class="smallInput medium" value="<?php echo $query['meta_discerption']; ?>" name="meta_discerption" style="width: 913px;" required>
							</div>
						</fieldset>
						
						<fieldset class="topleft">
							<legend class="legend">Page Description:</legend>
							<div  class="change_pwd_container_user_list" style="width: 1096px;" >
								<label style="float: left;">Heading<span style="color:red;">*</span></label>
								<input type="text" class="smallInput medium" value="<?php echo $query['Page_heading']; ?>" name="Page_heading" style="width: 913px;" required>
							</div>
							<div class="clear"></div>
							<div class="change_pwd_container_address" style="height:auto;">
								<label>Description<span style="color:red;">*</span></label>
								<div class="clear"></div>
								<textarea name="discerption" class="ckeditor" required ><?php echo $query['discerption']; ?></textarea>
							</div>
						</fieldset>
						<div class="clear"></div>
						<div style="width:100%;float:left;">
							<span class="button" style="float: left;"><input type="submit" class="buttoncc" value="Update" name="BtnEditPages"></span>
							<a href="<?php echo WEBROOT_PATH_ADMIN_PATH; ?>pages" class="button" style=";margin-left: 5px;float: left;"><span>Back</span></a>
							<p style="float:right;"><font color="Red">Fields marked with * are mandatory&nbsp;</font></p>
						</div>
						
					</form>	
				</div>
			</div>
		</div>
		<div class="clear"> </div>	
	</div>
</div>
<div class="clear"> </div>
<div id="footer">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>